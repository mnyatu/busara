<?php

    require_once '../inc/database.php';
    
    $query = "SELECT * FROM `legue_table` ORDER BY `legue_table`.`Pts` ASC ";
    $result = mysql_query($query, $conn) or die("");
    
    $rawArray = array();
    
    if($result != null && !empty($result)){
        
        while ($row = mysql_fetch_array($result)) {
            $tempArray = array();
            $tempArray['id'] = $row['id'];
            $tempArray['team'] = $row['team'];
            $tempArray['P'] = $row['P'];
            $tempArray['W'] = $row['W'];
            $tempArray['D'] = $row['D'];
            $tempArray['L'] = $row['L'];
            $tempArray['GF'] = $row['GF'];
            $tempArray['GA'] = $row['GA'];
            $tempArray['GD'] = $row['GD'];
            $tempArray['Pts'] = $row['Pts'];
            
            array_push($rawArray, $tempArray);
            
        }
    }
    
    echo json_encode($rawArray);
?>