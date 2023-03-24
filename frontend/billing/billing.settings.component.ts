import {NotificationLevels, Notification} from "../misc/notifications/notification";

const BillingInvoicesFilters = 'billing-invoices-filters';


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
        }
    }
}

export default BillingSettingsComponent