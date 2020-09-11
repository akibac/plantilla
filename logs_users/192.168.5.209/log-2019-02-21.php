<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-02-21 12:15:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:15:43 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:19:39 --> 404 Page Not Found: Images/icons
ERROR - 2019-02-21 12:19:46 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:20:06 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:20:10 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:27:46 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:27:48 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:30:17 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:31:14 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:35:11 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:35:14 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:36:54 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:37:10 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:37:52 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:39:02 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:47:32 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:49:00 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:50:46 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 12:51:37 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 14:12:46 --> 404 Page Not Found: Images/icons
ERROR - 2019-02-21 14:12:56 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 14:13:00 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 14:19:24 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 14:22:18 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 14:22:31 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 14:23:18 --> 404 Page Not Found: Dist/js
ERROR - 2019-02-21 14:23:28 --> 404 Page Not Found: Images/icons
ERROR - 2019-02-21 14:23:36 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-02-21 15:33:33 --> Query error: Unknown column 'p.status' in 'on clause' - Invalid query: SELECT `p`.*, `s`.`description`
FROM `dis_request_sd` `p`
JOIN `sys_status` `s` ON p.`status` = s.id_status
ORDER BY `date` DESC
User ---> Ivan Contreras ID (15) - ERROR - 2019-02-21 15:39:13 --> Query error: Unknown column 's.status' in 'field list' - Invalid query: SELECT `s`.`id_request_sd`, `s`.`driver`, `s`.`license_plate`, `s`.`dispatch_date`, ifnull(sum(d.quantity_packets), 0) as num_packets, ifnull(sum(d.weight), 0)as total_weight, `s`.`status`
FROM `dis_request_sd` `s`
LEFT JOIN `dis_request_sd_detail` `d` ON `s`.`id_request_sd` = `d`.`id_request_sd`
WHERE `s`.`id_request_sd` = '1'
User ---> Ivan Contreras ID (15) - ERROR - 2019-02-21 15:39:40 --> Severity: Notice --> Undefined property: stdClass::$total_weight_modulate C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 41
User ---> Ivan Contreras ID (15) - ERROR - 2019-02-21 15:39:40 --> Severity: Notice --> Undefined property: stdClass::$total_weight_supplies C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 47
User ---> Ivan Contreras ID (15) - ERROR - 2019-02-21 15:39:40 --> Severity: Notice --> Undefined property: stdClass::$total_weight_modulate C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 53
User ---> Ivan Contreras ID (15) - ERROR - 2019-02-21 15:39:40 --> Severity: Notice --> Undefined property: stdClass::$total_weight_modulate C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 53
User ---> Ivan Contreras ID (15) - ERROR - 2019-02-21 15:39:40 --> Severity: Notice --> Undefined property: stdClass::$total_weight_supplies C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 53
User ---> Ivan Contreras ID (15) - ERROR - 2019-02-21 15:39:40 --> Severity: Notice --> Undefined property: stdClass::$status C:\xampp\htdocs\VisionCenter\application\views\Dispatch\Request\Modulated\V_Info.php 170
