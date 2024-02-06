<?php

namespace App\Controller\Data;

class UsersController
{
    public $id;
    public $email;
    public $first_name;
	public $last_name;
    public $credit;
    public $services;
    public $status;
    public $created;
    public $lang;
    public $phone;
	public $country;
	public $state;
	public $city;
	public $address1;
    public $address2;
	public $zip;
	public $social;
    public $company;
	public $vat_percent;
	public $vat_number;
	public $violations;
	public $restrictions;
    public $last_log;
    public $ip;
    public $twofa;

    function __construct($id, $email, $first_name, $last_name, $credit, $services, $status, $created, $lang, $phone, $country, $state, $city, $address1, $address2, $zip, $social, $company, $vat_percent, $vat_number, $violations, $restrictions, $last_log, $ip, $twofa) {
        $this->id = $id;
        $this->email = $email;
        $this->first_name = $first_name;
		$this->last_name = $last_name;
        $this->credit = $credit;
        $this->services = $services;
        $this->status = $status;
        $this->created = $created;
        $this->lang = $lang;
        $this->phone = $phone;
		$this->country = $country;
		$this->state = $state;
		$this->city = $city;
        $this->address1 = $address1;
		$this->address2 = $address2;
		$this->zip = $zip;
		$this->social = $social;
		$this->company = $company;
        $this->vat_percent = $vat_percent;
		$this->vat_number = $vat_number;
		$this->violations = $violations;
		$this->restrictions = $restrictions;
        $this->last_log = $last_log;
        $this->ip = $ip;
        $this->twofa = $twofa;
    }

