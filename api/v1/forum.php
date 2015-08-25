<?php

    require_once '../inc/database.php';
    
    $query = "SELECT * FROM `forum` ORDER BY `forum`.`id` DESC";
    $result = mysql_query($query, $conn) or die("");
    
    $rawArray = array();
    
    if($result != null && !empty($result)){
        
        while ($row = mysql_fetch_array($result)) {
            $tempArray = array();
            $tempArray['id'] = $row['id'];
            $tempArray['topic_title'] = $row['topic_title'];
            $tempArray['created_by'] = $row['created_by'];
            $tempArray['created_on'] = $row['created_on'];
            
            array_push($rawArray, $tempArray);
            
        }
    }
    
    echo json_encode($rawArray);
?>