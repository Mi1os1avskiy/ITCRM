<?php
namespace App\Controller\Data;

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
            ['important' => 0, 'type' => 'user_message', 'name' => 'Valeriy Burdaleyba', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'content' => ['Sagittis diam suspendisse nunc, facilisis.'], 'filename' => 'Attached file.doc'],
            ['important' => 0, 'type' => 'admin_note', 'name' => 'Adminname', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'content' => ['Vitae in duis ut sem ullamcorper eros nullam varius. Sagittis diam suspendisse nunc, facilisis.'], 'filename' => ''],
            ['important' => 0, 'type' => 'admin_message', 'name' => 'Adminname', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'content' => ['Diam, aliquet rhoncus consectetur nibh dui elementum ut vivamus. Turpis neque nunc odio in ut consectetur gravida. Vitae in duis ut sem ullamcorper eros nullam varius. Sagittis diam suspendisse nunc, facilisis.', 'https://website.com'], 'filename' => ''],
            ['important' => 1, 'type' => 'admin_note', 'name' => 'Adminname', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'content' => ['Vitae in duis ut sem ullamcorper eros nullam varius. Sagittis diam suspendisse nunc, facilisis.'], 'filename' => ''],
            ['important' => 0, 'type' => 'admin_message', 'name' => 'Adminname', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'content' => ['Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus. Ullamcorper molestie tellus morbi mattis rhoncus. Diam, aliquet rhoncus consectetur nibh dui elementum ut vivamus. Turpis neque nunc odio in ut consectetur gravida. Vitae in duis ut sem ullamcorper eros nullam varius. Sagittis diam suspendisse nunc, facilisis.'], 'filename' => 'Attached file.doc'],
            ['important' => 0, 'type' => 'user_message', 'name' => 'Valeriy Burdaleyba', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'content' => ['Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus. Ullamcorper molestie tellus morbi mattis rhoncus. Diam, aliquet rhoncus consectetur nibh dui elementum ut vivamus. Turpis neque nunc odio in ut consectetur gravida. Vitae in duis ut sem ullamcorper eros nullam varius. Sagittis diam suspendisse nunc, facilisis.', 'https://website.com', 'Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus. Ullamcorper molestie tellus morbi mattis rhoncus.', 'Vitae in duis ut sem ullamcorper eros nullam varius. Sagittis diam suspendisse nunc, facilisis.'], 'filename' => 'Attached file.doc'],
        ];

        return $messages;
    }

    public static function ticketLogs() {
        $logs = [
            ['title' => 'Статус изменен на', 'status' => 'Closed', 'username' => 'Pavel-Admin', 'date' => '21/12/2022', 'time' => '00:10', 'loc' => 'MSK'],
            ['title' => 'Статус изменен на', 'status' => 'Answered', 'username' => 'Pavel-Admin', 'date' => '26/08/2022', 'time' => '14:06', 'loc' => 'MSK'],
            ['title' => 'Добавлен ответ', 'status' => '', 'username' => 'Pavel-Admin', 'date' => '26/08/2022', 'time' => '12:15', 'loc' => 'MSK'],
            ['title' => 'Добавлен ответ', 'status' => '', 'username' => 'Valeriy Burdaleyba', 'date' => '26/08/2022', 'time' => '07:13', 'loc' => 'MSK'],
            ['title' => 'Добавлен ответ', 'status' => '', 'username' => 'Pavel-Admin', 'date' => '26/08/2022', 'time' => '01:19', 'loc' => 'MSK'],
            ['title' => 'Статус изменен на', 'status' => 'Opened', 'username' => 'Valeriy Burdaleyba', 'date' => '21/12/2022', 'time' => '00:24', 'loc' => 'MSK'],
            ['title' => 'Статус изменен на', 'status' => 'Closed', 'username' => 'Pavel-Admin', 'date' => '21/12/2022', 'time' => '10:47', 'loc' => 'MSK'],
            ['title' => 'Статус изменен на', 'status' => 'Answered', 'username' => 'Pavel-Admin', 'date' => '26/08/2022', 'time' => '22:11', 'loc' => 'MSK'],
            ['title' => 'Добавлен ответ', 'status' => '', 'username' => 'Pavel-Admin', 'date' => '10/08/2022', 'time' => '19:32', 'loc' => 'MSK'],
            ['title' => 'Открыт заново', 'status' => '', 'username' => 'Valeriy Burdaleyba', 'date' => '08/08/2022', 'time' => '14:12', 'loc' => 'MSK'],
            ['title' => 'Автоматически закрылся', 'status' => '', 'username' => 'Pavel-Admin', 'date' => '05/08/2022', 'time' => '16:59', 'loc' => 'MSK'],
            ['title' => 'Открыт', 'status' => '', 'username' => 'Valeriy Burdaleyba', 'date' => '13/07/2022', 'time' => '05:43', 'loc' => 'MSK'],
        ];

        return $logs;
    }
}