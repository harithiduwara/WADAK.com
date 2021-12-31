<?php
class sp_model extends wadak{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAllrecords()
    {
        return $this->wadak->select("SELECT*FROM `service_provider` ORDER BY id DESC");
    }
    public function viewOnerecord($id)
    {
        return $this->wadak->select("SELECT*FROM ORDER `service_provider` WHERE id='".$id."' LIMIT 1");
    }
}