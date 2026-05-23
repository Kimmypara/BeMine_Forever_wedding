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
<h1 class="title">Legal Documentations</h1>
<p class="subtitle4 mb-5">
    Important legal requirements and documents needed to get married in Malta.
</p>

<div class="legal-card">

    <h3>Required Documents</h3>

    <ul>
        <li>Valid Identification Card or Passport</li>
        <li>Birth Certificate</li>
        <li>Copies of Witness Identification Documents</li>
        <li>Marriage Banns Forms (RZ1 & RZ2)</li>
        <li>Free Status Certificate (if required)</li>
        <li>Divorce or Death Certificates (if applicable)</li>
    </ul>

</div>

<div class="legal-card">

    <h3>Important Information</h3>

    <p>
        Couples are requested to contact the Marriage Registry at least
        three months before the wedding date for the publication of marriage banns.
    </p>

    <p>
        Foreign documents may need to be apostilled or officially translated
        into English or Maltese.
    </p>

</div>

<div class="legal-card">

    <h3>Witness Requirements</h3>

    <ul>
        <li>Minimum of two witnesses</li>
        <li>Witnesses must be over 18 years old</li>
        <li>Copies of identification documents are required</li>
    </ul>

</div>

<div class="legal-card">

    <h3>Marriage Registry</h3>

    <p>
        For official procedures and appointments, couples should contact the
        Malta Public Registry / Identità Malta.
    </p>

    <a href="https://identita.gov.mt/marriage-registry/" target="_blank" class="button">
        Visit Official Website
    </a>

</div>

</div>
</main>
</body>
</html>













<?php include "includes/footer.php"; ?>