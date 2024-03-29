<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Giới thiệu</title>
   <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>Về chúng tôi</h3>
      <p><a href="home.php">Trang chủ</a> <span> / Giới thiệu</span></p>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="./imgs/laptop.svg" alt="">
         </div>

         <div class="content">
            <h3>ABOUT US</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quisquam reprehenderit blanditiis iste, qui
               in distinctio adipisci modi culpa? Adipisci fugit assumenda qui perferendis aut suscipit est non nesciunt
               provident.</p>
            <a href="./product.php" class="btn">Sản phẩm</a>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- steps section starts  -->

   <section class="steps">

      <h1 class="title">Các bước mua hàng</h1>

      <div class="box-container">

         <div class="box">
            <img src="imgs/step-1.png" alt="">
            <h3>Chọn sản phẩm</h3>
            <p>Nhấn vào sản phẩm muốn mua, thêm vào giỏ hàng và điền thông tin thanh toán.</p>
         </div>

         <div class="box">
            <img src="imgs/step-2.png" alt="">
            <h3>Giao hàng nhanh</h3>
            <p>Giao hàng toàn quốc trong vòng 3 ngày, quý khách vui lòng thanh toán khi nhận hàng.</p>
         </div>

         <div class="box">
            <img src="imgs/step-3.png" alt="">
            <h3>Nhận hàng</h3>
            <p>Chúc quý khách sử dụng sản phẩm tốt lành, đừng quên giới thiệu cho bạn bè biết.</p>
         </div>

      </div>

   </section>


   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->=






   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         grabCursor: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            700: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>