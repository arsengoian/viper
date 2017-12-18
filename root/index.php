<?php

use App\Application;

require_once __DIR__.'/../vendor/autoload.php';
require_once '../config.php';

(new Application()) -> parseResponse();

