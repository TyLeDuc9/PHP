<?php include 'app/views/shares/header.php';
?>
<h1 class = 'title'>Giỏ hàng</h1>
<?php if ( !empty( $cart ) ): ?>
<ul class = 'list-group'>
<?php foreach ( $cart as $id => $item ): ?>
<li class = 'list-group-item'>
<h2><?php echo htmlspecialchars( $item[ 'name' ], ENT_QUOTES, 'UTF-8' );

?></h2>

<?php if ( $item[ 'image' ] ): ?>
<img src = "/<?php echo $item['image']; ?>" alt = "Product

Image" style = 'max-width: 100px;'>
<?php endif;
?>

<p>Giá: <?php echo htmlspecialchars( $item[ 'price' ], ENT_QUOTES, 'UTF-8' );
?> VND</p>
<form method = 'POST' action = '/Product/updateCart'>
<input type = 'hidden' name = 'id' value = "<?php echo $id; ?>">
<button type = 'submit' name = 'quantity' value = "<?php echo $item['quantity'] - 1; ?>">-</button>
<p>Số lượng: <?php echo htmlspecialchars( $item[ 'quantity' ],

ENT_QUOTES, 'UTF-8' );
?></p>
<span><?php echo htmlspecialchars( $item[ 'quantity' ], ENT_QUOTES, 'UTF-8' );
?></span>
<button type = 'submit' name = 'quantity' value = "<?php echo $item['quantity'] + 1; ?>">+</button>
</form>

</li>
<?php endforeach;
?>
</ul>
<?php else: ?>
<p>Giỏ hàng của bạn đang trống.</p>
<?php endif;
?>

<a href = '/Product' class = 'btn btn-cart mt-2'>Tiếp tục mua sắm</a>
<a href = '/Product/checkout' class = 'btn btn-cart mt-2'>Thanh Toán</a>

<?php include 'app/views/shares/footer.php';
?>