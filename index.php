<?php
require 'vendor/autoload.php';

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product_list';

$controller = new ProductController();

switch ($page) {
    case 'product_list':
        $controller->index();
        break;

    case 'product_add':
        $controller->create();
        break;

    case 'product_store':
        $controller->store();
        break;

    case 'product_detail':
        $controller->detail();
        break;

    case 'product_edit':
        $controller->edit();
        break;

    case 'product_update':
        $controller->update();
        break;

    case 'product_delete':
        $controller->delete();
        break;

    default:
        http_response_code(404);
        echo "404 - Page Not Found";
}
