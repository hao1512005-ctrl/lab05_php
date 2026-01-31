<<<<<<< HEAD
<?php
require 'vendor/autoload.php';

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product-list';

$controller = new ProductController();

switch ($page) {
    case 'product-list':
        $controller->index();
        break;

    case 'product-delete':
        $controller->delete();
        break;

    case 'product-detail':
        $controller->detail();
        break;

    default:
        echo "404 - Page Not Found";
    case 'product-add':
    $controller->create();
    break;

    case 'product-store':
    $controller->store();
    break;
    
    case 'product-edit':
    $controller->edit();
    break;

    case 'product-update':
    $controller->update();
    break;

}
=======
<?php
require 'vendor/autoload.php';

use App\Controllers\ProductController;

$controller = new ProductController();
$controller->index();
>>>>>>> f2d9616775d0f280c25faf26ecd4eecc080c1551
