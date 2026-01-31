<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<?php if (!$product): ?>
    <div class="alert alert-danger">
        Không tìm thấy sinh viên
    </div>
<?php else: ?>

    <h2 class="mb-4">Chi tiết sinh viên</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td><?= $product['id'] ?></td>
        </tr>
        <tr>
            <th>Họ tên</th>
            <td><?= $product['fullname'] ?></td>
        </tr>
        <tr>
            <th>Mã sinh viên</th>
            <td><?= $product['student_code'] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $product['email'] ?></td>
        </tr>
    </table>

    <a href="index.php?page=product-list" class="btn btn-secondary">
        ⬅ Quay lại danh sách
    </a>

<?php endif; ?>

</div>

</body>
</html>
