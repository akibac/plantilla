<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class VS_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function ListStatusAll($id = null) {
        if (!empty($id)) {
            $this->db->where("id_status", $id);
        }
        $result = $this->db->select("*")
                ->from("sys_status")
                ->order_by("description")
                ->get();

        return $result->result();
    }
    
    function LoadIcons() {
        $result = $this->db->select("*")
                ->from("sys_icon")
                ->order_by("icon")
                ->get();
        return $result->result();
    }
    
    function ListAuxManintenance() {
        $result = $this->db->select("*")
                ->from("sys_users")
                ->where("rol", 5)
                ->order_by("name")
                ->get();

        return $result->result();
    }
    
    function ListDayCalendarAll($type,$my = false) {
        
        if($my){
            $this->db->where("c.created_by",$my);
        }
        
        $result = $this->db->select("c.*,t.description")
                ->from("sys_calendar_days c")
                ->join("sys_type_day t","c.type_day = t.id_type_day")
                ->where("c.type_day",$type)
                ->where("c.`status`",1)
                ->get();
        
        return $result->result();
    }
    
    function LoadButtonPermissions($application){
        $result = $this->db->select("*")
                ->from("sys_roles_button r")
                ->join("sys_button b","b.id_button = r.id_button")
                ->where("b.application",$application)
                ->where("r.id_rol",$this->session->IdRol)
                ->get();
        
        return $result->result();
    }
    
    function ChargedCodeAXiron($referencia){
        $this->ax = $this->load->database("ax", TRUE);
        $result = $this->ax->select("ITEMNAME,UNITID")
                ->from("jayminventtable")
                ->join("JaymInventtableModuleInven","JaymInventtable.Referencia = JaymInventtableModuleInven.ITEMID and JaymInventtableModuleInven.DATAAREAID = 'dpm'")
                ->where("Referencia",$referencia)
                ->where("ITEMGROUPID not in ('87','RTA','MILESTONE_MU','Piezas','98','cafq','rep','DOTA','DOTV')")
                ->get();
        //echo $this->ax->last_query();
        return $result->row();
    }
    
    function ChargedCantoAXAll(){
        $this->ax = $this->load->database("ax", TRUE);
        $result = $this->ax->query("SELECT INVENTTABLE.ITEMID,INVENTTABLE.ITEMNAME
        FROM INVENTTABLE
        JOIN InventItemInventSetup ON InventItemInventSetup.ITEMID = INVENTTABLE.ITEMID AND INVENTTABLE.DATAAREAID = InventItemInventSetup.DATAAREAID
        WHERE  INVENTTABLE.ITEMID LIKE 'MCP%' AND dbo.INVENTTABLE.DATAAREAID = N'dpm' AND InventItemInventSetup.STOPPED = 0 ORDER BY INVENTTABLE.ITEMID");
        
        return $result->result();
    }
    function ChargedSheedAXAll(){
        $this->ax = $this->load->database("ax", TRUE);
        $result = $this->ax->query("SELECT INVENTTABLE.ITEMID,INVENTTABLE.ITEMNAME
        FROM INVENTTABLE
        JOIN InventItemInventSetup ON InventItemInventSetup.ITEMID = INVENTTABLE.ITEMID AND INVENTTABLE.DATAAREAID = InventItemInventSetup.DATAAREAID
        WHERE  INVENTTABLE.ITEMID LIKE 'MLA%' AND dbo.INVENTTABLE.DATAAREAID = N'dpm' AND InventItemInventSetup.STOPPED = 0 ORDER BY INVENTTABLE.ITEMID");
        
        return $result->result();
    }
    
    function GetReference($reference){
        $this->ax = $this->load->database("ax", TRUE);
        $result = $this->ax->query("SELECT * FROM jaymInventtable WHERE Referencia = '$reference'");
        //echo $this->ax->last_query();
        return $result->result();
    }
    
    function GetReferenceDate($date,$date2){
        $this->ax = $this->load->database("ax", TRUE);
        $result = $this->ax->query("SELECT * FROM JaymInventtable D WHERE D.CREATEDDATETIME BETWEEN ('".$date." 00:00:00') "
                . " AND ('".$date2." 23:59:59') AND REFERENCIA LIKE '%MLA%'");
        //echo $this->ax->last_query();
        return $result->result();
    }

    function GetReferenceType($date,$date2){
        $this->ax = $this->load->database("ax", TRUE);
        $result = $this->ax->query("SELECT * FROM JaymInventtable WHERE itemtype = 0 AND costgroupid <>'MPLAMINA'
        AND CREATEDDATETIME BETWEEN ('".$date." 00:00:00') AND ('".$date2." 23:59:59')
        AND itemgroupid not IN ('CONSIG','REP','MER','dotinv','ACF1','ACF','ACT6','AseoBqll','CafetBqlla','SUB-ESTACI','REPDIFER','PBQ')");
        return $result->result();
    }
    
    function ListOrderItemImosAll($name) {
        $this->ix = $this->load->database("ImosIX", TRUE);
        $result = $this->ix->select("*")
                ->from("IDBINFO")
                ->where("TYPE", 2)
                ->where("ORDERID", $name)
                ->order_by("GRPPOS")
                ->get();
        //echo $this->ix->last_query();
        return $result->result();
    }
    
    function InfoOrderAll($order) {
        $rs = $this->db->select("*")
                ->from("access_order p")
                ->where("p.`order`", $order)
                ->get();
        return $rs->row();
    }
    
    function Colorforniture($order, $forniture) {
        $result = $this->db->select("*")
                ->from("access_order_item")
                ->where("`order`", $order)
                ->where("id_forniture", $forniture)
                ->get();
        return $result->row()->color;
    }

}
