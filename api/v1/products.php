<?php

    require_once '../inc/database.php';
    
    $query = "SELECT * FROM `products` ORDER BY `products`.`id` DESC";
    $result = mysql_query($query, $conn) or die("");
    
    $rawArray = array();
    
    if($result != null && !empty($result)){
        
        while ($row = mysql_fetch_array($result)) {
            $tempArray = array();
            $tempArray['id'] = $row['id'];
            $tempArray['name'] = $row['name'];
            $tempArray['category'] = $row['category'];
            $tempArray['product_serial'] = $row['product_serial'];
            $tempArray['color'] = $row['color'];
            $tempArray['price'] = $row['price'];
            $tempArray['thumbnail_name'] = $row['thumbnail_name'];
            $tempArray['image_name'] = $row['image_name'];
            $tempArray['description'] = $row['description'];
            
            array_push($rawArray, $tempArray);
            
        }
    }
    
    echo json_encode($rawArray);
?>