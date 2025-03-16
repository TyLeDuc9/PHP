<?php include 'app/views/shares/header.php';
?>

<?php if ( !empty( $errors ) ): ?>
<div class = 'alert alert-danger'>
<ul>
<?php foreach ( $errors as $error ): ?>
<li><?php echo htmlspecialchars( $error, ENT_QUOTES, 'UTF-8' );
?></li>
<?php endforeach;
?>
</ul>
</div>
<?php endif;
?>

<div class = 'container mt-4'>
<div class = 'row'>
<!-- Form Thêm Sản Phẩm -->
<div class = 'col-md-6'>
<div class = 'card shadow-sm'>
<div class = 'card-header'>
<h2 class = 'title'>Thêm sản phẩm</h2>
</div>
<div class = 'card-body'>
<form method = 'POST' action = '/Product/save' enctype = 'multipart/form-data' onsubmit = 'return validateForm();'>
<div class = 'mb-3'>
<label for = 'name' class = 'form-label'>Tên sản phẩm:</label>
<input type = 'text' id = 'name' name = 'name' class = 'form-control' required>
</div>

<div class = 'mb-3'>
<label for = 'description' class = 'form-label'>Mô tả:</label>
<textarea id = 'description' name = 'description' class = 'form-control' required></textarea>
</div>

<div class = 'mb-3'>
<label for = 'price' class = 'form-label'>Giá:</label>
<input type = 'number' id = 'price' name = 'price' class = 'form-control' step = '0.01' required>
</div>

<div class = 'mb-3'>
<label for = 'category_id' class = 'form-label'>Danh mục:</label>
<select id = 'category_id' name = 'category_id' class = 'form-control' required>
<?php foreach ( $categories as $category ): ?>
<option value = "<?php echo $category->id; ?>">
<?php echo htmlspecialchars( $category->name, ENT_QUOTES, 'UTF-8' );
?>
</option>
<?php endforeach;
?>
</select>
</div>

<div class = 'mb-3'>
<label for = 'image' class = 'form-label'>Hình ảnh:</label>
<input type = 'file' id = 'image' name = 'image' class = 'form-control'>
</div>

<button type = 'submit' class = 'btn btn-primary'>Thêm sản phẩm</button>
<a href = '/Product' class = 'btn btn-danger mt-2 btn-form'>Quay lại danh sách sản phẩm</a>
</form>
</div>
</div>
</div>
</div>
</div>

<?php include 'app/views/shares/footer.php';
?>