ERROR - 2019-03-01 08:16:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No se puede establecer una conexi�n ya que el equipo de destino deneg� expresamente dicha conexi�n.
 C:\xampp\htdocs\VisionCenter\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2019-03-01 08:16:49 --> Unable to connect to the database
ERROR - 2019-03-01 08:17:21 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 08:17:32 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 08:18:09 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 08:18:22 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 08:18:27 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 08:18:32 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 08:18:38 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 08:34:26 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 08:34:28 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:07:55 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:21:40 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:24:44 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:26:18 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:27:29 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:28:13 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:29:51 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:40:12 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:40:42 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:41:51 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:42:02 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:42:32 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:42:40 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:43:39 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:44:41 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:44:44 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:45:46 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:46:14 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:46:45 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:47:37 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:47:51 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:48:18 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:50:29 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:51:57 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:52:07 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:52:13 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:52:26 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:52:35 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:54:14 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 09:59:52 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:01:37 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:10:17 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:12:03 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:12:36 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:12:44 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:14:04 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:17:20 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:23:21 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:23:50 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:56:45 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:56:57 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 10:58:40 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 11:02:32 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 11:26:09 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 11:35:46 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 11:38:11 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 11:52:55 --> 404 Page Not Found: Dist/js
ERROR - 2019-03-01 12:08:36 --> 404 Page Not Found: Dist/js
User ---> Ivan Contreras ID (15) - ERROR - 2019-03-01 15:35:05 --> Query error: Table 'vision.view_forniture_sd' doesn't exist - Invalid query: SELECT `pp`.`id_order_package`, `m`.`item`, `m`.`description`, `pp`.`number_pack`, `tp`.`code`, `pp`.`quantity_packets`, `pp`.`delivered_quantity`, (pp.quantity_packets-pp.delivered_quantity) as saldo
FROM `access_order_package` `pp`
JOIN `view_forniture_sd` `m` ON `pp`.`id_forniture` = `m`.`id_forniture`
JOIN `access_type_package` `tp` ON `pp`.`type_package` = `tp`.`id_type_package`
WHERE `pp`.`order` = '20222'
ORDER BY `pp`.`id_forniture`, `pp`.`type_package`, `pp`.`number_pack`
User ---> Ivan Contreras ID (15) - ERROR - 2019-03-01 16:14:23 --> Query error: Table 'vision.view_forniture_sd' doesn't exist - Invalid query: SELECT `pp`.`id_order_package`, `m`.`item`, `m`.`description`, `pp`.`number_pack`, `tp`.`code`, `pp`.`quantity_packets`, `pp`.`delivered_quantity`, (pp.quantity_packets-pp.delivered_quantity) as saldo
FROM `access_order_package` `pp`
JOIN `view_forniture_sd` `m` ON `pp`.`id_forniture` = `m`.`id_forniture`
JOIN `access_type_package` `tp` ON `pp`.`type_package` = `tp`.`id_type_package`
WHERE `pp`.`order` = '20222'
ORDER BY `pp`.`id_forniture`, `pp`.`type_package`, `pp`.`number_pack`
User ---> Ivan Contreras ID (15) - ERROR - 2019-03-01 16:26:18 --> Query error: Table 'vision.view_forniture_sd' doesn't exist - Invalid query: SELECT `pp`.`id_order_package`, `m`.`item`, `m`.`description`, `pp`.`number_pack`, `tp`.`code`, `pp`.`quantity_packets`, `pp`.`delivered_quantity`, (pp.quantity_packets-pp.delivered_quantity) as saldo
FROM `access_order_package` `pp`
JOIN `view_forniture_sd` `m` ON `pp`.`id_forniture` = `m`.`id_forniture`
JOIN `access_type_package` `tp` ON `pp`.`type_package` = `tp`.`id_type_package`
WHERE `pp`.`order` = '20222'
ORDER BY `pp`.`id_forniture`, `pp`.`type_package`, `pp`.`number_pack`
ERROR - 2019-03-01 16:33:16 --> 404 Page Not Found: Absenteeism//index
ERROR - 2019-03-01 16:33:16 --> 404 Page Not Found: Stylecss/index
