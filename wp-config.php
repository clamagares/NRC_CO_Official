<?php
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
//define('DB_NAME', 'nrc2');
define('DB_NAME', 'h136464_');

/** Tu nombre de usuario de MySQL */
//define('DB_USER', 'root');
define('DB_USER', '984uher67');

/** Tu contraseña de MySQL */
//define('DB_PASSWORD', 'root');
define('DB_PASSWORD', '~Faiw740');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
//define('DB_HOST', 'localhost');
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY', 'iM`vOj[[.@TY6Or@0=cCRsdqOYP?`Pi[VvniwG<]EMxsUep.9Hvgy-]=/z+e1hhe');
define('SECURE_AUTH_KEY', 'SK=uvI~~Wcn~@@[y <z3?SsN*IQWPdqIjZ@lq!-VV4oyI9_q`8KEWdR<MK|lSQ%y');
define('LOGGED_IN_KEY', '0~V4<hrMR]|X-w<|xqk(YqnP&qw1/|<=!EAf:yGFx%j3h8DN?EH#Ul:?.;@s[%Uk');
define('NONCE_KEY', '2V~c[-?K.1DQ4VX<TU_Y/KF#/j+W_~:!Kh]rk#mYV[`KvW/%!fsXp6tNWD(5Dx?a');
define('AUTH_SALT', 'gCR1ZPU{DJ)eb1-R+ej=u(WtTEc1myoZOc)Sek#.Gw{#2F>%*;:`JHsU}A/(dPGU');
define('SECURE_AUTH_SALT', 'VWe]x^u)T1m(ruy]  cN;MvVsDyr}` .N1K.g jY#DLcoLL`Nb-kl:<[oY|!)Tc~');
define('LOGGED_IN_SALT', 'c~=wUI5XrbH&;?93}D !u1Ny3Am&E$|vP&)A|+7n[Ow3PU`R|VsZ;t3e-8Owx%T9');
define('NONCE_SALT', 'HdItB8ft}iE8hZqs+!>ln+Ue_D8m^^Zz-oComj!%3_P~rKId=& k-*NOH4l72jx%');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'nry784hs_';


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

