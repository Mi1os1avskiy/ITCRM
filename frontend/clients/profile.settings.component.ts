import {NotificationLevels, Notification} from "../misc/notifications/notification";

const ProfileSettings2faModalIdentity = 'profile-settings-2fa-modal';
const ProfileSettingsPasswordModalIdentity = 'profile-settings-password-modal';
const OverviewLogs = 'overview-logs-modal';
const InvoicesFilters = 'invoices-filters';
const CreditsAdd = 'credits-add';
const CreditsDelete = 'credits-delete';
const NotesAdd = 'clients-notes-add';
const NotesEdit = 'clients-notes-edit';

export const ProfileSettingsComponent = {

	data() {
		return {
			personalData: {}
		}
	},
	methods: {
		disable2fa() {
			const self = <any>this;
			self.$modals(ProfileSettings2faModalIdentity).show()
				.then((data: any) => {
					self.$notifications('global').notify(
						new Notification(NotificationLevels.SUCCESS, "2FA", "Успешно отключена")
					);
				})
				.catch(() => {
				});
		},
		changePassword() {
			const self = <any>this;
			self.$modals(ProfileSettingsPasswordModalIdentity).show()
				.then((data: any) => {
					self.$notifications('global').notify(
						new Notification(NotificationLevels.SUCCESS, "Пароль", "Новый пароль сохранён")
					);
				})
				.catch(() => {
				});
		},
		overviewLogs() {
			const self = <any>this;
			self.$modals(OverviewLogs).show()
				.then((data: any) => {
				})
				.catch(() => {
				});
		},
		invoicesFilters() {
			const self = <any>this;
			self.$modals(InvoicesFilters).show()
				.then((data: any) => {
				})
				.catch(() => {
				});
		},
		creditsDelete() {
			const self = <any>this;
			self.$modals(CreditsDelete).show()
				.then((data: any) => {
				})
				.catch(() => {
				});
		},
		creditsAdd() {
			const self = <any>this;
			self.$modals(CreditsAdd).show()
				.then((data: any) => {
				})
				.catch(() => {
				});
		},
		notesAdd() {
			const self = <any>this;
			self.$modals(NotesAdd).show()
				.then((data: any) => {
				})
				.catch(() => {
				});
		},
		notesEdit() {
			const self = <any>this;
			self.$modals(NotesEdit).show()
				.then((data: any) => {
				})
				.catch(() => {
				});
		}
	}
}

export default ProfileSettingsComponent