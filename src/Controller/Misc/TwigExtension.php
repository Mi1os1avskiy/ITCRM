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
            new TwigFunction('navTabs', [$this, 'profileNavigation']),
            new TwigFunction('answers', [$this, 'preparedAnswers']),
            new TwigFunction('userData', [$this, 'userData']),
            new TwigFunction('userID', [$this, 'getUserID']),
            new TwigFunction('payments', [$this, 'paymentMethods']),
            new TwigFunction('dump', [$this, 'getDump'])
        ];
    }

    public function profileNavigation() {
        return UsersController::navigationTabs();
    }

    public function userData() {
        return UsersController::CreateTable();
    }

    public static function getUserID()
    {
        static $getID;

        if($_GET) {
            $getID = current($_GET);
        }

        return $getID ?: 111;
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
}