import {NotificationLevels, Notification} from "../misc/notifications/notification";
import {PasswordDisplayingMixin, PasswordGenerator} from "is-core-frontend";
import {InputSearchMixin} from "../misc/input.search.mixin";

const DeleteAdmin = 'delete-admin';
const AnswerEditor = 'settings-answer-editor';
const DeleteAnswers = 'settings-delete-answers';
const DeleteCategory = 'settings-delete-category';
const ResetAutosetup = 'autosetup-reset-modal';
const AutosetupTokens = 'autosetup-tokens-modal';

export const SettingsSettingsComponent = {
    data() {
        return {
            personalData: {},
            editMode: false,
            selectedServices: [],
        }
    },
    mixins: [
        PasswordDisplayingMixin,
        InputSearchMixin
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
                    self.$notifications('global').notify(
                        new Notification(NotificationLevels.SUCCESS, "Удаление", "Администратор успешно удалён")
                    );
                    setTimeout(function(){window.location.href = "/settings/admins"}, 1000);
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
            let input = document.getElementById('input') as HTMLInputElement;

            if(input.value !== '') {
                self.$notifications('global').notify(
                    new Notification(NotificationLevels.SUCCESS, "Добавление категории", "Новая категория успешно добавлена")
                );
            }
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
                    let input = document.getElementById('input') as HTMLInputElement;
                    input.value = '';

                    self.editMode = false;

                    self.$notifications('global').notify(
                        new Notification(NotificationLevels.SUCCESS, "Удаление категории", "Категория успешно удалена")
                    );
                })
                .catch(() => {
                });
        },
        cancelEditCategory() {
            const self = <any>this;
            self.editMode = false;

            let input = document.getElementById('input') as HTMLInputElement;
            input.value = '';
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
        editingCategory(event: MouseEvent) {
            const self = <any>this;
            self.editMode = true;

            const category = (event.currentTarget as HTMLButtonElement).getAttribute('data-category');
            const inputField = document.getElementById('input') as HTMLInputElement;
            inputField.value = category || '';
        },
        saveAutosetup() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Сохранение", "Параметры успешно сохранены")
            );
        },
        cancelAutosetup() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Изменения", "Изменения были отменены")
            );
        },
        resetAutosetup() {
            const self = <any>this;
            self.$modals(ResetAutosetup).show()
                .then((data: any) => {
                    self.$notifications('global').notify(
                        new Notification(NotificationLevels.SUCCESS, "Сброс параметров", "Параметры успешно сброшены до стандартной конфигурации")
                    );
                })
                .catch(() => {
                });
        },
        autosetupTokens() {
            const self = <any>this;
            self.$modals(AutosetupTokens).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        toggleService(service: string) {
            const self = <any>this;
            if (self.selectedServices.includes(service)) {
                self.selectedServices = self.selectedServices.filter(function (s: string) {
                    return s !== service;
                });
            } else {
                self.selectedServices.push(service);
            }
        },
        removeService(service: string) {
            const self = <any>this;
            self.selectedServices = self.selectedServices.filter(function (s: string) {
                return s !== service;
            });
        },

    }
}

export default SettingsSettingsComponent
