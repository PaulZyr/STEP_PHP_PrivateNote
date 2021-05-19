<?php

ini_set('display_error', true);
ini_set('display_startup_error', true);
ini_set('log_errors', true);
ini_set('error_log', __DIR__.'/logs/errors.log');

error_reporting(E_ALL);

define('BASE_URL', 'http://localhost:8181/');
define('CONTROLLERS_DIR', __DIR__.'/controllers/');
define('MODELS_DIR', __DIR__.'/models/');
define('NOTES_DIR', __DIR__.'/notes/');
define('VIEWS_DIR', __DIR__.'/views/');
define('DATA_DIR', __DIR__.'/data/');
define('FILES_EXT', '.txt');
define('ALGORITHM', 'aes-192-cbc');

require_once __DIR__.'/routes.php';
