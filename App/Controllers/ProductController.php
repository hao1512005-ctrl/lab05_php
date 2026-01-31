<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $model = new Product();
        $products = $model->all();
        include __DIR__ . "/../../views/product_list.php";
    }

    public function create()
    {
        $error = null;
        $old = [];
        include __DIR__ . "/../../views/product_add.php";
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
            $old = $_POST;
            include __DIR__ . "/../../views/product_add.php";
            return;
        }

        $model = new Product();
        $model->insert(compact('fullname', 'student_code', 'email'));

        header("Location: index.php?page=product_list");
        exit;
    }

    public function edit()
    {
        $id = (int)($_GET['id'] ?? 0);
        if ($id <= 0) die("ID không hợp lệ");

        $model = new Product();
        $product = $model->find($id);

        if (!$product) die("Không tìm thấy sinh viên");

        $error = null;
        include __DIR__ . "/../../views/product_edit.php";
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die("Phương thức không hợp lệ");
        }

        $id = (int)($_POST['id'] ?? 0);
        $fullname = trim($_POST['fullname'] ?? '');
        $student_code = trim($_POST['student_code'] ?? '');
        $email = trim($_POST['email'] ?? '');

        if ($fullname === '' || $student_code === '' || $email === '') {
            $error = "Vui lòng nhập đầy đủ thông tin";
            $product = compact('id', 'fullname', 'student_code', 'email');
            include __DIR__ . "/../../views/product_edit.php";
            return;
        }

        $model = new Product();
        $model->update($id, compact('fullname', 'student_code', 'email'));

        header("Location: index.php?page=product_list");
        exit;
    }

    public function delete()
    {
        $id = (int)($_GET['id'] ?? 0);
        if ($id <= 0) die("ID không hợp lệ");

        $model = new Product();
        $model->deleteById($id);

        header("Location: index.php?page=product_list");
        exit;
    }

    public function detail()
    {
        $id = (int)($_GET['id'] ?? 0);
        if ($id <= 0) die("ID không hợp lệ");

        $model = new Product();
        $product = $model->find($id);

        if (!$product) die("Không tìm thấy sinh viên");

        include __DIR__ . "/../../views/product_detail.php";
    }
}
