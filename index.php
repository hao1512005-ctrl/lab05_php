<?php
require 'vendor/autoload.php';

use App\Controllers\ProductController;

$controller = new ProductController();
$controller->index();
