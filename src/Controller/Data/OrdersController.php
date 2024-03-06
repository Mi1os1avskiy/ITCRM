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
			'NL3-0 70.00 / 0.00 ( + 6/6 вариантов)',
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
			'Dedicated - Нидерланды',
			'Dedicated - Германия',
			'Dedicated - США',
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

	public static function history() {
		$list = [
			['editor' => 'a.misilevich@brainq.com', 'start' => (time() + 8000), 'end' => 0],
			['editor' => 'Pavel-Admin', 'start' => 1683199140, 'end' => 1683213900],
			['editor' => 'Pavel-Admin', 'start' => 1683035220, 'end' => 1683036780],
			['editor' => 'Pavel-Admin', 'start' => 1679051300, 'end' => 1679056140],
		];

		return $list;
	}

	public static function shhKeys() {
		$list = [
			['id' => 101, 'user' => 'dfvdfv@gmail.com', 'vps' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCMeuE0r4Q8pdvYyH02P/9jXSNqy3/qZ2vizlmIiq/SlKsO8QZeQj7qBA3/cBdL2xwS9QIhNMqpOZZ02ytyQt+T5RExsIBm8mM00xBQP2prg5K7+BzBECa+hZal7dTuUr078ImwqQzDaMWQf5oG2MyVuV1qSVe3MEVQt7Ygi/1wxfyjcL/SSek93UqmQ0LS1qRLqI0CFoI6/zoQofOyc1HUJL34LsdiWWpHEo9OtxtO38r0agyeiowvNy9+vIhm7nFwrtfrrgoQRPezBTN9Vdk8eSCQGl9K006yIM5mXq8wsX8q1fT5ldsPDGSTJqOWHzh9I7HfexHhSejFJVOQ9VTj rsa-key-20230929', 'iscrm' => 'ssh-rsa AAAAB3NzaC1yc2EAAAABJQAAAQEAjsyC1HHiX5SxdsUgRISMSBJOG2Q9tF9w3zDV4z7qjhmonsI2mHK0HbPQ+cGdx1J47/jCRxdOa/KoOGsvjnwl2JFHZV9/X8VvoOqSgFIEQm30XKK3OhVZPfcePb4qyXTTmMqzx1I0z3RW4imLZTCK+IpwiBplD7xokY7yQZNB+CnkMoWX3iJdUppvQ+JmVzztPBKedFmpKBsKU4zagVN+R4toPOdUVJ5FFxeldeThXlZT2UVRonLkQS/RSxfSPxmazgAYmXuYfX9CEnZ128SE+nZ7MAEsG0cDeOw+3maG3d6Wv/rzi7e6cA6pXMPbmqy5LP4lXlj2sIFHL1tpBugMDQ== rsa-key-20210722'],
			['id' => 102, 'user' => 'real_o27.07', 'vps' => '', 'iscrm' => 'ssh-rsa AAAAB3NzaC1yc2EAAAABJQAAAQEAkcjGXcduHPJAy1r7jXX/RmXZTAUEAmB45XR7elpDHa1rHYLc+xVW4+wc1dql4Vni5+AJSoLKLJOyYXHitWHa6I8KKVPnm7XmHdb4Svofuujd+traxmvy2sfxxomMYCUZhyy9ISu6hrVT01oP0lRMyLRkSqBKKWe85fc/S8hd3hhBTx8k5LJRoRVT5hHWlZjnzT0i1x2/1hq15ob/f5pi7/kG8hN3k0Cd67RCCKjiWqPLUjwp45SGXFQyeBPG2eZ7c5i6l/vW4t04EYsPQIPPH2aCiHmcKCJfa9WOgVBRwMrNDkvoTVW1KXGcPNuhTarVHkLyISFfRg5QGJGmUMohhQ== rsa-key-20211020'],
			['id' => 103, 'user' => 'sshlinux_realo', 'vps' => '', 'iscrm' => 'ssh-rsa AAAAB3NzaC1yc2EAAAABJQAAAQEAkcjGXcduHPJAy1r7jXX/RmXZTAUEAmB45XR7elpDHa1rHYLc+xVW4+wc1dql4Vni5+AJSoLKLJOyYXHitWHa6I8KKVPnm7XmHdb4Svofuujd+traxmvy2sfxxomMYCUZhyy9ISu6hrVT01oP0lRMyLRkSqBKKWe85fc/S8hd3hhBTx8k5LJRoRVT5hHWlZjnzT0i1x2/1hq15ob/f5pi7/kG8hN3k0Cd67RCCKjiWqPLUjwp45SGXFQyeBPG2eZ7c5i6l/vW4t04EYsPQIPPH2aCiHmcKCJfa9WOgVBRwMrNDkvoTVW1KXGcPNuhTarVHkLyISFfRg5QGJGmUMohhQ== rsa-key-20211020'],
			['id' => 104, 'user' => 'mac13.12', 'vps' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCMeuE0r4Q8pdvYyH02P/9jXSNqy3/qZ2vizlmIiq/SlKsO8QZeQj7qBA3/cBdL2xwS9QIhNMqpOZZ02ytyQt+T5RExsIBm8mM00xBQP2prg5K7+BzBECa+hZal7dTuUr078ImwqQzDaMWQf5oG2MyVuV1qSVe3MEVQt7Ygi/1wxfyjcL/SSek93UqmQ0LS1qRLqI0CFoI6/zoQofOyc1HUJL34LsdiWWpHEo9OtxtO38r0agyeiowvNy9+vIhm7nFwrtfrrgoQRPezBTN9Vdk8eSCQGl9K006yIM5mXq8wsX8q1fT5ldsPDGSTJqOWHzh9I7HfexHhSejFJVOQ9VTj rsa-key-20230929', 'iscrm' => 'ssh-rsa AAAAB3NzaC1yc2EAAAABJQAAAQEAjQB9W9Kt4/cHXyvDiIOZqn15LwDXyP1UNvWKwekhrc+OsYcN8OXN+PHIM0f5n3vK2iHB7pQpKWrzytpLvm6rWCXNMnGl9JwVZubqzF4EcMgora7EU6nSvaV+AZH+2p5mh+oZa8Rj3LkbwadiNV6Sp523PBMrxjgww9qnngKfZY/DmvF7ls4sBnOSLXnkiKM1xuV083oHNvV8lNAB8OolUbtbMJF9h/kWSLyIS4U1ofHYxgGdqg4oORoN6fmRkJjwLz9d0CzgybI79nFLXw6ULqqmG3kmF2L7089yuAqpcnNOTBP5VkJXsHw+tPQXI4HUgjzvfDMa6W56BM9gacSUHQ== rsa-key-20211026'],
			['id' => 105, 'user' => 'olgarybacenok@iMac', 'vps' => '', 'iscrm' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDJuSBi9YTZ/KQc1JYk9B4TMIxk7L6CZUm3xVPazII4WlYYK+iY/AlUPj362DaEJCR1CuS9BsUwcvJunY1gJduNZ/85q42fGvReh4Hkgy8CY1MC342CJWMo2Zpr3hG1ntDx38g1v/BbkC6L3WaPKr+q6J64CuozdcBLAG/VbTTheJXKJ9HiBVnKRRkdBcjLmT+9dxIJM/40r3kOq0yjQT3FfUrB/HBRd129299T4N3rVVbhJbj8R2SoMehh7b67Xu81roQM0ehEXIa11tkK3dKC3llt9tVVLdgqRyyp9B2qgYPGeKrR+zkS5lECt5ULcXsuXzYLRKgYtGvDR1oi6lMl rsa-key-20220207'],
			['id' => 106, 'user' => 'olgarybacenok@iMac-Olga.local', 'vps' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCMeuE0r4Q8pdvYyH02P/9jXSNqy3/qZ2vizlmIiq/SlKsO8QZeQj7qBA3/cBdL2xwS9QIhNMqpOZZ02ytyQt+T5RExsIBm8mM00xBQP2prg5K7+BzBECa+hZal7dTuUr078ImwqQzDaMWQf5oG2MyVuV1qSVe3MEVQt7Ygi/1wxfyjcL/SSek93UqmQ0LS1qRLqI0CFoI6/zoQofOyc1HUJL34LsdiWWpHEo9OtxtO38r0agyeiowvNy9+vIhm7nFwrtfrrgoQRPezBTN9Vdk8eSCQGl9K006yIM5mXq8wsX8q1fT5ldsPDGSTJqOWHzh9I7HfexHhSejFJVOQ9VTj rsa-key-20230929', 'iscrm' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCfFmcMCMT7RVzPU2Hi/cwSQkwefbzJjowfbSB4Z546+xul7wSPVsLg/88QnOwMZHLodwMiIG8hRUYh++bqOsp65+qSRwbgvGP+fHP/Z8Ky01hnuNiCg9SkvCLU3i9LYpVq41Pxp3Qq+ZjgLPokZbE9prii9tq2FhfvMtATmRUEDZjbD0Y8zLri/smmYP16+ySOlkYXIuzaKLgt5bMyrAPlv8Scmb9NvzqBRslYSLDhlCjxL7TQNJKivPhL2vwkQbCQ8bqiFn0ExTqUN9TPFjpWoIWTjC+sT+kZcJs5jJK3/U6gKNaiBNZXh4BP4UoXd77EmzbObKeQONvrBmtT9x09 rsa-key-20230425'],
		];

		return $list;
	}
}
