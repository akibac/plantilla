<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-12 07:28:01 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 07:28:08 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 07:28:17 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_per_package C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 07:28:17 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_total_supplies C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 07:28:17 --> Severity: Notice --> Undefined property: C_Delivery::$count C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 07:28:17 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`) VALUES ('6086', '', '20216', '1', '1', NULL, NULL, NULL)
ERROR - 2019-04-12 08:44:26 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 08:45:06 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 08:45:23 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 08:46:10 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_per_package C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 08:46:10 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_total_supplies C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 08:46:10 --> Severity: Notice --> Undefined property: C_Delivery::$count C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 08:46:10 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`) VALUES ('60', '', '20216', '1', '1', NULL, NULL, NULL)
ERROR - 2019-04-12 09:03:44 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:03:58 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:05:10 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:09:58 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:14:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:19:29 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:21:27 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:21:50 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:34:55 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:39:15 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:40:17 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:40:36 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:40:58 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 09:43:34 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 09:43:51 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`, `weight_per_package`) VALUES ('78', '', '20216', '1', '1', '35', '35', '35', '')
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 10:12:33 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`, `weight_per_package`) VALUES ('78', '', '20216', '1', '1', '35', '35', '35', '')
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 10:15:08 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`, `weight_per_package`) VALUES ('78', '', '20216', '1', '1', '35', '35', '35', '')
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 10:30:53 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`, `weight_per_package`) VALUES ('78', '1', '20216', '1', '1', '35', '35', '35', '100')
ERROR - 2019-04-12 11:03:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 14:12:34 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 14:12:35 --> Query error: Unknown column 'e.id_order_supplies' in 'on clause' - Invalid query: SELECT `i`.`code`, `i`.`name`, `t`.`code` as `pack`, `e`.*
FROM `access_order_package_supplies` `e`
JOIN `pro_supplies` `i` ON `e`.`id_order_supplies` = `i`.`id_supplies`
JOIN `access_type_package` `t` ON `e`.`type_package` = `t`.`id_type_package`
WHERE `e`.`order` = '20216'
ORDER BY `e`.`id_order_supplies`
ERROR - 2019-04-12 14:31:12 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 14:31:14 --> Query error: Unknown column 'e.id_order_supplies' in 'on clause' - Invalid query: SELECT `i`.`code`, `i`.`name`, `t`.`code` as `pack`, `e`.*
FROM `access_order_package_supplies` `e`
JOIN `pro_supplies` `i` ON `e`.`id_order_supplies` = `i`.`id_supplies`
JOIN `access_type_package` `t` ON `e`.`type_package` = `t`.`id_type_package`
WHERE `e`.`order` = '20216'
ERROR - 2019-04-12 14:32:41 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 14:32:43 --> Query error: Unknown column 'e.id_supplies' in 'on clause' - Invalid query: SELECT `i`.`code`, `i`.`name`, `t`.`code` as `pack`, `e`.*
FROM `access_order_package_supplies` `e`
JOIN `pro_supplies` `i` ON `e`.`id_supplies` = `i`.`id_supplies`
JOIN `access_type_package` `t` ON `e`.`type_package` = `t`.`id_type_package`
WHERE `e`.`order` = '20216'
ERROR - 2019-04-12 15:00:21 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:00:22 --> Severity: Notice --> Undefined index: data C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:00:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
ERROR - 2019-04-12 15:00:50 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-12 15:03:33 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:03:33 --> Severity: Notice --> Undefined index: data C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:03:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
ERROR - 2019-04-12 15:12:41 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:12:42 --> Severity: Notice --> Undefined index: data C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:12:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
ERROR - 2019-04-12 15:24:35 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:24:36 --> Severity: Notice --> Undefined index: data C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:24:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
ERROR - 2019-04-12 15:27:15 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:27:18 --> Severity: Notice --> Undefined index: data C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:27:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
ERROR - 2019-04-12 15:34:21 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:34:23 --> Severity: Notice --> Undefined index: data C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:34:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:34:43 --> Query error: Unknown column 'id_order_supplies' in 'where clause' - Invalid query: SELECT * FROM access_order_package_supplies WHERE id_order_supplies = 60 AND `order` = 20216
ERROR - 2019-04-12 15:39:43 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:39:45 --> Severity: Notice --> Undefined index: data C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:39:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:39:53 --> Severity: Notice --> Undefined property: C_Delivery::$pack_number C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:39:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND `order` = 20216' at line 1 - Invalid query: SELECT * FROM access_order_package_supplies WHERE number_pack =  AND `order` = 20216
ERROR - 2019-04-12 15:41:19 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:41:21 --> Severity: Notice --> Undefined index: data C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:41:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\VisionCenter\application\views\Production\Delivery\Supplies\Enlist\V_Table_Pack.php 17
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-12 15:41:28 --> Query error: Unknown column 'id_order_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`, `weight_per_package`) VALUES ('1', '20216', '1', '1', '4603', '4603', '4603', '23232323')
