import {Notification, NotificationLevels} from "../misc/notifications/notification";
import {InputSearchMixin} from "../misc/input.search.mixin";

const OrdersFilters = 'orders-filters';
const OrdersSpecialSettingsModal = 'orders-special-setting-modal';

export const OrdersSettingsComponent = {
    data() {
        return {
            personalData: {},
            promoCode: "QWERTY",
            isInputDisabled: true,
        }
    },
    mixins: {
        InputSearchMixin
    },
    computed: {
        buttonLabel() {
            const self = <any>this;
            return self.isInputDisabled ? "Удалить" : "Применить";
        },
    },
    methods: {
        editPromo() {
            const self = <any>this;
            if (self.isInputDisabled) {
                self.isInputDisabled = false;
                self.$nextTick(() => {
                    self.$refs.promoInput.focus();
                    self.promoCode = "";
                });
            } else {
                if (self.promoCode.trim() !== "") {
                    self.isInputDisabled = true;
                }
            }
        },
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
        },
        orderCreating() {
            const self = <any>this;
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Создание заказа", "Заказ успешно создан")
            );
        },
    }
}

export default OrdersSettingsComponent
