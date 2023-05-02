<?php

namespace App\Controller\Misc;

class StatusesController
{
    public static function clientServiceStatuses() {
        $list = [
            ['val' => 'Active', 'color' => 'green'],
            ['val' => 'Pending', 'color' => 'yellow'],
            ['val' => 'Terminated', 'color' => 'red'],
            ['val' => 'Cancelled', 'color' => 'gray'],
        ];

        return $list;
    }

    public static function clientStatuses() {
        $list = [
            ['val' => 'Active', 'color' => 'green'],
            ['val' => 'Pending', 'color' => 'yellow'],
            ['val' => 'Inactive', 'color' => 'gray'],
            ['val' => 'Closed', 'color' => 'gray'],
        ];

        return $list;
    }

    public static function transactionStatuses() {
        $list = [
            ['val' => 'Частично засчитана', 'color' => 'red'],
            ['val' => 'Не засчитана', 'color' => 'red'],
            ['val' => 'Мошенническая', 'color' => 'red'],
            ['val' => 'Возвращена', 'color' => 'orange'],
            ['val' => 'Заморожена', 'color' => 'blue'],
            ['val' => 'В ожидании', 'color' => 'blue'],
            ['val' => 'Засчитана', 'color' => 'green'],
            ['val' => 'Игнорируется', 'color' => 'gray'],
            ['val' => 'Отменена', 'color' => 'gray'],
        ];

        return $list;
    }

    public static function invoiceStatuses() {
        $list = [
            ['val' => 'Pending', 'color' => 'red'],
            ['val' => 'Paid', 'color' => 'green'],
            ['val' => 'Cancelled', 'color' => 'gray'],
            ['val' => 'Overdue', 'color' => 'gray'],
            ['val' => 'Draft', 'color' => 'purple'],
        ];

        return $list;
    }

    public static function ticketStatuses() {
        $list = [
            ['val' => 'Important!', 'color' => 'red'],
            ['val' => 'Open', 'color' => 'red'],
            ['val' => 'In progress', 'color' => 'orange'],
            ['val' => 'Answered', 'color' => 'yellow'],
            ['val' => 'Customer reply', 'color' => 'yellow'],
            ['val' => 'Waiting for manager', 'color' => 'yellow'],
            ['val' => 'On hold', 'color' => 'blue'],
            ['val' => 'Closed', 'color' => 'green'],
        ];

        return $list;
    }

    public static function orderStatuses() {
        $list = [
            ['val' => 'Pending', 'color' => 'red'],
            ['val' => 'Rejected', 'color' => 'red'],
            ['val' => 'Ordered', 'color' => 'yellow'],
            ['val' => 'Active', 'color' => 'green'],
            ['val' => 'Suspended', 'color' => 'blue'],
            ['val' => 'Terminated', 'color' => 'red'],
        ];

        return $list;
    }
}