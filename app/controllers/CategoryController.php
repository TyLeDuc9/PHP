<?php
require_once( 'app/config/database.php' );
require_once( 'app/models/CategoryModel.php' );

class CategoryController {
    private $categoryModel;
    private $db;

    public function __construct() {
        $this->db = ( new Database() )->getConnection();
        $this->categoryModel = new CategoryModel( $this->db );
    }

    // Hiển thị danh sách danh mục

    public function list() {
        $categories = $this->categoryModel->getCategories();
        include 'app/views/category/list.php';
    }

    // Thêm danh mục

    public function add() {
        if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
            $name = $_POST[ 'name' ];
            $description = $_POST[ 'description' ];

            // Gọi model để thêm danh mục
            $this->categoryModel->addCategory( $name, $description );

            // Chuyển hướng về danh sách danh mục sau khi thêm
            header( 'Location: /Category/list' );
            exit();
        }

        // Hiển thị form thêm danh mục
        include 'app/views/category/add.php';
    }

    // Sửa danh mục

    public function edit() {
        $id = $_GET[ 'id' ];
        $category = $this->categoryModel->getCategoryById( $id );

        if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
            $name = $_POST[ 'name' ];
            $description = $_POST[ 'description' ];
            $this->categoryModel->updateCategory( $id, $name, $description );
            header( 'Location: /Category/list' );
        }
        include 'app/views/category/edit.php';
    }

    public function delete() {
        if ( isset( $_GET[ 'id' ] ) ) {
            $id = $_GET[ 'id' ];
            $this->categoryModel->deleteCategory( $id );
        }
        header( 'Location: /Category/list' );
        exit();
    }

}
?>
