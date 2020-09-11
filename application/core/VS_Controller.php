<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function ValidateSession() {
        if (!$this->session->has_userdata('IdRol')) {
            header('Location: ' . base_url());
        }
    }

    function getDiasHabiles($month, $year, $diasferiados = array(), $saturday = false, $sunday = true) {

        $fechainicio = $year . "-" . $month . "-01";
        $fechafin = $year . "-" . $month . "-" . date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));

        // Convirtiendo en timestamp las fechas
        $fechainicio = strtotime($fechainicio);
        $fechafin = strtotime($fechafin);
        
        // Incremento en 1 dia
        $diainc = 24 * 60 * 60;

        // Arreglo de dias habiles, inicianlizacion
        $business_days = array();

        $arrayDay = array();
        if ($saturday) {
            $arrayDay[] = 6;
        }

        if ($sunday) {
            $arrayDay[] = 7;
        }

        // Se recorre desde la fecha de inicio a la fecha fin, incrementando en 1 dia
        for ($midia = $fechainicio; $midia <= $fechafin; $midia += $diainc) {
            // Si el dia indicado, no es sabado o domingo es habil
            if (!in_array(date('N', $midia), $arrayDay)) { // DOC: http://www.php.net/manual/es/function.date.php
                // Si no es un dia feriado entonces es habil
                if (!in_array(date('Y-m-d', $midia), $diasferiados)) {
                    array_push($business_days, date('Y-m-d', $midia));
                }
            }
        }

        return array("days" => $business_days, "count" => count($business_days), "date-end" => $fechafin);
    }

}
