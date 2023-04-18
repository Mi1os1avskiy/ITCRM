<?php

namespace App\Controller\Data;

class ServicesController
{
    public static function allServices() {
        $list = [
            ['id' => 'Personal VPN and Socks 5 proxy with dedicated IP FR', 'ip' => '255.255.255.255', 'amount' => '130.99', 'cycle' => 'Месяц', 'date' => '17/02/2023', 'paydate' => '17/02/2023', 'status' => 'Active'],
            ['id' => 'Velit etiam sit laoreet sit', 'ip' => '1.1.1.1', 'amount' => '10.99', 'cycle' => 'Месяц', 'date' => '17/02/2023', 'paydate' => '17/02/2023', 'status' => 'Pending'],
            ['id' => 'Lite - Windows SSD SG', 'ip' => '1.1.1.1', 'amount' => '100.00', 'cycle' => 'Месяц', 'date' => '17/02/2023', 'paydate' => '17/02/2023', 'status' => 'Terminated'],
            ['id' => 'Personal VPN and Socks 5 proxy', 'ip' => '1.1.1.1', 'amount' => '125.25', 'cycle' => 'Месяц', 'date' => '17/02/2023', 'paydate' => '17/02/2023', 'status' => 'Cancelled'],
            ['id' => 'Semper tortor nunc quis aenean', 'ip' => '255.255.255.255', 'amount' => '130.99', 'cycle' => 'Месяц', 'date' => '17/02/2023', 'paydate' => '17/02/2023', 'status' => 'Pending'],
            ['id' => 'Mi sit at proin ut', 'ip' => '1.1.1.1', 'amount' => '99.99', 'cycle' => 'Месяц', 'date' => '17/02/2023', 'paydate' => '17/02/2023', 'status' => 'Active'],
            ['id' => 'Socks 5 proxy with dedicated IP FR', 'ip' => '192.168.1.1', 'amount' => '123.45', 'cycle' => 'Месяц', 'date' => '17/02/2023', 'paydate' => '17/02/2023', 'status' => 'Active'],
            ['id' => 'Lite - Windows SSD SG', 'ip' => '1.1.1.1', 'amount' => '99.99', 'cycle' => 'Месяц', 'date' => '17/02/2023', 'paydate' => '17/02/2023', 'status' => 'Terminated'],
        ];

        return $list;
    }
}