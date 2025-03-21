<?php include 'app/views/shares/header.php';
?>

<h1 class = 'title'>Danh sách sản phẩm</h1>

<ul class = 'list-group'>
<?php foreach ( $products as $product ): ?>
<li class = 'list-group-item'>
<h2>
<a href = "/Product/show/<?php echo $product->id; ?>">
<?php echo htmlspecialchars( $product->name, ENT_QUOTES, 'UTF-8' );
?>
</a>
</h2>

<?php if ( $product->image ): ?>
<img src = "/<?php echo $product->image; ?>" alt = 'Product Image' style = 'max-width: 100px;'>
<?php endif;
?>

<p><?php echo htmlspecialchars( $product->description, ENT_QUOTES, 'UTF-8' );
?></p>
<p class = 'list-price'>Giá: <?php echo htmlspecialchars( $product->price, ENT_QUOTES, 'UTF-8' );
?> VND</p>
<p>Danh mục: <?php echo htmlspecialchars( $product->category_name, ENT_QUOTES, 'UTF-8' );
?></p>
<div class = 'btns'>
<?php if (SessionHelper::isAdmin()): ?>
<a href="/Product/edit/<?php echo $product->id; ?>"
class="btn btn-warning ">

<i class="fas fa-edit me-1"></i> Sửa
</a>
<a href="/Product/delete/<?php echo $product->id; ?>"
class="btn btn-danger ">
<i class="fas fa-trash me-1"></i> Xóa
</a>
<?php endif; ?>

<!-- <a href = "/Product/edit/<?php echo $product->id; ?>" class = 'btn btn-warning'>Sửa</a>
<a href = "/Product/delete/<?php echo $product->id; ?>" class = 'btn btn-danger' onclick = "return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a> -->
<a href = "/Product/addToCart/<?php echo $product->id; ?>" class = 'btn btn-primary add-c'><i class = 'fa-solid fa-cart-shopping'></i></a>
</div>
</li>
<?php endforeach;
?>
</ul>



<?php include 'app/views/shares/footer.php';
?>
