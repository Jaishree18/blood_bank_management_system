<?php
        include('../connection.php');
        session_start();

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $group = $_POST['group'];
        $unit = $_POST['unit'];
        $hospital = $_POST['hospital'];
        $datepicker = $_POST['date'];
        $contactperson = $_POST['contactperson'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $reason = $_POST['reason'];
        $member = $_POST['member'];
//var_dump($_POST);
//echo($_POST);
//echo("jsvhc");
//var_dump($member);
//echo($member);
//var_dump($_SESSION['membername']);
//echo($_SESSION['membername']);


// echo "<pre>";
//      print_r($_POST);


        $insert = $connection->query("INSERT INTO requester(patient_name,gender,blood_group,unit_blood,hospital_name,date,contact_person,address,email,contact_no,reason,member_fk) VALUES ($
// echo $insert;
//echo("ahgc");

//mysqli_error(mysqli $mysql)
//echo($connection->error);


//var_dump($insert);

//echo($insert->fetch_array());



        // $r = "INSERT INTO donor(name, father_name, gender, dob, body_weight, email, state, city, address, pincode, phone, image, username_fk) VALUES ('$name', '$fathername', '$gender', $
        // echo $r;
        // exit();

        if($insert){
                header('location:request.php');
        }else {
                header('location:request.php');
        }
?>




