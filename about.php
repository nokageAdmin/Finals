<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

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
   <h3>About Us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/eplogo.png" alt="">
      </div>

      <div class="content">
         <h3>Why Eat at Eat's Persia: A Taste of Iranian Cuisine</h3>
         <p>Visit Eat's Persia to experience a unique culinary adventure where the rich and varied flavors of Iranian cuisine are brought to life.</p>

         <p>Authenticity is the foundation of every meal at Eat's Persia. Using only the finest and freshest ingredients, our menu offers age-old dishes that have been handed down through the centuries. Every mouthful delivers a genuine taste of Persia, from the fragrant rice to the tender kebabs.</p>

         <p>Excellent Ratings and Loyal Customers
         Take our word for it, but also consider the positive feedback and loyal customers we gained. Come dine with the happy diners who have made Eat's Persia their first choice for a top-notch Iranian meal.</p>

         <p>Come and experience Eat's Persia, which offers a trip into the core of Iranian culture and food, rather than merely a meal. We can't wait to have you here!</p>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Owner and Staff of Eat Persia</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

      <div class="swiper-slide slide">
            <img src="images/opic.png" alt="">
            <p>Owner of Eat Persia</p>
            <h3>Mavy Atienza</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/st1.png" alt="">
            <p>Staff of Eat Persia</p>
            <h3>Edrick Aguillar</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/st2.png" alt="">
            <p>Staff of Eat Persia</p>
            <h3>Dash Tim Saeed</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/st3.png" alt="">
            <p>Staff of Eat Persia</p>
            <h3>Diana Ves Habibi</h3>
         </div>
      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
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