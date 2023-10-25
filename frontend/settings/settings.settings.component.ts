import {NotificationLevels, Notification} from "../misc/notifications/notification";
import {PasswordDisplayingMixin, PasswordGenerator} from "is-core-frontend";

const DeleteAdmin = 'delete-admin';
const AnswerEditor = 'settings-answer-editor';
const DeleteAnswers = 'settings-delete-answers';
const DeleteCategory = 'settings-delete-category';

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
        answerEditor(answerID: bigint) {
            const self = <any>this;
            const data = {
                id: answerID
            };
            self.$modals(AnswerEditor).show(data)
                .then((data: any) => {
                    if ( !!data.id ) {
                        self.$notifications('global').notify(
                            new Notification(NotificationLevels.SUCCESS, "Редактирование ответа", "Изменения успешно сохранены")
                        );
                    }
                    else {
                        self.$notifications('global').notify(
                            new Notification(NotificationLevels.SUCCESS, "Добавление ответа", "Новый ответ успешно добавлен")
                        );
                    }
                })
                .catch(() => {
                });
        },
        deleteAnswers() {
            const self = <any>this;
            self.$modals(DeleteAnswers).show()
                .then((data: any) => {
                    self.$notifications('global').notify(
                        new Notification(NotificationLevels.SUCCESS, "Удаление ответа", "Ответ успешно удалён")
                    );
                })
                .catch(() => {
                });
        },
        createCategory() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Добавление категории", "Новая категория успешно добавлена")
            );
        },
        editCategory() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Редактирование категории", "Изменения успешно сохранены")
            );
        },
        deleteCategory() {
            const self = <any>this;
            self.$modals(DeleteCategory).show()
                .then((data: any) => {
                    self.$notifications('global').notify(
                        new Notification(NotificationLevels.SUCCESS, "Удаление категории", "Категория успешно удалена")
                    );
                })
                .catch(() => {
                });
        },
        expandAnswer(answerID: string) {
            const self = <any>this;
            let id =  answerID;
            let answer = document.getElementById(id) as HTMLInputElement;
            answer.classList.toggle('line-clamp-1');
            let body_id = '.answer_body_' + id;
            let body = document.querySelector(body_id) as HTMLInputElement;
            body.classList.toggle('bg-gray-50');
        },
    }
}

export default SettingsSettingsComponent
