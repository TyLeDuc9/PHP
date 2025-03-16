<?php include 'app/views/shares/header.php';
?>
<h1 class = 'title'>Sửa danh mục</h1>
<form method = 'POST' class = 'form-category'>
<label>Tên danh mục:</label>
<input type = 'text' name = 'name' value = "<?= $category->name ?>" required><br>

<label>Mô tả:</label>
<textarea name = 'description'>< ?= $category->description?></textarea><br>

<button type = 'submit' class = 'btn btn-primary'>Cập nhật</button>
<a href = '/Category/list' class = 'btn btn-danger mt-2 btn-form'>Quay lại danh sách danh mục</a>
</form>

<?php include 'app/views/shares/footer.php';
?>