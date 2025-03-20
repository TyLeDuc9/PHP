<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <!-- FontAwesome 6 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- NAVBAR -->
    <style>
.navbar {
    background-color: red;
    width: 100%;
    height: 10vh;
    display: flex;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
}

/* Container chính của navbar */
.nav-container {
    width: 80%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0 auto;
}

/* Logo */
.nav-container .logo {
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
}

/* Menu chính */
.nav-menu {
    display: flex;
    align-items: center;
    gap: 120px;
}

/* Danh sách menu */
.nav-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-menu ul li {
    display: inline-block;
    margin-right: 15px;
}

.nav-menu ul li a {
    text-decoration: none;
    color: white;
    font-size: 16px;
    font-weight: 500;
    display: flex;
    align-items: center;
}

.nav-menu .search {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 5px;
    padding-right: 10px;
}

.nav-menu .search input {
    border: none;
    outline: none;
}

.nav-menu .search i {
    color: gray;
    font-size: 14px;
    cursor: pointer;
}

.nav-category a {
    text-decoration: none;
    margin-left: 70px;
}

.nav-category .fa-bars {
    color: white;
    font-size: 18px;
    cursor: pointer;
}

.nav-links {
    display: none;
    list-style: none;
    padding: 10px;
    background: white;
    border: 1px solid #ddd;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    position: absolute;
    top: 50px;
    right: 0;
    width: 200px;
}

.nav-links li {
    padding: 10px;
}

.nav-links a {
    text-decoration: none;
    color: black;
    display: block;
}

.nav-links.show {
    display: block;
}

    </style>
    <!-- BANNER -->
    <style>
        .banner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80%;
    margin:20px auto;
}

.swiper {
    width: 58%; 
    height: 300px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    margin-left: 20px;
}
.swiper-slide img{
    height: 100%;
    padding-bottom: 10px;
    width: 100%;}

.banner-img {
    width: 40%; 
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.banner-img img {
    width: 70%; 
    border-radius: 10px;
    object-fit: cover;
    margin: 0 80px;
}
    </style>
    <!-- FILE -->
     <style>
/* FILE */
.title {
    text-align: center;
    color: black;
    padding: 20px;
    font-size: 26px;
}

.list-group{
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    width: 80%;
    margin: 0 auto;
    cursor: pointer;
}
.list-group-item {
    margin: 20px;
    padding: 15px;
    background: #fff; 
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    transition: box-shadow 0.3s ease-in-out;
}

.list-group-item:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
.list-price{
    color: red;
}

.list-group-item h2{
    font-size: 16px;
}
.btns a{
    color: white;   
}
/* EDIT.PHP  ADD.PHP*/
form {
    max-width: 600px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.form-group {
    margin-bottom: 15px;
}
label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
}
input[type="text"],
input[type="number"],
input[type="file"],
textarea,
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
}
input:focus,
textarea:focus,
select:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}
textarea {
    min-height: 120px;
    resize: vertical;
}
img {
    display: block;
    margin-top: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
button {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}
.alert {
    padding: 15px;
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 5px;
    margin-bottom: 15px;
}
.btn-form{
    width: 100%;
}
/* CART.PHP */
.btn-cart{
    background-color: red;
    padding: 6px;
    color:white;
    margin-left: 170px;

}
.btn-cart a{
    text-decoration: none;
}
.btn-cart:hover{
    background-color: black;
    color: white;
}
    </style>
    <!-- CART PRODUCT  -->
  <style>
    .product-cart {
    list-style: none;
    padding: 0;
    max-width: 900px;
    margin: 0 auto;
    
}

/* Mỗi sản phẩm trong giỏ hàng */
.product-cart-item {
    background: #fff;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    transition: transform 0.2s ease-in-out;
}

.product-cart-item:hover {
    transform: scale(1.02);
}

/* Ảnh sản phẩm */
.product-cart-item img {
    border-radius: 5px;
    max-width: 80px;
    height: auto;
    margin-right: 15px;
}

/* Tên sản phẩm */
.product-cart-item h2 {
    font-size: 15px;
    color: #007bff;
    margin-bottom: 10px;
}

/* Giá sản phẩm */
.product-cart-item p {
    font-size: 16px;
    margin: 5px 0;
    color: #555;
}

/* Form cập nhật số lượng */
.product-cart-form {
    display: flex;
    font-size: 12px;
    align-items: center;
    gap: 10px;
}

/* Nút bấm tăng/giảm số lượng */
.product-cart-form button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
    transition: background 0.3s;
}

