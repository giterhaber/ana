<?php

require('config.php');

$id = $_REQUEST['id'];
echo $id;

$sql = "DELETE FROM `accounttable` WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "saved";
}
mysqli_close($conn);
?>
