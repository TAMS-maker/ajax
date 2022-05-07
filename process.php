<?php

$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}

if (empty($_POST['venue'])) {
    $errors['venue'] = 'venue is required.';
}

if (empty($_POST['venue'])) {
    $errors['venue'] = 'venue is required.';
}

if (empty($_POST['Date'])) {
    $errors['Date'] = 'Date is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);



include ('connect.php');

if (isset($_POST['Register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $eventtype = $_POST['eventtype'];
    $bdtype = $_POST['bdtype'];
    $Date = $_POST['Date'];
    $venue = $_POST['venue'];
    $Guest = $_POST['Guest'];
    $Pnumber = $_POST['Pnumber'];
    





    $sql = "INSERT INTO eevent VALUES ('', '$name','$email','$eventtype','$bdtype','$Date','$venue','$Guest','$Pnumber')";
    mysqli_query($con,$sql);

  
}
if (isset($_POST['Register'])) 
{
//do somthing
header("Location: index.php");
}