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
define('DB_NAME', 'quesoscu_site');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'quesoscu_site');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Uq1imEWFBFO0');

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
define('AUTH_KEY', 'iNpq@l|vske) @2_F)!Kjdsci,dUk<*MrCk%lV%i<-Zr!lZ*JOF8o~yty_!NLl<u');
define('SECURE_AUTH_KEY', 'TXEP_<+iumqpAqI;8@s9&PuN5giQQcUCy[#<suvTWy}.ivD$]82me*nECaANjnCl');
define('LOGGED_IN_KEY', '4LLs]m2]O^NIRtCH7Wp?MuUN W/Jj*j|)!nBkL<Vk#<V&~XM#oafQ/Uju(aAS2U2');
define('NONCE_KEY', ':d*>L}+jHNI_sYd[=RKGKu6#K@Y~c~34/~f(Q{D iF7t9X(Y%0 ,lF`l0@yFW!O>');
define('AUTH_SALT', 'IgY->/./WV0JjZLhW{`<Ie(dr?mA1@c/RqgkGH4u2,v[fx1/NplT%r#KY;T(I.[W');
define('SECURE_AUTH_SALT', '3cle;R=PEg?WiXe?a48?B)z/SuO@1)3K|D<>P-_m,+n mfIbZg8o{#e^FoQ@%<W_');
define('LOGGED_IN_SALT', 'XjZao/;bVZwHFXd>54:REjRAH9H5Nq36.{(_Rdg12NW_1n2-1#{h4|T)=~qx-dux');
define('NONCE_SALT', ';?MCP5 +]UMYaLx]w<4,^ cXG[^.!5T-^o6w@o@EKUZ0OvJ.EDXi]>W4%cs)ANZH');

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

