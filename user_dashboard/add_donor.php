<?php
        include('../connection.php');
        session_start();

        $name = $_POST['name'];
        $fathername = $_POST['fathername'];
        $gender = $_POST['gender'];
        $datepicker = $_POST['datepicker'];
        $weight = $_POST['weight'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
$blood_reqd = $_POST['blood_group_reqd'];
        $units_reqd = $_POST['blood_units_reqd'];

        $fileInfo = PATHINFO($_FILES["photo"]["name"]);

        if (empty($_FILES["photo"]["name"])){
                $location="";
        }
        else{
                if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
                        $newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
                        move_uploaded_file($_FILES["photo"]["tmp_name"], "../upload/" . $newFilename);
                        $location = "upload/" . $newFilename;
                }
                else{
                        $location="";
                        ?>
                                <script>
                                        window.alert('Photo not added. Please upload JPG or PNG photo only!');
                                </script>
                        <?php
                }
        }

// echo "<pre>";
//      print_r($_POST);
//      exit();

      $insert = $connection->query("INSERT INTO donor(name, father_name, gender, dob, body_weight, email, state, city, address, pincode, phone, username_fk, status,blood_group, blood_uni$
        // $r = "INSERT INTO donor(name, father_name, gender, dob, body_weight, email, state, city, address, pincode, phone, image, username_fk) VALUES ('$name', '$fathername', '$gender', $
        // echo $r;
        // exit();
//echo($connection->error);


        if($insert){
                header('location:donor.php');
        }else {
                header('location:donor.php');
        }
?>


