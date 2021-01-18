<?php

// creo una classe User
class User{
    private $username;
    private $password;
    public $comment;
    public $bonus;

    // creo un costrutto con 2 parametri(username e password) per la creazione dell'istanza
    function __construct($_username = "", $_password = "") {
        $this->username = $_username;
        $this->password = $_password;
    }

    // creo un metodo per ricavare l'username
    public function getUsername() {
        return $this->username;
    }

    // creo un metodo per ricavare la password
    public function getpassword() {
        return $this->password;
    }

    // creo un metodo per settare i commenti
    public function setComment($_comment) {

        if(is_numeric($_comment) && $_comment > 0 && $_comment < 8000){
            $this->comment = $_comment;
        }else{
            throw new Exception('Non hai inserito un numero valido');
        }

    }

    // creo un metodo per restituire i commenti
    public function getComment() {
        return $this->comment;
    }

    // creo un metodo per settare i commenti
    public function setBonus() {

        if($this->comment > 100){
            $this->bonus  = 300;
        }else{
            $this->bonus  = 0;
        }

    }

}

?>
