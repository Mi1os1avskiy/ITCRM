export const MenuPanelMixin = {
	data() {
		return {
			menuIsOpened: true
		}
	},
    methods: {
        toggleMenu() {
            const self = <any>this;
            self.menuIsOpened = !self.menuIsOpened;
        },
        menuButtonClick() {
            const self = <any>this;
            if (!self.menuIsOpened) {
                self.menuIsOpened = true;
            }
        }
    },
}