    public static function CreateTable() {
        return [
            new UsersController(
				'c203201',
				'test@test.test',
				'',
				'',
				350,
				3,
				'Active',
				['date' => 1688200838, 'ip' => '80.238.125.17', 'loc' => 'PL'],
				'RU',
				'',
				'Belarus',
				'',
				'Minsk',
				'',
				'',
				'',
				'',
				'VSh',
				12,
				'',
				3,
				['deposit' => 1, 'invoice' => 0, 'order' => 0],
				['date' => 1704317638, 'ip' => '37.214.25.177', 'loc' => 'BY'],
				'37.214.25.177',
				['enabled' => 1, 'restore' => 'HsxS-BCve-hoYo-PfWn-Wqvk']),
            new UsersController(
				'c203202',
				'miloslavskiy@tut.by',
				'Aleksandr',
				'Miloslavskiy',
				1200,
				1,
				'Inactive',
				['date' => 1687200838, 'ip' => '80.238.125.17', 'loc' => 'BY'],
				'RU',
				'+375 29 638-33-96',
				'Belarus',
				'',
				'Minsk',
				'Kollektornaya, 32-60',
				'',
				220004,
				'',
				'BrainQ',
				10,
				2462346,
				1,
				['deposit' => 1, 'invoice' => 0, 'order' => 1],
				['date' => 1705317638, 'ip' => '37.214.25.177', 'loc' => 'BY'],
				'37.214.25.177',
				['enabled' => 1, 'restore' => 'HsxS-BCve-hoYo-PfWn-Wqvk']),
            new UsersController(
				'c203203',
				'dawkins@mail.com',
				'Richard',
				'Dawkins',
				2222,
				4,
				'Inactive',
				['date' => 1686300838, 'ip' => '80.238.125.17', 'loc' => 'GB'],
				'EN',
				'+1 800 847-032-481',
				'England',
				'',
				'London',
				'Baker st, 221B',
				'',
				2611,
				'',
				'',
				15,
				'',
				0,
				['deposit' => 0, 'invoice' => 1, 'order' => 1],
				['date' => 1703317638, 'ip' => '37.214.25.177', 'loc' => 'GB'],
				'37.214.25.177',
				['enabled' => 0, 'restore' => '']),
            new UsersController(
				'c203204',
				'tyson@gmail.com',
				'Neil',
				'deGrass Tyson',
				99.99, 2,
				'Closed',
				['date' => 1689200838, 'ip' => '80.238.125.17', 'loc' => 'US'],
				'EN',
				'+1 234 567-89-00',
				'United States',
				'New-York',
				'New-York',
				'Main st 26',
				'',
				12345,
				'@degrass',
				'Haydens Planetarium',
				13,
				2346457,
				3,
				['deposit' => 0, 'invoice' => 0, 'order' => 0],
				['date' => 1702317638, 'ip' => '37.214.25.177', 'loc' => 'US'],
				'37.214.25.177',
				['enabled' => 1, 'restore' => 'HsxS-BCve-hoYo-PfWn-Wqvk']),
            new UsersController(
				'c203205',
				'sapolsky@stanford.com',
				'Robert',
				'Sapolsky',
				1234,
				8,
				'Blocked',
				['date' => 1685200838, 'ip' => '80.238.125.17', 'loc' => 'US'],
				'EN',
				'+44 235 42-31-64',
				'USA',
				'California',
				'Stanford',
				'Pacific Grove',
				'Redwood City',
				38752,
				'',
				'Stanford University',
				0,
				'',
				0,
				['deposit' => 0, 'invoice' => 1, 'order' => 0],
				['date' => 1701317638, 'ip' => '37.214.25.177', 'loc' => 'GB'],
				'37.214.25.177',
				['enabled' => 0, 'restore' => '']),
			new UsersController(
				'c203206',
				'massatincidunt@mail.com',
				'Jane',
				'Cooper',
				220,
				21,
				'Active',
				['date' => 1684200838, 'ip' => '80.238.125.17', 'loc' => 'US'],
				'EN',
				'+44 235 42-56-97',
				'USA',
				'Iowa',
				'Des Moines',
				'',
				'',
				'',
				'',
				'Google',
				7,
				34573457,
				1,
				['deposit' => 0, 'invoice' => 1, 'order' => 1],
				['date' => 1700317638, 'ip' => '53.634.25.132', 'loc' => 'US'],
				'53.634.25.132',
				['enabled' => 1, 'restore' => 'HsxS-BCve-hoYo-PfWn-Wqvk']),
			new UsersController(
				'c203207',
				'alex.jakson@gmail.com',
				'Alex',
				'Jackson',
				0,
				2,
				'Blocked',
				['date' => 1683200838, 'ip' => '80.238.125.17', 'loc' => 'ES'],
				'ES',
				'',
				'Estonia',
				'',
				'Tallin',
				'Viru tänav, 10140 Tallinn',
				'',
				10001,
				'@alex.jak',
				'',
				3,
				'',
				0,
				['deposit' => 1, 'invoice' => 1, 'order' => 1],
				['date' => 1703317638, 'ip' => '37.214.25.177', 'loc' => 'ES'],
				'37.214.25.177',
				['enabled' => 0, 'restore' => '']),
			new UsersController(
				'c203208',
				'arcuvivamus_fermentum@mail.com',
				'',
				'',
				15.35,
				6,
				'Inactive',
				['date' => 1682200838, 'ip' => '80.238.125.17', 'loc' => 'GB'],
				'EN',
				'+44 235 42-31-64',
				'England',
				'',
				'London',
				'Baker st, 221B',
				'',
				38752,
				'',
				'',
				12,
				6754762,
				0,
				['deposit' => 0, 'invoice' => 0, 'order' => 1],
				['date' => 1704317638, 'ip' => '37.214.25.177', 'loc' => 'GB'],
				'37.214.25.177',
				['enabled' => 0, 'restore' => '']),
			new UsersController(
				'c203209',
				'massatincidunt@mail.com',
				'Jane',
				'Cooper',
				83,
				3,
				'Active',
				['date' => 1681200838, 'ip' => '80.238.125.17', 'loc' => 'GB'],
				'EN',
				'+44 235 42-31-64',
				'England',
				'',
				'London',
				'Baker st, 221B',
				'',
				38752,
				'@cooper123',
				'',
				10,
				635757,
				2,
				['deposit' => 0, 'invoice' => 0, 'order' => 0],
				['date' => 1702317638, 'ip' => '37.214.25.177', 'loc' => 'GB'],
				'37.214.25.177',
				['enabled' => 0, 'restore' => '']),
			new UsersController(
				'c203210',
				'sapien@mail.com',
				'Jane',
				'Cooper',
				0,
				1,
				'Closed',
				['date' => 1680200838, 'ip' => '80.238.125.17', 'loc' => 'US'],
				'EN',
				'+44 235 42-31-64',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				12,
				623623456,
				1,
				['deposit' => 1, 'invoice' => 0, 'order' => 0],
				['date' => 1705317638, 'ip' => '37.214.25.177', 'loc' => 'US'],
				'37.214.25.177',
				['enabled' => 1, 'restore' => 'HsxS-BCve-hoYo-PfWn-Wqvk']),
        ];
    }

