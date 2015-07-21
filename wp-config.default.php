<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
  

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
define('AUTH_KEY',         't7~.ff&#+q]o>;:;d&d7W_i~rT}pbLAM`-P,<PfFoux+e<Ts9lh%OnUB-RH1:o2Y');
define('SECURE_AUTH_KEY',  '0bC,-JJ<wD^fM{Tq-V27sOk_M4u|N@^g(J=yM,Qy1hLS aD5@)|JidzC3ZeZ-Nhv');
define('LOGGED_IN_KEY',    'iJY>1$>Z:7_abA}+5n_rD{dtbkHwE0V9>gWNv>w|S%f`N?r#c+VG$l:+:IA2@wv|');
define('NONCE_KEY',        'Rd?;oLQC0J}[bv@+ne&1EQlh>r}zmap<M)(Z+!-LK0oZ|/P%ys1fKHXI/cv>>+R$');
define('AUTH_SALT',        '/X_A/+GT!xgQ)Y=i$k;_4y#sYqr|PL|wdQd0_.lzpt`XeiGxH-vgo4`Pu&S{U%%A');
define('SECURE_AUTH_SALT', ' eP}8W|O-)bNl^ZZE`F_3n{k5(Fz$cRNVsZE@ps4+V];+uI RX1SnJu->f2O/}vN');
define('LOGGED_IN_SALT',   'w+Dy!wTXYN69#~xnL6HNUp7iB={fGVOQtb>X]U@|6TPpPZ4I2+l4-A^WV;+7c %A');
define('NONCE_SALT',       'rvK6-d~Bs@9tg]!qzk$`fPQKu7HJ%-sF0EQ|.Xu.-Q|f7n@;A2=24[|>``C3d<1D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
