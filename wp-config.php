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
define('DB_NAME', 'zenocraft_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rutusha@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define("FS_METHOD", 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1|0|zeU$]|cwcM5)X@Sv?HdOczgg|HWZ=NnAbWp_>`gdr308~ PXC_-E/cX)o/&^');
define('SECURE_AUTH_KEY', 'hk)/uer&T1EE<*3jp24#{v2Y[Xg3vvZn|H8Tm`lHa{-JgK P]JS?8zcRimWkqio0');
define('LOGGED_IN_KEY', 'iXcPAw=6;^5BU<-4:gq?Ci0Fl~e/+Ry(H9L<7%|_D$bxgNNMfbLSU<+|M5rRzk9C');
define('NONCE_KEY', 'B2*pQ&d6q4bxd2OM]M-u=D8~_oPSLw82XQvIbB^m]D/E$e)G)z[|yXy@Zs*W(M$k');
define('AUTH_SALT', 'Fxo(P.Jy(KEUKuL=W3:~X7v*1:p7#I2e(.bv`o5ot/@L2`mN@F:ef^MP}.hI7MG#');
define('SECURE_AUTH_SALT', ']g60<BsFA@D18}OJ,CtP#tX;Zs<hA~so]HxxF8[gRlBCu7{.=z^{odM}KvnB-~!f');
define('LOGGED_IN_SALT', 'm ~@hikHuB@88+PIB.pz-]_>1S0smn 7C0iIqp7heac<p0X&/#DaKYH{MW!Dq`J}');
define('NONCE_SALT', '=o>^|Fq>E<0d@K$LXZ_ii0A6kP%>(a5,l=EgqCCpp@5V2cYq8~1+b,Dm>|z8*HLq');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
