const ProfileSettings2faModalIdentity = 'profile-settings-2fa-modal';
const ProfileSettingsPasswordModalIdentity = 'profile-settings-password-modal';
const Profile2faPopup = 'profile-2fa-popup';

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
        },
        popup2fa() {
            console.log(123456)
            const self = <any>this;
            self.$modals(Profile2faPopup).show()
                .catch(() => {});
        },
    }
}

export default ProfileSettingsComponent