<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/stilos.css">

  <!-- Demo styles -->
  <style>body{background-image: url('img/rar.png');}
  </style>
</head>
<body>
  <!-- Swiper -->
  <?php  
	include('templates/header.php');
	
	?>
 
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(img/bosque.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/15.png)"></div>
      <div class="swiper-slide" style="background-image:url(img/embalse.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/8.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/lago.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/penon.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/12.png)"></div>
      <div class="swiper-slide" style="background-image:url(img/13.png)"></div>
      <div class="swiper-slide" style="background-image:url(img/cascada.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/11.png)"></div>
      <div class="swiper-slide" style="background-image:url(img/4.jpg)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

<?php  
	include('templates/footer.php');
	?>
</body>
</html>