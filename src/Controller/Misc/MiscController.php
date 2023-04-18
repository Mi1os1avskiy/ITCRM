<?php

namespace App\Controller\Misc;

class MiscController
{
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
}