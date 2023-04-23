<?php
    include("dbh.php");
    if (isset($_FILES) && isset($_POST)) {
    $oras=mysqli_real_escape_string($conn,$_POST['oras']);
    $strada=mysqli_real_escape_string($conn,$_POST['strada']);
    $nr=mysqli_real_escape_string($conn,$_POST['nr']);
    $tip=mysqli_real_escape_string($conn,$_POST['tip']);
    $pret=mysqli_real_escape_string($conn,$_POST['pret']);
    $varianta=mysqli_real_escape_string($conn,$_POST['varianta']);
    $nr_odai=mysqli_real_escape_string($conn,$_POST['nr-odai']);
    $metraj=mysqli_real_escape_string($conn,$_POST['metraj']);

    $query="INSERT INTO `imobil`(`oras`,`strada`,`nr`,`tip`,`pret`,`varianta`,`nr_odai`,`metraj`) VALUES('$oras','$strada','$nr','$tip','$pret','$varianta','$nr_odai','$metraj')";

    if (mysqli_query($conn, $query)) {
        echo "Ok!";
    } else {
        echo mysqli_query_error();
    }

    } else echo 'probleme';