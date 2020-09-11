<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

User ---> Ivan Contreras ID (15) - ERROR - 2019-05-14 11:38:08 --> Query error: The user specified as a definer ('root'@'localhost') does not exist - Invalid query: SELECT A.* FROM access_order A INNER JOIN access_order_package P ON A.`order` = P.`order` INNER JOIN view_forniture_sd F ON P.id_forniture = F.id_forniture GROUP BY P.`order`
User ---> Ivan Contreras ID (15) - ERROR - 2019-05-14 11:39:33 --> Query error: The user specified as a definer ('root'@'localhost') does not exist - Invalid query: SELECT A.* FROM access_order A INNER JOIN access_order_package P ON A.`order` = P.`order` INNER JOIN view_forniture_sd F ON P.id_forniture = F.id_forniture GROUP BY P.`order`
ERROR - 2019-05-14 11:39:36 --> 404 Page Not Found: Production/Delivery/C_Delivery/index
ERROR - 2019-05-14 11:39:37 --> 404 Page Not Found: Production/Delivery/C_Delivery/style.css
User ---> Ivan Contreras ID (15) - ERROR - 2019-05-14 11:39:52 --> Query error: The user specified as a definer ('root'@'localhost') does not exist - Invalid query: SELECT A.* FROM access_order A INNER JOIN access_order_package P ON A.`order` = P.`order` INNER JOIN view_forniture_sd F ON P.id_forniture = F.id_forniture GROUP BY P.`order`
ERROR - 2019-05-14 11:48:22 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-05-14 11:48:31 --> Query error: FUNCTION vision.fcount_quantity_pieces_add does not exist - Invalid query: SELECT `pp`.`id_order_package`, `m`.`item`, `m`.`description`, `pp`.`number_pack`, `tp`.`code`, `pp`.`quantity_packets`, `pp`.`delivered_quantity`, (pp.quantity_packets-pp.delivered_quantity) as saldo, `pp`.`quantity_pieces`, `pp`.`weight`, `fcount_quantity_pieces_add`(pp.id_order_package)as quantity_pieces_add
FROM `access_order_package` `pp`
LEFT JOIN `view_forniture_sd` `m` ON `pp`.`id_forniture` = `m`.`id_forniture`
JOIN `access_type_package` `tp` ON `pp`.`type_package` = `tp`.`id_type_package`
WHERE `pp`.`order` = '20298'
ORDER BY `pp`.`id_forniture`, `pp`.`type_package`, `pp`.`number_pack`
ERROR - 2019-05-14 11:48:36 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-05-14 11:48:40 --> Severity: Notice --> Undefined property: C_Delivery::$order C:\xampp\htdocs\VisionCenter\system\core\Model.php 73
User ---> Ivan Contreras ID (15) - ERROR - 2019-05-14 11:48:50 --> Query error: FUNCTION vision.fcount_quantity_pieces_add does not exist - Invalid query: SELECT `pp`.`id_order_package`, `m`.`item`, `m`.`description`, `pp`.`number_pack`, `tp`.`code`, `pp`.`quantity_packets`, `pp`.`delivered_quantity`, (pp.quantity_packets-pp.delivered_quantity) as saldo, `pp`.`quantity_pieces`, `pp`.`weight`, `fcount_quantity_pieces_add`(pp.id_order_package)as quantity_pieces_add
FROM `access_order_package` `pp`
LEFT JOIN `view_forniture_sd` `m` ON `pp`.`id_forniture` = `m`.`id_forniture`
JOIN `access_type_package` `tp` ON `pp`.`type_package` = `tp`.`id_type_package`
WHERE `pp`.`order` = '20298'
ORDER BY `pp`.`id_forniture`, `pp`.`type_package`, `pp`.`number_pack`
ERROR - 2019-05-14 12:04:25 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-05-14 12:35:36 --> Query error: Unknown column 'e.id_order_supplies' in 'on clause' - Invalid query: SELECT `i`.`code`, `i`.`name`, `t`.`code` as `pack`, `e`.*
FROM `access_order_package_supplies` `e`
JOIN `pro_supplies` `i` ON `e`.`id_order_supplies` = `i`.`id_supplies`
JOIN `access_type_package` `t` ON `e`.`type_package` = `t`.`id_type_package`
WHERE `e`.`order` = '20216'
ORDER BY `e`.`id_order_supplies`
ERROR - 2019-05-14 14:56:25 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 15:34:16 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 15:34:38 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 15:35:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 15:35:19 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 15:37:27 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 15:39:29 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 15:52:03 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 16:46:29 --> 404 Page Not Found: Dist/js
ERROR - 2019-05-14 16:59:35 --> 404 Page Not Found: Dist/js
