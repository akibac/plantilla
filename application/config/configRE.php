<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| WARNING: You MUST set this value!
|
| If it is not set, then CodeIgniter will try guess the protocol and path
| your installation, but due to security concerns the hostname will be set
| to $_SERVER['SERVER_ADDR'] if available, or localhost otherwise.
| The auto-detection mechanism exists only for convenience during
| development and MUST NOT be used in production!
|
| If you need to allow multiple domains, remember that this file is still
| a PHP script and you can easily do that on your own.
|
*/
//$config['base_url'] = 'http://192.168.5.30/VisionCenter/';
//$config['base_url'] = URL_PROJETC;

$protocol = is_https() ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : "";

// ||(stristr($host, '192.168.5') !== FALSE)

if((stristr($host, "192.168.5.209") !== FALSE)  || (stristr($host, '127.0.0') !== FALSE) )
	{
   $config['base_url'] = URL_PROJETC; 
}
else $config['base_url'] = URL_PROJETC1;

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
$config['index_page'] = 'index.php';

/*
|--------------------------------------------------------------------------
| PROTOCOLO URI
| ------------------------------------------------- -------------------------
|
| Este elemento determina qué servidor global se debe usar para recuperar el
| Cadena URI. La configuración predeterminada de 'REQUEST_URI' funciona para la mayoría de los servidores.
| Si sus enlaces no parecen funcionar, pruebe uno de los otros:
|
| 'REQUEST_URI' Utiliza $ _SERVER ['REQUEST_URI']
| 'QUERY_STRING' Utiliza $ _SERVER ['QUERY_STRING']
| 'PATH_INFO' usa $ _SERVER ['PATH_INFO']
|
| ADVERTENCIA: si configura esto en 'PATH_INFO', ¡los URI siempre serán decodificados con URL!
*/
$config['uri_protocol']	= 'REQUEST_URI';

/*
|--------------------------------------------------------------------------
| Sufijo de URL
| ------------------------------------------------- -------------------------
|
| Esta opción le permite agregar un sufijo a todas las URL generadas por CodeIgniter.
| Para obtener más información, consulte la guía del usuario:
|
| https://codeigniter.com/user_guide/general/urls.html
*/
$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Idioma predeterminado
| ------------------------------------------------- -------------------------
|
| Esto determina qué conjunto de archivos de idioma se debe utilizar. Asegurarse
| hay una traducción disponible si tiene la intención de usar algo diferente
| que inglés
|
*/
$config['language']	= 'english';

/*
|--------------------------------------------------------------------------
| Conjunto de caracteres predeterminado
| ------------------------------------------------- -------------------------
|
| Esto determina qué juego de caracteres se usa por defecto en varios métodos
| que requieren un juego de caracteres para ser provisto.
|
| Consulte http://php.net/htmlspecialchars para obtener una lista de conjuntos de caracteres compatibles.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Habilitar / Deshabilitar Ganchos del Sistema
| ------------------------------------------------- -------------------------
|
| Si desea utilizar la función 'ganchos', debe habilitarla
| estableciendo esta variable en VERDADERO (booleano). Ver la guía del usuario para más detalles.
|
*/
$config['enable_hooks'] = FALSE;

/*
|--------------------------------------------------------------------------
| Prefijo de extensión de clase
| ------------------------------------------------- -------------------------
|
| Este elemento le permite establecer el nombre de archivo / nombre de la clase prefijo al extender
| bibliotecas nativas. Para obtener más información, consulte la guía del usuario:
|
| https://codeigniter.com/user_guide/general/core_classes.html
| https://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'VS_';

/*
|--------------------------------------------------------------------------
| Compositor de carga automática
| ------------------------------------------------- -------------------------
|
| Al habilitar esta configuración, se le indicará a CodeIgniter que busque un Compositor.
| secuencia de comandos de autocargador de paquete en application / vendor / autoload.php.
|
| $ config ['composer_autoload'] = TRUE;
|
| O si tiene su proveedor / directorio ubicado en otro lugar,
| puede optar por establecer una ruta específica también:
|
| $ config ['composer_autoload'] = '/path/to/vendor/autoload.php';
|
| Para obtener más información acerca de Composer, visite http://getcomposer.org/
|
| Nota: Esto NO deshabilitará o anulará el CodeIgniter específico
| carga automática (application / config / autoload.php)
*/
$config['composer_autoload'] = FALSE;

