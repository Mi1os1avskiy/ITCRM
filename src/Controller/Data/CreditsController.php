<?php

namespace App\Controller\Data;

class CreditsController
{
    public static function allCredits() {
        $list = [
            ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Оплата инвойса с входящей транзакции'],
            ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'high', 'amount' => 19.99, 'description' => 'Оплата инвойса с баланса клиента'],
            ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Баланс', 'amount_stat' => 'low', 'amount' => 200, 'description' => 'Credit to the balance from the transaction (balance)'],
            ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Custom', 'id' => '23202', 'user' => 'Admin', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'normal', 'amount' => 50, 'description' => 'Оплата инвойса с входящей транзакии'],
            ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 999.99, 'description' => 'Оплата инвойса с входящей транзакции'],
        ];

        return $list;
    }
}