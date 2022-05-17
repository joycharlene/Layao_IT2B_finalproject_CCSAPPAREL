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

<!-------- SHOES -------->
<section class="shoes">
   <h1>SHOES</h1>
   <div class="row">
      <div class="shoes-col">
         <img src="images/shoes1.jpg" alt="">
         <h1>$22.5</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
      <div class="shoes-col">
          <img src="images/shoes2.jpg" alt="">
         <h1>$19.2</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
      <div class="shoes-col">
          <img src="images/shoes3.jpg" alt="">
         <h1>$17.0</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
   </div>

   <div class="row">
      <div class="shoes-col">
          <img src="images/shoes4.jpg" alt="">
         <h1>$23.9</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
      <div class="shoes-col">
          <img src="images/shoes5.jpg" alt="">
         <h1>$15.0</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
      <div class="shoes-col">
         <img src="images/shoes6.jpg" alt="">
         <h1>$22.5O</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
   </div>

   <div class="row">
      <div class="shoes-col">
          <img src="images/shoes7.jpg" alt="">
         <h1>$23.0</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
      <div class="shoes-col">
          <img src="images/shoes8.jpg" alt="">
         <h1>$27.9</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
      <div class="shoes-col">
          <img src="images/shoes9.jpg" alt="">
         <h1>$22.5</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
   </div>

   <div class="row">
      <div class="shoes-col">
          <img src="images/shoes10.jpg" alt="">
         <h1>$16.0</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
      <div class="shoes-col">
          <img src="images/shoes11.jpg" alt="">
         <h1>$24.0</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
      <div class="shoes-col">
          <img src="images/shoes12.jpg" alt="">
         <h1>$21.2</h1>
         <a href="payment.php" class="btn">BUY NOW</a> <a href="contact.php" class="btn">Message</a>
      </div>
   </div>


<h2><a href = "index.php"> Back to main page  here!</a></h2>

</section>

<!-- contact section ends -->

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