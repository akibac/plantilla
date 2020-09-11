<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Prueba extends Controller {

    public function __construct() {
        parent::__construct();
        $this->ValidateSession();
        $this->load->model("Prueba/M_Prueba");
    }

    public function index() {

        // header
        $array['menus'] = $this->M_Main->ListMenu();
        $Header['menu'] = $this->load->view('Template/Menu/V_Menu', $array, true);
        $Header['array_css'] = array(DATATABLES_CSS, SWEETALERT_CSS);
        $this->load->view('Template/V_Header', $Header);

        // body
        $data['data_supplies'] = $this->M_Prueba->get_supplies();
        $data['data_unit'] = $this->M_Prueba->get_supplies_unit();
        $data['table'] = $this->load->view('Prueba/table_prueba',$data,true); // data table
        $this->load->view('Prueba/v_panel_prueba',$data);


        // footer
        $Footer['sidebar_tabs'] = $this->load->view('Template/V_sidebar_tabs', null, true);
        $Footer['array_js'] = array(DATATABLES_JS, DATATABLES_JS_B, SWEETALERT_JS);
        $this->load->view('Template/V_Footer', $Footer);
    }

}

