<?php 
class Cake extends AppModel{

	public $validate = [
		"name" => [
			"rule" => "alphaNumeric",
			"required" => true,
			"message" => "only alphanumeric characters"
		],
		"lastName" => [
			"rule" => "alphaNumeric",
			"required" => true
		]
	];
}