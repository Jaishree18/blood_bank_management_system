<?php
        include('connection.php');
        session_start();

        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
$phone = $_POST['phone'];
        $address = $_POST['address'];
//echo($address);

        $insert = $connection->query("INSERT INTO member(name, username, password, email, phone,address,usertype) VALUES('$fullname', '$username', '$password', '$email','$phone','$address'$
        if($insert){
                $_SESSION['success'] = '';
        header('location:index.php');
        }else { ?>
        <div class="alert alert-success" style="background-color: red; color: white;">
    <strong>ERROR!</strong> This alert box could indicate a successful or positive action.
  </div>
         <?php }
?>

