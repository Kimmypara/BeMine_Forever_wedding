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
<h3 class="subtitle4 mb-5">Select your preferred reception layout before arranging guests.</h3>



    <div class="table-setup-grid">

        <!-- ROUND TABLE -->

        <div class="setup-card">

            <img class="dinner-tables" src="assets/images/round_table.png" alt="Round Tables">

            <div class="setup-content">

                <h3>Round Tables</h3>

                <p>
                    Classic wedding layout ideal for conversation and elegant receptions.
                </p>

                <button class="button w-100">
                    Choose Layout
                </button>

            </div>

        </div>

        <!-- LONG TABLE -->

        <div class="setup-card">

            <img src="assets/images/ambassador_table.png" alt="Long Banquet Tables">

            <div class="setup-content">

                <h3>Ambassador Tables</h3>

                <p>
                    Elegant family-style seating perfect for luxury weddings.
                </p>

                <button class="button w-100">
                    Choose Layout
                </button>

            </div>

        </div>

        <!-- U SHAPE -->

        <div class="setup-card">

            <img src="assets/images/dinner_dance.png" alt="U Shape Setup">

            <div class="setup-content">

                <h3>Dinner Dance style</h3>

                <p>
                    Ideal for lively wedding receptions with a dedicated dance floor and entertainment area.
                </p>

                <button class="button w-100">
                    Choose Layout
                </button>

            </div>

        </div>

      







      
</div>

</div>
</main>
</body>
</html>













<?php include "includes/footer.php"; ?>