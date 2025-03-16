<?php include 'app/views/shares/header.php';
?>
<h1 class = 'title'>Thanh toán</h1>
<form method = 'POST' action = '/Product/processCheckout'>
<div class = 'form-group'>
<label for = 'name'>Họ tên:</label>
<input type = 'text' id = 'name' name = 'name' class = 'form-control' required>
</div>
<div class = 'form-group'></div>
<label for = 'phone'>Số điện thoại:</label>
<input type = 'text' id = 'phone' name = 'phone' class = 'form-control' required>
</div>
<div class = 'form-group'>
<label for = 'address'>Địa chỉ:</label>
<textarea id = 'address' name = 'address' class = 'form-control'
required></textarea>
</div>
<button type = 'submit' class = 'btn btn-primary'>Thanh toán</button>
<a href = '/Product/cart' class = 'btn btn-danger mt-2 btn-form'>Quay lại giỏ
hàng</a>
</form>

<?php include 'app/views/shares/footer.php';
?>