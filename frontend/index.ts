import Vue from "vue";
import {AriaExpandedMixin, ValidationPlugin} from "is-core-frontend";
import {MenuPanelComponent} from "./misc/menu.panel.component";
import * as Modal from "./misc/modal/plugin";

Vue.config.devtools = true;
(<any>Vue).options.delimiters = ['${', '}'];

Vue.use(ValidationPlugin.install);
Vue.use(Modal.Plugin.install);

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


