<?php

require_once 'vendor/autoload.php';

$config = array(

  'path' => '/',
/**
 * Callback URL: redirected to after authentication, successful or otherwise
 */
  'callback_url' => '{path}callback.php',
/**
 * A random string used for signing of $auth response.
 */
  'security_salt' => 'LDFmiilYf8Fyw5W10rx4W1KsVrieQCnpBzzpTBWA5vJidQKDx8pMJbmw28R1C4m',

  'Strategy' => array(
    // Define strategies and their respective configs here
    
  ),
);


//$Opauth = new Opauth( $config );