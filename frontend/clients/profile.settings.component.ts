import {NotificationLevels, Notification} from "../misc/notifications/notification";

const ProfileSettings2faModalIdentity = 'profile-settings-2fa-modal';
const ProfileSettingsPasswordModalIdentity = 'profile-settings-password-modal';

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
						new Notification(NotificationLevels.SUCCESS, "2FA", "2FA Successfully disabled")
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
						new Notification(NotificationLevels.SUCCESS, "Password", "New password saved")
					);
				})
				.catch(() => {
				});
		},
		save() {
			const self = <any>this;
			self.$notifications('global').notify(
				new Notification(NotificationLevels.ERROR, "Saving", "Successfully")
			);
		}
	}
}

export default ProfileSettingsComponent