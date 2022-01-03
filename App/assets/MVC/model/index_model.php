<?php

class Index_Model extends Model{
    public function __construct(){
        parent:: __construct();
    }
    public function getAllrecords(){
        return $this->db->select("SELECT * from 'mvc' order by id DESC");
    }
    public function submit_index($data){
        $this->db->insert('mvc', $data);
    }
}
