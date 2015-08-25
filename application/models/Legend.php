<?php

class Legend extends CI_Model{
    
    public function add_entry($data = ""){
        
        if($data != null && !empty($data)){
           
            $this->db->insert("legends", $data);
            
            return $this->db->insert_id();
        }
        
        return 0;
    }
}