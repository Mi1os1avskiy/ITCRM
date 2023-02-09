const generator = require('uuid/v4');

export const NotificationAutoHideDelay = 5000;

export enum NotificationLevels {
	INFO = 'info',
	WARNING = 'warning',
	ERROR = 'error',
	SUCCESS = 'success'
}

export class Notification {
	uuid: string;
	level: NotificationLevels;
	title: string;
	text?: string;
	delay?: number;

	constructor(level: NotificationLevels, title: string, text?: string) {
		this.uuid = generator();
		this.level = level;
		this.title = title;
		this.text = text;
	}
}