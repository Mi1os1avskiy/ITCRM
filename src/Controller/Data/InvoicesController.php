<?php
namespace App\Controller\Data;

use DateTime;

class InvoicesController
{
    public static function allInvoices() {
        $list = [
            ['id' => '098249', 'status' => 'Pending', 'client' => 'Leslie Alexander', 'payment' => 'Coinpayments', 'excerpt' => '17/02/2023', 'paydate' => '17/03/2023', 'amount' => 99],
            ['id' => '098249', 'status' => 'Paid', 'client' => 'Kristin Watson', 'payment' => 'Stripe', 'excerpt' => '17/02/2023', 'paydate' => '17/03/2023', 'amount' => 99],
            ['id' => '098249', 'status' =>'Draft', 'client' => 'Eleanor Pena', 'payment' => '', 'excerpt' => '17/02/2023', 'paydate' => '17/03/2023', 'amount' => 190],
            ['id' => '098249', 'status' => 'Cancelled', 'client' => 'et_venenatis_tortor@mail.com', 'payment' => 'AdvCash', 'excerpt' => '17/02/2023', 'paydate' => '17/03/2023', 'amount' => 250],
            ['id' => '098249', 'status' => 'Paid', 'client' => 'Jacob Jones', 'payment' => 'AliPay', 'excerpt' => '17/02/2023', 'paydate' => '17/03/2023', 'amount' => 99.99],
            ['id' => '098249', 'status' => 'Cancelled', 'client' => 'Darlene Robertson', 'payment' => 'Paxum', 'excerpt' => '17/02/2023', 'paydate' => '17/03/2023', 'amount' => 375],
            ['id' => '098249', 'status' => 'Pending', 'client' => 'Courtney Henry', 'payment' => 'Coinpayments', 'excerpt' => '17/02/2023', 'paydate' => '17/03/2023', 'amount' => 130.99],
            ['id' => '098249', 'status' => 'Overdue', 'client' => 'Albert Flores', 'payment' => 'Boleto', 'excerpt' => '17/02/2023', 'paydate' => '17/03/2023', 'amount' => 199],
        ];

        return $list;
    }


    public static function invoiceData(): array
    {
        $user_created = '15/02/2019';

        $date2 = DateTime::createFromFormat('d/m/Y', $user_created);
        $date1 = new DateTime();
        $diff = $date2->diff($date1)->format('%a');

        $years = floor($diff / 365);
        $months = floor(($diff - $years * 365) / 30);

        $res = $years . " года, " . $months . " мес";

        $data = [
            'invoice_id' => 5852,
            'invoice_status' => 'Paid',
            'invoice_email' => 'valeriy-burdalayba@email.com',
            'invoice_user' => 'Valeriy Burdaleyba',
            'invoice_user_existing' => $res,
            'invoice_services' => 4,
            'invoice_notes' => 1,
            'invoice_balance' => 99,
            'invoice_last_date' => '17/02/2023',
            'invoice_last_time' => '14:13:16',
            'invoice_last_ip' => '94.43.223.64',
            'invoice_last_loc' => 'GE',
            'invoice_notation' => 'Facilisis mi gravida imperdiet odio fringilla. Lorem molestie neque vitae accumsan quam lacus eget nibh molestie.',
            'invoice_created' => '10/10/2023',
            'invoice_paydate' => '10/11/2023',
            'invoice_discount' => 0,
            'invoice_paid' => 12,
            'invoice_paid_date' => '01/07/2022',
            'invoice_paid_time' => '17:40',
            'invoice_paid_type' => 'Intercassa',
            'user_balance' => 99.99,
        ];

        return $data;
    }

    public $id;
    public $title;
    public $status;
    public $amount;
    public $date_created;
    public $date_expiring;
    public $loc;
    public $ip;
    public $panel;
    public $cpu;
    public $ram;
    public $disk;
    public $port;
    public $add;
    public $backup;
    public $admin;
    public $os;
    public $ddos;

    function __construct($id, $title, $status, $amount, $date_created, $date_expiring, $loc, $ip, $panel, $cpu, $ram, $disk, $port, $add, $backup, $admin, $os, $ddos) {
        $this -> id = $id;
        $this -> title = $title;
        $this -> status = $status;
        $this -> amount = $amount;
        $this -> date_created = $date_created;
        $this -> date_expiring = $date_expiring;
        $this -> loc = $loc;
        $this -> ip = $ip;
        $this -> panel = $panel;
        $this -> cpu = $cpu;
        $this -> ram = $ram;
        $this -> disk = $disk;
        $this -> port = $port;
        $this -> add = $add;
        $this -> backup = $backup;
        $this -> admin = $admin;
        $this -> os = $os;
        $this -> ddos = $ddos;
    }

    public static function createInvoices() {
        return [
            new InvoicesController(293023, 'Lite - Linux SSD', 'Renew', 5.5, '01/07/2022', '31/07/2023', 'Netherlands', '5.32.123.221', 'No panel', 'Xeon 1x2.60 GHz', 1, '20GB SSD', '1 Gbps', 'IPv4x1', 'Daily', 'No administration', 'CentOS 8 x64', 'Basic DDoS защита от L2 - L4'),
            new InvoicesController(293024, 'Exclusive - Windows NVMe', 'Upgrade', 75, '16/01/2023', '15/02/2023', 'Romania', '5.32.123.221', 'No panel', 'Xeon 6x2.90 GHz', '32 Gb', '100GB NVMe', '1 Gbps', 'IPv4x1', 'Daily', '', 'Windows Server 2008 R2 Standart (En)', ''),
            new InvoicesController(293025, 'Exclusive - Windows NVMe', 'New', 10, '03/07/2022', '02/09/2023', 'Germany', '5.32.123.221', 'No panel', 'Xeon 2x2.60 GHz', '16 Gb', '20GB SSD', '1 Gbps', 'IPv4x1', 'Daily', '', 'CentOS 8 x64', ''),
        ];
    }

    public static function invoiceUserData(): array
    {
        $data = [
            'invoice_id' => '0983248',
            'invoice_status' => 'Draft',
            'invoice_user' => 'Lex Stark',
            'invoice_date' => '10/10/2023',
            'invoice_time' => '23:59',
            'invoice_title' => 'Non tristique diam risus nullam congue venenatis. Cursus commodo id nulla nunc neque adipiscing pulvinar sed maecenas. Elit cras amet tempus malesuada phasellus nec tortor convallis eu.',
            'invoice_discount' => 0,
            'invoice_last_saved' => ['date' => '23/12/2023', 'time' => '16:17:55' , 'loc' => 'MSK'],
        ];

        return $data;
    }

    public static function allServices (): array
    {
        $services = [
            'service_1' => [
                'title' => '#098934 VPS - Lite SSD (NL)',
                'amount' => '5.50',
                'description' => 'Fermentum amet id ac cras a. Et condimentum ornare eu aliquam tempus vel neque. Diam sagittis dignissim lectus blandit ut cursus. Metus non velit lorem massa faucibus risus. In nisi ultrices id in.'
            ],
            'service_2' => [
                'title' => '#098934 VPS - Lite SSD',
                'amount' => '10.00',
                'description' => 'Facilisis mi gravida imperdiet odio fringilla. Lorem molestie neque vitae accumsan quam lacus eget nibh molestie. '
            ]
        ];

        return $services;
    }
}