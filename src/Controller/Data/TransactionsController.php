<?php

namespace App\Controller\Data;

class TransactionsController
{
    public static function allTransactions() {
        $list = [
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 1, 'invoice' => '34809234', 'client' => 'Leslie Alexander', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 99, 'status' => 'Засчитана'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 2, 'invoice' => '34809234', 'client' => 'Floyd Miles', 'method' => 'Mastercard *1234', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 199, 'status' => 'Отменена'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 3, 'invoice' => '34809234', 'client' => 'Cameron Williamson', 'method' => 'Coinpayments', 'description' => 'Пополнение баланса', 'amount' => 99, 'status' => 'Мошенническая'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 4, 'invoice' => '34809234', 'client' => 'sapien@mail.com', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 34, 'status' => 'В ожидании'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 5, 'invoice' => '34809234', 'client' => 'tortor_ut@mail.com', 'method' => 'VISA *3245', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 5, 'status' => 'Заморожена'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 6, 'invoice' => '34809234', 'client' => 'et_venenatis_tortor@mail.com', 'method' => 'Test Gateway', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 15, 'status' => 'Частично засчитана'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 7, 'invoice' => '34809234', 'client' => 'Jerome Bell', 'method' => 'payserra', 'description' => 'Инвойс #5691', 'amount' => 7, 'status' => 'Игнорируется'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 8, 'invoice' => '34809234', 'client' => 'ultrices@mail.com', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 23, 'status' => 'Возвращена'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 3, 'invoice' => '34809234', 'client' => 'vulputate@mail.com', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 12000, 'status' => 'Засчитана'],
            ['id' => '2378-1234', 'date' => '12/22/2023', 'invoice_type' => 1, 'invoice' => '34809234', 'client' => 'Wade Warren', 'method' => 'payserra', 'description' => 'Оплата инвойса с входящей транзакции', 'amount' => 323, 'status' => 'Не засчитана'],
        ];

        return $list;
    }
}