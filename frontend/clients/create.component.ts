import {NotificationLevels, Notification} from "../misc/notifications/notification";
import {PasswordDisplayingMixin, PasswordGenerator} from "is-core-frontend";

export const ClientsCreateComponent = {
	data() {
		return {
			personalData: {},
			selectedOption: 'individual',
		}
	},
	mixins: [
		PasswordDisplayingMixin
	],
	methods: {
		clientAdd() {
			const self = <any>this;
			self.$notifications('global').notify(
				new Notification(NotificationLevels.SUCCESS, "Новый клиент", "Успешно добавлен")
			);
		},
		generateNewPassword() {
			const self = <any>this;
			self.password = PasswordGenerator.generate();
			if (!!self.isPasswordHidden) {
				self.toggleShowHide();
			}
		},
	},
	validators: {
		'personalData.firstname': [
			{
				handler: (val: string) => {
					return !!val;
				},
				message() {
					return 'Must not be empty';
				}
			},
			{
				handler: (val: string) => {
					return !!val ? (new RegExp(/^[a-zA-Z \-']+$/)).test(val) : true;
				},
				message() {
					return 'Invalid characters';
				}
			}
		],
		'personalData.lastname': [
			{
				handler: (val: string) => {
					return !!val ? (new RegExp(/^[a-zA-Z \-']+$/)).test(val) : true;
				},
				message() {
					return 'Invalid characters';
				}
			}
		],
		'personalData.email': [
			{
				handler: (val: string) => {
					return !!val;
				},
				message() {
					return 'Must not be empty';
				}
			},
			{
				handler: (val: string) => {
					return !!val ? (new RegExp(/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/)).test(val) : true;
				},
				message() {
					return 'Invalid email';
				}
			}
		],
		'personalData.phone': [
			{
				handler: (val: string) => {
					return !!val ? (new RegExp(/\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}/)).test(val) : true;
				},
				message() {
					return 'Invalid phone number';
				}
			},
			{
				handler: (val: string) => {
					return !!val ? (val.length >= 10) : true;
				},
				message() {
					return 'Length must be at least 10 characters';
				}
			}
		],
		'password': [
			{
				handler: (val: string) => {
					return !!val;
				},
				message() {
					return 'Must not be empty';
				}
			}
		]
	}
}

export default ClientsCreateComponent