.product-cart-form button:hover {
    background-color: #0056b3;
}


/* Hiển thị số lượng */
.product-cart-form span {
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

/* Tổng tiền sản phẩm */
.product-cart-item p strong {
    color: #dc3545;
    font-size: 18px;
}

/* Tổng tiền giỏ hàng */
.total-price {
    font-size: 22px;
    font-weight: bold;
    text-align: right;
    color: #dc3545;
    margin-top: 20px;
}

/* Nút điều hướng */
.btn-cart {
    display: inline-block;
    padding: 10px 15px;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    margin-top: 15px;
    margin-left: 300px;
    transition: background 0.3s;
}

.btn-cart:hover {
    background-color: #218838;
}
.sum-cart {
    text-align: center;
}
.sum-cart strong{
    color: #dc3545;
}

  </style>
  <!-- FOOTER -->
   <style>
    footer{
        width: 100%;
        background-color: red;
    }
    .footer-container{
        width: 80%;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        color: white;
        gap: 10px;

    }
    .footer-container h5{
        color: white;
        font-size: 16px;
        text-align: center;
        margin-right: 20px;
        padding: 10px 0;
    }
    .footer-container ul li{
        list-style: none;
        font-size: 12px;
        margin: 10px;
        cursor: pointer;
    }
    .footer-payment{
        display: flex;
    }
    .footer-payment img{
        margin: 0 5px;
        cursor: pointer;
    }
    .footer-app{
        display: flex;
        cursor: pointer;
    }
    .footer-qr img, .footer-download img{
        width: 80%;
    }
    .footer-contact{
        cursor: pointer;
        margin-left: 20px;
    }
    .footer-download img{
        padding-top: 15px;
    }
    .footer-social{
        display: flex;
    }
    .footer-social img{
        margin: 0 5px;
    }



   </style>

 </head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <h2>CellPhone S</h2>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="/Product"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
                </ul>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm..."><i class="fa-solid fa-search"></i>
                </div>
            </div>
            <div class="nav-category" id="nav-category">
                <a href="javascript:void(0);"><i class="fas fa-bars"></i></a>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="/Product/add">Thêm sản phẩm</a></li>
                <li><a href="/Category/list">Danh sách danh mục</a></li>

            </ul>

        </div>
    </nav>
    <div class="banner">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/iphone-16-pro-max-giam-300k-11-3.png" alt="Slide 1">
            </div>
            <div class="swiper-slide">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/Xiaomi-Buds-5-Pro-3.png" alt="Slide 2">
            </div>
            <div class="swiper-slide">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/Sliding-16e-mo-ban-7-3.jpg" alt="Slide 3">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="banner-img">
        <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/right-imac-m4-30-12.jpg" alt="">
        <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:10/plain/https://dashboard.cellphones.com.vn/storage/s-edu-2-0-right-laptop.jpg" alt="">
    </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const navCategory = document.getElementById("nav-category");
    const navLinks = document.getElementById("nav-links");

    navCategory.addEventListener("click", function (event) {
        event.preventDefault(); // Ngăn chặn chuyển trang khi nhấn vào <a>
        navLinks.classList.toggle("show"); // Hiển thị hoặc ẩn menu
    });

    // Đóng menu khi click ra ngoài
    document.addEventListener("click", function (event) {
        if (!navCategory.contains(event.target) && !navLinks.contains(event.target)) {
            navLinks.classList.remove("show");
        }
    });
});

</script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper(".mySwiper", {
                loop: true, // Lặp vô hạn
                autoplay: {
                    delay: 3000, // Chuyển slide sau 3 giây
                    disableOnInteraction: false, // Không dừng khi người dùng tương tác
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
