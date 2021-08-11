<?php
session_start();
$styles = array("donors.css","//cdn.jsdelivr.net/npm/@sweetalert2/theme-borderless/borderless.css");
include("templates/header.php");
?>

<div class="image_container">
    <img src="public/images/donors/header.jpg" alt="image">
    <div class="content">
        <h1>Find Blood Donors</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit porro illo vitae eum excepturi, accusamus, molestiae sint animi maxime maiores itaque doloremque necessitatibus repellat exercitationem architecto expedita ex perferendis quae ipsa qui pariatur magni eveniet tenetur. Vel numquam dignissimos harum sed voluptas consequuntur aperiam eum sunt optio quos? Itaque minima deleniti iusto, praesentium fuga adipisci possimus debitis ducimus pariatur, vitae cumque autem sed minus laudantium. Aut similique itaque incidunt magnam?</p>
        </div>
</div>
<br><br><br>
<div class="d-flex justify-content-center">
    <div class="table-container" id="table-container">
        <!-- The table is been built in front end -->
    </div>
</div>
<div class="hint-container">
  <p class="text-center hint">(Please click on a donor to see more details)</p> 
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/js/donors.js"></script>
<?php include("templates/footer.php") ?>