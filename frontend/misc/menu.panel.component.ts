export const MenuPanelComponent = {
	data() {
		return {
			isOpened: false
		}
	},
	methods: {
		toggleMenu(){
			const self = (<any>this);
			self.isOpened = !self.isOpened;
		}
	}
}