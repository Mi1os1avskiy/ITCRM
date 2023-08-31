import {NotificationLevels, Notification} from "../misc/notifications/notification";

const SupportTicketsDelete = 'support-tickets-delete';
const SupportTicketsClose = 'support-tickets-close';
const SupportTicketNoteDelete = 'ticket-note-delete';
const SupportTicketAdminAnswerDelete = 'ticket-admin-answer-delete';
const SupportFilters = 'support-filters';
const SupportNewTicketClient = 'support-new-ticket-client';
const SupportNewTicketService = 'support-new-ticket-service';

export const SupportSettingsComponent = {
    data() {
        return {
            personalData: {}
        }
    },
    methods: {
        supportTicketsDelete() {
            const self = <any>this;
            self.$modals(SupportTicketsDelete).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        supportTicketsClose() {
            const self = <any>this;
            self.$modals(SupportTicketsClose).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        supportTicketNoteDelete() {
            const self = <any>this;
            self.$modals(SupportTicketNoteDelete).show()
                .then((data: any) => {
                    self.$notifications('global').notify(
                        new Notification(NotificationLevels.SUCCESS, "Удаление заметки", "Заметка успешно удалена")
                    );
                })
                .catch(() => {
                });
        },
        supportTicketAdminAnswerDelete() {
            const self = <any>this;
            self.$modals(SupportTicketAdminAnswerDelete).show()
                .then((data: any) => {
                    self.$notifications('global').notify(
                        new Notification(NotificationLevels.SUCCESS, "Удаление ответа", "Ответ успешно удалён")
                    );
                })
                .catch(() => {
                });
        },
        supportTicketAddAnswer() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Добавление ответа", "Ответ успешно добавлен")
            );
        },
        supportTicketAddNote() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Добавление заметки", "Заметка успешно добавлена")
            );
        },
        supportFilters() {
            const self = <any>this;
            self.$modals(SupportFilters).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        supportNewTicketClient() {
            const self = <any>this;
            self.$modals(SupportNewTicketClient).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        supportNewTicketService() {
            const self = <any>this;
            self.$modals(SupportNewTicketService).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        }
    }
}

export default SupportSettingsComponent
