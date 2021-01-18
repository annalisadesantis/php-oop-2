<?php

// creo una classe erede di User
class Users extends User{
    public $nationality;

    function __construct($_username = "", $_password = "", $_nationality = "Italian") {

        parent::__construct($_username, $_password);
        $this->nationality = $_nationality;

    }

}


?>
