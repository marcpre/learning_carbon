<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s", Carbon::now() ."\n");

printf("Now: %s", Carbon::now('Europe/Helsinki') ."\n");

printf("Now: %s", Carbon::createFromFormat('Y-m-d H', '1975-05-21 22')->toDateTimeString() ."\n");


