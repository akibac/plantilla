<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Ws extends CI_Model 
{

    public function __construct() {
        parent::__construct();
    }
	
	function Validar_User() {
      
	  $pswd=md5($this->input->post("psw"));
	  
        $result = $this->db->select("*")
                ->from("sys_users u")
                ->join("sys_roles r","u.rol = r.id_roles")
                ->join("sys_preferences_html p","u.id_users = p.id_users","left")
				->where("u.user", $this->input->post("usr"))
				->where("u.password",$pswd )
                ->where("u.status", 1)
                ->get();

        if ($result->num_rows() > 0) {
            $reg = $result->row();
            
            $this->db->where("id_users",$reg->id_users);
            $this->db->update("sys_users",array("last_entry"=>date("Y-m-d H:i:s")));
            
            $newdata = array(
                'id_user' =>$reg->id_users,
                'name_user' =>$reg->name,
                'id_rol' =>$reg->rol,
                'rol' =>$reg->description,
                'email' =>$reg->email,
				
            );
            //'Password' => $pswd,
            
            $this->session->set_userdata($newdata);
			
			$newdata['res'] = 'OK';
            
		}
		else {
			//Jaym Valid password
			$newdata = array(
                'res' =>'error'//
            );
			//$newdata['res'] = "ERROR";
			//,'Password' => $pswd,
        }
		return $newdata;
		
    }
	
	function GetOrders(){
		
		if(!empty($this->input->post('order')))
			$this->db->where('order',$this->input->post('order'));
		
		$result = $this->db->select('*')
					->from('access_order a')
					->get();
					
		if(!empty($this->input->post('order'))){
			return $result->row();
		}else{
			return $result->result();
		}
		
	}

	

	function GetRequestCustomer(){
		/*
		Jaym Jun2019
		Find All request join order info customer, all status 17,19
		use WebServices Send client Rest
		*/
		if(!empty($this->input->post('idrequest')))
		$this->db->where('a.id_request_sd',$this->input->post('idrequest'));

		if(!empty($this->input->post('idstatus')))
		$this->db->where_in('a.id_status',$this->input->post('idstatus'));
		
		$result = $this->db->select(' b.*,a.*,b.type')
							->from('dis_request_sd_detail a ')
							->JOIN('access_order b','a.`order` = b.`order`') 
							->ORDER_BY('a.id_request_sd','asc')
							->ORDER_BY('b.client','asc')
							->ORDER_BY('b.project','asc')
							->ORDER_BY(' b.`order`','asc')
							->ORDER_BY(' a.NAME ','asc')
							->ORDER_BY(' a.pack','asc')
							->get();
							//echo $this->db->last_query();
		return $result->result();

	}

	function GetRequest(){
		if(!empty($this->input->post('idrequest')))
		$this->db->where('a.id_request_sd',$this->input->post('idrequest'));

		if(!empty($this->input->post('idstatus')))
		$this->db->where_in('a.id_status',$this->input->post('idstatus'));

		$result = $this->db->select(" a.id_request_sd,a.date as date_created,a.license_plate,a.dispatch_date,
									  a.quantity_packages,b.description as vehicle_type,b.max_weight,
									  `b`.`max_weight` AS document,a.id_status,c.description as description_status ")
		->from('dis_request_sd a')
		->JOIN('sys_status c','a.id_status = c.id_status') 
		->JOIN('dis_weight_vehicle b', 'a.id_weight_vehicle = b.id_weight_vehicle')
		->ORDER_BY('a.id_request_sd','asc')
		->get();
		//echo $this->db->last_query();
		return $result->result();


	}

	function get_data_detail($id_request_sd){
		$query = ("SELECT * FROM dis_remission D 
						WHERE D.id_request_sd = $id_request_sd GROUP BY D.`order` , D.`client`");
        $result = $this->db->query($query);
		return $result->result();
	}

	/**
	 * Jaym Junio 2019
	 * find data messages to send ws movil
	 * 
	 */
	function getws_message_movil(){
		
		if(!empty($this->input->post('idrequest')))
		{
			$this->db->where('a.id_request_sd',$this->input->post('idrequest'));

		}		
		else {
			$this->db->where('a.id_request_sd','*');
		}
		

		$result = $this->db->select(" a.id_request_sd,a.client_message,a.client_message_type,
										a.last_read_bar_qr,a.client_message_view ")
				->from('ws_message_movil a')
				
				->ORDER_BY('a.id_request_sd','asc')
				->get();

		return $result->row();


	}

/**
 * Jaym Junio 2019
 * select data details table request_sd
 */
	function GetRequestDetails(){
		
		if(!empty($this->input->post('idrequest')))
			$this->db->where('a.id_request_sd',$this->input->post('idrequest'));

		if(!empty($this->input->post('idstatus')))
			$this->db->where_in('a.id_status',$this->input->post('idstatus'));

		$result = $this->db->select('a.id_request_sd,a.`order`,b.`client`,b.project ')
						->from('dis_request_sd_detail a')
						->JOIN('access_order b',' a.`order`=b.`order`')
                                                
						->get();

		
			return $result->result();
		

		
	}

	/**
 * Jaym Junio 2019
 * select and sum value for id_request_sd
 * view resume monitor 
 */
    function SumTotalRequest(){
		
		if(!empty($this->input->post('idrequest')))
			$this->db->where('d.id_request_sd',$this->input->post('idrequest'));

		if(!empty($this->input->post('idstatus')))
			$this->db->where_in('d.id_status',$this->input->post('idstatus'));

		$result = $this->db->select('d.id_request_sd,
                                            SUM(d.quantity_packets) as totalqty_packets,
                                            fsum_orderqtypack(d.id_request_sd,d.order,18) as qty_packetsLoad,
                                            Sum(d.quantity_packets)-fsum_orderqtypack(d.id_request_sd,d.`order`,18) as pendingqtypack,
                                            Sum(d.weight) AS totalweight,
                                            fsum_orderweight(d.id_request_sd,d.`order`,18) as weight_packetsLoad,
                                            SUM(d.weight)-fsum_orderweight(d.id_request_sd,d.`order`,18) as pendingweigthload,
                                            sys_status.description AS status_packets,
                                            dis_request_sd.driver')
						->from('dis_request_sd_detail d')
						->JOIN('sys_status','d.id_status = sys_status.id_status')
                         ->JOIN('dis_request_sd','d.id_request_sd = dis_request_sd.id_request_sd')
						->get();
			
		
			return  $result->row();		
	
	
		}

		
				
}

