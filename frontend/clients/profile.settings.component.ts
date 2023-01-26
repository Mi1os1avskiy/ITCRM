
const ProfileSettingsModalIdentity = 'profile-settings-modal';

export const ProfileSettingsComponent = {
	data() {
		return {
			personalData: {}
		}
	},
	methods: {
		disable2fa() {
			console.log('123123123');
			const self = <any>this;
			self.$modals(ProfileSettingsModalIdentity).show()
				.then((data: any) => {
				})
				.catch(() => {
				});
		}
	}
}

export default ProfileSettingsComponent