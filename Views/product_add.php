<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Thêm sinh viên</h2>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="index.php?page=product-store">
        <div class="mb-3">
            <label class="form-label">Họ tên</label>
            <input type="text" name="fullname" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Mã sinh viên</label>
            <input type="text" name="student_code" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="index.php?page=product-list" class="btn btn-secondary">Hủy</a>
    </form>
</div>

</body>
</html>
