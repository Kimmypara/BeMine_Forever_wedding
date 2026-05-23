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
<h1 class="title">Create Your RSVP Website</h1>
<p class="subtitle5">
    Choose a design, upload your images, and customise the colours for your wedding RSVP page.
</p>

<div class="rsvp-builder-card">

    <div class="text-center mb-5">
        <h1 class="title">Create Your RSVP Website</h1>

        <p class="subtitle5">
            Personalise your wedding RSVP website with elegant themes,
            romantic colours, and your favourite memories.
        </p>
    </div>

    <!-- THEMES -->

    <h3 class="builder-heading">Choose Your Website Theme</h3>

    <div class="theme-options">

        <label class="theme-card romantic-theme">
            <input type="radio" name="theme">

            <div class="theme-preview"></div>

            <h4>Romantic Floral</h4>
            <p>Soft pink floral wedding style</p>
        </label>

        <label class="theme-card luxury-theme">
            <input type="radio" name="theme">

            <div class="theme-preview"></div>

            <h4>Luxury</h4>
            <p>Elegant luxury wedding experience</p>
        </label>

        <label class="theme-card modern-theme">
            <input type="radio" name="theme">

            <div class="theme-preview"></div>

            <h4>Modern Minimal</h4>
            <p>Clean and modern aesthetic</p>
        </label>

        <label class="theme-card beach-theme">
            <input type="radio" name="theme">

            <div class="theme-preview"></div>

            <h4>Beach Wedding</h4>
            <p>Light coastal wedding theme</p>
        </label>

    </div>

    <!-- IMAGES -->

    <h3 class="builder-heading">Upload Your Images</h3>

    <div class="upload-grid">

        <div class="upload-box">
            <label>Cover Photo</label>
            <input type="file" class="form4">
        </div>

        <div class="upload-box">
            <label>Couple Photo</label>
            <input type="file" class="form4">
        </div>

        <div class="upload-box">
            <label>Gallery Images</label>
            <input type="file" class="form4" multiple>
        </div>

    </div>

    <!-- COLOURS -->

    <h3 class="builder-heading">Customise Theme Colours</h3>

    <div class="colour-grid">

        <div class="colour-card">
            <label>Main Colour</label>
            <input type="color" value="#d96c8f">
        </div>

        <div class="colour-card">
            <label>Background Colour</label>
            <input type="color" value="#fff7fa">
        </div>

        <div class="colour-card">
            <label>Text Colour</label>
            <input type="color" value="#2b2b2b">
        </div>

        <div class="colour-card">
            <label>Button Colour</label>
            <input type="color" value="#c75a80">
        </div>

    </div>

    <!-- EXTRA FEATURES -->

    <h3 class="builder-heading">Website Features</h3>

    <div class="feature-grid">

        <label class="feature-option">
            <input type="checkbox">
            Countdown Timer
        </label>

        <label class="feature-option">
            <input type="checkbox">
            Google Maps Location
        </label>

        <label class="feature-option">
            <input type="checkbox">
            Dress Code Section
        </label>

        <label class="feature-option">
            <input type="checkbox">
            Photo Gallery
        </label>

        <label class="feature-option">
            <input type="checkbox">
            RSVP Confirmation
        </label>

        <label class="feature-option">
            <input type="checkbox">
            Gift Registry
        </label>

        <label class="feature-option">
    <input type="checkbox">
    Food Allergies / Dietary Requirements
</label>

    </div>

    <button class="button w-100 mt-5">
        Create RSVP Website
    </button>

</div>



</div>
</main>
</body>
</html>













<?php include "includes/footer.php"; ?>