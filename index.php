<?php

require_once 'vendor/autoload.php';


/**
 * Define paths
 */
define('CONF_FILE', dirname(__FILE__).'/'.'opauth.conf.php');
define('OPAUTH_LIB_DIR', dirname(__FILE__).'/vendor/opauth/opauth/lib/Opauth/');


/**
* Load config
*/
if (!file_exists(CONF_FILE)) {
  trigger_error('Config file missing at '.CONF_FILE, E_USER_ERROR);
  exit();
}

require CONF_FILE;

$Opauth = new Opauth( $config );