<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$address'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'payment sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$address')") or die('query failed');
      $message[] = 'payment sent successfully!';
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

<!-- payment section starts  -->

<section class="payment" id="payment">

   <h1 class="heading" data-aos="fade-up"> <span>PAYMENT</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" name="number" placeholder="enter your number" class="box" required>
      <input data-aos="fade-up" type="address" name="address" placeholder="Complete Address" class="box" required>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Quantity" class="box" required>
      <input type="submit" data-aos="zoom-in" value="place order" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>09987654321</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>ccsapparel@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Boac, Marinduque - 4900</p>
      </div>

   </div>

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