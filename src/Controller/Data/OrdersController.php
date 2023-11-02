<?php

namespace App\Controller\Data;

class OrdersController
{
	public static function allOrders() {
		$list = [
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Pending'],
			['id' => 1243, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Pending'],
			['id' => 1244, 'tariff' => 'Exclusive - Windows NVMe', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'In progress'],
			['id' => 1245, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Overdue', 'order_status' => 'Suspended'],
			['id' => 1246, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Active'],
			['id' => 1247, 'tariff' => 'VPS - Lite SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Cancelled'],
			['id' => 1248, 'tariff' => 'Exclusive - Windows NVMe', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Terminated'],
			['id' => 1249, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Cancelled', 'order_status' => 'Pending'],
			['id' => 1250, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Active'],
			['id' => 1251, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Pending'],
		];

		return $list;
	}

	public static function ordersClients() {
		$list = [
			['email' => 'maurisnulla@mail.com', 'id' => 23423],
			['email' => 'auisque@mail.com', 'id' => 239238],
			['email' => 'proin_aliquet@mail.com', 'id' => 23423],
			['email' => 'nibh_consequat@mail.com', 'id' => 87346],
			['email' => 'testtesttesttesttesttesttesttesttesttesttest@mail.com', 'id' => 123865],
			['email' => 'vulputate@mail.com', 'id' => 62639],
			['email' => 'tortor_ut@mail.com', 'id' => 723746],
		];

		return $list;
	}

	public static function ordersTariffPlans() {
		$list = [
			'Lite - Linux SSD 5.00 / 0 .00 (+3/6 вариантов)',
			'Start - Linux SSD 10.00 / 0.00 (+3/6 вариантов)',
			'Medium - Linux SSD 20.00 / 0.00 (+3/6 вариантов)',
			'Premium - Linux SSD 40.00 / 0.00 (+3/6 вариантов)',
			'Elite - Linux SSD 60.00 / 0.00 (+3/6 вариантов)',
			'Exclusive - Linux SSD 90.00 / 0.00 (+3/6 вариантов) ',
			'Lite Windows SSD 5.00 / 0.00 (+3/6 вариантов)',
			'Start - Windows SSD 10.00 / 0.00 (+3/6 вариантов)'
		];

		return $list;
	}

	public static function ordersTariffGroups() {
		$list = [
			'Виртуальные серверы / Netdirect - Германия',
			'Виртуальные серверы / SwiftVPS - Нидерланды',
			'Виртуальные серверы / Великобритания',
			'Виртуальные серверы / SingleVPS - США',
			'Виртуальные серверы / Canada - Канада',
			'Виртуальные серверы / Ukraine - Украина',
			'Виртуальные серверы / PinVPS - Россия',
			'Виртуальные серверы / CustVPS - Швеция'
		];

		return $list;
	}

	public static function ordersTariffAmount() {
		$list = [
			['amount' => 'IPv4 - 1 шт', 'sum' => '$0.00 в месяц'],
			['amount' => 'IPv4 - 13 шт', 'sum' => '$35.00 в месяц'],
			['amount' => 'IPv4 - 29 шт', 'sum' => '$70.00 в месяц'],
			['amount' => 'IPv4 - 61 шт', 'sum' => '$140.00 в месяц'],
			['amount' => 'IPv4 - 125 шт', 'sum' => '$250.00 в месяц'],
			['amount' => 'IPv4 - 253 шт', 'sum' => '$500.00 в месяц']
		];

		return $list;
	}
}
