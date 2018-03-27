<?php
// Versioned config file
$dbms = 'mysqli';
$dbhost = getenv('MYSQL_HOST') ?: 'localhost';
$dbport = '';
$dbname = 'lycdb';
$dbuser = 'lycdb';
$dbpasswd = getenv('MYSQL_PASS');
$table_prefix = 'flyc_';
$acm_type = 'file';
$load_extensions = '';

@define('PHPBB_INSTALLED', true);
// @define('DEBUG', true);
// @define('DEBUG_EXTRA', true);
