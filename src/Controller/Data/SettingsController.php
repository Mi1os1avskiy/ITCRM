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
				'group' => 'Full privilegies',
				'roles' => 2,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tg_username' => 'mira_schleifer',
				'tg_id' => 'mira_schleifer'
			],
			[
				'id' => 12,
				'login' => 'fbrown@hotmail.com',
				'name' => 'Kierra Mango',
				'email' => 'fbrown@hotmail.com',
				'group' => 'For UA',
				'roles' => 1,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tg_username' => 'kierra_mango',
				'tg_id' => 'kierra_mango'
			],
			[
				'id' => 13,
				'login' => 'egreen@hotmail.com',
				'name' => 'Miracle Dias',
				'email' => 'egreen@hotmail.com',
				'group' => 'Junior admin',
				'roles' => 1,
				'last_logged' => '',
				'whmcs' => '',
				'tg_username' => 'miracle_dias',
				'tg_id' => 'miracle_dias'
			],
			[
				'id' => 14,
				'login' => 'plewis@hotmail.com',
				'name' => 'Miracle Workman',
				'email' => 'plewis@hotmail.com',
				'group' => 'Senior admin',
				'roles' => 3,
				'last_logged' => '',
				'whmcs' => '',
				'tg_username' => 'miracle_workman',
				'tg_id' => 'miracle_workman'
			],
			[
				'id' => 15,
				'login' => 'sbrown@gmail.com',
				'name' => 'Alena Dorwart',
				'email' => 'sbrown@gmail.com',
				'group' => 'Sales manager',
				'roles' => 1,
				'last_logged' => '',
				'whmcs' => '',
				'tg_username' => 'alena_dorwart',
				'tg_id' => 'alena_dorwart'
			],
			[
				'id' => 16,
				'login' => 'ejohnson@hotmail.com',
				'name' => 'Alena Donin',
				'email' => 'ejohnson@hotmail.com',
				'group' => 'General support',
				'roles' => 2,
				'last_logged' => '0s',
				'whmcs' => '',
				'tg_username' => 'alena_donin',
				'tg_id' => 'alena_donin'
			],
			[
				'id' => 17,
				'login' => 'uallen@aol.com',
				'name' => 'Cooper Dias',
				'email' => 'uallen@aol.com',
				'group' => 'Full privilegies',
				'roles' => 2,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tg_username' => 'cooper_dias',
				'tg_id' => 'cooper_dias'
			],
			[
				'id' => 18,
				'login' => 'wgarcia@hotmail.com',
				'name' => 'Alfredo Siphron',
				'email' => 'wgarcia@hotmail.com',
				'group' => 'Full privilegies',
				'roles' => 1,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tg_username' => 'alfredo_siphron',
				'tg_id' => 'alfredo_siphron',
			],
			[
				'id' => 19,
				'login' => 'umartin@aol.com',
				'name' => 'Madelyn Carder',
				'email' => 'umartin@aol.com',
				'group' => 'Junior admnin + Basepass',
				'roles' => 1,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tg_username' => 'madelyn_carder',
				'tg_id' => 'madelyn_carder'
			],
			[
				'id' => 20,
				'login' => 'xsmith@hotmail.com',
				'name' => 'Ruben Saris',
				'email' => 'xsmith@hotmail.com',
				'group' => 'Full privilegies',
				'roles' => 4,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tg_username' => 'ruben_saris',
				'tg_id' => 'ruben_saris'
			],
			[
				'id' => 21,
				'login' => 'whernandez@aol.com',
				'name' => 'Allison Siphron',
				'email' => 'whernandez@aol.com',
				'group' => 'Middle admin',
				'roles' => 2,
				'last_logged' => '13d 19h',
				'whmcs' => '',
				'tg_username' => 'allison_siphron',
				'tg_id' => 'allison_siphron'
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

	public const json_content = '{
    "BasicSet_Autosetup": {
        "clientWithAdminNotes": "any",
        "clientWithDuplicateAdminNotes": "any",
        "clientEmailContain": [],
        "clientWithBlockedService": "any",
        "clientDuplicateWithBlockedService": "any",
        "clientWithRestrictions": "any",
        "clientDuplicateWithRestrictions": "any",
        "clientWithDuplicates": "any",
        "clientVerified": "any",
        "clientStatusBlocked": "any",
        "clientDuplicateStatusBlocked": "any",
        "clientWithViolation": "any",
        "clientDuplicateWithViolation": "any",
        "clientLocation": [],
        "clientLocationNot": [],
        "clientActiveServicesBCycle": [],
        "orderWithClientComment": "any",
        "orderServiceType": [],
        "orderTariffLocation": [],
        "orderTariff": [],
        "orderBillingCycle": [],
        "orderPaymentMethod": [],
        "orderWinLicencePaid": "any",
        "orderAdditionalIP": "any",
        "orderVpnSeparateTraffic": "any",
        "orderVpnProxyIP": "any",
        "orderVpnCustomAccounts": "any",
        "orderPanelCompatible": "any",
        "clientHasActiveServiceOlder48h": "any"
    },
    "Subset0_RestrictAutosetup": {
        "clientWithAdminNotes": true
    },
    "Subset1_RestrictAutosetup": {
        "clientWithDuplicateAdminNotes": true
    },
    "Subset2_RestrictAutosetup": {
        "clientEmailContain": [
            "tutanota",
            "proton"
        ]
    },
    "Subset3_RestrictAutosetup": {
        "clientWithBlockedService": true
    },
    "Subset4_RestrictAutosetup": {
        "clientDuplicateWithBlockedService": true
    },
    "Subset5_RestrictAutosetup": {
        "clientWithRestrictions": true
    },
    "Subset6_RestrictAutosetup": {
        "clientDuplicateWithRestrictions": true
    },
    "Subset7_RestrictAutosetup": {
        "clientStatusBlocked": true
    },
    "Subset8_RestrictAutosetup": {
        "clientDuplicateStatusBlocked": true
    },
    "Subset9_RestrictAutosetup": {
        "clientWithViolation": true
    },
    "Subset10_RestrictAutosetup": {
        "clientDuplicateWithViolation": true
    },
    "Subset11_RestrictAutosetup": {
        "orderWithClientComment": true
    },
    "Subset12_RestrictAutosetup": {
        "orderTariffLocation": [
            "SE"
        ],
        "clientVerified": false
    },
    "Subset13_RestrictAutosetup": {
        "orderServiceType": [
            "vps"
        ],
        "orderTariff": [
            "Lite - Windows NVMe",
            "Start - Windows NVMe",
            "Medium - Windows NVMe",
            "Premium - Windows NVMe",
            "Elite - Windows NVMe",
            "Exclusive - Windows NVMe"
        ],
        "orderBillingCycle": [
            "1y",
            "2y"
        ]
    },
    "Subset14_RestrictAutosetup": {
        "orderServiceType": [
            "vps"
        ],
        "orderTariff": [
            "Lite - Windows NVMe",
            "Start - Windows NVMe",
            "Medium - Windows NVMe",
            "Premium - Windows NVMe",
            "Elite - Windows NVMe",
            "Exclusive - Windows NVMe"
        ],
        "orderWinLicencePaid": true
    },
    "Subset15_RestrictAutosetup": {
        "orderServiceType": [
            "vps"
        ],
        "orderTariff": [
            "Lite - Linux NVMe",
            "Start - Linux NVMe",
            "Medium - Linux NVMe",
            "Premium - Linux NVMe",
            "Elite - Linux NVMe",
            "Exclusive - Linux NVMe"
        ],
        "orderBillingCycle": [
            "1y",
            "2y"
        ]
    },
    "Subset16_RestrictAutosetup": {
        "orderServiceType": [
            "vps"
        ],
        "orderTariff": [
            "Lite - Linux NVMe",
            "Start - Linux NVMe",
            "Medium - Linux NVMe",
            "Premium - Linux NVMe",
            "Elite - Linux NVMe",
            "Exclusive - Linux NVMe"
        ],
        "orderPanelCompatible": false
    },
    "Subset17_RestrictAutosetup": {
        "orderServiceType": [
            "vpn"
        ],
        "orderTariffLocation": [
            "RU"
        ],
        "orderPaymentMethod": [
            "coinpayments"
        ]
    },
    "Subset18_RestrictAutosetup": {
        "orderServiceType": [
            "vpn"
        ],
        "orderAdditionalIP": true
    },
    "Subset19_RestrictAutosetup": {
        "orderServiceType": [
            "vpn"
        ],
        "orderVpnSeparateTraffic": true
    },
    "Subset20_RestrictAutosetup": {
        "orderServiceType": [
            "vpn"
        ],
        "orderVpnProxyIP": true
    },
    "Subset21_RestrictAutosetup": {
        "orderServiceType": [
            "vpn"
        ],
        "orderVpnCustomAccounts": true
    },
    "Subset_AutoTicket48h_Enable": {
        "orderServiceType": [
            "vps"
        ],
        "orderTariff": [
            "Lite - Linux NVMe",
            "Start - Linux NVMe",
            "Medium - Linux NVMe",
            "Premium - Linux NVMe",
            "Elite - Linux NVMe",
            "Exclusive - Linux NVMe"
        ],
        "orderBillingCycle": [
            "1m",
            "3m",
            "6m"
        ],
        "clientLocationNot": [
            "RU",
            "UA",
            "BY"
        ],
        "clientHasActiveServiceOlder48h": false
    }
}';

	public const tokens = [
		'clientWithAdminNotes // наличие заметок админа в профиле клиента',
		'clientWithDuplicateAdminNotes // наличие заметок админа в профиле клиента дубликатов',
		'clientEmailContain // email провайдер почты клиента',
		'clientWithBlockedService // наличие заблокированных услуг у клиента',
		'clientDuplicateWithBlockedService // заблокированные услуги у дубликатов клиента',
		'clientWithRestrictions // клиент с установленными ограничениями аккаунта (любыми)',
		'clientDuplicateWithRestrictions // дубликаты клиента с ограничениями (любыми)',
		'clientWithDuplicates // клиент имеет дубликаты аккаунта',
		'clientVerified // значение KYC для аккаунта',
		'clientStatusBlocked // статус клиента Blocked',
		'clientDuplicateStatusBlocked // статус клиента Blocked в дубликатах',
		'clientWithViolation // наличие тикетов с нарушениями',
		'clientDuplicateWithViolation // наличие тикетов с нарушениями с дубликатах',
		'clientLocation // локация клиента (geoip)',
		'clientActiveServicesBCycle // наличие активной услуги с мин. билл. циклом',
		'orderWithClientComment // заказ содержит комментарий клиента',
		'orderServiceType // тип услуги в заказе (vps, vpn)',
		'orderTariffLocation // локация тарифа в заказе',
		'orderTariff // тариф в заказе',
		'orderBillingCycle // билл. цикл в заказе',
		'orderPaymentMethod // способ оплаты заказа',
		'orderWinLicencePaid // в заказе оплачена лицензия Windows',
		'orderAdditionalIP // в заказе есть доп. IP',
		'orderVpnSeparateTraffic // заказана опция раздельного траффика в vpn',
		'orderVpnProxyIP // заказана опция Proxy для доп. IP vpn',
		'orderVpnCustomAccounts // заказана опция доп. аккаунтов в vpn',
		'orderPanelCompatible // совместимость панели и OS в заказе',
		'clientHasActiveServiceOlder48h // наличие у клиента активной услуги возрастом более 48 часов',
	];
}
