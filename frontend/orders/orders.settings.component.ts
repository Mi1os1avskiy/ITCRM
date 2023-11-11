import {Notification, NotificationLevels} from "../misc/notifications/notification";

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
        },
        inputSearch() {
            const input = document.getElementById('myInput') as HTMLInputElement;
            const ul = document.getElementById('myUL') as HTMLElement;
            const li = ul.getElementsByTagName('li');

            input.addEventListener('keyup', function(event) {
                for (let i = 0; i < li.length; i++) {
                    const txtValue = li[i].textContent || li[i].innerText;
                    txtValue.indexOf(input.value) > -1 ? li[i].style.display = "" : li[i].style.display = "none";
                }
            });
        },
        orderPromo() {
            const input = document.getElementById('promo_input') as HTMLInputElement;
            const btn = document.getElementById('promo_btn') as HTMLButtonElement;

            if (btn.innerText === 'Удалить')
            {
               input.value = '';
               input.removeAttribute('disabled');
               btn.innerText = 'Применить';
            }
            else if (!input.getAttribute('disabled') && input.value !== '')
            {
               input.setAttribute('disabled', '');
               btn.innerText = 'Удалить';
            }
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
