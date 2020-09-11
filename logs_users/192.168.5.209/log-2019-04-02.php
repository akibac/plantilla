<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-02 07:09:23 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:00:32 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:01:09 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:02:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:02:10 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:02:27 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:02:36 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:02:43 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:03:06 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:03:24 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:03:42 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 08:03:48 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:20:25 --> Query error: Table 'vision.dis_vehicle' doesn't exist - Invalid query: SELECT `s`.`id_request_sd`, `s`.`driver`, `s`.`license_plate`, `s`.`dispatch_date`, ifnull(sum(d.quantity_packets), 0) as num_packets, ifnull(sum(if(d.`type` = 'Modulado', `d`.`weight`, 0)), 0)as total_weight_modulate, ifnull(sum(if(d.`type` = 'Insumo', `d`.`weight`, 0)), 0)as total_weight_supplies, `s`.`id_status` as `status`, `s`.`id_vehicle`, `v`.`max_weight`
FROM `dis_request_sd` `s`
LEFT JOIN `dis_request_sd_detail` `d` ON `s`.`id_request_sd` = `d`.`id_request_sd`
LEFT JOIN `dis_vehicle` `v` ON `v`.`id_vehicle` = `s`.`id_vehicle`
WHERE `s`.`id_request_sd` = '3'
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:17 --> Query error: Table 'vision.dis_vehicle' doesn't exist - Invalid query: SELECT *
FROM `dis_vehicle`
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:50 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 63
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:50 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 63
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:50 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 63
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:50 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 63
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:50 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 63
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:50 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 63
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:50 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 63
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:23:50 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 200
ERROR - 2019-04-02 09:27:32 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:28:18 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 200
ERROR - 2019-04-02 09:28:19 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:29:33 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 200
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 09:34:04 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 200
ERROR - 2019-04-02 09:34:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 09:52:55 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 09:53:11 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 09:54:07 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 09:56:05 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 09:56:28 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 10:00:38 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 10:05:20 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 10:47:25 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 14:01:39 --> Severity: Notice --> Undefined property: stdClass::$id_vehicle C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 200
ERROR - 2019-04-02 14:39:31 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 14:39:39 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 14:39:45 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 14:39:47 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 14:39:52 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 14:39:55 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:53:23 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:53:32 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:54:00 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:54:29 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:55:58 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:56:21 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:57:12 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:57:57 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:58:19 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:59:19 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 15:59:27 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-02 15:59:30 --> Severity: Notice --> Undefined variable: rs C:\xampp\htdocs\VisionCenter\application\controllers\Production\Delivery\C_Delivery.php 612
ERROR - 2019-04-02 15:59:44 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:00:08 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:03:55 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:04:38 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:05:58 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:06:58 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:07:33 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:17:10 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:25:20 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:26:38 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:29:17 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:32:07 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:32:47 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:32:51 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:33:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:34:47 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:41:23 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:41:26 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:41:53 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:44:59 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:45:52 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:46:02 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:46:18 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:48:17 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:48:33 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:48:40 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:51:48 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:51:56 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:52:02 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:53:37 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:56:47 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:57:08 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:58:02 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 16:58:45 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:00:17 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:01:31 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:02:00 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:02:08 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:02:16 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:02:23 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:02:26 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:02:27 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-02 17:02:39 --> 404 Page Not Found: Dist/js
