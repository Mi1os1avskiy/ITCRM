<?php

namespace App\Controller\Data;

class OrdersController
{
	public static function allOrders() {
		$list = [
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Pending'],
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Pending'],
			['id' => 1242, 'tariff' => 'Exclusive - Windows NVMe', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'In progress'],
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Overdue', 'order_status' => 'Suspended'],
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Active'],
			['id' => 1242, 'tariff' => 'VPS - Lite SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Cancelled'],
			['id' => 1242, 'tariff' => 'Exclusive - Windows NVMe', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Terminated'],
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Cancelled', 'order_status' => 'Pending'],
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Paid', 'order_status' => 'Active'],
			['id' => 1242, 'tariff' => 'Exclusive - Windows SSD', 'loc' => 'NL', 'created_date' => '03/07/2023', 'created_time' => '13:11', 'client_name' => 'Valariy Burdaleyba', 'client_email' => 'v_burdaleyba@gmail.com', 'pay_method' => 'Interkassa', 'amount' => 130.99, 'invoice_status' => 'Pending', 'order_status' => 'Pending'],
		];

		return $list;
	}
}
