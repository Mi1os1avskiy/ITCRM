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
                })
                .catch(() => {
                });
        },
        changePassword() {
            const self = <any>this;
            self.$modals(ProfileSettingsPasswordModalIdentity).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        }
    }
}

export default ProfileSettingsComponent