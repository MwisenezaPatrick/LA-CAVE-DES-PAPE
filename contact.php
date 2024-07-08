<?php 
session_start();
include("connect.php")

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $db="login";
    $conn=new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
        echo "Fail to connect DB".$conn->connect_error;
    }
    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Cave Des Pape</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <h1>La Cave Des Pape</h1>
    	<div>
    		<ul id="navbar">
    			<li><a href="homepage.php">Home</a></li>
    			<li><a href="product.php">Product</a></li>
    			<li><a href="about.html">About</a></li>
    			<li><a class="active" href="contact.html">Contact</a></li>
                <li><a href="index.php">Account</a></li>
    			<a href="cart.php"><img src="images/cart1.png" width="30" height="30px"></a>
    		</ul>
    	</div>

    </section>    
 <!-- HTML Form -->
<section id="form-details">
    <form action="contact.php?" method="post">
        <span>LEAVE A MESSAGE, We love to hear from you!</span>
        <h2>We love to hear from you</h2>
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
        <button class="normal" type="submit">Submit</button>
    </form>
</section>
     <section id="contact-details" class="section-p1">
         <div class="details">
             <span>GET IN TOUCH</span>
             <h2>Vist one of our agency locations or contact us today</h2>
             <h3>Head Office</h3>
             <div>
                 <li>
                     <i class="fal fa-map"></i>
                     <p>ParallelFour, MRP6+MRF, Total/Strathmore, Nairobi</p>
                 </li>
                 <li>
                     <i class="fal fa-envelope"></i>
                     <p>mwisenezapatrick04@gmail.com</p>
                 </li>
                 <li>
                     <i class="fal fa-phone-alt"></i>
                     <p>+254 740788529 / +250788403559</p>
                 </li>
                 <li>
                     <i class="fal fa-map"></i>
                     <p>Monday to Sunday: 9:00am to 18:00pm</p>
                 </li>
             </div>
         </div>

         <div class="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.770258289118!2d36.809479573959514!3d-1.3133003986742373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f114b9635f269%3A0x8802dba94f2740e9!2sParallelFour!5e0!3m2!1sen!2ske!4v1719871191284!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
     </section> 

<script src="script.js"></script>
</body>
</html>