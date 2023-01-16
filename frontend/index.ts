import Vue from "vue";
import {AriaExpandedMixin} from "is-core-frontend";
import {MenuPanelComponent} from "./misc/menu.panel.component";

Vue.config.devtools = true;
const app = new Vue({
	el: "#app",
	mixins: [
		AriaExpandedMixin,
	],
	components: {
		'menu-panel': MenuPanelComponent,
		'clients-module': () => import(/* webpackChunkName: "clients" */ "./clients/module"),
	}
});


