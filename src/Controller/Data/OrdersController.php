<?php

namespace App\Controller\Data;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrdersController extends AbstractController
{
	public static function allOrders() {
		$list = [
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Pending', 'autosetup' => 0],
			['id' => 1243, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'In Setup', 'autosetup' => 0],
			['id' => 1244, 'tariff' => 'Exclusive - Windows NVMe', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'In progress', 'autosetup' => 0],
			['id' => 1245, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Overdue', 'order_status' => 'Suspended', 'autosetup' => 0],
			['id' => 1246, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Active', 'autosetup' => 1],
			['id' => 1247, 'tariff' => 'VPS - Lite SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Cancelled', 'autosetup' => 0],
			['id' => 1248, 'tariff' => 'Exclusive - Windows NVMe', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Terminated', 'autosetup' => 0],
			['id' => 1249, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Cancelled', 'order_status' => 'Pending', 'autosetup' => 0],
			['id' => 1250, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Active', 'autosetup' => 0],
			['id' => 1251, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Checking', 'autosetup' => 0],
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

//	#[Template('orders/view.order.base.html.twig')]
	public static function testUser() {
		$list = [
			'order_id' => 1242,
			'title' => 'Dedicated - NL3',
			'service' => 'Ordered',
			'server' => 'Pending',
			'user_id' => 'c88992',
			'user_email' => 'valeriy_burdalayba@email.com',
			'tariff_group' => 'Dedicated - Нидерланды',
			'tariff_plan' => 'NL3-0 70.00 / 0.00 ( + 6/6 вариантов)',
			'tariff_price' => '$60.00 / 1 месяц',
			'created_date' => '03/03/2023',
			'created_time' => '15:58',
			'created_ip' => '37.214.30.10',
			'created_loc' => 'BY',
			'note' => 'Ipsum lacus id gravida venenatis velit cursus aliquet eros. Massa at habitant potenti senectus id pretium faucibus. Odio libero placerat lectus lectus',
			'restrictions' => ['баланс', 'инвойсы'],
			'cpu' => ['model' => 'Xeon 6x2.60 GHz (6x2600)', 'price' => '$0.00 / 1 месяц'],
			'ram' => ['capacity' => '16Gb', 'price' => '$0.00 / 1 месяц'],
			'disk' => ['capacity' => '80GB SSD (80/ssd)', 'price' => '$0.00 / 1 месяц'],
			'ip' => ['old' => ['amount' => 'IPv4 1', 'price' => '$5.00 / 1 месяц'], 'new' => ['amount' => 'IPv4 3 (1+2 доп.)', 'price' => '$10.00 / 1 месяц']],
			'port' => ['type' => '1 Gbps (1000/v0)', 'price' => '$0.00 / 1 месяц'],
			'os' => ['type' => 'CentOS 8 x64 (linux/centos8#64)', 'price' => '$0.00 / 1 месяц'],
			'osbit' => ['type' => '64 Bit', 'price' => '$0.00 / 1 месяц'],
			'panel' => ['type' => 'ISP Manager v6 Lite (10 sites)', 'price' => '$0.00 / 1 месяц'],
			'admin' => ['type' => 'Без администрирования (none)', 'price' => '$0.00 / 1 месяц'],
			'sla' => ['type' => 'Базовый', 'price' => '$0.00 / 1 месяц'],
			'backup' => ['type' => 'Еженедельное (free)', 'price' => '$0.00 / 1 месяц'],
			'ddos' => ['type' => 'Базовая DDoS защита от L2 - L4 атак (l2l4base)' , 'price' => '$0.00 / 1 месяц'],
			'paid_period' => 0,
			'pay_period' => 366,
			'new_period' => '31 (1 месяц)',
			'promo' => '9R0M0603E',
			'vat' => '20%',
			'first_payment_amount' => 5.00,
			'recurring_amount' => 5.00,
			'billing_cycle' => ['1 Месяц', '3 Месяца', '6 Месяцев', '12 Месяцев'],
			'next_due_date' => '23/03/2023',
			'dedicated_ip' => '37.1.201.8',
			'login' => 'root',
			'password' => 'P133Wr4',
			'assigned_ips' => '000.000.000.000',
			'server_id' => 'ID',
			'server_position' => 1234,
			'ipmi_ip' => '0.0.0.0',
			'ipmi_password' => 'P12b24TR563Wr4',
			'note_user' => 'Cursus commodo id nulla nunc neque adipiscing pulvinar sed maecenas. Elit cras amet tempus malesuada phasellus nec tortor convallis eu.',
			'note_admin' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum tempus lacus sit amet dignissim. Phasellus et consequat ex. Proin consequat quam sit amet consectetur scelerisque. Mauris ornare orci in massa malesuada eleifend. Aenean in elit vitae',
		];

		return $list;
	}
}
