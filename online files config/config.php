<?php
// HTTP
define('HTTP_SERVER', 'https://photo-hunters.ru/');

// HTTPS
define('HTTPS_SERVER', 'https://photo-hunters.ru/');

// DIR
define('DIR_APPLICATION', '/var/www/u0529961/data/www/photo-hunters.ru/catalog/');
define('DIR_SYSTEM', '/var/www/u0529961/data/www/photo-hunters.ru/system/');
define('DIR_IMAGE', '/var/www/u0529961/data/www/photo-hunters.ru/image/');
define('DIR_STORAGE', '/var/www/u0529961/data/www/photo-hunters.ru/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'u0529961_default');
define('DB_PASSWORD', 'pr1_8NQA');
define('DB_DATABASE', 'u0529961_default');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');