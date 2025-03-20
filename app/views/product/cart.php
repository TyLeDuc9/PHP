<?php include 'app/views/shares/header.php';
?>
<h1 class = 'title'>Giỏ hàng</h1>

<?php if ( !empty( $cart ) ):
$totalCartPrice = 0;
// Khởi tạo tổng tiền giỏ hàng
?>
<ul class = 'product-cart'>
<?php foreach ( $cart as $id => $item ):
$totalItemPrice = $item[ 'price' ] * $item[ 'quantity' ];
// Tổng tiền sản phẩm
$totalCartPrice += $totalItemPrice;
// Cộng vào tổng tiền giỏ hàng
?>
<li class = 'product-cart-item'>
<h2><?php echo htmlspecialchars( $item[ 'name' ], ENT_QUOTES, 'UTF-8' );
?></h2>

<?php if ( $item[ 'image' ] ): ?>
<img src = "/<?php echo $item['image']; ?>" alt = 'Product Image' style = 'max-width: 100px;'>
<?php endif;
?>

<p>Giá: <?php echo number_format( $item[ 'price' ] );
?> VND</p>

<form method = 'POST' action = '/Product/updateCart' class = 'product-cart-form'>
<input type = 'hidden' name = 'id' value = "<?php echo $id; ?>">
<button type = 'submit' name = 'quantity' value = "<?php echo $item['quantity'] - 1; ?>">-</button>
<span>Số lượng: <?php echo $item[ 'quantity' ];
?></span>
<button type = 'submit' name = 'quantity' value = "<?php echo $item['quantity'] + 1; ?>">+</button>
</form>

<p><strong>Tổng tiền sản phẩm:</strong> <?php echo number_format( $totalItemPrice );
?> VND</p>
</li>
<?php endforeach;
?>
</ul>

<p  class = 'sum-cart'><strong>Tổng tiền giỏ hàng:</strong> <?php echo number_format( $totalCartPrice );
?> VND</p>

<?php else: ?>
<p>Giỏ hàng của bạn đang trống.</p>
<?php endif;
?>

<a href = '/Product' class = 'btn btn-cart mt-2'>Tiếp tục mua sắm</a>
<a href = '/Product/checkout' class = 'btn btn-cart mt-2'>Thanh Toán</a>

<?php include 'app/views/shares/footer.php';
?>
