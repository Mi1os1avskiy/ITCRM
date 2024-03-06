import {Notification, NotificationLevels} from "../misc/notifications/notification";
import {InputSearchMixin} from "../misc/input.search.mixin";
import {PasswordDisplayingMixin} from "is-core-frontend";
import {InputRangeMixin} from "../misc/input.range.mixin";
import {StopwatchMixin} from "../misc/stopwatch.mixin";

const OrdersFilters = 'orders-filters';
const OrdersSpecialSettingsModal = 'orders-special-setting-modal';
const OrderEditCpuModal = 'order-edit-cpu-modal';
const OrderEditRamModal = 'order-edit-ram-modal';
const OrderEditDiskModal = 'order-edit-disk-modal';
const OrderEditIpModal = 'order-edit-ip-modal';
const OrderEditPortModal = 'order-edit-port-modal';
const OrderEditOsModal = 'order-edit-os-modal';
const OrderEditOsbitModal = 'order-edit-osbit-modal';
const OrderEditPanelModal = 'order-edit-panel-modal';
const OrderEditAdminModal = 'order-edit-admin-modal';
const OrderEditBackupModal = 'order-edit-backup-modal';
const OrderEditDdosModal = 'order-edit-ddos-modal';
const OrderEditLocationModal = 'order-edit-location-modal';
const OrderEditCountryModal = 'order-edit-country-modal';
const OrderEditSeparateModal = 'order-edit-separate-modal';
const OrderEditConfigureModal = 'order-edit-configure-modal';
const OrderEditAccountsModal = 'order-edit-accounts-modal';
const OrderEditGpuModal = 'order-edit-gpu-modal';
const OrderEditRaidModal = 'order-edit-raid-modal';
const OrderEditMondiskModal = 'order-edit-mondisk-modal';
const OrderEditIpmiModal = 'order-edit-ipmi-modal';
const SaveOrderEditing = 'save-order-edit';
const ProlongEditModal = 'prolong-edit-modal';
const IssueInitialInvoiceModal = 'issue-initial-invoice-modal';
const IssueProlongInvoiceModal = 'issue-prolong-invoice-modal';
const SshKeysModal = 'ssh-keys-modal';
const ServiceSuspendModal = 'service-suspend-modal';
const ServiceTerminateModal = 'service-terminate-modal';

export const OrdersSettingsComponent = {
    data() {
        return {
            personalData: {},
            btnTariffGroup: 'Dedicated - Нидерланды',
            btnTariffPlan: 'NL3-0 70.00 / 0.00 ( + 6/6 вариантов)',
            promoCode: "QWERTY",
            isInputDisabled: true,
            orderEditMode: false,
            password: 'P133Wr4',
            isPasswordIpmiHidden: true,
            show1: true,
            show2: true,
            show3: true,
            show4: true,
            modalSelectedOption: 'tariff',
            isModalCheckboxChecked: false,
            btnBillingCycle: '1 Месяц',
            btnServerSuspend: 'Выберите тип приостановки',
            btnServerTerminate: 'Отказ от услуги',
            showListServerSuspend: false,
            isTerminateChecked: false,
        }
    },
    mixins: [
        InputSearchMixin,
        InputRangeMixin,
        StopwatchMixin,
        PasswordDisplayingMixin
    ],
    computed: {
        buttonLabel() {
            const self = <any>this;
            return self.isInputDisabled ? "Удалить" : "Применить";
        },
        formattedTime() {
            const self = <any>this;
            const minutes = Math.floor(self.seconds / 60);
            const seconds = self.seconds % 60;
            return `${self.padNumber(minutes)}:${self.padNumber(seconds)}`;
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
            self.orderEditMode = true;
            self.startTimer();
        },
        cancelOrderEditing() {
            const self = <any>this;
            self.orderEditMode = false;
            self.stopTimer();
            self.$notifications('global').notify(
                new Notification(NotificationLevels.SUCCESS, "Прекращение редактирования", "Редактирование прекращено, изменения не сохранены")
            );
        },
        saveOrderEditing() {
            const self = <any>this;
            self.$modals(SaveOrderEditing).show()
                .then((data: any) => {
                    self.orderEditMode = false;
                    self.stopTimer();
                })
                .catch(() => {
                });
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
                    behavior: 'smooth',
                    block: 'start',
                });
            }
        },
        updateSelection(option: string) {
            const self = <any>this;
            self.modalSelectedOption = option;
        },
        orderEditCpuModal() {
            const self = <any>this;
            self.$modals(OrderEditCpuModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditRamModal() {
            const self = <any>this;
            self.$modals(OrderEditRamModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditDisk0Modal() {
            const self = <any>this;
            self.$modals(OrderEditDiskModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditIpv4Modal() {
            const self = <any>this;
            self.$modals(OrderEditIpModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditPortModal() {
            const self = <any>this;
            self.$modals(OrderEditPortModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditOsModal() {
            const self = <any>this;
            self.$modals(OrderEditOsModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditOsbitModal() {
            const self = <any>this;
            self.$modals(OrderEditOsbitModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditPanelModal() {
            const self = <any>this;
            self.$modals(OrderEditPanelModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditAdministrationModal() {
            const self = <any>this;
            self.$modals(OrderEditAdminModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditBackupModal() {
            const self = <any>this;
            self.$modals(OrderEditBackupModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditDdosModal() {
            const self = <any>this;
            self.$modals(OrderEditDdosModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditLocationModal() {
            const self = <any>this;
            self.$modals(OrderEditLocationModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditCountryModal() {
            const self = <any>this;
            self.$modals(OrderEditCountryModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditSeparateModal() {
            const self = <any>this;
            self.$modals(OrderEditSeparateModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditConfigureModal() {
            const self = <any>this;
            self.$modals(OrderEditConfigureModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditAccountsModal() {
            const self = <any>this;
            self.$modals(OrderEditAccountsModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditGpuModal() {
            const self = <any>this;
            self.$modals(OrderEditGpuModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditRaidModal() {
            const self = <any>this;
            self.$modals(OrderEditRaidModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditMondiskModal() {
            const self = <any>this;
            self.$modals(OrderEditMondiskModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        orderEditIpmiModal() {
            const self = <any>this;
            self.$modals(OrderEditIpmiModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        prolongEditModal() {
            const self = <any>this;
            self.$modals(ProlongEditModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        issueInitialInvoiceModal() {
            const self = <any>this;
            self.$modals(IssueInitialInvoiceModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        issueProlongInvoiceModal() {
            const self = <any>this;
            self.$modals(IssueProlongInvoiceModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        sshKeysModal() {
            const self = <any>this;
            self.$modals(SshKeysModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        serviceSuspendModal() {
            const self = <any>this;
            self.$modals(ServiceSuspendModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
        serviceTerminateModal() {
            const self = <any>this;
            self.$modals(ServiceTerminateModal).show()
                .then((data: any) => {
                })
                .catch(() => {
                });
        },
    },
}

export default OrdersSettingsComponent
