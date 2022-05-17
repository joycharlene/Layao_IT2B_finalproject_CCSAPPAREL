<?php


if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CC'S APPAREL WEBSITE</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="home" class="logo">CC'S APPAREL</a>

   <nav class="navbar">
      <li><a href="index.php" class="active">home</a></li>
      <li><a href="about.php">about</a></li>
      <li><a href="services.php">services</a></li>
      <li><a href="feedback.php">feedback and ratings</a></li>
      <li><a href="contact.php">contact</a></li>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/logo.png" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">WELCOME TO CC'S APPAREL!</h3>
      <span data-aos="fade-up">Look Good, Feel Good, Do Good!</span>
      <p data-aos="fade-up">Roses are red, Violet are blue so what are you waiting for, grab some too! CC's Apparel gives a dashing and stunning look. We will grant you. ;)</p>
      <a data-aos="fade-up" href="about.php" class="btn">about us</a>
   </div>

</section>

<!-- home section ends -->

<!-- bestsales section starts  -->
   
   <div class="bestsales" data-aos="fade-up">

      <h1 class="heading"> <span>Best Sales!</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>Top</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Terno</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Trousers for Women</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span> Shoes </span> <span>98%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span> Dress </span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span> Oversized Shirts </span> <span>98%</span></h3> </div>
      </div>
   </div>

<!-- bestsales section ends  -->

<!-- products section starts  -->

<section class="products" id="products">

   <h1 class="heading" data-aos="fade-up"> <span>products</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/top.jpg" alt="">
         <h1>TOP</h1>
         <h1> View <a href = "top.php"> MORE!</a></h1>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/terno2.jpg" alt="">
         <h1>TERNO</h1>
         <h1> View <a href = "terno.php"> MORE!</a></h1>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/TrousersMEN.jpg" alt="">
         <h1>Trousers for Men</h1>
         <h1> View <a href = "trouserformen.php"> MORE!</a></h1>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/TrousersWO.jpg" alt="">
         <h1>Trousers for Women</h1>
         <h1> View <a href = "trouserforwomen.php"> MORE!</a></h1>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/PoloShirts.jpg" alt="">
         <h1>Polo & Shirts for Men</h1>
         <h1> View <a href = "psmen.php"> MORE!</a></h1>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/shoes1.jpg" alt="">
         <h1>SHOES</h1>
         <h1> View <a href = "shoes.php"> MORE!</a></h1>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/dress1.jpg" alt="">
         <h1>DRESS</h1>
         <h1> View <a href = "dress.php"> MORE!</a></h1>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/formal2.jpg" alt="">
         <h1>FORMAL</h1>
         <h1> View <a href = "formal.php"> MORE!</a></h1>
         </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/oversized (1).jfif" alt="">
         <h1>OVERSIZED SHIRTS</h1>
         <h1> View <a href = "oversized.php"> MORE!</a></h1>
      </div>

   </div>

</section>

<!-- portfolio section ends -->


<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>CC'S Apparel</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>