/*
|--------------------------------------------------------------------------
| Caracteres de URL permitidos
| ------------------------------------------------- -------------------------
|
| Esto le permite especificar qué caracteres están permitidos dentro de sus URL.
| Cuando alguien intenta enviar una URL con caracteres no permitidos,
| obtener un mensaje de advertencia.
|
| Como medida de seguridad, se recomienda ENCARECIDAMENTE restringir las URL a
| el menor número de personajes posible. Por defecto, solo están permitidos: a-z 0-9 ~%.: _-
|
| Déjelo en blanco para permitir que todos los personajes, pero solo si está loco.
|
| El valor configurado es en realidad un grupo de caracteres de expresión regular
| y se ejecutará como:! preg_match ('/ ^ [<allowed_uri_chars>] + $ / i
|
| ¡NO CAMBIE ESTO A MENOS QUE ENTIENDA COMPLETAMENTE LAS REPERCUSIONES!
|
*/
//$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:()_\-'; 

/*
|--------------------------------------------------------------------------
| Habilitar cadenas de consulta
| ------------------------------------------------- -------------------------
|
| De forma predeterminada, CodeIgniter utiliza URL basadas en segmentos amigables para motores de búsqueda:
| example.com/who/what/where/
|
| Opcionalmente, puede habilitar las URL basadas en cadenas de consulta estándar:
| example.com?who=me&what=something&where=here
|
| Las opciones son: VERDADERO o FALSO (booleano)
|
| Los otros elementos le permiten establecer la cadena de consulta 'palabras' que
| invoque sus controladores y sus funciones:
| example.com/index.php?c=controller&m=function
|
| Tenga en cuenta que algunos de los ayudantes no funcionarán como se esperaba cuando
| esta característica está habilitada, ya que CodeIgniter está diseñado principalmente para
| usa URL basadas en segmentos
|
*/
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

/*
|--------------------------------------------------------------------------
| Permitir array $ _GET
| ------------------------------------------------- -------------------------
|
| De forma predeterminada, CodeIgniter permite el acceso a la matriz $ _GET. Si para algunos
| razón por la que desea deshabilitarlo, establezca 'allow_get_array' en FALSE.
|
| ADVERTENCIA: esta función está DEJADA y solo está disponible actualmente
| para fines de compatibilidad con versiones anteriores
|
*/
$config['allow_get_array'] = TRUE;

/*
|--------------------------------------------------------------------------
| Umbral de registro de errores
| ------------------------------------------------- -------------------------
|
| Puede habilitar el registro de errores estableciendo un umbral por encima de cero. los
| umbral determina qué se registra. Las opciones de umbral son:
|
| 0 = Desactiva el registro, registro de errores APAGADO
| 1 = Mensajes de error (incluidos los errores de PHP)
| 2 = Mensajes de depuración
| 3 = Mensajes informativos
| 4 = Todos los mensajes
|
| También puede pasar una matriz con niveles de umbral para mostrar tipos de error individuales
|
| array (2) = Mensajes de depuración, sin mensajes de error
|
| Para un sitio en vivo, por lo general, solo se habilitarán los errores (1) para que se registren de otra manera
| sus archivos de registro se llenarán muy rápido.
|
*/
$config['log_threshold'] = 1;

/*
|--------------------------------------------------------------------------
| Ruta del directorio de registro de errores
| ------------------------------------------------- -------------------------
|
| Deje esto en BLANCO a menos que desee establecer algo diferente al predeterminado
| aplicación / registros / directorio. Use una ruta de servidor completa con barra inclinada.
|
*/


$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Extensión de archivo de registro
| ------------------------------------------------- -------------------------
|
| La extensión de nombre de archivo predeterminada para archivos de registro. El predeterminado 'php' permite
| proteger los archivos de registro a través de scripts básicos, cuando se van a almacenar
| bajo un directorio de acceso público.
|
| Nota: Dejarlo en blanco tendrá como valor predeterminado 'php'.
|
*/
$config['log_file_extension'] = '';

/*
|--------------------------------------------------------------------------
| Permisos de archivos de registro
| ------------------------------------------------- -------------------------
|
| Los permisos del sistema de archivos que se aplicarán a los archivos de registro recién creados.
|
| IMPORTANTE: Esto DEBE ser un número entero (sin comillas) y DEBE usar octal
| notación entera (es decir, 0700, 0644, etc.)
*/
$config['log_file_permissions'] = 0644;

