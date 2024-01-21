<?php
require_once("config.php");

if (isset($_POST['form_submit'])) {
    $name = trim($_POST['name']);
    $fname = trim($_POST['fname']);
    $mname = trim($_POST['mname']);
    $gender = trim($_POST['gender']);
    $dob = trim($_POST['dob']);
    $address = trim($_POST['address']);
    $course = trim($_POST['course']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $addhar_no = trim($_POST['addhar_no']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $pin_code = trim($_POST['pin_code']);
    $reg_no = 'R' . rand(99, 10) . time();

    $sql = "INSERT into registeration(name,fname,mname,gender,dob,address,course,email,mobile,addhar_no,city,state,pin_code,reg_no) VALUES(:name,:fname,:mname,:gender,:dob,:address,:course,:email,:mobile,:addhar_no,:city,:state,:pin_code,:reg_no)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
    $stmt->bindParam(':mname', $mname, PDO::PARAM_STR);
    $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindParam(':dob', $dob, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':course', $course, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $stmt->bindParam(':addhar_no', $addhar_no, PDO::PARAM_STR);
    $stmt->bindParam(':city', $city, PDO::PARAM_STR);
    $stmt->bindParam(':state', $state, PDO::PARAM_STR);
    $stmt->bindParam(':pin_code', $pin_code, PDO::PARAM_STR);
    $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
    $stmt->execute();
    $last_id = $db->lastInsertId();
    if ($last_id != '') {
        header("location:preview.php?id=" . $reg_no);
    } else {
        echo 'Something went wrong';
    }
}
?>