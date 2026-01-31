<<<<<<< HEAD
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Danh sách sinh viên</h2>
        <a href="index.php?page=product-add" class="btn btn-success">
            ➕ Thêm sinh viên
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Mã SV</th>
                    <th>Email</th>
                    <th width="220">Hành động</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($products as $sv): ?>
                    <tr>
                        <td><?= $sv['id'] ?></td>
                        <td><?= $sv['fullname'] ?></td>
                        <td><?= $sv['student_code'] ?></td>
                        <td><?= $sv['email'] ?></td>
                        <td>
                            <a class="btn btn-info btn-sm"
                               href="index.php?page=product-detail&id=<?= $sv['id'] ?>">
                               Chi tiết
                            </a>

                            <a class="btn btn-warning btn-sm"
                               href="index.php?page=product-edit&id=<?= $sv['id'] ?>">
                               Sửa
                            </a>

                            <a class="btn btn-danger btn-sm"
                               href="index.php?page=product-delete&id=<?= $sv['id'] ?>"
                               onclick="return confirm('Xóa sinh viên này?')">
                               Xóa
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            margin: 0 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h2>Danh sách sinh viên</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($students as $sv): ?>
    <tr>
        <td><?= $sv['id'] ?></td>
        <td><?= $sv['fullname'] ?></td>
        <td><?= $sv['student_code'] ?></td>
        <td><?= $sv['email'] ?></td>
        <td>
            <a href="#">Sửa</a> |
            <a href="#">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
>>>>>>> f2d9616775d0f280c25faf26ecd4eecc080c1551
