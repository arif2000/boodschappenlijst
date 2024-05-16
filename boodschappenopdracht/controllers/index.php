<?php

$groceries = $db->query("SELECT * FROM groceries");

include('views/index.view.php');
?>