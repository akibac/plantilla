<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Main extends VS_Model {

    public function __construct() {
        parent::__construct();
    }

    function ListMenu() {
        $rol = $this->session->IdRol;

        $result = $this->db->select("m.*, i.name as icn")
                ->from("sys_roles_menu t")
                ->join("sys_menu m", "t.id_menu = m.id_menu")
                ->join("sys_icons i", "m.icon = i.id_icon")
                ->where("t.id_roles", $rol)
                ->where("m.status", 1)
                ->where("type in (1,3)")
                ->order_by("title")
                ->get();

        $arrayRoot = array();
        $arrayFather = array();
        foreach ($result->result() as $m) {

            $arrayChilds = array();
            if ($m->type == 3) {
                $arrayChilds = $this->LoadChild($m->id_menu, $rol);
            }
            $arrayFather = $this->LoadFather($m->root);
            $arrayRoot[$m->id_menu] = array("id_menu" => $m->id_menu, "title" => $m->title, "url" => $m->url, "icon" => $m->icn, "type" => $m->type, "childs" => $arrayChilds, "father" => $arrayFather);
        }
        return $arrayRoot;
    }

    function LoadChild($father, $rol) {
        $array = array();

        $result_hijo = $this->db->select("m.*, i.name as icn")
                ->from("sys_roles_menu t")
                ->join("sys_menu m", "t.id_menu = m.id_menu")
                ->join("sys_icons i", "m.icon = i.id_icon")
                ->where("t.id_roles", $rol)
                ->where("m.root", $father)
                ->where("m.status", 1)
                ->where("type in (2,4)")
                ->order_by("m.title")
                ->get();

        $arrayFather = array();
        foreach ($result_hijo->result() as $h) {
            $arrayChilds = array();
            if ($h->type == 4 || $h->type == 2) {
                $arrayChilds = $this->LoadChild2($h->id_menu, $rol);
            }
            $arrayFather = $this->LoadFather($h->root);
            $array[$h->id_menu] = array("id_menu" => $h->id_menu, "title" => $h->title, "url" => $h->url, "icon" => $h->icn, "type" => $h->type, "childs" => $arrayChilds, "father" => $arrayFather);
        }
        return $array;
    }

    function LoadChild2($father, $rol) {
        $array = array();

        $result_hijo = $this->db->select("m.*, i.name as icn")
                ->from("sys_roles_menu t")
                ->join("sys_menu m", "t.id_menu = m.id_menu")
                ->join("sys_icons i", "m.icon = i.id_icon")
                ->where("t.id_roles", $rol)
                ->where("m.root", $father)
                ->where("m.status", 1)
                ->where("type in (2,4)")
                ->order_by("title","ASC")
                ->get();

        foreach ($result_hijo->result() as $h) {
            $arrayChilds = array();
            if ($h->type == 4) {
                $arrayChilds = $this->LoadChild2($h->id_menu, $rol);
            }
            $array[$h->id_menu] = array("id_menu" => $h->id_menu, "title" => $h->title, "url" => $h->url, "icon" => $h->icn, "type" => $h->type, "childs" => $arrayChilds);
        }
        return $array;
    }

    function LoadFather($root){
        $array = array();

        $result_hijo = $this->db->select("*")
                ->from("sys_menu")
                ->where("id_menu", $root)
                ->get();

        foreach ($result_hijo->result() as $h) {
            $array[$h->id_menu] = array("type" => $h->type);
        }
        return $array;
    }
    
    function Validar_User($data = null) {
        if($data):
            $this->db->where("u.email", $data['email']);
        else:
            $this->db->where("u.user", $this->input->post("usr"));
        endif;
        
        $result = $this->db->select("*")
                ->from("sys_users u")
                ->join("sys_roles r","u.rol = r.id_roles")
                ->where("u.id_status", 1)
                ->get();
        $reg = $result->row();
        if ($result->num_rows() > 0 && password_verify(md5('07'.$this->input->post("psw")), $reg->password)) {
            
            $this->db->where("id_users",$reg->id_users);
            $this->db->update("sys_users",array("last_entry"=>date("Y-m-d H:i:s")));
            
            $newdata = array(
                'IdUser' => $reg->id_users,
                'NameUser' => $reg->name,
                'IdRol' => $reg->rol,
                'Rol' => $reg->description,
                'User' => $reg->user,
                'img_pro'   => $reg->img_profile,
                'psw'   => $this->input->post("psw")
            );
            $this->session->set_userdata($newdata);
            return "OK";
        } else {
            return "ERROR";
        }
    }
    
    function UpdatePreferences(){
        $this->db->where("id_users",$this->session->IdUser);
        $this->db->update("sys_preferences_html",array($this->input->post("campo")=>$this->input->post("valor")));
        
        if($this->input->post("campo")=="skin"){
            $this->session->set_userdata("Skin",$this->input->post("valor"));
        }else if($this->input->post("campo")=="layout"){
            $this->session->set_userdata("Layout",$this->input->post("valor"));
        }else if($this->input->post("campo")=="sidebar"){
            $this->session->set_userdata("Sidebar",$this->input->post("valor"));
        }
        
    }
    
    function get_remember($ip){
        
        $browser = $this->agent->browser().' '.$this->agent->version();
        $consulta_ip = ("SELECT * FROM sys_login WHERE ip_login = '$ip'");
        $result_ip = $this->db->query($consulta_ip);
        $vali = $result_ip->result();
        if(count($vali)>0){
            foreach ($vali as $key => $v){
                $id_users = $v->id_users;
                $browser_login = $v->browser_login;
            }
            if($browser == $browser_login){
                $consulta = ("SELECT sys_login.ip_login, sys_login.remember_login, sys_users.id_users, sys_users.name, sys_users.rol, sys_roles.description,"
                ."sys_users.email,sys_users.avatar, sys_preferences_html.skin, sys_preferences_html.layout, sys_preferences_html.sidebar, sys_users.ip,"
                ."sys_users.mac_address FROM sys_login INNER JOIN sys_users INNER JOIN sys_roles INNER JOIN sys_preferences_html "
                ."WHERE sys_users.id_users = '$id_users' AND sys_login.browser_login = '$browser' AND sys_users.rol = sys_roles.id_roles AND sys_users.id_users = sys_preferences_html.id_users" 
                ." AND sys_login.id_users = sys_users.id_users");
                $result = $this->db->query($consulta);

                $session = $result->result();
                foreach ($session as $key => $s) {
                        $newdata = array(
                            'IdUser' => $s->id_users,
                            'NameUser' => $s->name,
                            'IdRol' => $s->rol,
                            'Rol' => $s->description,
                            'Email' => $s->email,
                            'Avatar' => $s->avatar,
                            'Skin' => $s->skin,
                            'Layout' => $s->layout,
                            'Sidebar' => $s->sidebar,
                            'ip' => $s->ip,
                            'mac' => $s->mac_address,
                            //'Google' => ($data)?true:false
                        );
                        $this->session->set_userdata($newdata);
                }
            }
        }
    }
    
    function delete_remember($id_users){
        $this->db->where('id_users', $id_users);
        $this->db->delete('sys_login');
    }

    function List_users(){
        $result = $this->db->select("*")
            ->from("sys_menu")
            ->get();
        return $result->result();
    }

}
