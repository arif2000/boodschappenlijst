<?php
    include('Database.php');
    include('functions.php');

    // TODO: gebruik include of require om je template aan te roepen

    $credentials = [
        "host" => "127.0.0.1",
        "dbname" => "arif_boodschappen",
        "username" => "root",
        "password" => "root"
    ];
    // TODO: include Database.php en maak database class instance aan met $credentials hier boven en
    // doe een query()

    $db = new Database($credentials["host"], $credentials["dbname"], $credentials["username"], $credentials["password"]);

    include('router.php');
?>