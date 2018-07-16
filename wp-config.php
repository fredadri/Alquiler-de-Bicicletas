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
define('DB_NAME', 'capecmca_utpl');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'capecmca_uutpl');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'robocopa17');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '^-g4[?MP1SYxZY.zWP-;:+ViI(bp}{N,d`nn,N7dV{X]mef&xV(/sDPvfEmT7f0k');
define('SECURE_AUTH_KEY', 'qU*o%.{w2Dnv|5tN>XXZ_LSOawN~26@}jWOhHZAgg}7?s-cd7$:sGJeV$nk^A&0?');
define('LOGGED_IN_KEY', 'bdOa[fr!Iawa{&X<~bt>*%/4y!%XB,AG#]v!_bv%,,#I4so{d-E><! Wsuhv[;V(');
define('NONCE_KEY', '+2[Z+xRkQFp>8SdD/ qdH))Elg[<W1>YwVb=Jb+=cTzDR4 2<eG.vl,P t[vmlDr');
define('AUTH_SALT', 'cVkR+/28[U1<97bRqTG@Pc+-|&cljJlZn6rtTy0bkn7 )_SDn`fjb7g&&CuHWvV]');
define('SECURE_AUTH_SALT', 'N4/x8qMrcl_1,2CDZyeA)-g>4KPO(%2*)7n-j@V>(Gw$fOCKt!a UMLH6ac./=qh');
define('LOGGED_IN_SALT', '^5e;YqaucR7u5[7`PQID<]5# L>YOowy.ct&u#}8N}9+%ARNR?&EWPw (Ya[@b*7');
define('NONCE_SALT', '_Cd{!t4rR!`XT!iTbjW*S!]OGN8jtmb9P QMk:!(EysZZTz4,n]OIElpT>2[m%Cv');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_tp';


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

