<?php include 'app/views/shares/header.php';
?>

<h1 class = 'title'>Thêm danh mục</h1>

<form method = 'POST'>
<label>Tên danh mục:</label>
<input type = 'text' name = 'name' required><br>

<label>Mô tả:</label>
<textarea name = 'description'></textarea><br>
<button type = 'submit' class = 'btn btn-primary'>Thêm</button>
<a href = '/Category/list' class = 'btn btn-danger mt-2 btn-form'>Quay lại danh sách danh mục</a>
</form>

<?php include 'app/views/shares/footer.php';
?>