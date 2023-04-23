<?php
require_once("dbh.php");
if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $sql="DELETE FROM `imobil` WHERE `id`=$id";
    mysqli_query($conn,$sql);
    header('location:/locuinte');

}