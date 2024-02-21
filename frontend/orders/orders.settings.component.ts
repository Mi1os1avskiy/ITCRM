import {Notification, NotificationLevels} from "../misc/notifications/notification";
import {InputSearchMixin} from "../misc/input.search.mixin";
import {PasswordDisplayingMixin} from "is-core-frontend";

const OrdersFilters = 'orders-filters';
const OrdersSpecialSettingsModal = 'orders-special-setting-modal';

export const OrdersSettingsComponent = {
    data() {
        return {
            personalData: {},
            promoCode: "QWERTY",
            isInputDisabled: true,
            orderEditMode: false,
            password: 'P133Wr4',
            isPasswordIpmiHidden: true,
            show1: true,
            show2: true,
            show3: true,
            show4: true,
        }
    },
    mixins: [
        InputSearchMixin,
        PasswordDisplayingMixin
    ],
    computed: {
        buttonLabel() {
            const self = <any>this;
            return self.isInputDisabled ? "Удалить" : "Применить";
        },
    },
    methods: {
        toggleShowHide(id: number) {
            const self = <any>this;
            if (id === 1) {
                self.isPasswordHidden = !self.isPasswordHidden;
            } else if (id === 2) {
                self.isPasswordIpmiHidden = !self.isPasswordIpmiHidden;
            }
        },
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
        orderEditing() {
            const self = <any>this;
            self.orderEditMode = !self.orderEditMode;

        },
        collapseAll() {
            const self = <any>this;
            self.show1 = false;
            self.show2 = false;
            self.show3 = false;
            self.show4 = false;
        },
        expandAll() {
            const self = <any>this;
            self.show1 = true;
            self.show2 = true;
            self.show3 = true;
            self.show4 = true;
        },
        scrollToBlock(id: number) {
            const self = <any>this;
            const blockRef = self.$refs[`block${id}`];

            if (blockRef) {
                blockRef.scrollIntoView({
                    behavior: 'smooth', // для плавного скролла
                    block: 'start',     // начать скролл от верхней границы блока
                });
            }
        },
    }
}

export default OrdersSettingsComponent
