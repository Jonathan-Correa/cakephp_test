<?php 
class Cake extends AppModel{

	public $validate = [
		"title" => [
			"rule" => "alphaNumeric",
			"message" => "solo numeros o letras"
		],
		"flavor" => [
			"rule" => "alphaNumeric",
			"message" => "solo numeros o letras"
		]
	];
}