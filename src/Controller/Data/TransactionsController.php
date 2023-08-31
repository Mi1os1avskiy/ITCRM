<?php

namespace App\Controller\Data;

class TransactionsController
{
    public static function allTransactions() {
        $list = [
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 1, 'invoice' => '93913', 'client' => 'Leslie Alexander', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'refund' => 0, 'amount' => 99, 'status' => 'Засчитана', 'details' => ['name' => 'Deposit via Paysera: Payment for is*hosting: #2530', 'id' => 1]],
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 2, 'invoice' => '93913', 'client' => 'Floyd Miles', 'method' => 'Mastercard *1234', 'description' => 'Оплата инвойса с входящей транзакции', 'refund' => 0, 'amount' => 199, 'status' => 'Отменена', 'details' => ['name' => 'Deposit via Paysera: Payment for is*hosting: #2530', 'id' => 1]],
            ['id' => '', 'date' => '17/02/2023', 'invoice_exist' => 1, 'invoice_type' => 3, 'invoice' => '93913', 'client' => 'Cameron Williamson', 'method' => 'Coinpayments', 'description' => 'Инвойс 43983', 'refund' => 1, 'amount' => 99, 'status' => 'Мошенническая', 'details' => ['name' => 'Deposit via Paysera: Payment for is*hosting: #2530', 'id' => 1]],
            ['id' => '', 'date' => '17/02/2023', 'invoice_exist' => 1, 'invoice_type' => 4, 'invoice' => '93913', 'client' => 'sapien@mail.com', 'method' => 'payserra', 'description' => 'Инвойс 5691', 'refund' => 0, 'amount' => 34, 'status' => 'В ожидании', 'details' => ['name' => 'Deposit via Paysera: Payment for is*hosting: #2530', 'id' => 1]],
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 5, 'invoice' => '93913', 'client' => 'tortor_ut@mail.com', 'method' => 'VISA *3245', 'description' => 'Оплата инвойса с входящей транзакции', 'refund' => 0, 'amount' => 5, 'status' => 'Заморожена', 'details' => ['name' => 'Deposit via Paysera: Payment for is*hosting: #2530', 'id' => 1]],
            ['id' => 'ea3418d6-22fc-40e9-ae62-d8d759da8a1a', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 6, 'invoice' => '93913', 'client' => 'et_venenatis_tortor@mail.com', 'method' => 'Test Gateway', 'description' => 'Оплата инвойса с входящей транзакции', 'refund' => 0, 'amount' => 15, 'status' => 'Частично засчитана', 'details' => ['name' => 'Пополнение баланса', 'id' => 1]],
            ['id' => '2550-250', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 7, 'invoice' => '83372', 'client' => 'Jerome Bell', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'refund' => 0, 'amount' => 7, 'status' => 'Игнорируется', 'details' => ['name' => 'Рефанд', 'id' => 3]],
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 8, 'invoice' => '83372', 'client' => 'ultrices@mail.com', 'method' => 'webmoney (rh)', 'description' => 'Оплата инвойса с входящей транзакции', 'refund' => 0, 'amount' => 23, 'status' => 'Возвращена', 'details' => ['name' => 'Удаление кредита', 'id' => 3]],
            ['id' => 'TC09862324260957', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 3, 'invoice' => '', 'client' => 'vulputate@mail.com', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'refund' => 1, 'amount' => 1200, 'status' => 'Засчитана', 'details' => ['name' => 'Добавление кредита', 'id' => 2]],
            ['id' => '2550-250', 'date' => '17/02/2023', 'invoice_exist' => 0, 'invoice_type' => 1, 'invoice' => '', 'client' => 'Wade Warren', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'refund' => 0, 'amount' => 323, 'status' => 'Не засчитана', 'details' => ['name' => 'Deposit via Paysera: Payment for is*hosting: #2530', 'id' => 1]],
        ];

        return $list;
    }
}
