<?php

	require_once '../inc/database.php';

     // decoding the json array
     $post = json_decode(file_get_contents("php://input"), true);

    // getting the information from the array
    // in the android example I've defined only one KEY. You can add more KEYS to your app

   $username = $post['username'];
   $email = $post['email'];
   $phone_number = $post['phone_number'];
   $password = $post['password'];

   $sql = "INSERT INTO users VALUES(0, '{$username}', '{$email}', '{$phone_number}', '{$password}')";

   $result = mysql_query($sql, $conn);

   if($result){

   		echo "success";
   } else{

   		echo "failure";
   }
?> 