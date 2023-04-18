<?php

namespace App\Controller\Data;

class NotesController
{
    public static function allNotes() {
        $list = [
            ['status' => 1, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Ipsum lacus id gravida venenatis velit cursus aliquet eros. Massa at habitant potenti senectus id pretium faucibus. Odio libero placerat lectus lectus eget tortor scelerisque tincidunt. Sed ultricies consequat interdum vel mauris nunc. Orci fermentum consequat semper tortor. Enim adipiscing donec lobortis elit libero vivamus. Leo magna donec gravida dictum platea. Aliquam vehicula augue cursus pharetra nunc praesent ornare.', 'Amet nunc sit eget ultricies massa et. Eget nulla velit rutrum gravida scelerisque eget duis nibh auctor. Nunc cras nisl id in. Blandit dictumst fringilla dignissim nulla diam faucibus dictum. Gravida potenti egestas neque non nulla ultricies venenatis risus. Bibendum sagittis at amet gravida dolor duis volutpat cras lacus. Et in aliquet aliquet sit feugiat enim aliquet. Sit enim imperdiet volutpat dolor bibendum. Amet vitae egestas lacus nunc. Nec fringilla mauris feugiat lacinia leo amet.'], 'file' => 'Image.png'],
            ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Amet ac lorem arcu quisque. Purus blandit elementum a interdum et. Cursus dapibus consectetur eget odio suspendisse eget viverra et. Facilisis et turpis lorem varius a. Fames id egestas vulputate libero odio turpis donec dolor lectus.', 'Lobortis aenean odio non nisl id donec. Hendrerit sapien nisl sit vitae facilisis lacinia lobortis lectus. Montes id ligula elementum velit fames. Amet varius turpis ac in ac est adipiscing. Neque non pulvinar amet diam dui. Elit nec tempor molestie ut proin orci quam ultrices. Nascetur ipsum lobortis cras rutrum nunc fermentum sem integer gravida.', 'Cras eu maecenas sollicitudin sapien in. Elit urna lobortis donec phasellus vel sed. A quis tincidunt eget metus et sed lacus elementum venenatis. Nunc tempus in porta massa. Et mattis aliquam eu ullamcorper ac feugiat fringilla feugiat. Enim sed amet nunc orci integer egestas bibendum cursus.'], 'file' => ''],
            ['status' => 0, 'user' => 'Admin', 'date' => '17/02/2023', 'time' => '15:04', 'loc' => 'MSK', 'text' => ['Mattis fames rhoncus sodales elementum eu, purus quisque. Facilisi scelerisque sed sit neque amet, purus.'], 'file' => 'Document.doc'],
        ];

        return $list;
    }
}