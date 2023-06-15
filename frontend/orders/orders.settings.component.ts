import {NotificationLevels, Notification} from "../misc/notifications/notification";

const OrdersFilters = 'orders-filters';
const OrdersSpecialSettingsModal = 'orders-special-setting-modal';

export const OrdersSettingsComponent = {
    data() {
        return {
            personalData: {}
        }
    },
    methods: {
        ordersFilters() {
            const self = <any>this;
            self.$modals(OrdersFilters).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        ordersSpecialSettingsModal() {
            const self = <any>this;
            self.$modals(OrdersSpecialSettingsModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        }
    }
}

export default OrdersSettingsComponent
