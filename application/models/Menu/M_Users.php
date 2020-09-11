<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Users extends VS_Model {

    public function __construct() {
        parent::__construct();
        foreach ($_POST as $clave => $valor):
            $this->$clave = $valor;
        endforeach;
    }

    function get_users(){
    	$query = ("SELECT * FROM sys_users u INNER JOIN sys_roles r ON u.rol = r.id_roles");
        $result = $this->db->query($query);
        return $result->result();
    }

    function get_roles(){
    	$query = ("SELECT * FROM sys_roles");
        $result = $this->db->query($query);
        return $result->result();
    }

    function save(){
    	$data = array(
            "name"	=> $this->name,
            "user"	=> $this->user,
            "password"	=> md5('07'.$this->pass),
            "rol"	=> $this->rol,
            "id_status"	=> '1'
        );
        $this->db->insert("sys_users",$data);
        $rs = $this->db->insert_id();
    }

    function get_data_user(){
    	$query = ("SELECT * FROM sys_users u INNER JOIN sys_roles r ON u.rol = r.id_roles WHERE u.id_users = $this->id_user");
        $result = $this->db->query($query);
        return $result->result();
    }

    function update(){
    	$data = array(
		    "name"	=> $this->name,
		    "user"	=> $this->user,
		    "rol"	=> $this->rol
		);
		$this->db->where("id_users",$this->id_user);
		return $this->db->update("sys_users",$data);
    }

    function delete(){
    	$this->db->where("id_users",$this->id_user);
        return $this->db->delete("sys_users");
    }
}