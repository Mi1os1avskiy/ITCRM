<?php

namespace App\Controller\Data;

class UsersController
{
    public $id;
    public $email;
    public $name;
    public $credit;
    public $services;
    public $status;
    public $created;
    public $lang;
    public $phone;
    public $address;
    public $company;
    public $last_log;
    public $ip;
    public $ccode;
    public $twofa;

    function __construct($id, $email, $name, $credit, $services, $status, $created, $lang, $phone, $address, $company, $last_log, $ip, $ccode, $twofa) {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->credit = $credit;
        $this->services = $services;
        $this->status = $status;
        $this->created = $created;
        $this->lang = $lang;
        $this->phone = $phone;
        $this->address = $address;
        $this->company = $company;
        $this->last_log = $last_log;
        $this->ip = $ip;
        $this->ccode = $ccode;
        $this->twofa = $twofa;
    }

    public static function CreateTable() {
        return [
            new UsersController(111, 'test@test.test', 'Lex Stark', 350,  3,  ['value' => 'Active', 'css' => 'bg-green-100 text-green-800'], '17/02/2023', 'Ru', '', ['Belarus', 'Minsk'], 'VSh', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'BY'], '37.214.25.177', 'BY', 1),
            new UsersController(222, 'miloslavskiy@tut.by', 'Aleksandr Miloslavskiy', 1200, 1, ['value' => 'Pending', 'css' => 'bg-yellow-100 text-yellow-800'], '17/02/2023', 'Ru', '+375 29 638-33-96', ['Belarus', 'Minsk', 'Kollektornaya, 32-60', '220004'], 'BrainQ', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'BY'], '37.214.25.177', 'BY', 1),
            new UsersController(333, 'dawkins@mail.com', 'Richard Dawkins', 2222, 4, ['value' => 'Inactive', 'css' => 'bg-gray-100 text-gray-800'], '17/02/2023', 'En', '', ['Australian Capital Territory', 'Road STIRLING', '24 Monteagle Road STIRLING ACT', '2611'], 'Dawkins Co', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'US'], '37.214.25.177', 'US', 0),
            new UsersController(444, 'tyson@gmail.com', 'Neil deGrass Tyson', 99.99, 2, ['value' => 'Closed', 'css' => 'bg-gray-100 text-gray-800'], '17/02/2023', 'En', '+1 234 567-89-00', ['United States', 'Main st', 'New-York', '12345'], 'Haydens Planetarium', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'US'], '37.214.25.177', 'US', 1),
            new UsersController(555, 'sapolsky@stanford.com', 'Robert Sapolsky', 1234, 8, ['value' => 'Pending', 'css' => 'bg-yellow-100 text-yellow-800'], '17/02/2023', 'En', '+44 235 42-31-64', ['England', 'London', 'Baker st, 221B', '38752'], 'Stanford University', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'GB'], '37.214.25.177', 'GB', 0),
        ];
    }

    public static function navigationTabs() {
        $tabs = [
            ['eng' => 'overview', 'rus' => 'Обзор', 'val' => 0],
            ['eng' => 'profile', 'rus' => 'Профиль', 'val' => 0],
            ['eng' => 'services', 'rus' => 'Услуги', 'val' => 0],
            ['eng' => 'invoices', 'rus' => 'Инвойсы', 'val' => 1],
            ['eng' => 'tickets', 'rus' => 'Тикеты', 'val' => 0],
            ['eng' => 'credits', 'rus' => 'Кредиты', 'val' => 99.5],
            ['eng' => 'transactions', 'rus' => 'Транзакции', 'val' => 0],
            ['eng' => 'emails', 'rus' => 'Письма', 'val' => 3],
            ['eng' => 'notes', 'rus' => 'Заметки', 'val' => 0],
        ];

        return $tabs;
    }

    public static function ClientEmails() {
        $list = [
            'user_id' => 333,
            'emails' => [
                ['dept' => 'Служба поддержки', 'title' => 'Tincidunt diam ullamcorper eleifend nullam purus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ['dept' => 'Служба поддержки', 'title' => 'Sit odio quam turpis aliquam adipiscing elit adipiscing sit.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ['dept' => 'Служба поддержки', 'title' => 'Ante molestie id vivamus vel a adipiscing quam arcu.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ['dept' => 'Служба поддержки', 'title' => 'Feugiat enim tincidunt habitant integer nulla senectus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ['dept' => 'Служба поддержки', 'title' => 'Laoreet vitae amet tellus fusce morbi dictumst dignissim.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ['dept' => 'Служба поддержки', 'title' => 'Facilisis tortor egestas aliquam elementum.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
            ],
        ];

        return $list;
    }
}