<?php

$databases['default']['default'] = array (
  'database' => 'hospitex_db',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'driver' => 'mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);

/**
 * Enable local development services.
 */
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

ini_set('memory_limit', '-1');
$config['system.logging']['error_level'] = 'verbose';
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
error_reporting(E_ALL);

