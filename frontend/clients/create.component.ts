export const ClientsCreateComponent = {
	data() {
		return {
			data: {}
		}
	},
	validators: {
		'data.firstname': [
			{
				handler: (val: any) => {
					return false;
				},
				message() {
					return 'qweqwe';
				}
			},
			{
				handler: (val: any) => {
					return false;
				},
				message() {
					return 'EQWEQW';
				}
			},
			{
				handler: (val: any) => {
					return false;
				},
				message() {
					return '123123';
				}
			}
		]
	}
}

export default ClientsCreateComponent