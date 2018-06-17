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
define('AUTH_KEY', '$}Xa82G(RB/ZXLfL~Z[S2tK5y:L%jUt=GyGvB854F-0Y[=_P/]5%sxI~Fp{8W{r@');
define('SECURE_AUTH_KEY', 'X^>00_NQxD$AI,X$Lj-ZVdw0q9EXF#<LbBH[njI)``1Su96TFEQ!XD3;FFi|fDIq');
define('LOGGED_IN_KEY', 'Yb8c%|;n/O#*g#6gXy=  yqf#u<O+Ig:Ys&z0Vd?&J`44dIW:iRC@z45vLJS H|8');
define('NONCE_KEY', 'WRr5-20R2VM,%@BAG|UbmTO>i^*Gav$9W)3+Bs3/,d5*-`:TE*W!n(k<?a5bG^>i');
define('AUTH_SALT', '2`_S=7_[.nAD7s0eJ}7A ?HgO6G7wX$45+|,@#_x/1=QdF5PUk=/2O>}Xe<6Xk)n');
define('SECURE_AUTH_SALT', 'O?M}5CKsP@7_&T-b*`#3iMO}>cJl-7%RFM#@4.``oK`uA&LPu[ColWB4sB7pjft`');
define('LOGGED_IN_SALT', 'Nbj,Rt69[U<b~Z%Km43O0?G<sDjdC=/xUIbJ1i 1<MG55e^YpL0e-fc=d=aSkPKt');
define('NONCE_SALT', 'uwxh@>e<N8A-uI<V]Vy|!abFTA7!/2r|)getmznQ5JVhCcWg:).[n:>salz:uKL(');

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

