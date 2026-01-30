<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $model = new Product();
        $students = $model->getAllProducts();

        include "Views/product_list.php";
    }
}
