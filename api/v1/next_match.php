<?php

    require_once '../inc/database.php';
    
    $query = "SELECT * FROM next_match limit 1";
    $result = mysql_query($query, $conn) or die("");
    
    $rawArray = array();
    
    if($result != null && !empty($result)){
        
        while ($row = mysql_fetch_array($result)) {
            $tempArray = array();
            $tempArray['id'] = $row['id'];
            $tempArray['banner'] = $row['banner'];
            $tempArray['legue_name'] = $row['legue_name'];
            $tempArray['team_a_name'] = $row['team_a_name'];
            $tempArray['team_b_name'] = $row['team_b_name'];
            $tempArray['team_a_img'] = $row['team_a_img'];
            $tempArray['team_b_img'] = $row['team_b_img'];
            $tempArray['time'] = $row['time'];
            $tempArray['venue'] = $row['venue'];
            
            array_push($rawArray, $tempArray);
            
        }
    }
    
    echo json_encode($rawArray);
?>