<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-11 07:20:10 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 09:13:30 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 10:15:12 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 10:15:19 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 10:15:23 --> Query error: Unknown column 'e.id_supplies' in 'on clause' - Invalid query: SELECT `i`.`code`, `i`.`name`, `t`.`code` as `pack`, `e`.*
FROM `access_order_package_supplies` `e`
JOIN `pro_supplies` `i` ON `e`.`id_supplies` = `i`.`id_supplies`
JOIN `access_type_package` `t` ON `e`.`type_package` = `t`.`id_type_package`
WHERE `e`.`order` = '20298'
ORDER BY `e`.`id_order_supplies`
ERROR - 2019-04-11 11:19:20 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:21:48 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:24:35 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:27:14 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:27:59 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:28:56 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:29:27 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:29:53 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:49:12 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:49:39 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:50:30 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:50:50 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:54:42 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 11:58:30 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:18:40 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:19:07 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:19:22 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:20:55 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:21:23 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:23:32 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:24:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:25:07 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:25:50 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:26:25 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:42:25 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:43:45 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 12:44:10 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 13:06:03 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 16:02:55 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:02:57 --> Query error: View 'vision.view_package_available_supplies_for_dispatch' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them - Invalid query: SELECT *
FROM `view_package_available_supplies_for_dispatch`
WHERE `order` = '20298'
ORDER BY `balance_dispatch` DESC
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:02:57 --> Query error: View 'vision.view_package_available_supplies_for_dispatch' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them - Invalid query: SELECT *
FROM `view_package_available_supplies_for_dispatch`
WHERE `order` = '20298'
ORDER BY `balance_dispatch` DESC
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:03:24 --> Query error: View 'vision.view_package_available_supplies_for_dispatch' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them - Invalid query: SELECT *
FROM `view_package_available_supplies_for_dispatch`
WHERE `order` = '20298'
ORDER BY `balance_dispatch` DESC
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:03:25 --> Query error: View 'vision.view_package_available_supplies_for_dispatch' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them - Invalid query: SELECT *
FROM `view_package_available_supplies_for_dispatch`
WHERE `order` = '20298'
ORDER BY `balance_dispatch` DESC
ERROR - 2019-04-11 16:25:43 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 16:42:46 --> 404 Page Not Found: Dist/js
ERROR - 2019-04-11 16:43:19 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:43:26 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_per_package C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:43:26 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_total_supplies C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:43:26 --> Severity: Notice --> Undefined property: C_Delivery::$count C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:43:26 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`) VALUES ('1365', '', '20216', '1', '1', NULL, NULL, NULL)
ERROR - 2019-04-11 16:45:26 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:45:32 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_per_package C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:45:32 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_total_supplies C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:45:32 --> Severity: Notice --> Undefined property: C_Delivery::$count C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:45:32 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`) VALUES ('1365', '', '20216', '1', '1', NULL, NULL, NULL)
ERROR - 2019-04-11 16:49:09 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:49:15 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_per_package C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:49:15 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_total_supplies C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:49:15 --> Severity: Notice --> Undefined property: C_Delivery::$count C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:49:15 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`) VALUES ('1365', '', '20216', '1', '1', NULL, NULL, NULL)
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:55:07 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_per_package C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:55:07 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_total_supplies C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:55:07 --> Severity: Notice --> Undefined property: C_Delivery::$count C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:55:07 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`) VALUES ('9167', '', '20216', '1', '1', NULL, NULL, NULL)
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:59:12 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_per_package C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:59:12 --> Severity: Notice --> Undefined property: C_Delivery::$quantity_total_supplies C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:59:12 --> Severity: Notice --> Undefined property: C_Delivery::$count C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-04-11 16:59:12 --> Query error: Unknown column 'id_supplies' in 'NEW' - Invalid query: INSERT INTO `access_order_package_supplies` (`id_order_supplies`, `number_pack`, `order`, `type_package`, `quantity_packets`, `quantity_per_package`, `quantity_total_supplies`, `quantity_supplies`) VALUES ('6086', '', '20216', '1', '1', NULL, NULL, NULL)
