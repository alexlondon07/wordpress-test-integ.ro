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
define('DB_NAME', 'integro_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'integro_db');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'integro_db');

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
define('AUTH_KEY', '`Nqt(::L1hP]a~sN[C;5M_7w.]{@mEP<}i,ny_}hAuBwD_lgwjd9JpX^UF7mZ_W&');
define('SECURE_AUTH_KEY', 'RIYSN;a?zP}*Ki!*5Aj$Arur^s] @K6{Ds5|dsF3hiPw1G]m@|!gla`Oo0Ku@:{y');
define('LOGGED_IN_KEY', 'hjVg*S392-e`=V0CwuEB|s,o.,RaU(NJ)-p:6~ruV`>AVF=6>*$5V~+KSe:[>OZK');
define('NONCE_KEY', 'W#/!ahxfZ<XobNPSGRD067)UWVX8+nHL=*`JXN#~2nv_lMWV$DJKI7$^kZ;-*BkM');
define('AUTH_SALT', 'j04Y,S_`fND9$4Ccj35?!FUmy.]_sSdNMU|X8NYg%5w%!R3h&6[)iWmWVsXcHaKv');
define('SECURE_AUTH_SALT', 'jgU`)$L4YP&4@-iWLqQ9%G5]rwbfr$|(}We5zC IEx^eFS/n^l]nwAImFlv3*csm');
define('LOGGED_IN_SALT', 'nI{]!wRa;+A!QlIh[O:MoN|[:dqvpugt{/aLCmI`sc$x:wvy_E$ ]NB4]qY ]Fn_');
define('NONCE_SALT', 'K-r+`x$p,LAO2d}+zYg3hpu@d8@l27>ag:5KF1yD6q?Z)I?;2[FjNdqBZP^C_:~Y');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

