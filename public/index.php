<?php

require_once '../vendor/autoload.php';
require_once '../config/constants.php';

session_start();

include_once '../config/routes.php';

\App\Logic\Router::dispatch();



