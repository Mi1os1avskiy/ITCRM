import {NotificationLevels, Notification} from "../misc/notifications/notification";

const SupportTicketsDelete = 'support-tickets-delete';
const SupportTicketsClose = 'support-tickets-close';
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