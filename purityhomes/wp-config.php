<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'ss_dbname_b3bdniej7m');

/** MySQL database username */
define('DB_USER', '9271cB296TYN7pi');

/** MySQL database password */
define('DB_PASSWORD', 'wjjgxWCHDBsSAbe4');

/** MySQL hostname */
define('DB_HOST', 'meghankradolfercom.ipagemysql.com');

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
define('AUTH_KEY', 'WDmb)Nyz&]l])H_XZ+g?T[bd=*r*UyL|dExAbkFAA]xPjR<i*|^xBoXtFlir<E>ScyCGJkOjdXUSVbV@NM+l*QA)xuD^JKkEu-m?w)gkG<tDEiYw%cWC(>OoSB%ig=LY');
define('SECURE_AUTH_KEY', '[e)YdNiT%{tNJl&)_>Wj]uYj>Vs)P^r(%/[DS|V[Gg[svLJv}r_dBgrhNLLv+sh);HtfUgL%WkL]eSCow*b}Ww@<(%%[FcEJG&@&=JA-[(eaLtAEQ[xOmVsA>uD}Ed$[');
define('LOGGED_IN_KEY', '-}VuaBmH}c=j/Q)?m&xSWIcLEXEbI)R<EzHDfi%^apLc<h?}fGso$*>mYQiwBXqfH%paboZ($=NAjfXor[AbdgFjXx)(kOP)wSdxF{{L?yntA_P-qXr)Q*k(wTvqOrn|');
define('NONCE_KEY', '><OII%RtfN;NAI>nwE+<&^y|k>zKdStIuiclY@/yjnpmy{%LYk(Y|O=UyqOK%p+qMY+sutL]t&J!Cq]kb;{FXsiI%]El-^q>|VkJFQyj(D|I(w|=iMjZyhlv@e|m>VuB');
define('AUTH_SALT', 'Den$d%ivWXRRc^tW(NZL)m[ZP%XuQ?(rubOys?rLvA$kPEcLkR)QSC|O*|[R^te*Cpc[SRzeZVIO?/h_}HIgMMhFCU*W=yM%De}=c(kicxuWEDUz}I}TFiKF!!jl%);D');
define('SECURE_AUTH_SALT', 'kRea?ROIGhOl/kQ@htF|kxSF%Ytq!z$WG_RNZ*^R/)cxDZ!H[HfUf{}vTeMzR$%Rq(igb-_XqHbAjmxFI*|Sjlj}|y@YboZWkgG;U]!dCQekRPoqqR<=|QK{+rUR&@K@');
define('LOGGED_IN_SALT', 'jLgOZl+S/qy]}hcY)GnNYIl[C;T];|V/?HM[O-kl@zimyn]yGwzG[rlrFR)wW-*T^znmClDLbc)^a}InsTFQ)BprD/ziE@@YgWRhQeT$Z>[D_w{^[gR^gF;MARVITsfK');
define('NONCE_SALT', ')zRgSOO^J_N+!Mvj%=@L=Zl^V)cNVgvE;XZQ)NzeYvDyr$J!F|(Lr-UlLDeS;sV%UDJFB+m}!k&*IAdqTpy^IsUkpIm/J]>Ga<n&QuxW;VB+J]YN=={SH)MMh@=@DIoJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_txgc_';

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
