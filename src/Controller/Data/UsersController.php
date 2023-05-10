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
            new UsersController(111, 'test@test.test', 'Lex Stark', 350,  3,  'Active', '17/02/2023', 'Ru', '', ['Belarus', 'Minsk'], 'VSh', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'BY'], '37.214.25.177', 'BY', 1),
            new UsersController(222, 'miloslavskiy@tut.by', 'Aleksandr Miloslavskiy', 1200, 1, 'Pending', '17/02/2023', 'Ru', '+375 29 638-33-96', ['Belarus', 'Minsk', 'Kollektornaya, 32-60', '220004'], 'BrainQ', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'BY'], '37.214.25.177', 'BY', 1),
            new UsersController(333, 'dawkins@mail.com', 'Richard Dawkins', 2222, 4, 'Inactive', '17/02/2023', 'En', '', ['Australian Capital Territory', 'Road STIRLING', '24 Monteagle Road STIRLING ACT', '2611'], 'Dawkins Co', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'US'], '37.214.25.177', 'US', 0),
            new UsersController(444, 'tyson@gmail.com', 'Neil deGrass Tyson', 99.99, 2, 'Closed', '17/02/2023', 'En', '+1 234 567-89-00', ['United States', 'Main st', 'New-York', '12345'], 'Haydens Planetarium', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'US'], '37.214.25.177', 'US', 1),
            new UsersController(555, 'sapolsky@stanford.com', 'Robert Sapolsky', 1234, 8, 'Pending', '17/02/2023', 'En', '+44 235 42-31-64', ['England', 'London', 'Baker st, 221B', '38752'], 'Stanford University', ['date' => '11/04/2023', 'time' => '14:21:32', 'ip' => '37.214.25.177', 'geo' => 'GB'], '37.214.25.177', 'GB', 0),
        ];
    }

    public static function ClientsData() {
        $list = [
            ['id' => 111,
                'logs' => [
                    ['ip' => '37.214.49.5', 'date' => '17/02/2023', 'time' => '17:30:02', 'loc' => 'BY'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE']
                ],
                'credits' => [
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'high', 'amount' => 19.99, 'description' => 'Оплата инвойса с баланса клиента'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Баланс', 'amount_stat' => 'low', 'amount' => 200, 'description' => 'Credit to the balance from the transaction (balance)'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Custom', 'id' => '23202', 'user' => 'Admin', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'normal', 'amount' => 50, 'description' => 'Оплата инвойса с входящей транзакии'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 999.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                ],
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
                'notes' => [
                    ['status' => 1, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Ipsum lacus id gravida venenatis velit cursus aliquet eros. Massa at habitant potenti senectus id pretium faucibus. Odio libero placerat lectus lectus eget tortor scelerisque tincidunt. Sed ultricies consequat interdum vel mauris nunc. Orci fermentum consequat semper tortor. Enim adipiscing donec lobortis elit libero vivamus. Leo magna donec gravida dictum platea. Aliquam vehicula augue cursus pharetra nunc praesent ornare.', 'Amet nunc sit eget ultricies massa et. Eget nulla velit rutrum gravida scelerisque eget duis nibh auctor. Nunc cras nisl id in. Blandit dictumst fringilla dignissim nulla diam faucibus dictum. Gravida potenti egestas neque non nulla ultricies venenatis risus. Bibendum sagittis at amet gravida dolor duis volutpat cras lacus. Et in aliquet aliquet sit feugiat enim aliquet. Sit enim imperdiet volutpat dolor bibendum. Amet vitae egestas lacus nunc. Nec fringilla mauris feugiat lacinia leo amet.'], 'file' => 'Image.png'],
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Amet ac lorem arcu quisque. Purus blandit elementum a interdum et. Cursus dapibus consectetur eget odio suspendisse eget viverra et. Facilisis et turpis lorem varius a. Fames id egestas vulputate libero odio turpis donec dolor lectus.', 'Lobortis aenean odio non nisl id donec. Hendrerit sapien nisl sit vitae facilisis lacinia lobortis lectus. Montes id ligula elementum velit fames. Amet varius turpis ac in ac est adipiscing. Neque non pulvinar amet diam dui. Elit nec tempor molestie ut proin orci quam ultrices. Nascetur ipsum lobortis cras rutrum nunc fermentum sem integer gravida.', 'Cras eu maecenas sollicitudin sapien in. Elit urna lobortis donec phasellus vel sed. A quis tincidunt eget metus et sed lacus elementum venenatis. Nunc tempus in porta massa. Et mattis aliquam eu ullamcorper ac feugiat fringilla feugiat. Enim sed amet nunc orci integer egestas bibendum cursus.'], 'file' => ''],
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus.'], 'file' => 'Document.doc'],
                ]
            ],
            ['id' => 222,
                'logs' => [
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE'],
                    ['ip' => '37.214.49.5', 'date' => '17/02/2023', 'time' => '17:30:02', 'loc' => 'BY'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE']
                ],
                'credits' => [
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Баланс', 'amount_stat' => 'low', 'amount' => 200, 'description' => 'Credit to the balance from the transaction (balance)'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Custom', 'id' => '23202', 'user' => 'Admin', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'normal', 'amount' => 50, 'description' => 'Оплата инвойса с входящей транзакии'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 999.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                ],
                'emails' => [
                    ['dept' => 'Служба поддержки', 'title' => 'Tincidunt diam ullamcorper eleifend nullam purus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Laoreet vitae amet tellus fusce morbi dictumst dignissim.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Facilisis tortor egestas aliquam elementum.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ],
                'notes' => [
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Amet ac lorem arcu quisque. Purus blandit elementum a interdum et. Cursus dapibus consectetur eget odio suspendisse eget viverra et. Facilisis et turpis lorem varius a. Fames id egestas vulputate libero odio turpis donec dolor lectus.', 'Lobortis aenean odio non nisl id donec. Hendrerit sapien nisl sit vitae facilisis lacinia lobortis lectus. Montes id ligula elementum velit fames. Amet varius turpis ac in ac est adipiscing. Neque non pulvinar amet diam dui. Elit nec tempor molestie ut proin orci quam ultrices. Nascetur ipsum lobortis cras rutrum nunc fermentum sem integer gravida.', 'Cras eu maecenas sollicitudin sapien in. Elit urna lobortis donec phasellus vel sed. A quis tincidunt eget metus et sed lacus elementum venenatis. Nunc tempus in porta massa. Et mattis aliquam eu ullamcorper ac feugiat fringilla feugiat. Enim sed amet nunc orci integer egestas bibendum cursus.'], 'file' => ''],
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus.'], 'file' => 'Document.doc'],
                ]
            ],
            ['id' => 333,
                'logs' => [
                    ['ip' => '37.214.49.5', 'date' => '17/02/2023', 'time' => '17:30:02', 'loc' => 'BY'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE']
                ],
                'credits' => [
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'high', 'amount' => 19.99, 'description' => 'Оплата инвойса с баланса клиента'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Custom', 'id' => '23202', 'user' => 'Admin', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'normal', 'amount' => 50, 'description' => 'Оплата инвойса с входящей транзакии'],
                ],
                'emails' => [
                    ['dept' => 'Служба поддержки', 'title' => 'Tincidunt diam ullamcorper eleifend nullam purus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Facilisis tortor egestas aliquam elementum.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ],
                'notes' => [
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Amet ac lorem arcu quisque. Purus blandit elementum a interdum et. Cursus dapibus consectetur eget odio suspendisse eget viverra et. Facilisis et turpis lorem varius a. Fames id egestas vulputate libero odio turpis donec dolor lectus.', 'Lobortis aenean odio non nisl id donec. Hendrerit sapien nisl sit vitae facilisis lacinia lobortis lectus. Montes id ligula elementum velit fames. Amet varius turpis ac in ac est adipiscing. Neque non pulvinar amet diam dui. Elit nec tempor molestie ut proin orci quam ultrices. Nascetur ipsum lobortis cras rutrum nunc fermentum sem integer gravida.', 'Cras eu maecenas sollicitudin sapien in. Elit urna lobortis donec phasellus vel sed. A quis tincidunt eget metus et sed lacus elementum venenatis. Nunc tempus in porta massa. Et mattis aliquam eu ullamcorper ac feugiat fringilla feugiat. Enim sed amet nunc orci integer egestas bibendum cursus.'], 'file' => ''],
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus.'], 'file' => 'Document.doc'],
                ]
            ],
            ['id' => 444,
                'logs' => [
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE']
                ],
                'credits' => [
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'high', 'amount' => 19.99, 'description' => 'Оплата инвойса с баланса клиента'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Баланс', 'amount_stat' => 'low', 'amount' => 200, 'description' => 'Credit to the balance from the transaction (balance)'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 999.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                ],
                'emails' => [
                    ['dept' => 'Служба поддержки', 'title' => 'Tincidunt diam ullamcorper eleifend nullam purus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Sit odio quam turpis aliquam adipiscing elit adipiscing sit.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Ante molestie id vivamus vel a adipiscing quam arcu.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ],
                'notes' => [
                    ['status' => 1, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Ipsum lacus id gravida venenatis velit cursus aliquet eros. Massa at habitant potenti senectus id pretium faucibus. Odio libero placerat lectus lectus eget tortor scelerisque tincidunt. Sed ultricies consequat interdum vel mauris nunc. Orci fermentum consequat semper tortor. Enim adipiscing donec lobortis elit libero vivamus. Leo magna donec gravida dictum platea. Aliquam vehicula augue cursus pharetra nunc praesent ornare.', 'Amet nunc sit eget ultricies massa et. Eget nulla velit rutrum gravida scelerisque eget duis nibh auctor. Nunc cras nisl id in. Blandit dictumst fringilla dignissim nulla diam faucibus dictum. Gravida potenti egestas neque non nulla ultricies venenatis risus. Bibendum sagittis at amet gravida dolor duis volutpat cras lacus. Et in aliquet aliquet sit feugiat enim aliquet. Sit enim imperdiet volutpat dolor bibendum. Amet vitae egestas lacus nunc. Nec fringilla mauris feugiat lacinia leo amet.'], 'file' => 'Image.png'],
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus.'], 'file' => 'Document.doc'],
                ]
            ],
            ['id' => 555,
                'logs' => [
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE'],
                    ['ip' => '37.214.49.5', 'date' => '17/02/2023', 'time' => '17:30:02', 'loc' => 'BY'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '17:34:15', 'loc' => 'BY']
                ],
                'credits' => [
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Custom', 'id' => '23202', 'user' => 'Admin', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'normal', 'amount' => 50, 'description' => 'Оплата инвойса с входящей транзакии'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс 4833749', 'amount_stat' => 'low', 'amount' => 999.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                ],
                'emails' => [
                    ['dept' => 'Служба поддержки', 'title' => 'Feugiat enim tincidunt habitant integer nulla senectus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Laoreet vitae amet tellus fusce morbi dictumst dignissim.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                    ['dept' => 'Служба поддержки', 'title' => 'Facilisis tortor egestas aliquam elementum.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
                ],
                'notes' => [
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Amet ac lorem arcu quisque. Purus blandit elementum a interdum et. Cursus dapibus consectetur eget odio suspendisse eget viverra et. Facilisis et turpis lorem varius a. Fames id egestas vulputate libero odio turpis donec dolor lectus.', 'Lobortis aenean odio non nisl id donec. Hendrerit sapien nisl sit vitae facilisis lacinia lobortis lectus. Montes id ligula elementum velit fames. Amet varius turpis ac in ac est adipiscing. Neque non pulvinar amet diam dui. Elit nec tempor molestie ut proin orci quam ultrices. Nascetur ipsum lobortis cras rutrum nunc fermentum sem integer gravida.', 'Cras eu maecenas sollicitudin sapien in. Elit urna lobortis donec phasellus vel sed. A quis tincidunt eget metus et sed lacus elementum venenatis. Nunc tempus in porta massa. Et mattis aliquam eu ullamcorper ac feugiat fringilla feugiat. Enim sed amet nunc orci integer egestas bibendum cursus.'], 'file' => ''],
                ]
            ]
        ];

        return $list;
    }
}