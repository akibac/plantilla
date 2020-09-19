<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Menu extends Controller {

    public function __construct() {
        parent::__construct();
        $this->ValidateSession();
        $this->load->model("Menu/M_Menu");
    }

    public function index() {
        $array['menus'] = $this->M_Main->ListMenu();
        $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
        $Header['array_css'] = array(SWEETALERT_CSS);
        $Header['title'] = "Administración Menú";
        $this->load->view('Template/V_Header', $Header);

        $data['type_m'] = $this->M_Menu->get_type_menu();
        $data['icons']  = $this->M_Menu->get_icons();
        $data['roles']  = $this->M_Menu->get_roles();
        $data['data']   = $this->M_Menu->data_menu();
        $data['table']  = $this->load->view('Admin/V_Table_Menu', $data, true);
        $this->load->view('Admin/V_Menu',$data);

        $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
        $Footer['array_js'] = array(SWEETALERT_JS,'js/menu.js');
        $this->load->view('Template/V_Footer', $Footer);
    }

    function get_menu(){
        $data = $this->M_Menu->get_menu_type();
        echo json_encode($data);
    }

    function Save(){
        $data = $this->M_Menu->Save();
        echo json_encode($data);
    }

    function get_data_edit(){
        $data = $this->M_Menu->get_data_edit();
        echo json_encode($data);
    }

    function get_rol_relations(){
        $data = $this->M_Menu->get_rol_relations();
        $array = array();
        foreach ($data as $key => $value) {
            $array[] = $value->id_roles;
        }
        echo json_encode($array);
    }

    function Update(){
        $data = $this->M_Menu->update_menu();
        echo json_encode($data);
    }

    function Delete(){
        $data = $this->M_Menu->delete_menu();
        echo json_encode($data);
    }

    function Content(){
        $data['data']   = $this->M_Menu->data_menu();
        $data['table']  = $this->load->view('Admin/V_Table_Menu', $data, true);
        echo json_encode($data);
    }

    function Upload_Logo(){
        $location = $_SERVER['DOCUMENT_ROOT'] .'/plantilla/dist/profile/logo';
        if (!file_exists($location)) {
            mkdir($location, 0777, true);
        }else{
            $files = glob($_SERVER['DOCUMENT_ROOT'] .'/plantilla/dist/profile/logo/*'); // get all file names
            foreach($files as $file){ //iterate files
              if(is_file($file))
                unlink($file); // delete file
            }
        }
        if(move_uploaded_file($_FILES['edit-logo']['tmp_name'],$location.'/logo.png')){
            echo json_encode($location);
        }else{
            echo json_encode("error");
        }
    }
}
