import Vue from "vue";
import {AriaExpandedMixin} from "is-core-frontend";

const app = new Vue({
	el: "#app",
	mixins: [
		AriaExpandedMixin,
	],
	components: {
		'clients-module': () => import(/* webpackChunkName: "clients" */ "./clients/module"),
	}
});


