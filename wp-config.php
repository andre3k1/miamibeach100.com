<?php

// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-local-config.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-local-config.php' );
  
// Otherwise use the below settings (on live server)
} else {

  // Live Server Database Settings
  define( 'DB_NAME',     'miamibeach100-wp');
  define( 'DB_USER',     'wp');
  define( 'DB_PASSWORD', 'Miamibeach@305!' );
  define( 'DB_HOST',     'localhost'  );
  
  // Overwrites the database to save keep edeting the DB
  define('WP_HOME','http://miamibeach100.com');
  define('WP_SITEURL','http://miamibeach100.com');
  
  // Turn Debug off on live server
  define('WP_DEBUG', false);

}

// Never use wp_ always use your own to prevent some hacks
$table_prefix  = 'wp_';

// Usual Wordpress stuff - Dont overide the ones you have already
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         'NTJa<,;w2zb<fQA$ C.DXIP`Yu`*;pd)v;ck K11EC3t8BY i8O{zc>uW5|sf#c1');
define('SECURE_AUTH_KEY',  's.n,-Y}zwD%JAq*=o9+#fp}CZ-KS/erjcZl|lphSN;H%<T<HCIuf8iMm+5Qa)vyW');
define('LOGGED_IN_KEY',    '^meKyp;2mC@{5U*A?sC):BS9DpF=~-S?+|K/S8@/r|@))xm1aKI:i:naxu~:7U}1');
define('NONCE_KEY',        '&Q6r8L7u,3rYHo:XwMp@t65DV,|@juUw*]YLQW8pcYP>CjA~gPv|$A#K .:MOB)8');
define('AUTH_SALT',        '2G+|$;G{|8F|(dR7Q0Wyw8[cJHK=L3SV7lWMy^(.jn#nFwW/08sL_4if4o3<oi$v');
define('SECURE_AUTH_SALT', 'Np)jM|^kDjOhhoe:,yIX6jWk.|k,@Mum(aQ_tIn5BC9@4.G~0O#4MQwZ]OL}*;2y');
define('LOGGED_IN_SALT',   '/uhd<I>->k+HR9/!TM{PkCE@3d?AP~{Of@CLI8<Ci4IJC.E)ehl.)Cbz0gz,&m@[');
define('NONCE_SALT',       'h0KcE&u{-nxb~)?wj)R^yPrwGoJz`=6FSZ6-Y4|(1HZK7Ip5D$t+$+2dpL_H>p2y');
define('WPLANG', '');

if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
        
require_once(ABSPATH . 'wp-settings.php');