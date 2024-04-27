<?php

// Load Laravel
require_once __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

// Run the scheduler
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$status = $kernel->call('schedule:run');

// Output status
// echo 'Scheduler executed. Status: ' . ($status == 0 ? 'Success' : 'Failure');
