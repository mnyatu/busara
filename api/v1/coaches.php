<?php

    require_once '../inc/database.php';
    
    $query = "SELECT * FROM `coaches` ORDER BY `coaches`.`id` DESC";
    $result = mysql_query($query, $conn) or die("");
    
    $rawArray = array();
    
    if($result != null && !empty($result)){
        
        while ($row = mysql_fetch_array($result)) {
            $tempArray = array();
            $tempArray['id'] = $row['id'];
            $tempArray['full_name'] = $row['full_name'];
            $tempArray['dob'] = $row['dob'];
            $tempArray['country_of_birth'] = $row['country_of_birth'];
            $tempArray['contract_date'] = $row['contract_date'];
            $tempArray['resign_date'] = $row['resign_date'];
            $tempArray['games_coached'] = $row['games_coached'];
            $tempArray['coach_thumbnail'] = $row['coach_thumbnail'];
            $tempArray['coach_image'] = $row['coach_image'];
            
            array_push($rawArray, $tempArray);
            
        }
    }
    
    echo json_encode($rawArray);
?>