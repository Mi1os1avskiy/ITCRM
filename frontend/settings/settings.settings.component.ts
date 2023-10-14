import {NotificationLevels, Notification} from "../misc/notifications/notification";
import {PasswordDisplayingMixin, PasswordGenerator} from "is-core-frontend";

const SettingsAddAdmin = 'settings-add-admin';
const DeleteAdmin = 'delete-admin';

export const SettingsSettingsComponent = {
    data() {
        return {
            personalData: {}
        }
    },
    mixins: [
        PasswordDisplayingMixin
    ],
    methods: {
        settingsAddAdmin() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Новый администратор", "Администратор успешно добавлен")
            );
            setTimeout(function(){window.location.href = "/settings/admins"}, 1000);
        },
        settingsSaveChanges() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Редактирование", "Изменения успешно сохранены")
            );
            setTimeout(function(){window.location.href = "/settings/admins"}, 1000);
        },
        generateNewPassword() {
            const self = <any>this;
            self.password = PasswordGenerator.generate();
            if (!!self.isPasswordHidden) {
                self.toggleShowHide();
            }
        },
        deleteAdmin() {
            const self = <any>this;
            self.$modals(DeleteAdmin).show()
                .then((data: any) => {
                    window.location.href = "/settings/admins";
                })
                .catch(() => {
                });
        },
    }
}

export default SettingsSettingsComponent
