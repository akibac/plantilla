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
        // if ($this->input->post('img') == "") {
        //     $location = $_SERVER['DOCUMENT_ROOT'] .'/plantilla/dist/profile/'.$data;
        //     $tmp = $_SERVER['DOCUMENT_ROOT'].'team-4.jpg';
        //     if (!file_exists($location)) {
        //         mkdir($location, 0777, true);
        //     }
        //     move_uploaded_file($tmp,$location.'/team-4.jpg');
        // }
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

    function Upload_img(){
        $this->M_Users->update_img();
        $name = $this->input->post('name');
        $location = $_SERVER['DOCUMENT_ROOT'] .'/plantilla/dist/profile/'.$this->input->post('id_user');
        if (!file_exists($location)) {
            mkdir($location, 0777, true);
        }else{
            $files = glob($_SERVER['DOCUMENT_ROOT'] .'/plantilla/dist/profile/'.$this->input->post('id_user').'/*'); // get all file names
            foreach($files as $file){
              if(is_file($file))
                unlink($file); // delete file
            }
        }
        if(move_uploaded_file($_FILES[$name]['tmp_name'],$location.'/'.$_FILES[$name]['name'])){
            echo json_encode($location);
        }else{
            echo json_encode("error");
        }
        // $filename = $_FILES['customFileLang']['name'];
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

    function detail_user(){
        if ($this->session->has_userdata('IdRol')) {
            $array['menus'] = $this->M_Main->ListMenu();
            $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
            $Header['array_css'] = array(SWEETALERT_CSS);
            $Header['title'] = "Detalle Usuario";
            $this->load->view('Template/V_Header', $Header);

            $data['data'] = $this->M_Users->get_user_detail();
            $data['content'] = $this->load->view('Admin/V_Content_Users_Detail',$data,true);
            $this->load->view('Admin/V_Users_Detail',$data);

            $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
            $Footer['array_js'] = array(SWEETALERT_JS,'js/users.js');
            $this->load->view('Template/V_Footer', $Footer);
        }else{
            $this->load->view('Login/V_Login');
        }
    }

    function Content_edit(){
        $data['data'] = $this->M_Users->get_user_detail();
        $data['content'] = $this->load->view('Admin/V_Content_Users_Detail', $data, true);
        echo json_encode($data);
    }

    function Settings(){
        if ($this->session->has_userdata('IdRol')) {
            $array['menus'] = $this->M_Main->ListMenu();
            $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
            $Header['array_css'] = array(SWEETALERT_CSS);
            $Header['title'] = "Configuración";
            $this->load->view('Template/V_Header', $Header);

            $data['data'] = $this->M_Users->get_user_detail();
            //$data['content'] = $this->load->view('Admin/V_Content_Settings',$data,true);
            $this->load->view('Admin/V_Settings',$data);

            $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
            $Footer['array_js'] = array(SWEETALERT_JS,'js/users.js');
            $this->load->view('Template/V_Footer', $Footer);
        }else{
            $this->load->view('Login/V_Login');
        }
    }

    function change_password(){
        $data = $this->M_Users->change_password();
        echo json_encode($data);
    }

    function Rol_Users(){
        $array['menus'] = $this->M_Main->ListMenu();
        $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
        $Header['array_css'] = array(SWEETALERT_CSS);
        $Header['title'] = "Roles de Usuario";
        $this->load->view('Template/V_Header', $Header);

        $data['roles'] = $this->M_Users->get_roles();
        $data['table'] = $this->load->view('Admin/V_Table_Rol', $data, true);
        $this->load->view('Admin/V_Roles',$data);

        $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
        $Footer['array_js'] = array(SWEETALERT_JS,'js/users.js');
        $this->load->view('Template/V_Footer', $Footer);
    }

    function Save_Rol(){
        $data = $this->M_Users->save_rol();
        echo json_encode($data);
    }

    function Content_rol(){
        $data['roles'] = $this->M_Users->get_roles();
        $data['table'] = $this->load->view('Admin/V_Table_Rol', $data, true);
        echo json_encode($data);
    }

    function data_update_rol(){
        $data = $this->M_Users->data_update_rol();
        echo json_encode($data);
    }

    function Update_Rol(){
        $data = $this->M_Users->update_rol();
        echo json_encode($data);
    }

    function DeleteRol(){
        $data = $this->M_Users->delete_rol();
        echo json_encode($data);
    }
}