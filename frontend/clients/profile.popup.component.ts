const Profile2faPopup = 'profile-2fa-popup';

export const ProfilePopupComponent = {
    data() {
        return {
            personalData: {}
        }
    },
    methods: {
        popup2fa() {
            console.log(123456)
            const self = <any>this;
            self.$modals(Profile2faPopup).show()
                .catch(() => {});
        }
    }
}

export default ProfilePopupComponent