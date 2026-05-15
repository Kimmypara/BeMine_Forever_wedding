<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id']) || (int)$_SESSION['role_id'] !== 2) {
    header("Location: login.php");
    exit;
}

include "includes/nav.php";
?>


<style>
<?php include 'css/style.css'; ?>
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="main-content">

<div class="container">
<h1 class="title">Contact Us</h1>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
   <picture>
    <source media="(max-width: 768px)" srcset="assets/images/contact_us4.png">
    <img src="assets/images/contact_us3.jpg" class="photo d-block w-100 mb-4" alt="Banner">
</picture>
    </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
<form action="contact_us.php" method="POST">
    <input type="text" name="first_name" placeholder="First Name" class="form2 w-100"><br>
    <input type="text" name="last_name" placeholder="Last Name" class="form2 w-100"><br>
    <input type="text" name="email" placeholder="Email" class="form2 w-100"><br>
    
    <textarea 
    class="form2 w-100 mt-2 textarea-box"
    name="message"
    placeholder="Please write your message here..."
></textarea>

<button class="button w-100 mt-3" type="submit" name="send_message">Send</button>
</form>

    </div>
</div>



</div>
</main>
</body>
</html>

<?php include "includes/footer.php"; ?>