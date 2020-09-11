<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Panel extends Controller {
        
    public function __construct() {
        parent::__construct();
        $this->ValidateSession();
    }

    public function index(){
        $array['menus'] = $this->M_Main->ListMenu();
        
        $data['menu'] = $this->load->view('Template/Menu/V_Menu',$array,true);
        $data['title'] = 'Plantilla';
        $Header['array_css'] = array(SWEETALERT_CSS);
        $this->load->view('Template/V_Header',$data);
        
        $data['users'] = $this->M_Main->List_users();
        $this->load->view('Template/V_Body',$data);
        
        $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs',null,true);
        $Footer['array_js'] = array(SWEETALERT_JS,'argon/assets/vendor/chart.js/dist/Chart.min.js','argon/assets/vendor/chart.js/dist/Chart.extension.js');
        $this->load->view('Template/V_Footer',$Footer);
    }
    
    function UpdatePreferences(){
        $this->M_Main->UpdatePreferences();
    }
   
}
