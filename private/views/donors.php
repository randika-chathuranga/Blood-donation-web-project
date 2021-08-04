<?php
session_start();
$styles = array("donors.css");
include("templates/header.php");
?>

<div class="d-flex justify-content-center">
    <div class = "table-container">
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

                  foreach($userList as $user){
                      echo '<tr>'.
                      '<td>'.$user->firstName.'</td>'.
                      '<td>'.$user->lastName.'</td>'.
                      '<td>'.$user->gender.'</td>'.
                      '<td>'.$user->email.'</td>'.
                      '<td>'.$user->phoneNumber.'</td>'.
                      '<td>'.$user->bloodGroup.'</td>'.
                      '</tr>';
                  }
                ?>

            </tbody>
        </table>
    </div>
</div>
<?php include("templates/footer.php") ?>