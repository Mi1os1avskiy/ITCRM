<?php

namespace App\Controller\Data;

class SettingsController
{
	public static function allAdmins() {
		$list = [
			[
				'id' => 11,
				'login' => 'vhill@outlook.com',
				'name' => 'Mira Schleifer',
				'email' => 'vhill@outlook.com',
				'public_email' => 'vhill@outlook.com',
				'public_email_title' => 'vhill@outlook.com',
				'group' => 'Full privilegies',
				'roles' => 2,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'mira.schleifer',
				'icq' => '251 521 838',
				'telegram' => 'mira_schleifer',
			],
			[
				'id' => 12,
				'login' => 'fbrown@hotmail.com',
				'name' => 'Kierra Mango',
				'email' => 'fbrown@hotmail.com',
				'public_email' => 'fbrown@hotmail.com',
				'public_email_title' => 'fbrown@hotmail.com',
				'group' => 'For UA',
				'roles' => 1,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tel' => '+48 876 543 21',
				'skype' => '',
				'icq' => '',
				'telegram' => 'kierra_mango'
			],
			[
				'id' => 13,
				'login' => 'egreen@hotmail.com',
				'name' => 'Miracle Dias',
				'email' => 'egreen@hotmail.com',
				'public_email' => 'egreen@hotmail.com',
				'public_email_title' => 'egreen@hotmail.com',
				'group' => 'Junior admin',
				'roles' => 1,
				'last_logged' => '',
				'whmcs' => '',
				'tel' => '+1 123 456 78',
				'skype' => 'miracle.dias',
				'icq' => '',
				'telegram' => 'miracle_dias'
			],
			[
				'id' => 14,
				'login' => 'plewis@hotmail.com',
				'name' => 'Miracle Workman',
				'email' => 'plewis@hotmail.com',
				'public_email' => 'plewis@hotmail.com',
				'public_email_title' => 'plewis@hotmail.com',
				'group' => 'Senior admin',
				'roles' => 3,
				'last_logged' => '',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'miracle.workman',
				'icq' => '',
				'telegram' => 'miracle_workman'
			],
			[
				'id' => 15,
				'login' => 'sbrown@gmail.com',
				'name' => 'Alena Dorwart',
				'email' => 'sbrown@gmail.com',
				'public_email' => 'sbrown@gmail.com',
				'public_email_title' => 'sbrown@gmail.com',
				'group' => 'Sales manager',
				'roles' => 1,
				'last_logged' => '',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'alena.dorwart',
				'icq' => '',
				'telegram' => 'alena_dorwart'
			],
			[
				'id' => 16,
				'login' => 'ejohnson@hotmail.com',
				'name' => 'Alena Donin',
				'email' => 'ejohnson@hotmail.com',
				'public_email' => 'ejohnson@hotmail.com',
				'public_email_title' => 'ejohnson@hotmail.com',
				'group' => 'General support',
				'roles' => 2,
				'last_logged' => '0s',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'alena.donin',
				'icq' => '',
				'telegram' => 'alena_donin'
			],
			[
				'id' => 17,
				'login' => 'uallen@aol.com',
				'name' => 'Cooper Dias',
				'email' => 'uallen@aol.com',
				'public_email' => 'uallen@aol.com',
				'public_email_title' => 'uallen@aol.com',
				'group' => 'Full privilegies',
				'roles' => 2,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'cooper.dias',
				'icq' => '',
				'telegram' => 'cooper_dias'
			],
			[
				'id' => 18,
				'login' => 'wgarcia@hotmail.com',
				'name' => 'Alfredo Siphron',
				'email' => 'wgarcia@hotmail.com',
				'public_email' => 'wgarcia@hotmail.com',
				'public_email_title' => 'wgarcia@hotmail.com',
				'group' => 'Full privilegies',
				'roles' => 1,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'alfredo.siphron',
				'icq' => '',
				'telegram' => 'alfredo_siphron'
			],
			[
				'id' => 19,
				'login' => 'umartin@aol.com',
				'name' => 'Madelyn Carder',
				'email' => 'umartin@aol.com',
				'public_email' => 'umartin@aol.com',
				'public_email_title' => 'umartin@aol.com',
				'group' => 'Junior admnin + Basepass',
				'roles' => 1,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'madelyn.carder',
				'icq' => '',
				'telegram' => 'madelyn_carder'
			],
			[
				'id' => 20,
				'login' => 'xsmith@hotmail.com',
				'name' => 'Ruben Saris',
				'email' => 'xsmith@hotmail.com',
				'public_email' => 'xsmith@hotmail.com',
				'public_email_title' => 'xsmith@hotmail.com',
				'group' => 'Full privilegies',
				'roles' => 4,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'ruben.saris',
				'icq' => '',
				'telegram' => 'ruben_saris'
			],
			[
				'id' => 21,
				'login' => 'whernandez@aol.com',
				'name' => 'Allison Siphron',
				'email' => 'whernandez@aol.com',
				'public_email' => 'whernandez@aol.com',
				'public_email_title' => 'whernandez@aol.com',
				'group' => 'Middle admin',
				'roles' => 2,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tel' => '+48 123 456 78',
				'skype' => 'allison.siphron',
				'icq' => '',
				'telegram' => 'allison_siphron'
			],
		];

		return $list;
	}

