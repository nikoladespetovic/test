<?php

$dataenv = parse_ini_file('../.env');

define('DB_TYPE', $dataenv['DB_TYPE']);
define('HOST', $dataenv['HOST']);
define('DB_USER', $dataenv['DB_USER']);
define('DB_PASSWORD', $dataenv['DB_PASSWORD']);
define('DB_NAME', $dataenv['DB_NAME']);