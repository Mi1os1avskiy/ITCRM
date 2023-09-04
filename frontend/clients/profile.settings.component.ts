import {NotificationLevels, Notification} from "../misc/notifications/notification";

const ProfileSettings2faModalIdentity = 'profile-settings-2fa-modal';
const ProfileSettingsPasswordModalIdentity = 'profile-settings-password-modal';
const OverviewLogs = 'overview-logs-modal';
const InvoicesFilters = 'invoices-filters';
const CreditsAdd = 'credits-add';
const CreditsDelete = 'credits-delete';
const NoteDelete = 'profile-note-delete';

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
		noteAdd() {
			const self = <any>this;
			self.$notifications('global').notify(
				new Notification(NotificationLevels.SUCCESS, "Добавление заметки", "Заметка успешно добавлена")
			);
		},
		noteDelete() {
			const self = <any>this;
			self.$modals(NoteDelete).show()
				.then((data: any) => {
					self.$notifications('global').notify(
						new Notification(NotificationLevels.SUCCESS, "Удаление заметки", "Заметка успешно удалена")
					);
				})
				.catch(() => {
				});
		}
	}
}

export default ProfileSettingsComponent
