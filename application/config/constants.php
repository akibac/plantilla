<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');


defined('URL_PROJETC')       OR define('URL_PROJETC', "http://localhost/plantilla/");
defined('URL_PROJETC1')       OR define('URL_PROJETC1', "http://localhost/plantilla/");

//defined('URL_IMAGE')       OR define('URL_IMAGE', URL_PROJETC."dist/img/LogoVerticalMilestone");
defined('URL_IMAGE')       OR define('URL_IMAGE', URL_PROJETC."dist/img/");
defined('SERVER_IMOS')       OR define('SERVER_IMOS', 'HTTP://192.168.0.6:8080');
//defined('NETWORK_UNIT_ACK')       OR define('NETWORK_UNIT_ACK', 'Z:/');
//defined('NETWORK_UNIT_ACK')       OR define('NETWORK_UNIT_ACK', '//192.168.0.31/Proyectos Milestone/');
defined('NETWORK_UNIT_ACK')       OR define('NETWORK_UNIT_ACK', '//moduart_nas1/Proyectos Milestone/');
defined('COLOR_FURNITURE')    OR define('COLOR_FURNITURE',serialize (
        array('cornflowerblue','coral','greenyellow','crimson','lightgray','lightseagreen'
        ,'yellow','yellowgreen','violet','skyblue','sienna','#f3220a'
        ,'peru','#cc9b9b','#7db198','#a096dc','#fde96b','#ff00d7'
        ,'#80ded0','#f39c12'
 )));
defined('MAX_NUM_PACK')       OR define('MAX_NUM_PACK', 50);
defined('PORCENT_WEIGHT')       OR define('PORCENT_WEIGHT', 0.05);
defined('DESP')                 OR define('DESP',0.06);
/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

//datatable
defined('DATATABLES_CSS')      OR define('DATATABLES_CSS', 'datatables/dataTables.bootstrap.css'); 
defined('DATATABLES_JS')      OR define('DATATABLES_JS', 'datatables/jquery.dataTables.min.js'); 
defined('DATATABLES_JS_B')      OR define('DATATABLES_JS_B', 'datatables/dataTables.bootstrap.min.js');
$array = serialize(
        array(
            "datatables/dataTables.buttons.min.js",
            "datatables/buttons.html5.min.js",
            "datatables/buttons.bootstrap.min.js",
            "datatables/jszip.min.js",
            )
        );
defined('BTN_DATATABLE_JS')    OR define('BTN_DATATABLE_JS',$array);

//datatable2
defined('DATATABLES_CSS2')      OR define('DATATABLES_CSS2', 'DataTable/dataTables.min.css'); 
defined('DATATABLES_JS2')      OR define('DATATABLES_JS2', 'DataTable/dataTables.min.js');

//swalert
defined('SWEETALERT_JS')    OR define('SWEETALERT_JS','sweetalert/sweetalert2.min.js');
defined('SWEETALERT_CSS')      OR define('SWEETALERT_CSS','sweetalert/sweetalert2.min.css');

//SELECT2
defined('SELECT2_JS')    OR define('SELECT2_JS','select2/select2.full.js');
defined('SELECT2_CSS')      OR define('SELECT2_CSS','select2/select2.min.css');

//iCheck
defined('ICHECK_CSS_RED')    OR define('ICHECK_CSS_RED', 'iCheck/minimal/red.css');
defined('ICHECK_CSS_BLUE')    OR define('ICHECK_CSS_BLUE', 'iCheck/minimal/blue.css');
defined('ICHECK_JS')      OR define('ICHECK_JS','iCheck/icheck.min.js');


defined('FULL_CALENDAR_CSS')    OR define('FULL_CALENDAR_CSS', 'fullcalendar/fullcalendar.min.css');
defined('FULL_CALENDAR_JS')    OR define('FULL_CALENDAR_JS', 'fullcalendar/fullcalendar.min.js');
defined('MOMENT')    OR define('MOMENT', 'fullcalendar/moment.min.js');

defined('DATEPICKER_CSS')    OR define('DATEPICKER_CSS', 'bootstrap-datepicker/css/bootstrap-datepicker.min.css');
defined('DATEPICKER_JS')    OR define('DATEPICKER_JS', 'bootstrap-datepicker/js/bootstrap-datepicker.min.js');

//BARCODE
defined('BARCODE_JS')    OR define('BARCODE_JS', 'JsBarcode/dist/JsBarcode.all.js');
defined('BARCODE39_JS')    OR define('BARCODE39_JS', 'JsBarcode/dist/barcodes/JsBarcode.code39.min.js');

//FILETREE
defined('TREE_CSS')    OR define('TREE_CSS',"jqueryFileTree/jqueryFileTree.css");
defined('TREE_JS')    OR define('TREE_JS',"jqueryFileTree/jquery.easing.js");
defined('TREE_JS2')    OR define('TREE_JS2', "jqueryFileTree/jqueryFileTree.js");

//ALERTIFY

defined('ALERTIFY_CSS')    OR define('ALERTIFY_CSS','alertifyjs/css/alertify.min.css');
defined('ALERTIFY_JS')     OR define('ALERTIFY_JS','alertifyjs/alertify.js');


//TIMEPICKER

defined('TIMEPICKER_JS') OR define('TIMEPICKER_JS','timepicker/bootstrap-timepicker.min.js');
defined('TIMEPICKER_CSS') OR define('TIMEPICKER_CSS','timepicker/bootstrap-timepicker.min.css');

//ELEVATE ZOOM
defined('ELEVATE_JS') OR define('ELEVATE_JS','elevatezoom/jquery.elevatezoom.js');

// PROGRESS BAR
defined('PROGRESS_BAR') OR define('PROGRESS_BAR','js/progressbar.js');

//SWEET ALERT2
defined('SWEET_ALERT2') OR define('SWEET_ALERT2','js/sweetalert/sweetalert2.min.js');


defined('SELECT2') OR define('SELECT2','js/select2.min.js');
defined('CHARTJS') OR define('CHARTJS','js/Chart.bundle.min.js');
