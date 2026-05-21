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

<section class="packages-section container py-5">

    <div class="text-center mb-5">
        <h1 class="title">Our Wedding Packages</h1>
        <h3 class="subtitle5 mb-5">
            Choose the perfect package for your special day and customise it to match your dream wedding.
        </h3>
    </div>

    <div class="table-responsive">

        <table class="table package-table align-middle text-center ">

           <thead>
    <tr>

        <th>
            <div class="package-title">
                <h3>Features</h3>
            </div>
        </th>

        <th>
            <div class="package-title">
                <h3>Standard</h3>
                <span>€25,000</span>
            </div>
        </th>

        <th class="featured-column">
            <div class="package-title">
                <h3>Gold</h3>
                <span>€50,000</span>
                <div class="popular-badge">Most Popular</div>
            </div>
        </th>

        <th>
            <div class="package-title">
                <h3>Luxury</h3>
                <span>€75,000</span>
            </div>
        </th>

    </tr>
</thead>

            <tbody class="package-table">

                <tr >
                    <td >Wedding Planning Chat</td>
                    <td>Basic</td>
                    <td>Full Planning</td>
                    <td>VIP Concierge</td>
                </tr>

                 <tr>
                    <td>Wedding Planner Consultation</td>
                    <td>1 Meeting</td>
                    <td>3 Meetings</td>
                    <td>Unlimited</td>
                </tr>

                <tr>
                    <td>Venue Coordination</td>
                      <td><span class="tick">✔</span></td>

    <td><span class="tick">✔</span></td>

    <td><span class="tick">✔</span></td>
                </tr>

            

                <tr>
                    <td>Photography</td>
                    <td>Basic</td>
                    <td>Premium</td>
                    <td>Luxury</td>
                </tr>

                <tr>
                    <td>Videography</td>
                    <td>✖</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>

                <tr>
                    <td>Floral Decorations</td>
                    <td>Basic</td>
                    <td>Premium</td>
                    <td>Luxury Custom Design</td>
                </tr>

                 <tr>
                    <td>Catering</td>
                    <td>Up to 80 Guests</td>
                    <td>Up to 150 Guests</td>
                        <td>Up to 250 Guests</td>       
                </tr>

                <tr>
                    <td>Entertainment</td>
                    <td>DJ</td>
                    <td>Live Band or DJ</td>
                    <td>Premium Entertainment</td>
                </tr>

                <tr>
                    <td>Wedding Website / RSVP</td>
                    <td>✖</td>
                    <td>✔</td>
                    <td>Premium Website</td>
                </tr>

                <tr>
                    <td>Customisation</td>
                    <td>Limited</td>
                    <td>Moderate</td>
                    <td>Fully Customisable</td>
                </tr>

                <tr>
                    <td></td>

                    <td>
                        <a href="#" class="button w-100">
                            Choose Standard
                        </a>
                    </td>

                    <td>
                        <a href="#" class="button w-100">
                            Choose Gold
                        </a>
                    </td>

                    <td>
                        <a href="#" class="button w-100">
                            Choose Luxury
                        </a>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</section>


    
</main>
</body>
</html>



<?php include "includes/footer.php"; ?>