<?php
$psname = filter_input(INPUT_POST, 'psname' );
$email = filter_input(INPUT_POST, 'email' );
$phone = filter_input(INPUT_POST, 'phone' );
$address = filter_input(INPUT_POST, 'address' );
$review = filter_input(INPUT_POST, 'review' );
$search = filter_input(INPUT_POST, 'search' );

if(!empty($psname) || !empty($email) || !empty($phone) || !empty($address) || !empty($review) || !empty($search))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = " ";
$dbname = "phpmyadmin";


// create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);\
if(mysqli_connect_error()){
    die('Connect Error(' .mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
    $sql = "INSERT INTO  coffee webpage user details (psname,email,phone,address,review,search)
    values ('$psname','$email','$phone','$address','$review','$search')";
    if($conn->query($sql))
    {
        echo "NEW RECORD INSERTED SUCCESSFULLY";
    }
    else{
        echo "ERROR : ". &sql ."<br>". $conn->error;
    }
    $conn->close();

}
else
{
    echo" UNSUCCESSFUL !!!!";
    die();
}
?>