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

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fa fa-heart"></i>
         <h3>tailor</h3>
         <p>We can create, recycle and fix your things. Making the worst into much better and elegant</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>fashion design</h3>
         <p>Fashion design is the art of applying design, aesthetics, clothing construction and natural beauty to clothing and its accessories. We create clothes including dresses, suits, pants, and skirts, and accessories like shoes and handbags, for consumers.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa fa-camera"></i>
         <h3>photograph</h3>
         <p>Need a photographer? We can offer you that. We are available for capturing your moments either it's for your wedding, birthdays, graduations and etc.just name it and we will give it.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa fa-scissors"></i>
         <h3>dressmaking</h3>
         <p>A dressmaker, also known as a seamstress, is a person who makes custom clothing for women, such as dresses, blouses, and evening gowns.For any occasions if you need our service in terms of making dresses in any kind of occasions, just give us a beep or call.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa fa-pencil"></i>
         <h3>stylist</h3>
         <p>Good stylists use their fashion knowledge to create appealing displays and outfits, accentuating the brand they work for and delivering a visual message.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa fa-birthday-cake"></i>
         <h3>organizing event</h3>
         <p>During the planning process, we collaborate closely with the clients to oversee every detail of the event. We are in charge of making sure the event runs smoothly and that everyone participating does their part.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

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