/*
|--------------------------------------------------------------------------
| Formato de fecha para los registros
| ------------------------------------------------- -------------------------
|
| Cada elemento que se registra tiene una fecha asociada. Puedes usar la fecha de PHP
| códigos para establecer su propio formato de fecha
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Ruta del directorio de vistas de error
| ------------------------------------------------- -------------------------
|
| Deje esto en BLANCO a menos que desee establecer algo diferente al predeterminado
| aplicación / vistas / errores / directorio. Use una ruta de servidor completa con barra inclinada.
|
*/
$config['error_views_path'] = '';

/*
|--------------------------------------------------------------------------
|258/5000
| Ruta del directorio de caché
| ------------------------------------------------- -------------------------
| Deje esto en BLANCO a menos que desee establecer algo diferente al predeterminado
| aplicación / caché / directorio. Use una ruta de servidor completa con barra inclinada.
|
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Cache include Query String
| ------------------------------------------------- -------------------------
| Si se debe tener en cuenta la cadena de consulta de URL al generar
| archivos de salida de caché Las opciones válidas son:
|
| FALSE = Deshabilitado
| TRUE = Habilitado, tenga en cuenta todos los parámetros de consulta.
| Tenga en cuenta que esto puede dar como resultado un gran caché
| archivos generados por la misma página una y otra vez.
| array ('q') = Habilitado, pero solo tenga en cuenta la lista especificada
| de los parámetros de consulta.
|
*/
$config['cache_query_string'] = FALSE;

/*
|--------------------------------------------------------------------------
| Clave de encriptación
| ------------------------------------------------- -------------------------
|
| Si usa la clase de cifrado, debe establecer una clave de cifrado.
| Consulte la guía del usuario para obtener más información.
|
| https://codeigniter.com/user_guide/libraries/encryption.html
|
*/
$config['encryption_key'] = '';

/*
|--------------------------------------------------------------------------
| Variables de sesión
| ------------------------------------------------- -------------------------
|
| 'sess_driver'
|
| El controlador de almacenamiento para usar: archivos, base de datos, redis, memcached
|
| 'sess_cookie_name'
|
| El nombre de la cookie de sesión, debe contener solo caracteres [0-9a-z_-]
|
| 'sess_expiration'
|
| La cantidad de SEGUNDOS que desea que dure la sesión.
| Establecer en 0 (cero) significa caducar cuando el navegador está cerrado.
|
| 'sess_save_path'
|
| La ubicación para guardar sesiones, depende del controlador.
|
| Para el controlador de 'archivos', es una ruta a un directorio grabable.
| ADVERTENCIA: ¡Solo se admiten rutas absolutas!
|
| Para el controlador de "base de datos", es un nombre de tabla.
| Lea el manual del formato con otros controladores de sesión.
|
| IMPORTANTE: ¡SE REQUIERE que establezca una ruta de guardado válida!
|
| 'sess_match_ip'
|
| Si coincidir con la dirección IP del usuario al leer los datos de la sesión.
|
| ADVERTENCIA: Si está utilizando el controlador de la base de datos, no se olvide de actualizar
| la tecla PRIMARY KEY de tu mesa de sesión cuando cambias esta configuración.
|
| 'sess_time_to_update'
|
| Cuántos segundos transcurrieron entre que CI regenerara la ID de la sesión.
|
| 'sess_regenerate_destroy'
|
| Si se deben destruir los datos de sesión asociados con la ID de sesión anterior
| cuando se regenera automáticamente la ID de la sesión. Cuando se establece en FALSE, los datos
| será eliminado más tarde por el recolector de basura.
|
| Otras configuraciones de cookies de sesión se comparten con el resto de la aplicación,
| a excepción de 'cookie_prefix' y 'cookie_httponly', que se ignoran aquí.
|
*/
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';

$config['sess_expiration'] = 0;
//$config['sess_expiration'] = 7200;
//$config['sess_expiration'] = 5; // un dia
//$config['sess_expire_on_close'] = TRUE;

$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

