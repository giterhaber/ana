<?php

require('config.php');


//receives data request 

$account = $_REQUEST['account'];
$password = $_REQUEST['password'];
$lockcode = $_REQUEST['lockcode'];
$discord = $_REQUEST['discord'];
$email = $_REQUEST['email'];

$sql = "INSERT INTO `accounttable` (`accountName`, `password`, `lockCode`, `discordID`, `email`) VALUES ('$account', '$password', '$lockcode', '$discord', '$email')";
$sql2 = "INSERT INTO `accounthistory` (`accountName`, `password`, `lockCode`, `discordID`, `email`) VALUES ('$account', '$password', '$lockcode', '$discord', '$email')";

if(mysqli_query($conn, $sql)){
echo "saved";

echo nl2br("$account, $password, $lockcode, $discord, $email");
} else{
echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}

if(mysqli_query($conn, $sql2)){
    echo "saved";
    
    echo nl2br("$account, $password, $lockcode, $discord, $email");
    } else{
    echo "ERROR: Hush! Sorry $sql2. "
        . mysqli_error($conn);
    }

// Close connection
mysqli_close($conn);

?>