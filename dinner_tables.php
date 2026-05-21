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
<h1 class="title">Wedding Table Layouts</h1>
<h3 class="subtitle4 mb-5">Choose your Style</h3>
<div class="row align-items-stretch">

 <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="table-card pb-3 pt-3 d-flex flex-column w-100">
        <a href="round_table.php"><img src="assets/images/round_table.png" class="photo d-block w-100 mb-4" alt=""></a>
        </div>
    </div>


    <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class=" table-card pb-3 pt-5  d-flex flex-column w-100">
        <a href="ambassador_table.php"><img src="assets/images/ambassador_table.png" class="photo d-block w-100 mb-4" alt=""></a>
        </div>
    </div>

   

    <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="table-card pb-3 pt-3  d-flex flex-column w-100">
        <a href="dinner_dance.php"><img src="assets/images/dinner_dance.png" class="photo d-block w-100 mb-4" alt=""></a>
        </div>
    </div>

      
</div>

</div>
</main>
</body>
</html>













<?php include "includes/footer.php"; ?>