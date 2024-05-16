<?php

function urlIs($url){
    return ($url === $_SERVER["REQUEST_URI"]);
};

function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit();
}