<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Database;

$db = new Database();
$db->createTables();
echo "create tables ok\n";
