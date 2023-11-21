import {NotificationLevels, Notification} from "../misc/notifications/notification";

const BillingInvoicesFilters = 'billing-invoices-filters';
const BillingTransactionsFilters = 'billing-transactions-filters';
const BillingTransactionsDetails = 'billing-transactions-details';
const BillingTransactionsDetailsRefund = 'billing-transactions-details-refund';
const BillingInvoiceAddPayment = 'billing-invoice-add-payment';
const BillingInvoiceCancel = 'billing-invoice-cancel';
const BillingAddTransaction = 'billing-add-transaction';

export const BillingSettingsComponent = {
    data() {
        return {
            personalData: {}
        }
    },
    methods: {
        draftInvoiceSave() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Сохранение", "Инвойс успешно сохранён в Draft")
            );
        },
        draftInvoicePublish() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Опубликовано", "Инвойс успешно опубликован")
            );
        },
        billingAddTransaction() {
            const self = <any>this;
            self.$modals(BillingAddTransaction).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
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
        billingTransactionsDetails(detailsID: bigint) {
            const self = <any>this;
            const data = {
                detailsType: detailsID
            };
            self.$modals(BillingTransactionsDetails).show(data)
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        billingTransactionsDetailsRefund() {
            const self = <any>this;
            self.$modals(BillingTransactionsDetailsRefund).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        billingInvoiceAddPayment() {
            const self = <any>this;
            self.$modals(BillingInvoiceAddPayment).show()
                .then((data: any) => {
                    setTimeout(
                        function(){
                            window.location.href = "/billing/invoice/details?status=Pending"
                        },
                        1000);
                    self.$notifications('global').notify(
                        new Notification(NotificationLevels.SUCCESS, "Платёж", "Платёж успешно добавлен")
                    );
                })
                .catch(() => {
                });
        },
        billingInvoiceCancel() {
            const self = <any>this;
            self.$modals(BillingInvoiceCancel).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
    }
}

export default BillingSettingsComponent
