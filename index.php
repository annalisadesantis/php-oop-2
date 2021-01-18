<?php

// includo i file dove sono definiti le classi con le varibili e i metodi
require_once 'User.php';
require_once 'Users.php';


echo '<h1>Carla</h1>';
// creo una nuova istanza della classe Users
$carla = new Users('Carletta', 'password1234');

// stampo l'username dell'istanza nella classe Users
echo '<p>Username: ' . $carla->getUsername() . '</p>';

// stampo la password dell'istanza nella classe Users
echo '<p>Password: ' . $carla->getpassword() . '</p>';

// stampo la password dell'istanza nella classe Users
echo '<p>Nationality: ' . $carla->nationality . '</p>';


try{
    $carla->setComment(-5);
}catch(Exception $e){
    echo 'Errore: ' . $e->getMessage();
}

$carla->setBonus();

var_dump($carla);


echo '<h1>Paolo</h1>';
// creo una nuova istanza della classe Users
$paolo = new Users('Pedro', '1234password', 'Spanish');

// stampo l'username dell'istanza nella classe Users
echo '<p>Username: ' . $paolo->getUsername() . '</p>';

// stampo la password dell'istanza nella classe Users
echo '<p>Password: ' . $paolo->getpassword() . '</p>';

// stampo la password dell'istanza nella classe Users
echo '<p>Nationality: ' . $paolo->nationality . '</p>';

try{
    $paolo->setComment(80);
}catch(Exception $e){
    echo 'Errore: ' . $e->getMessage();
}

$paolo->setBonus();


var_dump($paolo);



echo '<h1>Chiara</h1>';
// creo una nuova istanza della classe Users
$chiara = new Users('Chiaretta', 'password5678', 'Germany');

// stampo l'username dell'istanza nella classe Users
echo '<p>Username: ' . $chiara->getUsername() . '</p>';

// stampo la password dell'istanza nella classe Users
echo '<p>Password: ' . $chiara->getpassword() . '</p>';

// stampo la password dell'istanza nella classe Users
echo '<p>Nationality: ' . $chiara->nationality . '</p>';

try{
    $chiara->setComment(250);
}catch(Exception $e){
    echo 'Errore: ' . $e->getMessage();
}

$chiara->setBonus();

var_dump($chiara);




?>
