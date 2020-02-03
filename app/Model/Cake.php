<?php 
class Cake extends AppModel{

	public $validate = [
		"title" => [
			"rule" => "notBlank",
			"message" => "solo numeros o letras"
		],
		"flavor" => [
			"rule" => "notBlank",
			"message" => "solo numeros o letras"
		]
	];
}