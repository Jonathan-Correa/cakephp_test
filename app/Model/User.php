<?php
class User extends AppModel{

    public $validate = array(
        "username" => array(
            "rule" => "notBlank",
            "message" => "debes llenar ete campo"
        ),
        "password" => array(
            "required" => array(
                "rule" => array(
                    "notBlank",
                    "alphaNumeric"
                )
            )
        )
    );
}