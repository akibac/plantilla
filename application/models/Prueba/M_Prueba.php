<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Prueba extends VS_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_supplies(){
    	$result = $this->db->select("*")
                ->from("pro_supplies")
                ->get();
        return $result->result();
    }

    public function get_supplies_unit(){
    	$result = $this->db->select("*")
                ->from("pro_supplies")
                ->where("id_unit","1")
                ->get();
        return $result->result();
    }

}