<?php 
ob_start();
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hotel = $_POST['hotel'];
    $message = "
    Welcome to NMEC Application
    Your request for booking is done
    Hotel: $hotel
    Name: $name
    Phone: $phone
    Email: $email";
    mail($email , "Booking Hotel (NMEC) Application" , $message);

    $_SESSION['message'] = 'Request is sent, you will get mail as soon as to confirm your request.';

    header("Location: booking-hotel.php");

}
else{
    header("Location: booking-hotel.php");
}

?>