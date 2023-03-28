import {NotificationLevels, Notification} from "../misc/notifications/notification";

const BillingInvoicesFilters = 'billing-invoices-filters';
const BillingTransactionsFilters = 'billing-transactions-filters';
const BillingTransactionsDetails = 'billing-transactions-details';

export const BillingSettingsComponent = {
    data() {
        return {
            personalData: {}
        }
    },
    methods: {
        billingInvoicesFilters() {
            const self = <any>this;
            self.$modals(BillingInvoicesFilters).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        billingTransactionsFilters() {
            const self = <any>this;
            self.$modals(BillingTransactionsFilters).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        billingTransactionsDetails() {
            const self = <any>this;
            self.$modals(BillingTransactionsDetails).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        }
    }
}

export default BillingSettingsComponent