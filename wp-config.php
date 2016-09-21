<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
 //Added by WP-Cache Manager
 //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/zioncgrp/public_html/harpacca/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'zioncgrp_wordpress864');

/** MySQL database username */
define('DB_USER', 'zioncgrp_word864');

/** MySQL database password */
define('DB_PASSWORD', 'zLCQp9tu8CEU');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'w+JQE_l|eWRdr&-Y<ZrtWz(d$a[MyE!vr<RFOq|*sBuotjVU/U@C_Gz&MY>E^aNgV!@CD_Y(LqL^_J*%sdjWyKC=-wIagr<j|yTG)Ig*>_>}[ig%)^!@HSEaWc=Qule-');
define('SECURE_AUTH_KEY', 'od^TvKD{Vn(ACY|usHT>wyy@{fpD!%Psn{e+ZzYq@ipo{-kIhwCQ&ABZxhU_j{Wbx[BnnoN(;^xHyWd%SmrjRSUw)vvT%Ql$bvZ<MSF_scX$-@&?(^;zsn%Ha}yQ(&Z_');
define('LOGGED_IN_KEY', '*&Vofy}E=$!oML!%jNFsWJFg_x<DwS[JeULJL{^%yGXuaBrLYUWwqb)fsI&MgsHtt>_T[EtYchB;@GjfcEJ}-PnU@jS^RbrGU&hOc=THSHq$)-H@zarSu]GLRfBp_vs(');
define('NONCE_KEY', 'Pgrrfk|sDQ>%l;@zZBRiTli*+h}IdzHw!AbS[wCNbxGgcg>NHOtjM!lGfBZ/sVc%edIAPtH$=$(c+Ls@joj^NL>YWnmO$;gl<TxOW/@{O*dCktLIy;CzABzLYo?ENjaD');
define('AUTH_SALT', 'l)FL^+x?^*G_axQfv&vEB$+tudS%|ayn&|@Qdt$|DR/;bG]XlIBnoEW[+&&o;yZAEN%s}GPl*g=-^wY?gDjEVXil|TaWJUhgUz<X&@C{)th]j{We^@Zx%AzU(XXy[eas');
define('SECURE_AUTH_SALT', 'HtxT;(O)^;hWB_YQgC[iZ@!CvONLcqf{[(MUep{R%=iat@@Pyh!VVEQ^@yhsr}h*iXeTFn@vgx+S{F@kKnQeZOpTX)b&TQ*zsu;^<^TM<D(+ABv?CFT=BNSH^hL/Kf[=');
define('LOGGED_IN_SALT', 'glPXQ|;D]S&(VU_+LdUN&[rLzFHOHImMH/;T!LV]Zg%@(eqBb@IuGlldh&a_-o%)]je]WQX=>EtY-i;AlMJzqz@NTn=C{sK)fyjOy>/fIrDZ%H}YhU@;cQ]j{)$+RdPk');
define('NONCE_SALT', 'YaY{D|?Kn=gGkg<^|VDuzB|uFHtV@@/ZcdpN^Ba;gv>+*rkr&{WmWH>[(+pKyoike>Db)%UeZ(|_G&C@YpStj@!@(tHenOtWY]G+auO<cH)o=wp<bYiz/^tdYokqjOWs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cvah_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
