<?php

class Connexion
{
    protected function dbConnect(){
        //Modif lors de l'implémentation sur serv
        $db = new \PDO('mysql:host=localhost;dbname=portfoliomorgan;charset=utf8', 'root', '');
        return $db;
    }
}