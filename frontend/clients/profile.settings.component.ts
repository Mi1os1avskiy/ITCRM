import {NotificationLevels, Notification} from "../misc/notifications/notification";
import {PasswordDisplayingMixin, PasswordGenerator} from "is-core-frontend";
import {InputSearchMixin} from "../misc/input.search.mixin";

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
			personalData: {},
			selectedOption: 'individual',
			isDisabled: true
		}
	},
	mixins: [
		PasswordDisplayingMixin,
		InputSearchMixin
	],
	methods: {
		editForm() {
			const self = <any>this;
			self.isDisabled = false;
		},

		submitForm() {
			this.resetForm();
		},

		cancelEdit() {
			this.resetForm();
		},

		resetForm() {
			const self = <any>this;
			self.isDisabled = true;
		},
		generateNewPassword() {
			const self = <any>this;
			self.password = PasswordGenerator.generate();
			if (!!self.isPasswordHidden) {
				self.toggleShowHide();
			}
		},
		profileSaveChanges() {
			const self = <any>this;
			this.resetForm();
			self.$notifications('global').notify(
				new Notification(NotificationLevels.SUCCESS, "Редактирование", "Изменения успешно сохранены")
			);
		},
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
