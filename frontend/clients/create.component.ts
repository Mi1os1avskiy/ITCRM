export const ClientsCreateComponent = {
	data() {
		return {
			personalData: {}
		}
	},
	validators: {
		'personalData.firstname': [
			{
				handler: (val: string) => {
					return !!val;
				},
				message() {
					return 'Не должно быть пустым';
				}
			},
			{
				handler: (val: string) => {
					return !!val ? (val.length > 0 && val.length <= 10) : true;
				},
				message() {
					return 'Длина от 0 до 10';
				}
			},
			{
				handler: (val: string) => {
					return !!val ? (new RegExp(/^[a-zA-Z \-']+$/)).test(val) : true;
				},
				message() {
					return 'Недопустимые символы';
				}
			}
		]
	}
}

export default ClientsCreateComponent