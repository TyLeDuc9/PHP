    <?php include 'app/views/shares/header.php';
    ?>

    <form action = '' style = 'width: 80%; max-width: 1200px; margin: auto;'>
    <h1 class = 'title'>Danh sách danh mục</h1>
    <a href='add' class='btn btn-primary btn-sm' style="margin: 10px 115px;">Thêm danh mục</a> 
    <table border = '1' style="width: 80%; margin: auto;">
    <tr style="text-align: center;">
    <th>ID</th>
    <th>Tên danh mục</th>
    <th>Mô tả</th>
    <th>Hành động</th>
    </tr>
    <?php foreach ( $categories as $category ): ?>
    <tr style="text-align: center;">
    <td><?php echo $category->id;
    ?></td>
    <td><?php echo htmlspecialchars( $category->name );
    ?></td>
    <td><?php echo htmlspecialchars( $category->description );
    ?></td>
    <td>

<a href="edit&id=<?php echo $category->id; ?>" class='btn btn-warning btn-sm  mx-1 my-1'>Sửa</a> 
<a href="/Category/delete?id=<?= $category->id; ?>"
   onclick="return confirm('Bạn có chắc muốn xóa?')" 
   class='btn btn-danger btn-sm'>Xóa</a>


    </td>
    </tr>
    <?php endforeach;
    ?>
    </table>

    </form>
    <?php include 'app/views/shares/footer.php';
    ?>