/*
|--------------------------------------------------------------------------
| Variables relacionadas con las cookies
| ------------------------------------------------- -------------------------
|
| 'cookie_prefix' = Establecer un prefijo de nombre de cookie si necesita evitar colisiones
| 'cookie_domain' = Configurado en .your-domain.com para las cookies de todo el sitio
| 'cookie_path' = Normalmente será una barra diagonal
| 'cookie_secure' = La cookie solo se establecerá si existe una conexión segura HTTPS.
| 'cookie_httponly' = La cookie solo será accesible a través de HTTP (S) (no javascript)
|
| Nota: estas configuraciones (con la excepción de 'cookie_prefix' y
| 'cookie_httponly') también afectará las sesiones.
|
*/
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;

/*
|--------------------------------------------------------------------------
| Estandarizar nuevas líneas
| ------------------------------------------------- -------------------------
|
| Determina si se estandarizarán los caracteres de nueva línea en los datos de entrada,
| que significa reemplazar \ r \ n, \ r, \ n apariciones con el valor de PHP_EOL.
|
| ADVERTENCIA: esta función está DEJADA y solo está disponible actualmente
| para fines de compatibilidad con versiones anteriores
|
*/
$config['standardize_newlines'] = FALSE;

/*
|--------------------------------------------------------------------------
| Filtrado global de XSS
| ------------------------------------------------- -------------------------
|
| Determina si el filtro XSS siempre está activo cuando GET, POST o
| Se encontraron datos de COOKIE
|
| ADVERTENCIA: esta función está DEJADA y solo está disponible actualmente
| para fines de compatibilidad con versiones anteriores
|
*/
$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Falsificación de solicitudes cruzadas
| ------------------------------------------------- -------------------------
| Permite configurar un token de cookies CSRF. Cuando se establece en TRUE, el token será
| revisado en un formulario enviado. Si está aceptando datos de usuario, es fuertemente
| se recomienda la protección CSRF recomendada.
|
| 'csrf_token_name' = El nombre del token
| 'csrf_cookie_name' = El nombre de la cookie
| 'csrf_expire' = El número en segundos que el token debe caducar.
| 'csrf_regenerate' = Regenerar token en cada envío
| 'csrf_exclude_uris' = Matriz de URI que ignoran los controles CSRF
*/
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();

/*
|--------------------------------------------------------------------------
| Compresión de salida
| ------------------------------------------------- -------------------------
|
| Habilita la compresión de salida Gzip para cargas de página más rápidas. Cuando está habilitado,
| la clase de salida probará si su servidor es compatible con Gzip.
| Incluso si lo hace, sin embargo, no todos los navegadores admiten compresión
| así que habilítalos solo si estás razonablemente seguro de que tus visitantes pueden manejarlo.
|
| Solo se usa si zlib.output_compression está desactivado en tu php.ini.
| No lo use junto con la compresión de salida de nivel httpd.
|
| MUY IMPORTANTE: si obtiene una página en blanco cuando la compresión está habilitada,
| significa que está generando algo prematuramente en su navegador. Podria
| incluso sea una línea de espacios en blanco al final de uno de sus scripts. por
| compresión para que funcione, no se puede enviar nada antes de que se llame al buffer de salida
| por la clase de salida. No haga "eco" de ningún valor con compresión habilitada.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Master Time Reference
| ------------------------------------------------- -------------------------
|
| Las opciones son 'locales' o cualquier zona horaria compatible con PHP. Esta preferencia dice
| el sistema ya sea para usar la hora local de su servidor como el maestro 'ahora'
| referencia, o convertirlo a la zona horaria configurada. Ver la 'fecha
| página de ayuda de la guía del usuario para obtener información sobre el manejo de la fecha.
|
*/
$config['time_reference'] = 'local';

/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
| Note: You need to have eval() enabled for this to work.
|
*/
$config['rewrite_short_tags'] = FALSE;

/*
|--------------------------------------------------------------------------
| Invertir IP Proxy
| ------------------------------------------------- -------------------------
|
| Si su servidor está detrás de un proxy inverso, debe incluir en la lista blanca el proxy
| Direcciones IP desde las que CodeIgniter debe confiar en encabezados como
| HTTP_X_FORWARDED_FOR y HTTP_CLIENT_IP para identificar correctamente
| la dirección IP del visitante.
|
| Puede usar una matriz o una lista de direcciones proxy separadas por comas,
| así como especificar subredes enteras. Aquí están algunos ejemplos:
|
| Separados por comas: '10 .0.1.200,192.168.5.0 / 24 '
| Array: array ('10 .0.1.200 ',' 192.168.5.0/24 ')
*/
$config['proxy_ips'] = '';
date_default_timezone_set('America/Bogota');
