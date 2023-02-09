import ClientsListFilters from './list.filters'
import ClientsCreateComponent from "./create.component";
import ProfileSettingsComponent from "./profile.settings.component";
import ProfilePopupComponent from "./profile.popup.component";

export default {
	components: {
		'clients-list-filters': ClientsListFilters,
		'clients-create': ClientsCreateComponent,
		'profile-settings': ProfileSettingsComponent,
		'profile-popup': ProfilePopupComponent
	}
};