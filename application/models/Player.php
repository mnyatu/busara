<?php

class Player extends CI_Model{
    
    public function add_entry($data = ""){
        
        if($data != null && !empty($data)){
           
            $this->db->insert("players", $data);
            
            return $this->db->insert_id();
        }
        
        return 0;
    }
}