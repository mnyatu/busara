<?php

    require_once '../inc/database.php';
    
    $query = "SELECT * FROM `legends` ORDER BY `legends`.`id` DESC";
    $result = mysql_query($query, $conn) or die("");
    
    $rawArray = array();
    
    if($result != null && !empty($result)){
        
        while ($row = mysql_fetch_array($result)) {
            $tempArray = array();
            $tempArray['id'] = $row['id'];
            $tempArray['name'] = $row['name'];
            $tempArray['player_position'] = $row['player_position'];
            $tempArray['total_goals'] = $row['total_goals'];
            $tempArray['appearances'] = $row['appearances'];
            $tempArray['games_played'] = $row['games_played'];
            $tempArray['legend_thumbnail'] = $row['legend_thumbnail'];
            $tempArray['legend_image'] = $row['legend_image'];
            $tempArray['description'] = $row['description'];
            $tempArray['joined_on'] = $row['joined_on'];
            $tempArray['last_game_date'] = $row['last_game_date'];
            
            array_push($rawArray, $tempArray);
            
        }
    }
    
    echo json_encode($rawArray);
?>