<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!--swipper css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
 <!-- font awsome cdn link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

 <!--custom css file link-->
 <link rel="stylesheet" href="style.css" />
  

  



</head>


<body>
  <!-- header section start-->
  <section class="header">
    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <!--header section ends-->

  <!--home section starts-->

  <section class="home">
    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(home-slide-1.jpg) no-repeat">
          <div class="content">
            <span> explore,discover,travel</span>
            <h3>travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>

          </div>
        </div>
        <div class="swiper-slide slide" style="background:url(home-slide-2.jpg) no-repeat">
          <div class="content">
            <span> explore,discover,travel</span>
            <h3>discover the new place</h3>
            <a href="package.php" class="btn">discover more</a>

          </div>
        </div>
        <div class="swiper-slide slide" style="background:url(home-slide-3.jpg) no-repeat">
          <div class="content">
            <span> explore,discover,travel</span>

            <h3>make your tour worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>

          </div>
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>


  </section>


  <!-- home section ends-->



  <!--services  section- starts-->

  <section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
      <div class="box">
        <img src="icon-1.png" alt="">
        <h3>adventure</h3>
      </div>

      <div class="box">
        <img src="icon-2.png" alt="">
        <h3>tour guide</h3>
      </div>
      <div class="box">
        <img src="icon-3.png" alt="">
        <h3>trekking</h3>
      </div>

      <div class="box">
        <img src="icon-4.png" alt="">
        <h3>camp fire</h3>
      </div>

      <div class="box">
        <img src="icon-5.png" alt="">
        <h3>off road</h3>
      </div>

      <div class="box">
        <img src="icon-6.png" alt="">
        <h3>camping</h3>
      </div>
    </div>
  </section>

  <!--services section end -->

  <!-- home about section starts-->
  <section class="home-about">

    <div class="image">
      <img src="home-about-1.jpg" alt="">
    </div>

    <div class="content">
      <h3> about us </h3>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Ut cumque ea et. Deleniti maxime enim ab, tenetur hic nobis aliquid dignissimos earum?
        Labore alias consectetur corrupti fuga eius neque quis.</p>
      <a href="about.php" class="btn">read more</a>

    </div>


  </section>


  <!-- home about section ends-->
  

  <!-- home package section starts-->
  <section class="home-package">
    <h1 class="heading-title">our package</h1>

    <div class="box-container">
      <div class="box">
        <div class="image">

          <img src="home-package-1.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure and tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Obcaecati maxime facilis totam velit ratione blanditiis odio nisi quae et,
            aliquam quasi, rerum, distinctio commodi repellat optio! Alias ducimus reprehenderit omnis.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>
      <div class="box">
        <div class="image">

          <img src="home-package-2.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure and tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Obcaecati maxime facilis totam velit ratione blanditiis odio nisi quae et,
            aliquam quasi, rerum, distinctio commodi repellat optio! Alias ducimus reprehenderit omnis.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>
      <div class="box">
        <div class="image">

          <img src="home-package-3.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure and tour</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Obcaecati maxime facilis totam velit ratione blanditiis odio nisi quae et,
            aliquam quasi, rerum, distinctio commodi repellat optio! Alias ducimus reprehenderit omnis.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>
    </div>
    <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
    

  </section>


  <!-- home package section ends -->

  <!-- home offer section starts-->


  <section class="home-offer">
    <div class="content">
      <h3>upto 60% off</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ad repellat quis consequuntur libero dicta rerum iure, 
        maxime in quia hic ea. Nobis, et. Quasi, ipsum eum suscipit obcaecati numquam dolores?</p>
        <a href="book.php" class="btn">book now</a>
    </div>
  </section>
  <!--home offer section ends-->








  

  <!-- footer section starts-->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
      </div>
      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask question</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use </a>
      </div>
      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i>+123-456-7890</a>
        <a href="#"> <i class="fas fa-phone"></i>+111-22-3333</a>
        <a href="#">
          <i class="fas fa-envelope"></i>dhirajkumar6932@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> mumbai, india-400104</a>
      </div>
      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook"></i>facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
      </div>
    </div>

    <div class="credit">
      created by <span> mr.Alpha designer</span>| all right reserved!
    </div>
  </section>

  <!--footer section ends-->
  <!--swipper js file link-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- custom js file link-->
  
<script src="script.js"></script>
  
</body>

</html>