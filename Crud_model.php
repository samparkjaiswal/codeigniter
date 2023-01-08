<?php

class Crud_model extends CI_model 
{
    public function savedata($data)
    {
        $query=$this->db->insert('user',$data);
        return $query;
    }
}

?>