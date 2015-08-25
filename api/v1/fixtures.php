<?php

    require_once '../inc/database.php';
    
    $query = "SELECT * FROM `fixtures` ORDER BY `fixtures`.`id` DESC";
    $result = mysql_query($query, $conn) or die("");
    
    $rawArray = array();
    
    if($result != null && !empty($result)){
        
        while ($row = mysql_fetch_array($result)) {
            $tempArray = array();
            $tempArray['id'] = $row['id'];
            $tempArray['team_a_name'] = $row['team_a_name'];
            $tempArray['team_b_name'] = $row['team_b_name'];
            $tempArray['team_a_img'] = $row['team_a_img'];
            $tempArray['team_b_img'] = $row['team_b_img'];
            $tempArray['legue_name'] = $row['legue_name'];
            $tempArray['time_of_game'] = $row['time_of_game'];
            
            array_push($rawArray, $tempArray);
            
        }
    }
    
    echo json_encode($rawArray);
?>