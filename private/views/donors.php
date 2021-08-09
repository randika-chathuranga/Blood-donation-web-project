<?php
session_start();
$styles = array("donors.css");
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
    <div class="table-container">
        <table class="table table-hover table-striped ">
            <thead class="thead-light">
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Blood Group</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $userList = User::getDonorList();

                foreach ($userList as $user) {
                    echo '<tr>' .
                        '<td>' . $user->firstName . '</td>' .
                        '<td>' . $user->lastName . '</td>' .
                        '<td>' . $user->gender . '</td>' .
                        '<td>' . $user->email . '</td>' .
                        '<td>' . $user->phoneNumber . '</td>' .
                        '<td>' . $user->bloodGroup . '</td>' .
                        '</tr>';
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<?php include("templates/footer.php") ?>