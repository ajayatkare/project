<?php

$con=mysqli_connect('localhost','root','','filldata');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $req="insert into data(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')" ;
    mysqli_query($con, $req);
    
    header('location:book.php'); 

}else{
   echo "something went wrong please try again!";
}  


?>