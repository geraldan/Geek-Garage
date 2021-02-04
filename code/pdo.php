<?php
class Connection {
    //  conection de la base de donner
    function pdo(){
        return new PDO('mysql:host=localhost;dbname=geek_garage', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}}
