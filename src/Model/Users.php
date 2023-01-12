<?php

namespace App\Model;

use Symfony\Component\Security\Core\User\User;

class Users
{
    public $id;
    public $email;
    public $name;
    public $vip;
    public $credit;
    public $services;
    public $status;
    public $created;

    function __construct($id, $email, $name, $vip, $credit, $services, $status, $created) {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->vip = $vip;
        $this->credit = $credit;
        $this->services = $services;
        $this->status = $status;
        $this->created = $created;
    }

    public static function CreateTable() {
        return [
            new Users(111, 'test@test.test', 'Lex Stark', 1, 350,  3,  1, '30-11-2022'),
            new Users(222, 'miloslavskiy@tut.by', 'Aleksandr Miloslavskiy', 0, 1200, 1, 2, '01-12-2022'),
            new Users(333, 'dawkins@mail.com', 'Richard Dawkins', 0, 2222, 4, 3, '01-12-2022'),
            new Users(444, 'tyson@gmail.com', 'Neil deGrass Tyson', 0, 99.99, 2, 4, '01-12-2022'),
            new Users(555, 'sapolsky@stanford.com', 'Robert Sapolsky', 1, 1234, 1, 2, '01-12-2022'),
        ];
    }
}