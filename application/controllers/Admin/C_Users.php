<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Users extends Controller {

    public function __construct() {
        parent::__construct();
        $this->ValidateSession();
        $this->load->model("Menu/M_Users");
    }

    public function index() {
        $array['menus'] = $this->M_Main->ListMenu();
        $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
        $Header['array_css'] = array(SWEETALERT_CSS);
        $Header['title'] = "Administración Menú";
        $this->load->view('Template/V_Header', $Header);

        $data['data'] = $this->M_Users->get_users();
        $data['roles'] = $this->M_Users->get_roles();
        $data['table'] = $this->load->view('Admin/V_Table_User', $data, true);
        $this->load->view('Admin/V_Users',$data);

        $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
        $Footer['array_js'] = array(SWEETALERT_JS,'js/users.js');
        $this->load->view('Template/V_Footer', $Footer);
    }

    function Save(){
        $data = $this->M_Users->save();
        echo json_encode($data);
    }

    function data_update(){
        $data = $this->M_Users->get_data_user();
        echo json_encode($data);
    }

    function Update(){
        $data = $this->M_Users->update();
        echo json_encode($data);
    }

    function Delete(){
        $data = $this->M_Users->delete();
        echo json_encode($data);
    }

    function Content(){
        $data['data'] = $this->M_Users->get_users();
        $data['table'] = $this->load->view('Admin/V_Table_User', $data, true);
        echo json_encode($data);
    }
}