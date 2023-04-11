<?php
namespace App\Controller\Support;

use DateTime;

class TicketsController
{
    public $id;
    public $theme;
    public $status;
    public $priority;
    public $dept;
    public $client;
    public $time;

    function __construct($id, $theme, $status, $priority, $dept, $client, $time) {
        $this -> id = $id;
        $this -> theme = $theme;
        $this -> status = $status;
        $this -> priority = $priority;
        $this -> dept = $dept;
        $this -> client = $client;
        $this -> time = $time;
    }

    public static function ticketsTable()
    {
        return [
            new TicketsController('098249', 'Amet sagittis quis fames cursus vel risus.', 'Open', 3, 'Служба поддержки', 'valeron-burdaleyba@mail.com', '2h 3m'),
            new TicketsController('1234231', 'At sed consectetur tempus neque nascetur auctor.', 'In progress', 2, 'Служба поддержки', 'Alex Finn', '2h 3m'),
            new TicketsController('345345', 'Malesuada quisque felis vitae risus consequat.', 'Answered', 1, 'Служба поддержки', 'Wade Warren', '2h 3m'),
            new TicketsController('324543', 'Lacus etiam adipiscing ac morbi.', 'Customer reply', 3, 'Служба поддержки', 'Essther Howard', '2h 3m'),
            new TicketsController('8476534', 'Sit elit nulla vestibulum mi nunc.', 'Waiting for manager', 3, 'Служба поддержки', 'Jenny Wilson', '2h 3m'),
            new TicketsController('908345', 'Dictum feugiat in senectus est platea.', 'On hold', 1, 'Служба поддержки', 'Marvin McKinney', '2h 3m'),
            new TicketsController('094357', 'Massa massa senectus velit metus euismod vitae imperdiet sem.', 'Closed', 3, 'Служба поддержки', 'Darlene Robertson', '2h 3m'),
            new TicketsController('763458', 'Malesuada quisque felis vitae risus consequat.', 'Important!', 2, 'Служба поддержки', 'Jerome Bell', '2h 3m')
        ];
    }

    public static function ticketStatuses() {
        $statuses = [
            'status_1' => [
                'title' => 'Important!',
                'css' => 'bg-red-100 text-red-800'
            ],
            'status_2' => [
                'title' => 'Open',
                'css' => 'bg-red-100 text-red-800'
            ],
            'status_3' => [
                'title' => 'In progress',
                'css' => 'bg-orange-200 text-orange-800'
            ],
            'status_4' => [
                'title' => 'Answered',
                'css' => 'bg-yellow-100 text-yellow-800'
            ],
            'status_5' => [
                'title' => 'Customer reply',
                'css' => 'bg-yellow-100 text-yellow-800'
            ],
            'status_6' => [
                'title' => 'Waiting for manager',
                'css' => 'bg-yellow-100 text-yellow-800'
            ],
            'status_7' => [
                'title' => 'On hold',
                'css' => 'bg-blue-100 text-blue-800'
            ],
            'status_8' => [
                'title' => 'Closed',
                'css' => 'bg-green-100 text-green-800'
            ],
        ];

        return $statuses;
    }

    public static function timeDiff() {
        $start_time = strtotime("02-04-2023 13:30:30");
        $end_time = strtotime('now');
        $diff = $end_time - $start_time - 21 * 3600;
        $hours = floor($diff / 3600);
        $minutes = floor(($diff - $hours * 3600) / 60);

        $res = $hours . 'h ' . $minutes. 'm';

        return $res;
    }

    public static function ticketNavigation() {
        $tabs = [
            ['eng' => 'answer', 'rus' => 'Ответ', 'val' => 0],
            ['eng' => 'notes', 'rus' => 'Заметки', 'val' => 0],
            ['eng' => 'options', 'rus' => 'Опции', 'val' => 0],
            ['eng' => 'log', 'rus' => 'Лог', 'val' => 0],
            ['eng' => 'others', 'rus' => 'Другие тикеты', 'val' => 0],
        ];

        return $tabs;
    }

    public static function ticketData() {
        $data = [
            'ticket_id' => 1647064,
            'ticket_title' => 'Ac diam id metus at turpis velit id faucibus gravida.',
            'ticket_username' => 'Valeriy Burdaleyba',
            'ticket_email' => 'valeriy-burdalayba@email.com',
            'ticket_service' => 'Личный VPN и Socks 5 прокси с выделенным IP FR',
            'ticket_status' => 'Active',
            'ticket_serviceID' => '293023',
            'ticket_service_date' => '01/01/2020',
            'ticket_ip' => '255.245.252.240',
            'ticket_fee' => 5,
            'ticket_paydate' => '17/02/2023',
        ];

        return $data;
    }

    public static function ticketMessages() {
        $messages = [
            ['type' => 'user_message', 'name' => 'Valeriy Burdaleyba', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => 'Sagittis diam suspendisse nunc, facilisis.', 'filename' => 'Attached file.doc'],
            ['type' => 'admin_note', 'name' => 'Adminname', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => 'Vitae in duis ut sem ullamcorper eros nullam varius. Sagittis diam suspendisse nunc, facilisis.'],
            ['type' => 'admin_message', 'name' => 'Adminname', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => 'Diam, aliquet rhoncus consectetur nibh dui elementum ut vivamus. Turpis neque nunc odio in ut consectetur gravida. Vitae in duis ut sem ullamcorper eros nullam varius. Sagittis diam suspendisse nunc, facilisis. https://website.com'],
        ];

        return $messages;
    }
}