	public static function adminAnswers() {
		$list = [
			['id' => 1, 'category' => 'Abuses', 'title' => 'Канал лимитирован из-за нарушений правил и условий для публичных VPN [ENG]', 'content' => 'Здравствуйте,
Надеюсь, что это сообщение застало вас в добром здравии. Я понимаю, что вы обеспокоены скоростью вашего виртуального сервера, и я благодарен за возможность прояснить для вас ситуацию.
Во-первых, важно понимать, что хотя ваш виртуальный сервер оснащен портом 1 Гбит, это не означает, что он будет постоянно достигать скорости 1 Гбит/с. Это связано с тем, что сетевой порт является общим ресурсом для всех виртуальных серверов на одной физической машине.
Совместное использование обеспечивает экономическую эффективность и позволяет нам предлагать доступные цены для виртуальных серверов. Однако это также означает, что доступная пропускная способность делится между различными серверами, что может привести к снижению скорости, особенно в периоды пиковой нагрузки, когда другие серверы потребляют больше ресурсов. Кроме этого, тестирование скорости также зависит от используемых инструментов и пропускной способности другого сервера, который участвует в тестировании, поэтому эти результаты нельзя считать объективными. Мы рекомендуем оценивать скорость сети в результате практического применения. Важно отметить, что наш отдел мониторинга отслеживает нагрузку и не допускает использования более 50% от пропускной способности, чтобы обеспечивать высокую скорость сети для всех клиентов вне зависимости от времени.
Кроме этого, у нас описаны условия рекомендуемой постоянной нагрузки для каждого тарифного плана, которые позволяют ограничивать злоупотребления и гарантировать высокую скорость для пиковых нагрузок:
https://ishosting.com/ru/acceptable-use-policy
Если ваши проекты требуют гарантированных ресурсов, мы предлагаем рассмотреть наши предложения по выделенным серверам. Этот вариант означает, что в вашем распоряжении будут ресурсы всего сервера, обеспечивающие максимальную производительность и скорость.
Однако имейте в виду, что выделенные серверы потребуют значительно больших инвестиций по сравнению с нашими предложениями виртуальных серверов из-за значительных ресурсов, выделенных исключительно для вашего использования.
Наша команда будет рада обсудить ваши потребности и порекомендовать наиболее подходящий для вас план. Вы можете ответить на этот запрос или связаться с нашим отделом продаж напрямую по адресу sales@ishoting.com, если вы хотите обсудить детали.
Благодарим вас за понимание и терпение. Мы высоко ценим ваш бизнес и стремимся удовлетворить ваши потребности.'],
			['id' => 2, 'category' => 'Бухгалтерия', 'title' => 'Lorem ipsum dolor', 'content' => 'Я понимаю, что вы обеспокоены скоростью вашего виртуального сервера, и я благодарен за возможность прояснить для вас ситуацию.'],
			['id' => 3, 'category' => 'Network', 'title' => 'Lorem ipsum dolor sit amet consectetur. Odio eros consequa', 'content' => 'Благодарен за возможность прояснить для вас ситуацию.'],
			['id' => 4, 'category' => 'Администрирование', 'title' => 'Ornare sed adipiscing turpis scelerisque feugiat congue', 'content' => 'Благодарен за возможность прояснить для вас ситуацию.'],
			['id' => 5, 'category' => 'Замена локации / IP адресов для VPS', 'title' => 'In consequat eu egestas integer elementum sem', 'content' => 'Благодарен за возможность прояснить для вас ситуацию.'],
			['id' => 6, 'category' => 'Abuses', 'title' => 'Pharetra quis viverra sed faucibus', 'content' => 'Здравствуйте,<br>
Надеюсь, что это сообщение застало вас в добром здравии. Я понимаю, что вы обеспокоены скоростью вашего виртуального сервера, и я благодарен за возможность прояснить для вас ситуацию.<br>
Во-первых, важно понимать, что хотя ваш виртуальный сервер оснащен портом 1 Гбит, это не означает, что он будет постоянно достигать скорости 1 Гбит/с. Это связано с тем, что сетевой порт является общим ресурсом для всех виртуальных серверов на одной физической машине.
Совместное использование обеспечивает экономическую эффективность и позволяет нам предлагать доступные цены для виртуальных серверов. Однако это также означает, что доступная пропускная способность делится между различными серверами, что может привести к снижению скорости, особенно в периоды пиковой нагрузки, когда другие серверы потребляют больше ресурсов. Кроме этого, тестирование скорости также зависит от используемых инструментов и пропускной способности другого сервера, который участвует в тестировании, поэтому эти результаты нельзя считать объективными. Мы рекомендуем оценивать скорость сети в результате практического применения. Важно отметить, что наш отдел мониторинга отслеживает нагрузку и не допускает использования более 50% от пропускной способности, чтобы обеспечивать высокую скорость сети для всех клиентов вне зависимости от времени.
Кроме этого, у нас описаны условия рекомендуемой постоянной нагрузки для каждого тарифного плана, которые позволяют ограничивать злоупотребления и гарантировать высокую скорость для пиковых нагрузок:
https://ishosting.com/ru/acceptable-use-policy
Если ваши проекты требуют гарантированных ресурсов, мы предлагаем рассмотреть наши предложения по выделенным серверам. Этот вариант означает, что в вашем распоряжении будут ресурсы всего сервера, обеспечивающие максимальную производительность и скорость.
Однако имейте в виду, что выделенные серверы потребуют значительно больших инвестиций по сравнению с нашими предложениями виртуальных серверов из-за значительных ресурсов, выделенных исключительно для вашего использования.
Наша команда будет рада обсудить ваши потребности и порекомендовать наиболее подходящий для вас план. Вы можете ответить на этот запрос или связаться с нашим отделом продаж напрямую по адресу sales@ishoting.com, если вы хотите обсудить детали.
Благодарим вас за понимание и терпение. Мы высоко ценим ваш бизнес и стремимся удовлетворить ваши потребности.'],
		];

		return $list;
	}
}
