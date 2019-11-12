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
define( 'DB_NAME', 'binomnuh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?xF&h7xu0Vd8u=A38~<MIq%zulCn_]~fE^vQ,T^3s*@[l5D!_>a0 L1%dT|f1$-p' );
define( 'SECURE_AUTH_KEY',  '0#D(Yf+X_5z2)!d?tA%P}$5ii]a_Chn!VxDV22T6!KD#rL;GUiXT:=q(hUPhy/j_' );
define( 'LOGGED_IN_KEY',    '[*[EU4j7-K##CE{R)JTsA=lR4]fgF3RISH^]tf5.<_(lc8$q?54koeXfjV9i8q@I' );
define( 'NONCE_KEY',        'GKr27)7UCV>hKA!!W+Fkuy/]}Ctq?/JTVhm!y5==t,/$tm,(Z}7JCER#O_l*2?kB' );
define( 'AUTH_SALT',        'KI)AJXd4dwWuSoL#-B<:9S{LxK-D>!QebLdJzL_N@5Ou!w/xw3y6;mRY-h!iB{,`' );
define( 'SECURE_AUTH_SALT', 'L#NSas(%hL2nGbcm Kvb<xnbF^RlD`GR.urL`(]#nfc;FP^]^vD5;ub3c#f0]DWw' );
define( 'LOGGED_IN_SALT',   'Kqwf.XKZe$e`0mX)k/EXh9@NbkEoh -,P&?EWlIBve#&osS$}i9yx/Cur><HTaKZ' );
define( 'NONCE_SALT',       'SBIvmvl+<U{3ilG?W`gKV?7tKp$Q5Bx&:~c~cA+&c)2:b:QCe+n|f008@;D8$U_v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
