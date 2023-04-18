<?php

namespace App\Controller\Data;

class EmailsController
{
    public static function allEmails() {
        $list = [
            ['dept' => 'Служба поддержки', 'title' => 'Tincidunt diam ullamcorper eleifend nullam purus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
            ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
            ['dept' => 'Служба поддержки', 'title' => 'Ultrices nisl eget posuere vitae amet ultricies sagittis.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
            ['dept' => 'Служба поддержки', 'title' => 'Sit odio quam turpis aliquam adipiscing elit adipiscing sit.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
            ['dept' => 'Служба поддержки', 'title' => 'Ante molestie id vivamus vel a adipiscing quam arcu.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
            ['dept' => 'Служба поддержки', 'title' => 'Feugiat enim tincidunt habitant integer nulla senectus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
            ['dept' => 'Служба поддержки', 'title' => 'Laoreet vitae amet tellus fusce morbi dictumst dignissim.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
            ['dept' => 'Служба поддержки', 'title' => 'Facilisis tortor egestas aliquam elementum.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK'],
        ];

        return $list;
    }
}