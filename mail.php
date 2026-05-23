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





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
<?php include 'css/style.css'; ?>
</style>
</head>
<body>
    <main class="main-content">
<div class="container">

    <h1 class="title">Vendor Mail</h1>
    <p class="subtitle4 mb-5">View quotations from vendors and reply to them.</p>

    <div class="mail-layout">

        <!-- LEFT SIDE: VENDOR LIST -->
        <div class="mail-sidebar">

            <div class="mail-user active">
                <h4>Eternal Lens Co.</h4>
                <p>Quotation received</p>
            </div>

            <div class="mail-user">
                <h4>Dream Venue Malta</h4>
                <p>New message</p>
            </div>

            <div class="mail-user">
                <h4>Bloom Florists</h4>
                <p>Waiting for reply</p>
            </div>

        </div>

        <!-- RIGHT SIDE: MESSAGE AREA -->
        <div class="mail-chat">

            <div class="mail-chat-header">
                <h3>Eternal Lens Co.</h3>
                <p>Photography Vendor</p>
            </div>

            <div class="mail-messages">

                <div class="message vendor-message">
                    <p>
                        Hello, thank you for your quotation request.
                        Our full-day wedding photography package starts from
                        <strong>€1,200</strong>.
                    </p>
                    <span>Vendor</span>
                </div>

                <div class="message couple-message">
                    <p>
                        Thank you. Does this package include an album?
                    </p>
                    <span>You</span>
                </div>

            </div>

            <form class="mail-reply-form">
                <textarea placeholder="Write your reply..."></textarea>

                <button type="submit">
                    Send
                </button>
            </form>

        </div>

    </div>

</div>


</main>
</body>
</html>













<?php include "includes/footer.php"; ?>