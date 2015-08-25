<?php

    require_once 'config.php';

    $conn = mysql_connect(SERVER, USERNAME, PASSWORD) or die("error establishing a connection");
    $selected_db = mysql_select_db(DATABASE) or die("could not select the database:");
?>