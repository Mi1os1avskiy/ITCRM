import {NotificationLevels, Notification} from "../misc/notifications/notification";

const OrdersFilters = 'orders-filters';

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
        }
    }
}

export default OrdersSettingsComponent
