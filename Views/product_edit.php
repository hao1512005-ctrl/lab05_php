<h2>Cập nhật sinh viên</h2>

<?php if (!empty($error)) : ?>
    <p style="color:red"><?= $error ?></p>
<?php endif; ?>

<form action="index.php?page=product_update" method="POST">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">

    <label>Họ tên</label><br>
    <input type="text" name="fullname" value="<?= $product['fullname'] ?>"><br>

    <label>Mã SV</label><br>
    <input type="text" name="student_code" value="<?= $product['student_code'] ?>"><br>

    <label>Email</label><br>
    <input type="email" name="email" value="<?= $product['email'] ?>"><br><br>

    <button type="submit">Cập nhật</button>
</form>
