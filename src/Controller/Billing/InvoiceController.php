<?php
namespace App\Controller\Billing;

class Invoices
{
    public static function invoiceData()
    {
        $data = [
            'invoice_id' => '0983248',
            'invoice_status' => 'Draft',
            'invoice_user' => 'Lex Stark',
            'invoice_date' => '10/10/2023',
            'invoice_time' => '23:59',
            'invoice_title' => 'Non tristique diam risus nullam congue venenatis. Cursus commodo id nulla nunc neque adipiscing pulvinar sed maecenas. Elit cras amet tempus malesuada phasellus nec tortor convallis eu.',
            'invoice_discount' => 0
        ];

        return $data;
    }

    public static function allServices ()
    {
        $services = [
            'service_1' => [
                'title' => '#098934 VPS - Lite SSD (NL)',
                'amount' => '5.50',
                'description' => 'Fermentum amet id ac cras a. Et condimentum ornare eu aliquam tempus vel neque. Diam sagittis dignissim lectus blandit ut cursus. Metus non velit lorem massa faucibus risus. In nisi ultrices id in.'
            ],
            'service_2' => [
                'title' => '#098934 VPS - Lite SSD',
                'amount' => '10.00',
                'description' => 'Facilisis mi gravida imperdiet odio fringilla. Lorem molestie neque vitae accumsan quam lacus eget nibh molestie. '
            ]
        ];

        return $services;
    }

    public static function lastSaved ()
    {
        $saved = [
            'date' => '23/12/2023',
            'time' => '16:17:55',
            'loc' => 'MSK'
        ];

        return $saved;
    }

}