    public static function ClientsData() {
        $list = [
            ['id' => 'c203201',
                'logs' => [
                    ['ip' => '37.214.49.5', 'date' => '17/02/2023', 'time' => '17:30:02', 'loc' => 'BY'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE']
                ],
                'credits' => [
                    ['date' => '17/02/2023', 'time' => '17:30', 'country' => 'MSK', 'method' => 'Баланс', 'method_id' => '', 'user' => '', 'appointment_type' => 1, 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                    ['date' => '17/02/2023', 'time' => '17:30', 'country' => 'MSK', 'method' => '', 'method_id' => '', 'user' => '', 'appointment_type' => 1, 'appointment' => 'Custom trans 2208 by pavel_test', 'appointment_id' => '', 'amount_stat' => 'high', 'amount' => 19.99, 'description' => 'Оплата инвойса с баланса клиента'],
                    ['date' => '17/02/2023', 'time' => '17:30', 'country' => 'MSK', 'method' => 'Баланс', 'method_id' => '', 'user' => '', 'appointment_type' => 0, 'appointment' => 'Баланс', 'appointment_id' => '', 'amount_stat' => 'low', 'amount' => 200, 'description' => 'Credit to the balance from the transaction (balance)'],
                    ['date' => '17/02/2023', 'time' => '17:30', 'country' => 'MSK', 'method' => 'Инвойс', 'method_id' => '3984', 'user' => 'Admin', 'appointment_type' => 1, 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'normal', 'amount' => 50, 'description' => 'Оплата инвойса с входящей транзакции'],
					['date' => '17/02/2023', 'time' => '17:30', 'country' => 'MSK', 'method' => 'Баланс', 'method_id' => '', 'user' => '', 'appointment_type' => 1, 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Оплата инвойса с входящей транзакции'],
					['date' => '17/02/2023', 'time' => '17:30', 'country' => 'MSK', 'method' => 'Продление №253318 сервиса', 'method_id' => '6674', 'user' => '', 'appointment_type' => 1, 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Оплата инвойса с входящей транзакции'],
					['date' => '17/02/2023', 'time' => '17:30', 'country' => 'MSK', 'method' => 'Баланс', 'method_id' => '', 'user' => '', 'appointment_type' => 1, 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Частичный возврат средств с отмененного продления. k1 = 0.66304356167517'],
                    ['date' => '17/02/2023', 'time' => '17:30', 'country' => 'MSK', 'method' => 'Баланс', 'method_id' => '', 'user' => '', 'appointment_type' => 1, 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'low', 'amount' => 999.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                ],
                'emails' => [
                    ['dept' => 'Служба поддержки', 'title' => 'Tincidunt diam ullamcorper eleifend nullam purus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
                    ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 0],
                    ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
                    ['dept' => 'Служба поддержки', 'title' => 'Sit odio quam turpis aliquam adipiscing elit adipiscing sit.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
                    ['dept' => 'Служба поддержки', 'title' => 'Ante molestie id vivamus vel a adipiscing quam arcu.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 0],
                    ['dept' => 'Служба поддержки', 'title' => 'Feugiat enim tincidunt habitant integer nulla senectus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
                    ['dept' => 'Служба поддержки', 'title' => 'Laoreet vitae amet tellus fusce morbi dictumst dignissim.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
                    ['dept' => 'Служба поддержки', 'title' => 'Facilisis tortor egestas aliquam elementum.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
                ],
                'notes' => [
                    ['status' => 1, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Ipsum lacus id gravida venenatis velit cursus aliquet eros. Massa at habitant potenti senectus id pretium faucibus. Odio libero placerat lectus lectus eget tortor scelerisque tincidunt. Sed ultricies consequat interdum vel mauris nunc. Orci fermentum consequat semper tortor. Enim adipiscing donec lobortis elit libero vivamus. Leo magna donec gravida dictum platea. Aliquam vehicula augue cursus pharetra nunc praesent ornare.', 'Amet nunc sit eget ultricies massa et. Eget nulla velit rutrum gravida scelerisque eget duis nibh auctor. Nunc cras nisl id in. Blandit dictumst fringilla dignissim nulla diam faucibus dictum. Gravida potenti egestas neque non nulla ultricies venenatis risus. Bibendum sagittis at amet gravida dolor duis volutpat cras lacus. Et in aliquet aliquet sit feugiat enim aliquet. Sit enim imperdiet volutpat dolor bibendum. Amet vitae egestas lacus nunc. Nec fringilla mauris feugiat lacinia leo amet.'], 'file' => 'Image.png'],
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Amet ac lorem arcu quisque. Purus blandit elementum a interdum et. Cursus dapibus consectetur eget odio suspendisse eget viverra et. Facilisis et turpis lorem varius a. Fames id egestas vulputate libero odio turpis donec dolor lectus.', 'Lobortis aenean odio non nisl id donec. Hendrerit sapien nisl sit vitae facilisis lacinia lobortis lectus. Montes id ligula elementum velit fames. Amet varius turpis ac in ac est adipiscing. Neque non pulvinar amet diam dui. Elit nec tempor molestie ut proin orci quam ultrices. Nascetur ipsum lobortis cras rutrum nunc fermentum sem integer gravida.', 'Cras eu maecenas sollicitudin sapien in. Elit urna lobortis donec phasellus vel sed. A quis tincidunt eget metus et sed lacus elementum venenatis. Nunc tempus in porta massa. Et mattis aliquam eu ullamcorper ac feugiat fringilla feugiat. Enim sed amet nunc orci integer egestas bibendum cursus.'], 'file' => ''],
                    ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus.'], 'file' => 'Document.doc'],
                ]
            ],
            ['id' => 'c203202',
                'logs' => [
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE'],
                    ['ip' => '37.214.49.5', 'date' => '17/02/2023', 'time' => '17:30:02', 'loc' => 'BY'],
                    ['ip' => '192.168.1.3', 'date' => '02/02/2023', 'time' => '12:25:15', 'loc' => 'BY'],
                    ['ip' => '2a02:c7f:f64f:5700:b56e:3c00:586', 'date' => '28/01/2023', 'time' => '03:10:13', 'loc' => 'GE']
                ],
                'credits' => [
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'low', 'amount' => 9.99, 'description' => 'Оплата инвойса с входящей транзакции'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Баланс', 'appointment_id' => 0, 'amount_stat' => 'low', 'amount' => 200, 'description' => 'Credit to the balance from the transaction (balance)'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Custom', 'id' => '23202', 'user' => 'Admin', 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'normal', 'amount' => 50, 'description' => 'Оплата инвойса с входящей транзакии'],
                    ['date' => '17/02/2023', 'time' => '17:30:02', 'country' => 'MSK', 'method' => 'Баланс', 'id' => '', 'user' => '', 'appointment' => 'Инвойс', 'appointment_id' => 4833749, 'amount_stat' => 'low', 'amount' => 999.99, 'description' => 'Оплата инвойса с входящей транзакции'],
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
            ['id' => 'c203203',
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
            ['id' => 'c203204',
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
            ['id' => 'c203205',
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

	public static function duplicates() {
		$list = [
			['id' => '30045', 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'violations' => 1, 'balance' => 22, 'services' => 32, 'status' => 'Active', 'registered' => '17/02/2023'],
			['id' => '30045', 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'violations' => 2, 'balance' => 22, 'services' => 32, 'status' => 'Active', 'registered' => '17/02/2023'],
			['id' => '30045', 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'violations' => 3, 'balance' => 22, 'services' => 32, 'status' => 'Active', 'registered' => '17/02/2023'],
			['id' => '30045', 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'violations' => 0, 'balance' => 22, 'services' => 32, 'status' => 'Active', 'registered' => '17/02/2023'],
			['id' => '30045', 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'violations' => 3, 'balance' => 22, 'services' => 32, 'status' => 'Active', 'registered' => '17/02/2023'],
			['id' => '30045', 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'violations' => 1, 'balance' => 22, 'services' => 32, 'status' => 'Active', 'registered' => '17/02/2023'],
			['id' => '30045', 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'violations' => 0, 'balance' => 22, 'services' => 32, 'status' => 'Active', 'registered' => '17/02/2023'],
			['id' => '30045', 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'violations' => 0, 'balance' => 22, 'services' => 32, 'status' => 'Active', 'registered' => '17/02/2023'],
		];

		return $list;
	}
}
