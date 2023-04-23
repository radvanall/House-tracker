<?php
require_once("dbh.php");
if(isset($_GET['update']))
{
$id=$_GET['update'];
$sqlSelect="SELECT * FROM `imobil` WHERE `id`=$id";
$result=mysqli_query($conn,$sqlSelect);
$row=mysqli_fetch_assoc($result);

$selectedType=$row['tip'];
$selectedVariant=$row['varianta'];
} 


if(isset($_POST['submit'])){
$oras=mysqli_real_escape_string($conn,$_POST['orasU']);
$strada=mysqli_real_escape_string($conn,$_POST['stradaU']);
$nr=mysqli_real_escape_string($conn,$_POST['nrU']);
$tip=mysqli_real_escape_string($conn,$_POST['tipU']);
$pret=mysqli_real_escape_string($conn,$_POST['pretU']);
$varianta=mysqli_real_escape_string($conn,$_POST['variantaU']);
$nr_odai=mysqli_real_escape_string($conn,$_POST['nr-odaiU']);
$metraj=mysqli_real_escape_string($conn,$_POST['metrajU']);
    
    $sql="UPDATE  `imobil`  SET `oras`='{$oras}', `strada`='{$strada}',`nr`='{$nr}', `tip`='{$tip}',`pret`=$pret,`varianta`='{$varianta}',nr_odai=$nr_odai, metraj=$metraj WHERE `id`=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Ok!";
    } else {
        echo mysqli_error($conn);
    }
   header('location:/locuinte');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add real estate</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&family=Source+Sans+3:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
</head>
<body>
<header>
        <nav>
           <button class="home"><a class="add-link" href="index.php">Home</a></button>
           <button class="add"><a class="add-link" href="add-real-estate.php">Add</a></button>
        </nav>
    </header>
    <main>
    <h1>Update real estate</h1>
        <hr>
        <div class="container">
        <form method="POST">
        <div class="fields"> 
        <span class="details">Oras:</span>
            <input type="text" name="orasU" placeholder="Oras" id="oras" value=<?php echo $row['oras'];?>>
            <br>
            <span class="details">Strada:</span>
            <input type="text" name="stradaU" placeholder="Strada" value=<?php echo $row['strada'];?>>
            <br>
            <span class="details">Numarul casei:</span>
            <input type="text" name="nrU" placeholder="Numarul casei" value=<?php echo $row['nr'];?>>
            <br>
            <label for="tip">Alegeti tipul:</label>
        <select name="tipU" id="tip">
            <option <?php if($selectedType=='ap'){echo "selected";} ?> value="ap">Apartament</option>
            <option <?php if($selectedType=='casa'){echo "selected";} ?>   value="casa">Casa</option>
            <option <?php if($selectedType=='depozit'){echo "selected";} ?>  value="depozit">Depozit</option>
            <option <?php if($selectedType=='of'){echo "selected";} ?>  value="of">Oficiu</option>
        </select>
            <br>
            <span class="details">Pret($):</span>
            <input type="number" name="pretU" min="0" placeholder="Pret"  value=<?php echo $row['pret'];?>>
            <br>
            <label for="varianta">Alegeti varianta:</label>
        <select name="variantaU" id="varianta">
            <option <?php if($selectedVariant=='mob'){echo 'selected';} ?> value="mob">Mobilata</option>
            <option  <?php if($selectedVariant=='alba'){echo 'selected';} ?>  value="alba">Alba</option>
        </select> 
            <br>
            <span class="details">Numarul de odai:</span>
            <input type="number" name="nr-odaiU" min="0" placeholder="Nr. odai"  value=<?php echo $row['nr_odai'];?>>
            <br>
            <span class="details">Metraj m^2:</span>
            <input type="number" name="metrajU" min="0" placeholder="Metraj"  value=<?php echo $row['metraj'];?>>
            <br>
            <input type="submit" name="submit" class="submit" value="Update">
           
</div>
         
        </form>
</div>
    </main>
    <footer>
    <div>
</div>
</footer>
    
</body>
</html>
