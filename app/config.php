<?php

define("APP_NAME", "Basic Name Gathering");
// Database connection details.
define('MYSQL_HOST',        'localhost');
define('MYSQL_DATABASE',    'db_bng');
define('MYSQL_USERNAME',    'root');
define('MYSQL_PASSWORD',    '');

define('MYSQL_AES_KEY',     'Vduu47qL51hLn6bkYkY6NlO1nivsmdfD');

// logs
define('LOGS_PATH',         __DIR__ . '/../logs/app.log');

// openssl
define('OPENSSL_KEY',       'H0SDRQzIGqclX2kbYBk9xspdn9U5f3Wa');
define('OPENSSL_IV',        'BzKAbjuREsHgnw56');

// email (define your credentials here)
define('EMAIL_HOST',        '');
define('EMAIL_USERNAME',    '');
define('EMAIL_PASSWORD',    '');
define('EMAIL_PORT',        '');
define('EMAIL_FROM',        'general@bng.com');