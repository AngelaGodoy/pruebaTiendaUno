<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'divi_wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '8?:JMx;M92UA/Xr[InR5(_/znII@p)Z#_8[aXH0]7@VNy<J%{}j1ZO/|lI.fZdg6' );
define( 'SECURE_AUTH_KEY', 'W+%wdXl8GPm-gwn^_AjqfJH*+1/i.Q0@Vjv:C_r0~{yy((>iw4vf*c&&i I0mhMS' );
define( 'LOGGED_IN_KEY', '9:d6Uk9$i#WY=F!cJEz&*^x)JnHxfH?)r)9Xapt4<XHPndlx^jQ[X7abZjg~Wsdo' );
define( 'NONCE_KEY', '[~~A ()V7B:T}0L^=*U?WWVRm~wq ,D_YmWfF)Id`9Zt%!B/[T_nSf#]|-UyC4xG' );
define( 'AUTH_SALT', '`w/~+3.zlA>E#q^z#YTc]1q*RH>p+D)Wg!B_ZsY+0yR9@*Z=XNWT4mx5O!*GOEJA' );
define( 'SECURE_AUTH_SALT', '90Qh5=[||guTt.)_^*Hu&F^W]qmxmuf/oiQyskVIzj-+ON]v{|?:9LA/r51mc#7L' );
define( 'LOGGED_IN_SALT', '#+RtkVX&syhsD&kv11}6U }^]7&x}&yx*cQj+gK1CBps]]c$t8[3RCw&^xH(Vq_2' );
define( 'NONCE_SALT', 'YbIep_?xQ._EF7q*]Z]-7+<CPO}Mz:AE]gNn[hd&ks_LkW!m k_(TU:k2C%!yIRD' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

