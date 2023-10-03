<?php

namespace App\Controller\Data;

class LettersController
{
	public static function allLetters() {
		$list = [
			['id' => '1', 'dept' => 'Служба поддержки', 'receiver' => 'acsem@mail.com', 'title' => 'Tincidunt diam ullamcorper eleifend nullam purus.', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
			['id' => '2', 'dept' => 'Служба поддержки', 'receiver' => 'tortor_ut@mail.com', 'title' => 'Faucibus nullam non sagittis ac', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 0],
			['id' => '3', 'dept' => 'Служба поддержки', 'receiver' => 'posuere@mail.com', 'title' => 'Quam sed dolor elementum in', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
			['id' => '4', 'dept' => 'Служба поддержки', 'receiver' => 'stiam_molestie@mail.com', 'title' => 'Penatibus morbi morbi gravida suspendisse', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
			['id' => '5', 'dept' => 'Служба поддержки', 'receiver' => 'acsem@mail.com', 'title' => 'Sed tortor dictumst lacinia velit', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
			['id' => '6', 'dept' => 'Служба поддержки', 'receiver' => 'nibh_consequat@mail.com', 'title' => 'Et molestie sapien quisque turpis', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
			['id' => '7', 'dept' => 'Служба поддержки', 'receiver' => 'ulla_ullamcorper@mail.com', 'title' => 'Non egestas pellentesque faucibus pellentesque', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 0],
			['id' => '8', 'dept' => 'Служба поддержки', 'receiver' => 'arcuvivamus_fermentum@mail.com', 'title' => 'Neque non eget dolor tristique', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
			['id' => '9', 'dept' => 'Служба поддержки', 'receiver' => 'sapien@mail.com', 'title' => 'Est ultricies semper nec dictumst', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
			['id' => '10', 'dept' => 'Служба поддержки', 'receiver' => 'portafusce@mail.com', 'title' => 'Tristique mi vitae ornare id', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
			['id' => '11', 'dept' => 'Служба поддержки', 'receiver' => 'ultrices@mail.com', 'title' => 'Amet vulputate sem eu placeratv', 'date' => '17/02/2023', 'time' => '13:17', 'loc' => 'MSK', 'status' => 1],
		];

		return $list;
	}

	public static function oneLetter() {
		$letter = [
			'id' => 'c239833',
			'title' => 'Ваша услуга будет удалена через 24 часа',
			'date' => '18/04/2023',
			'time' => '21:00:41',
			'email' => 'Valariy-burdaleyba@mail.com',
			'client' => 'Valeriy Burdaleyba',
			'message' => 'Этим письмом мы информируем вас о том, что ваша неоплаченная услуга будет удалена в течении 24 часов и ее восстановление будет невозможно.',
			'service' => 'Lite - Linux',
			'ssdid' => 5236,
			'ip' => '1.1.1.1',
			'amount' => 5,
			'payto' => '06/04/2023',
			'cause' => 'Неоплата',
		];

		return $letter;
	}
}
