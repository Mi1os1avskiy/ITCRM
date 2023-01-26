let installed = false;


let components: any = {};

export const Modal = {
	addComponent(name: string, component: any) {
		components[name] = component;
	}
};

export const Plugin = {
	install: function(Vue: any, options: any) {

		if (!!installed) return;
		installed = true;

		Vue.mixin({
			beforeCreate() {
				const self = <any>this;
				self['$modals'] = function(identity: string) {
					return {
						show: function(data: any = {}) {
							return new Promise((resolve, reject) => {
								self.$root.$emit('modal:show:' + identity, JSON.parse(JSON.stringify(data)), (prms: Promise<any>) => {
									resolve(prms);
								});
							});
						},
						hide: function(success: boolean = false) {
							self.$root.$emit('modal:hide:' + identity, success);
						}
					};
				}
			},
			components: {
				'modal': {
					data() {
						return {
							data: {},
							display: false,
							visible: false,
							locked: false,
							duration: {
								enter: 100,
								leave: 300
							}
						};
					},
					props: { identity: { type: String }, isCloseOnWrapper: { type: Boolean, default: false } },
					provide() {
						const self = <any>this;

						return {
							modal: {
								data() {
									return self.data;
								},
								set(data: any) {
									self.data = data;
									return this;
								},
								lock() {
									self.locked = true;
									return this;
								},
								unlock() {
									self.locked = false;
									return this;
								},
								close(success: boolean) {
									self.close(success);
								}
							}
						};
					},
					mounted() {
						const self = <any>this;
						const identity = self.identity;
						let deferred: any = {};
						self.$root.$on('modal:show:' + identity, (data: any, clbk: Function) => {
							if (!!self.display) return;
							self.data = data;
							self.display = true;
							const prms = new Promise((resolve, reject) => {
								deferred = {
									resolve: resolve,
									reject: reject
								};
							});
							if (!!clbk) clbk(prms);
							self.$root.$emit('body:lock');
						});
						self.$root.$on('modal:hide:' + identity, (success: boolean = false) => {
							if (!self.display) return;
							if (!!self.locked) return;
							self.display = false;
							if (!!success) {
								if (!!deferred && !!deferred.resolve) {
									deferred.resolve(self.data);
								}
							} else {
								if (!!deferred && deferred.reject) {
									deferred.reject();
								}
							}
							deferred = undefined;
							self.$root.$emit('body:unlock');
						});
					},
					methods: {
						close(success: boolean) {
							const self = <any>this;
							if (!!self.locked) return;
							self.visible = false;
							self.$nextTick(() => self.$modals(self.identity).hide(success));
						},
						onDisplayed() {
							const self = <any>this;
							self.visible = true;
							if (!!self.isCloseOnWrapper) {
								self.$nextTick(() => {
									const wrapper = self.$refs.wrapper as HTMLElement;
									const handler = (e: any) => {
										if (e.target === wrapper) {
											wrapper.removeEventListener('click', handler);
											self.close();
										}
									};
									wrapper.addEventListener('click', handler);
								});
							}
						}
					},
					components: components
				},
			}
		});
	}
};