<?php

	require_once '../inc/database.php';

     // decoding the json array
     $post = json_decode(file_get_contents("php://input"), true);

    // getting the information from the array
    // in the android example I've defined only one KEY. You can add more KEYS to your app

   $username = $post['username'];
   $password = $post['password'];

   $sql = "SELECT * FROM users WHERE email ='{$username}' AND password = '{$password}' ";

   $result = mysql_query($sql, $conn);

   if($result){

   		echo "success";
   } else{

   		echo "failure";
   }
?> 