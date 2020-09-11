<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends Controller {
        
    public function __construct() { 
        parent::__construct();
    }

    public function index(){
        //$get_remember = $this->M_Main->get_remember($this->input->ip_address());
        //print_r($this->session);
        if ($this->session->has_userdata('IdRol')) {
            header('Location: ' . base_url()."C_Panel");
        }else{
            $this->load->library('Googleplus');
            //Create Google Btn
            $contents['login_url'] = $this->googleplus->loginURL();
            $this->load->view('Login/V_Login',$contents);
        }
    }
    
    function Login(){
        echo json_encode(array("res" => $this->M_Main->Validar_User()));
    }
    
    function LoginToGoogle(){
        $this->load->library('Googleplus');
        
        if (isset($_GET['code'])) {
            
            $this->googleplus->getAuthenticate();

            $validate = $this->M_Main->Validar_User($this->googleplus->getUserInfo());

            if($validate == "OK"){
                header('Location: ' . base_url()."C_Panel");
            }else{
                header('Location: ' . base_url());
            }
        }else{
            echo "Error";
        }
    }
    
    function Logout(){
        $this->session->sess_destroy();
        header('Location: ' . base_url());
    }
    
    function get_session(){
        if($this->session->IdUser == ""){
            echo json_encode("true");
        }else{
            echo json_encode("false");
        }
    }
}
