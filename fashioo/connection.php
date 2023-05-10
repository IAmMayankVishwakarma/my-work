
<?php

$con = mysqli_connect('localhost:3306','fashioo','6Q;^m_2f]we1','fashioo_fashioo');
// if($con){
//     echo "connection successful";
// }else{
//     echo "not connected";
// }

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $query = "INSERT INTO userData(name,email,number,message) VALUES ('$name',  '$email' ,'$number', '$message')";
   
    mysqli_query($con,$query);
} 

?>


