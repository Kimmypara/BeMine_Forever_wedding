<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id']) || (int)$_SESSION['role_id'] !== 2) {
    header("Location: login.php");
    exit;
}

$slug = $_GET['category'] ?? '';

include "includes/curl.php"; // reads categories

$category_id = 0;
$currentCategoryName = "Vendors";
$vendorCategoryReadResult = null;

if (!empty($categoryReadResult['data'])) {
    foreach ($categoryReadResult['data'] as $category) {

        if (isset($category['slug']) && $category['slug'] === $slug) {
            $category_id = $category['category_id'];
            $currentCategoryName = $category['category_name'];
            break;
        }
    }
}

if ($category_id > 0) {

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "http://localhost/BeMine_Forever_wedding/api/vendor/readByCategoryId.php?category_id=" . $category_id);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        "Accept: application/json",
        "Content-Type: application/json"
    ]);

    $vendorResponse = curl_exec($curl);
    curl_close($curl);

    $vendorCategoryReadResult = json_decode($vendorResponse, true);
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


<h1 class="title"> <?php echo htmlspecialchars($currentCategoryName); ?></h1>

<div class="row align-items-stretch">

<?php if (!empty($vendorCategoryReadResult['data'])): ?>
    <?php foreach($vendorCategoryReadResult['data'] as $vendor): ?>

    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex">

        <div class="vendor-card card p-2 d-flex flex-column w-100">

            <div id="carouselVendor<?php echo $vendor['vendor_id']; ?>" class="carousel slide">

                <div class="carousel-inner">

                    <?php foreach ($vendor["images"] as $index => $image): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img src="<?php echo htmlspecialchars($image); ?>" class="photo d-block w-100" alt="Vendor image">
                        </div>
                    <?php endforeach; ?>

                </div>

                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselVendor<?php echo $vendor['vendor_id']; ?>"
                    data-bs-slide="prev">

                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselVendor<?php echo $vendor['vendor_id']; ?>"
                    data-bs-slide="next">

                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>

            <h3 class="subtitle3"><?php echo htmlspecialchars($vendor['vendor_name']); ?></h3>

            <p>
                Location:&nbsp; &nbsp;
                <?php echo htmlspecialchars($vendor['locations']); ?>
            </p>

            <p class="price_text">
                Starting from:&nbsp; &nbsp;
                €<?php echo htmlspecialchars($vendor['min_price']); ?>
               
            </p>
            <p class="sm_text">Final pricing depends on services and wedding requirements.</p>

            <?php
$shortText = substr($vendor['basic_info'], 0, 120);
?>

<div class="basic-info-container">

    <p id="shortInfo<?php echo $vendor['vendor_id']; ?>">
        <?php echo htmlspecialchars($shortText); ?>...
        <a href="javascript:void(0);"
           class="read-toggle"
           onclick="
                document.getElementById('shortInfo<?php echo $vendor['vendor_id']; ?>').style.display='none';
                document.getElementById('fullInfo<?php echo $vendor['vendor_id']; ?>').style.display='block';
           ">
           Read More
        </a>
    </p>

    <div id="fullInfo<?php echo $vendor['vendor_id']; ?>" style="display:none;">

        <p>
            <?php echo nl2br(htmlspecialchars($vendor['basic_info'])); ?>
        </p>

        <a href="javascript:void(0);"
           class="read-toggle"
           onclick="
                document.getElementById('fullInfo<?php echo $vendor['vendor_id']; ?>').style.display='none';
                document.getElementById('shortInfo<?php echo $vendor['vendor_id']; ?>').style.display='block';
           ">
           Read Less
        </a>

    </div>

</div>

            <div class="row">
                <div class="col-12">
 <div class="mt-auto">
    <button class="button w-100 align-self-end mt-2" onclick="openPopup('<?php echo htmlspecialchars($vendor['vendor_name']); ?>')">
        Request a Quotation
    </button>
</div>
                </div>
            </div>
           

        </div>

    </div>

    <?php endforeach; ?>

<?php else: ?>

    <p>No vendors found.</p>

<?php endif; ?>

</div>

<div id="quotePopup" class="popup-overlay">

    <div class="popup-box">

        <span class="close-popup" onclick="closePopup()">&times;</span>

        <h2 class="subtitle4 mb-2 mt-2">Request for Quotation</h2>

        <form action="" method="POST">

            <input class="subtitle2  mt-1" type="text" id="vendor_name" name="vendor_name" readonly>

            <input class="form4 mt-1" type="text" name="first_name" placeholder="First Name" required>

            <input class="form4 mt-1" type="text" name="last_name" placeholder="Last Name" required>

            <input class="form4 mt-1" type="email" name="email" placeholder="Email" required>

            <input class="form4 mt-1" type="text" name="wedding_date" placeholder="Wedding Date" onfocus="this.type='date'"
    onblur="if(!this.value)this.type='text'"
    required
>

<textarea 
    class="form4 mt-2 textarea-box"
    name="quotation_details"
    placeholder="Write more details about your wedding, preferred style, number of guests, budget, special requests, etc."
></textarea>

            <button class="button mt-3" type="submit" name="send_quotation" value="save">
                Send
            </button>

        </form>

    </div>

</div>

</div>
</main>


<script>
function openPopup(vendorName){
    document.getElementById("quotePopup").style.display = "flex";
    document.getElementById("vendor_name").value = vendorName;
}

function closePopup(){
    document.getElementById("quotePopup").style.display = "none";
}
</script>



</body>
</html>


<?php include "includes/footer.php"; ?>