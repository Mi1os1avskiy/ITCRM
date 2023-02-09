import Vue from "vue";
import Vuex, {Store} from 'vuex';
import {Notification, NotificationAutoHideDelay, NotificationLevels} from './notification';

let installed = false;
const keyword = '$notifications';

Vue.use(Vuex);

const ANIMATION_DURATION = 500;

const NotificationChannelsStore = new Store({
	state: {
		channels: {}
	},
	mutations: {
		init(state: any, payload: { channel: string }) {
			if (!payload.channel) return;
			Vue.set(state.channels, payload.channel, []);
		},
		notify(state: any, payload: { channel: string, notification: Notification }) {
			if (!payload.channel) return;
			if (!state.channels[payload.channel]) return;
			state.channels[payload.channel].push(payload.notification);
		},
		remove(state: any, payload: { channel: string, notification: Notification }) {
			if (!payload.channel) return;
			if (!state.channels[payload.channel]) return;
			const ind = state.channels[payload.channel].indexOf(payload.notification);
			if (ind !== -1) state.channels[payload.channel].splice(ind, 1);
		}
	},
	getters: {
		channel: (state: any) => {
			return (channel: string) => {
				return state.channels[channel];
			};
		}
	}
});


const NotificationItemComponent = {
		data() {
			return {
				contentHeight: 0,
				isAnimated: false
			};
		},
		props: ['item'],
		mounted() {
			const self = <any>this;
			self.isAnimated = true;
			setTimeout(() => self.isAnimated = false, ANIMATION_DURATION);
			// if (!!self.item.delay) setTimeout(self.close, self.item.delay);

		},
		watch: {
			isAnimated() {
				const self = <any>this;
				const content = (self.$refs.content[0] || self.$refs.content) as HTMLElement;
				self.contentHeight = content.offsetHeight;
			}
		},
		methods: {
			close() {
				const self = <any>this;
				self.isAnimated = true;
				self.$nextTick(() => self.$emit('notification-closed', self.item));
			}
		}
	}
;

const NotificationStackComponent = {
	data() {
		return {
			duration: ANIMATION_DURATION,
			NotificationLevels: NotificationLevels
		};
	},
	props: ['channel'],
	beforeCreate() {
		const self = <any>this;
		const options = self.$options;
		if (!options.computed) options.computed = {};
		if (!options.methods) options.methods = {};
		const channel = options.propsData.channel;
		if (!!channel) {
			options.computed.$stack = function () {
				return self[keyword](channel).channel;
			};
		}
	},
	methods: {
		removeItem: function (item: Notification) {
			const self = <any>this;
			NotificationChannelsStore.commit('remove', {
				channel: self.channel,
				notification: item
			});
		}
	},
	components: {
		'notification-item': NotificationItemComponent
	}
};

export const Plugin = {
	install: function (Vue: any, options: any) {
		if (!!installed) return;
		installed = true;
		Vue.mixin({
			beforeCreate() {
				const self = <any>this;
				self[keyword] = function (channel: string) {

					if (!NotificationChannelsStore.getters.channel(channel)) {
						NotificationChannelsStore.commit('init', {
							channel: channel
						});
					}
					return {
						channel: NotificationChannelsStore.getters.channel(channel),
						notify: function (notification: Notification, permanent: boolean = false) {
							if (!permanent) notification.delay = NotificationAutoHideDelay;
							NotificationChannelsStore.commit('notify', {
								channel: channel,
								notification: notification
							});
						},
						test: function () {
							this.notify(
								new Notification(NotificationLevels.INFO, 'Lorem ipsum dolor sit amet', 'Ut hendrerit diam sed eros vehicula, nec viverra dolor sodales. ')
							);
							setTimeout(() => {
								this.notify(
									new Notification(NotificationLevels.ERROR, 'Lorem ipsum dolor sit amet', 'Ut hendrerit diam sed eros vehicula, nec viverra dolor sodales. Donec varius tristique ante in tempor. Donec at egestas velit, eget rhoncus risus. Curabitur sed aliquam felis, in malesuada neque. Integer eu ullamcorper lacus, gravida blandit mauris.')
								);
								setTimeout(() => {
									this.notify(
										new Notification(NotificationLevels.SUCCESS, 'Lorem ipsum dolor sit amet', 'Curabitur sed aliquam felis, in malesuada neque. Integer eu ullamcorper.')
									);
									setTimeout(() => {
										this.notify(
											new Notification(NotificationLevels.WARNING, 'Lorem ipsum dolor sit amet', 'Ut hendrerit diam sed eros vehicula, nec viverra dolor sodales. ')
										);
									}, ANIMATION_DURATION);
								}, ANIMATION_DURATION);
							}, ANIMATION_DURATION);
						}
					};
				};
			},
			components: {
				'notifications-stack': NotificationStackComponent
			}
		});
	}
};