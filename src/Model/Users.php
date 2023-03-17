<?php

namespace App\Model;

use Symfony\Component\Security\Core\User;

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
            new Users(111, 'test@test.test', 'Lex Stark', 1, 350,  3,  1, '17/02/2023'),
            new Users(222, 'miloslavskiy@tut.by', 'Aleksandr Miloslavskiy', 0, 1200, 1, 2, '17/02/2023'),
            new Users(333, 'dawkins@mail.com', 'Richard Dawkins', 0, 2222, 4, 3, '17/02/2023'),
            new Users(444, 'tyson@gmail.com', 'Neil deGrass Tyson', 0, 99.99, 2, 4, '17/02/2023'),
            new Users(555, 'sapolsky@stanford.com', 'Robert Sapolsky', 1, 1234, 8, 2, '17/02/2023'),
        ];
    }
}

class Parameters
{
    public $id;
    public $services;
    public $invoices;
    public $tickets;
    public $credits;
    public $emails;
    public $notes;

    function __construct($id, $services, $invoices, $tickets, $credits, $emails, $notes)
    {
        $this->id = $id;
        $this->services = $services;
        $this->invoices = $invoices;
        $this->tickets = $tickets;
        $this->credits = $credits;
        $this->emails = $emails;
        $this->notes = $notes;
    }

    public static function UserProfileMenu() {
        return [
            new Parameters(111, 0, 0, 1, 99.5, 0, 3),
            new Parameters(222, 2, 0, 1, 199.9, 0, 1),
            new Parameters(333, 0, 1, 0, 29.0, 4, 2),
            new Parameters(444, 1, 2, 0, -25, 2, 0),
            new Parameters(555, 0, 0, 3, 249.5, 0, 0),
        ];
    }
}