<?php
session_start();
$styles = array("donors.css","//cdn.jsdelivr.net/npm/@sweetalert2/theme-borderless/borderless.css");
include("templates/header.php");
?>

<div class="image_container">
    <img src="public/images/donors/header.jpg" alt="image">
    <div class="content">
        <h1>Find Blood Donors</h1>
        <p>Looking for a Donor to a life</p>
        </div>
</div>
<br><br><br>
<div class="hint-container">
  <p class="text-center hint mb-3">(Please click on a donor to see more details)</p> 
</div>
<div class="d-flex justify-content-center">
    <div class="table-container" id="table-container">
        <!-- The table is been built in front end -->
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/js/donors.js"></script>
<?php include("templates/footer.php") ?>