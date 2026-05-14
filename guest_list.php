<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id']) || (int)$_SESSION['role_id'] !== 2) {
    header("Location: login.php");
    exit;
}




include "includes/curl.php";
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

<h1 class="title">Guest List</h1>


<button type="button " class="button mt-3" onclick="openPopup()">
    Add Guest
</button>


<div id="guestPopup" class="popup-overlay">

    <div class="popup-box">

        <span class="close-popup" onclick="closePopup()">&times;</span>

        <h2 class="subtitle4 mb-2 mt-2">Fill in the Form to add a Guest</h2>

        <form action="guest_list.php" method="POST">

            <select name="guest_category" class="form4" required>
                <option value="" disabled selected>Please select a category</option>
                <option value="Family of the Bride">Family of the Bride</option>
                <option value="Family of the Groom">Family of the Groom</option>
                <option value="Friends">Friends</option>
                <option value="Work Friends">Work Friends</option>
                <option value="Other">Other</option>
            </select>

           

            <input class="form4 mt-1" type="text" name="guest_name" placeholder="Guest Name" required>

            <input class="form4 mt-1" type="text" name="guest_surname" placeholder="Guest Surname" required>

            <input class="form4 mt-1" type="email" name="guest_email" placeholder="Guest Email" required>

            <button class="button mt-3" type="submit" name="save_guest" value="save">
                Save Guest
            </button>

            <?php
if (isset($guestCreateResult['message'])) {
    echo "<div class='alert-message success'>";
    echo htmlspecialchars($guestCreateResult['message']);
    echo "</div>";
}
?>

        </form>

        

    </div>

</div>

<div class="guest-board">

    <?php if (!empty($guestReadResult['data'])): ?>

        <?php
        $groupedGuests = [];

        foreach ($guestReadResult['data'] as $guest) {
            if ((int)$guest['wedding_plan_id'] === (int)$existingPlan['wedding_plan_id']) {
                $groupedGuests[$guest['guest_category']][] = $guest;
            }
        }
        ?>

        <?php foreach ($groupedGuests as $category => $guests): ?>

            <div class="guest-category-box">
                <h3><?php echo htmlspecialchars($category); ?></h3>

                <table class="guest-table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>RSVP</th>
                    </tr>

                    <?php foreach ($guests as $guest): ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($guest['guest_name'] . " " . $guest['guest_surname']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($guest['guest_email']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($guest['rsvp_status']); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <p>No guests added yet.</p>

    <?php endif; ?>

</div>

   </div> 
</main>

<script>
function openPopup(){
    document.getElementById("guestPopup").style.display = "flex";
}

function closePopup(){
    document.getElementById("guestPopup").style.display = "none";
}
</script>


</body>
</html>

<?php include "includes/footer.php"; ?>