<?php

namespace App\Controller\Data;

class TransactionsController
{
    public static function allTransactions() {
        $list = [
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 1, 'invoice' => '34809234', 'client' => 'Leslie Alexander', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 99, 'status' => 'Засчитана', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 2, 'invoice' => '34809234', 'client' => 'Floyd Miles', 'method' => 'Mastercard *1234', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 199, 'status' => 'Отменена', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => '', 'date' => '17/02/2023', 'invoice_exist' => 1, 'invoice_type' => 3, 'invoice' => '43983', 'client' => 'Cameron Williamson', 'method' => 'Coinpayments', 'description' => 'Инвойс 43983', 'amount' => 99, 'status' => 'Мошенническая', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => '', 'date' => '17/02/2023', 'invoice_exist' => 1, 'invoice_type' => 4, 'invoice' => '5691', 'client' => 'sapien@mail.com', 'method' => 'payserra', 'description' => 'Инвойс 5691', 'amount' => 34, 'status' => 'В ожидании', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 5, 'invoice' => '34809234', 'client' => 'tortor_ut@mail.com', 'method' => 'VISA *3245', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 5, 'status' => 'Заморожена', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => 'ea3418d6-22fc-40e9-ae62-d8d759da8a1a', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 6, 'invoice' => '34809234', 'client' => 'et_venenatis_tortor@mail.com', 'method' => 'Test Gateway', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 15, 'status' => 'Частично засчитана', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => '2550-250', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 7, 'invoice' => '34809234', 'client' => 'Jerome Bell', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 7, 'status' => 'Игнорируется', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 8, 'invoice' => '34809234', 'client' => 'ultrices@mail.com', 'method' => 'webmoney (rh)', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 23, 'status' => 'Возвращена', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 3, 'invoice' => '34809234', 'client' => 'vulputate@mail.com', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 12000, 'status' => 'Засчитана', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
            ['id' => '2550-250', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 1, 'invoice' => '34809234', 'client' => 'Wade Warren', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 323, 'status' => 'Не засчитана', 'details' => 'Deposit via Paysera: Payment for is*hosting: #2530'],
        ];

        return $list;
    }
}
