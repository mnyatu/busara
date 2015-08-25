<?php

    require_once '../inc/database.php';
    
    $query = "SELECT * FROM `news` ORDER BY `news`.`id` DESC";
    $result = mysql_query($query, $conn) or die("");
    
    $rawArray = array();
    
    if($result != null && !empty($result)){
        
        while ($row = mysql_fetch_array($result)) {
            $tempArray = array();
            $tempArray['id'] = $row['id'];
            $tempArray['title'] = $row['title'];
            $tempArray['news_thumbnail'] = $row['news_thumbnail'];
            $tempArray['news_image'] = $row['news_image'];
            $tempArray['body'] = $row['body'];
            $tempArray['created_on'] = $row['created_on'];
            
            array_push($rawArray, $tempArray);
            
        }
    }
    
    echo json_encode($rawArray);
?>