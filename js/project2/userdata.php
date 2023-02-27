<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo "conn";
}
else{
    echo "not con";
}
?>