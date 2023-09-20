<?php

namespace App\Controller\Misc;

use App\Controller\Data\UsersController;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('answers', [$this, 'preparedAnswers']),
            new TwigFunction('allClients', [$this, 'allClients']),
            new TwigFunction('userID', [$this, 'getUserID']),
            new TwigFunction('payments', [$this, 'paymentMethods']),
            new TwigFunction('dump', [$this, 'getDump']),
            new TwigFunction('getGet', [$this, 'getGet']),
			new TwigFunction('test', [$this, 'testFunc']),
			new TwigFunction('post', [$this, 'getPost']),
			new TwigFunction('countryList', [$this, 'countryList'])
        ];
    }

	public function testFunc() {
		$a = [1, 3, 5, 7];
		$b = [2, 4, 7, 8];
		return dd(array_diff($a, $b));
	}

    public function allClients() {
        return UsersController::CreateTable();
    }

    public static function getUserID()
    {
        static $getID;

        if($_GET) {
            $getID = current($_GET);
        }

        return $getID ?: 'c203201';
    }

    public static function getGet() {
        static $get;

        if($_GET) {
            $get = current($_GET);
        }

        return $get;
    }

	public static function getPost() {
		static $post;

		if($_POST) {
			$post = current($_POST);
		}

		return $post;
	}

    public static function getDump() {
        return dd($_GET);
    }

    public static function paymentMethods() {
        $list = [
            'balance',
            'payssionwebmoney',
            'interkassa', 'payssionqiwi',
            'capitalist',
            'payssionunionpay',
            'payssionboletobr',
            'payssiondotpaypl',
            'payssionalipaycn',
            'payssionidealnl',
            'testgw',
            'payssion_test',
            'advcash',
            'stripe',
            'paxum',
            'payeer',
            'coingate',
            'tinkoff',
            'lava',
            'coinpayments',
            'webmoney',
            'cryptomus'
        ];

        return $list;
    }

    public static function preparedAnswers() {
        $list = [
            ['Нарушения' => ['BREIN', 'SMTP KYC', 'Благодарим за решение проблемы', 'Жалоба на сервер', 'Разблокировка в случае серьёзных жалоб / KYC', 'Требуется верификация для разблокировки ВПС']],
            ['IP адреса' => ['192.168.1.1', '192.168.1.2', '192.168.1.3', '192.168.1.4']],
            ['SSL сертификаты' => ['Item 1', 'Item 2', 'Item 3', 'Item 4']],
        ];

        $list2 = [
            ['level1' => 'Нарушения', 'level2' => ['BREIN', 'SMTP KYC', 'Благодарим за решение проблемы', 'Жалоба на сервер', 'Разблокировка в случае серьёзных жалоб / KYC', 'Требуется верификация для разблокировки ВПС']],
            ['level1' => 'IP адреса', 'level2' => ['192.168.1.1', '192.168.1.2', '192.168.1.3', '192.168.1.4']],
            ['level1' => 'SSL сертификаты', 'level2' => ['Item 1', 'Item 2', 'Item 3', 'Item 4']],
            ['level1' => 'Биллинг', 'level2' => ['Item 1', 'Item 2', 'Item 3', 'Item 4']],
            ['level1' => 'Бухгалтерия', 'level2' => ['Item 1', 'Item 2', 'Item 3', 'Item 4']],
            ['level1' => 'Верификация', 'level2' => ['Item 1', 'Item 2', 'Item 3', 'Item 4']],
            ['level1' => 'Вопросы по заказу', 'level2' => ['Item 1', 'Item 2', 'Item 3', 'Item 4']],
            ['level1' => 'Партнёрская программа', 'level2' => ['Item 1', 'Item 2', 'Item 3', 'Item 4']],
            ['level1' => 'Уведомления', 'level2' => ['Item 1', 'Item 2', 'Item 3', 'Item 4']],
        ];

        return $list;
    }

	public static function countryList() {
		$list = [
			'Афганистан',
			'Албания',
			'Антарктика',
			'Алжир',
			'Американское Самоа',
			'Андора',
			'Ангола',
			'Антигуа и Барбуда',
			'Азербайджан',
			'Аргентина',
			'Австралия',
			'Австрия',
			'Багамские Острова',
			'Бахрейн',
			'Бангладеш',
			'Армения',
			'Барбадос',
			'Бельгия',
			'Бермудские Острова',
			'Бутан',
			'Боливия',
			'Босния и Герцеговина',
			'Ботсвана',
			'Остров Буве',
			'Бразилия',
			'Белиз',
			'Британская территория в Индийском океане',
			'Соломоновы Острова',
			'Британские Виргинские острова',
			'Бруней',
			'Болгария',
			'Мьянма',
			'Бурунди',
			'Белоруссия',
			'Камбоджа',
			'Камерун',
			'Канада',
			'Кабо-Верде',
			'Каймановы острова',
			'Центральноафриканская Республика',
			'Шри-Ланка',
			'Чад',
			'Чили',
			'Китайская Народная Республика',
			'Остров Рождества',
			'Кокосовые острова',
			'Колумбия',
			'Коморы',
			'Майотта',
			'Республика Конго',
			'Демократическая Республика Конго',
			'Острова Кука',
			'Коста-Рика',
			'Хорватия',
			'Куба',
			'Кипр',
			'Чехия',
			'Бенин',
			'Дания',
			'Доминика',
			'Доминиканская Республика',
			'Эквадор',
			'Сальвадор',
			'Экваториальная Гвинея',
			'Эфиопия',
			'Эритрея',
			'Эстония',
			'Фарерские острова',
			'Фолклендские острова',
			'Южная Георгия и Южные Сандвичевы острова',
			'Фиджи',
			'Финляндия',
			'Аландские острова',
			'Франция',
			'Французская Гвиана',
			'Французская Полинезия',
			'Французские Южные и Антарктические территории',
			'Джибути',
			'Габон',
			'Грузия',
			'Гамбия',
			'Палестина',
			'Германия',
			'Гана',
			'Гибралтар',
			'Кирибати',
			'Греция',
			'Гренландия',
			'Гренада',
			'Гваделупа',
			'Гуам',
			'Гватемала',
			'Гвинея',
			'Гайана',
			'Республика Гаити',
			'Остров Херд и острова Макдональд',
			'Ватикан',
			'Гондурас',
			'Гонконг',
			'Венгрия',
			'Исландия',
			'Индия',
			'Индонезия',
			'Иран',
			'Ирак',
			'Ирландия',
			'Израиль',
			'Италия',
			'Кот-д’Ивуар',
			'Ямайка',
			'Япония',
			'Казахстан',
			'Иордания',
			'Кения',
			'КНДР',
			'Республика Корея',
			'Кувейт',
			'Киргизия',
			'Лаос',
			'Ливан',
			'Лесото',
			'Латвия',
			'Либерия',
			'Ливия',
			'Лихтенштейн',
			'Литва',
			'Люксембург',
			'Макао',
			'Мадагаскар',
			'Малави',
			'Малайзия',
			'Мальдивы',
			'Мали',
			'Мальта',
			'Мартиника',
			'Мавритания',
			'Маврикий',
			'Мексика',
			'Монако',
			'Монголия',
			'Молдавия',
			'Черногория',
			'Монтсеррат',
			'Марокко',
			'Мозамбик',
			'Оман',
			'Намибия',
			'Науру',
			'Непал',
			'Нидерланды',
			'Кюрасао',
			'Аруба',
			'Синт-Мартен',
			'Бонэйр, Синт-Эстатиус и Саба',
			'Новая Каледония',
			'Вануату',
			'Новая Зеландия',
			'Никарагуа',
			'Нигер',
			'Нигерия',
			'Ниуэ',
			'Норфолк',
			'Норвегия',
			'Северные Марианские острова',
			'Внешние малые острова США',
			'Микронезия',
			'Маршалловы Острова',
			'Палау',
			'Пакистан',
			'Панама',
			'Папуа — Новая Гвинея',
			'Парагвай',
			'Перу',
			'Филиппины',
			'Острова Питкэрн',
			'Польша',
			'Португалия',
			'Гвинея-Бисау',
			'Восточный Тимор',
			'Пуэрто-Рико',
			'Катар',
			'Реюньон',
			'Румыния',
			'Россия',
			'Руанда',
			'Сен-Бартелеми',
			'Острова Святой Елены, Вознесения и Тристан-да-Кунья',
			'Сент-Китс и Невис',
			'Ангилья',
			'Сент-Люсия',
			'Сен-Мартен (Франция)',
			'Сен-Пьер и Микелон',
			'Сент-Винсент и Гренадины',
			'Сан-Марино',
			'Сан-Томе и Принсипи',
			'Саудовская Аравия',
			'Сенегал',
			'Сербия',
			'Сейшельские Острова',
			'Сьерра-Леоне',
			'Сингапур',
			'Словакия',
			'Словения',
			'Сомали',
			'Южно-Африканская Республика',
			'Зимбабве',
			'Испания',
			'Южный Судан',
			'Судан',
			'Западная Сахара',
			'Суринам',
			'Шпицберген и Ян-Майен',
			'Свазиленд',
			'Швеция',
			'Швейцария',
			'Сирия',
			'Таджикистан',
			'Таиланд',
			'Того',
			'Токелау',
			'Тонга',
			'Тринидад и Тобаго',
			'Объединённые Арабские Эмираты',
			'Тунис',
			'Турция',
			'Туркмения',
			'Теркс и Кайкос',
			'Тувалу',
			'Уганда',
			'Украина',
			'Республика Македония',
			'Египет',
			'Великобритания',
			'Гернси',
			'Джерси',
			'Остров Мэн',
			'Танзания',
			'Соединённые Штаты Америки',
			'Виргинские Острова',
			'Буркина-Фасо',
			'Уругвай',
			'Узбекистан',
			'Венесуэла',
			'Уоллис и Футуна',
			'Самоа',
			'Йемен',
			'Замбия',
		];

		return $list;
	}
}
