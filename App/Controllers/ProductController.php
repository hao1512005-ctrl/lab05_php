<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $model = new Product();
        $products = $model->all();
        include __DIR__ . "/../../Views/product_list.php";
    }

    public function delete()
    {
        if (!isset($_GET['id'])) die("Thiếu ID");

        $model = new Product();
        $model->deleteById($_GET['id']);

        header("Location: index.php?page=product-list");

        exit;
    }

    public function detail()
    {
        if (!isset($_GET['id'])) die("Thiếu ID");

        $model = new Product();
        $product = $model->find($_GET['id']);

        include __DIR__ . "/../../Views/product_detail.php";
    }

    public function create()
    {
        $error = null;
        include __DIR__ . "/../../Views/product_add.php";
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die("Phương thức không hợp lệ");
        }

        $fullname = trim($_POST['fullname'] ?? '');
        $student_code = trim($_POST['student_code'] ?? '');
        $email = trim($_POST['email'] ?? '');

        if ($fullname === '' || $student_code === '' || $email === '') {
            $error = "Vui lòng nhập đầy đủ thông tin";
            include __DIR__ . "/../../Views/product_add.php";
            return;
        }

        $model = new Product();
        $model->insert([
            'fullname' => $fullname,
            'student_code' => $student_code,
            'email' => $email
        ]);

        header("Location: index.php?page=product-list");

        exit;
    }
    public function edit()
    {
        if (!isset($_GET['id'])) die("Thiếu ID");

        $model = new Product();
        $product = $model->find($_GET['id']);

        include __DIR__ . "/../../views/product_edit.php";
    }
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die("Phương thức không hợp lệ");
        }

        $id = $_POST['id'];
        $fullname = trim($_POST['fullname']);
        $student_code = trim($_POST['student_code']);
        $email = trim($_POST['email']);

        if ($fullname === '' || $student_code === '' || $email === '') {
            $error = "Vui lòng nhập đầy đủ thông tin";
            $product = $_POST;
            include __DIR__ . "/../../views/product_edit.php";
            return;
        }

        $model = new Product();
        $model->update($id, [
            'fullname' => $fullname,
            'student_code' => $student_code,
            'email' => $email
        ]);

        header("Location: index.php?page=product-list");
        exit;
    }

}
