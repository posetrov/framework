<?php

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

use Framework\Http\Request;

$name = (new Request)->getQueryParams()['name'] ?? 'Guest';

echo 'Hello, ' . $name;

