<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends VS_Model {

    public function __construct() {
        parent::__construct();
        foreach ($_POST as $clave => $valor):
            $this->$clave = $valor;
        endforeach;
    }

    public function get_type_menu(){
        $query = ("SELECT * FROM sys_type_menu");
        $result = $this->db->query($query);
        return $result->result();
    }

    function get_menu_type(){
    	$query = ("SELECT * FROM sys_menu WHERE type IN(3,4)");
        $result = $this->db->query($query);
        return $result->result();
    }

    function get_icons(){
    	$query = ("SELECT * FROM sys_icons");
        $result = $this->db->query($query);
        return $result->result();
    }

    function data_menu(){
    	$query = ("SELECT * FROM sys_menu m JOIN sys_type_menu t ON m.type = t.id_type_menu JOIN sys_icons i ON m.icon = i.id_icon");
        $result = $this->db->query($query);
        return $result->result();	
    }

    function get_roles(){
    	$query = ("SELECT * FROM sys_roles");
        $result = $this->db->query($query);
        return $result->result();
    }

    function Save(){
    	$data = array(
            "title" => $this->title,
            "type"	=> $this->type,
            "url"	=> $this->url,
            "icon"	=> $this->icon
        );
        $this->db->insert("sys_menu",$data);
        $rs = $this->db->insert_id();

        if ($this->type == "1" || $this->type == "3") {
        	$data = array(
                "root" => $rs
            );

        }else{
        	$data = array(
                "root" => $this->father
            );
        }

        $this->db->where("id_menu",$rs);
        $up = $this->db->update("sys_menu",$data);

        $roles = $this->roles;
        if (count($roles) > 0) {
        	for ($i=0; $i < count($roles); $i++) { 
	        	$data = array(
		            "id_roles"	=> $roles[$i],
		            "id_menu"	=> $rs
		        );
		        $this->db->insert("sys_roles_menu",$data);
		        $this->db->insert_id();
        	}
        }
        return $up;
    }

    function get_data_edit(){
    	$query = ("SELECT * FROM sys_menu m JOIN sys_type_menu t ON m.type = t.id_type_menu JOIN sys_icons i ON m.icon = i.id_icon WHERE m.id_menu = $this->id_menu");
        $result = $this->db->query($query);
        return $result->result();
    }

    function get_rol_relations(){
        $query = ("SELECT * FROM sys_roles_menu r INNER JOIN sys_roles s ON r.id_roles = s.id_roles WHERE r.id_menu = $this->id_menu");
        $result = $this->db->query($query);
        return $result->result();
    }

    function update_menu(){
    	if ($this->type == "1") {
    		$data = array(
    			"title"	=> $this->title,
    			"type"	=> $this->type,
    			"url"	=> $this->url,
    			"icon"	=> $this->icon,
			    "root" => $this->id_menu,
			    "modified_by"	=> $this->session->IdUser
			);
    	}else{
    		if ($this->type == "3") {
    			$data = array(
				    "title"	=> $this->title,
	    			"type"	=> $this->type,
	    			"url"	=> $this->url,
	    			"icon"	=> $this->icon,
				    "modified_by"	=> $this->session->IdUser
				);
    		}else{
    			$data = array(
				    "title"	=> $this->title,
	    			"type"	=> $this->type,
	    			"url"	=> $this->url,
	    			"icon"	=> $this->icon,
	    			"root" => $this->father,
				    "modified_by"	=> $this->session->IdUser
				);
    		}
    		
    	}

		$this->db->where("id_menu",$this->id_menu);
		$up = $this->db->update("sys_menu",$data);

		$this->db->where("id_menu",$this->id_menu);
        $this->db->delete("sys_roles_menu");

        $roles = $this->roles;
		if (count($this->roles) > 0) {
        	for ($i=0; $i < count($this->roles); $i++) { 
	        	$data = array(
		            "id_roles"	=> $roles[$i],
		            "id_menu"	=> $this->id_menu
		        );
		        $this->db->insert("sys_roles_menu",$data);
		        $this->db->insert_id();
        	}
        }

        return $this->update_all_menu();
    }

    function update_all_menu(){
    	$query = ("SELECT * FROM sys_menu WHERE type IN(3,4)");
        $result = $this->db->query($query);
        foreach ($result->result() as $key => $value) {
        	$query2 = ("SELECT * FROM sys_menu WHERE root = $value->id_menu");
        	$data_vali = $this->db->query($query2);
        	if ($value->type == "3") {
        		$ifv = 1;
        	}else{
        		$ifv = 0;
        	}

        	if (count($data_vali->result()) == $ifv) {
        		$data = array(
				    "type"	=> '2'
				);
				$this->db->where("id_menu",$value->id_menu);
				$up = $this->db->update("sys_menu",$data);	
        	}
        }
    }

    function delete_menu(){
    	$this->db->where("id_menu",$this->id_menu);
        $this->db->delete("sys_roles_menu");

        $this->db->where("id_menu",$this->id_menu);
        $this->db->delete("sys_menu");
        return $this->update_all_menu();
    }
}
