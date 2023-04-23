<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobil</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&family=Source+Sans+3:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <nav>
           <button class="home"><a class="add-link" href="index.php">Home</a></button>
           <button class="add"><a class="add-link" href="add-real-estate.php">Add</a></button>
        </nav>
    </header>
    <main>
        <h2>Lista de bunuri imobiliare:</h2>
        <hr>
     
            <table>
            <tr>
                <th>Adresa</th>
                <th>Tip</th>
                <th>Pret $</th>
                <th>Varianta</th>
                <th>Nr.Odai</th>
                <th>Metraj m2</th>
                <th class="act">Actions</th>
            </tr>
            
       <?php
             include("dbh.php");

             $query = "SELECT * FROM  `imobil`";

             $result = mysqli_query($conn, $query);
               
             while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['oras']} " . ' ' . "{$row['strada']}" . ' ' . "{$row['nr']}</td>";
                echo "<td>{$row['tip']}</td> ";
                echo "<td>{$row['pret']}</td>";
                echo "<td>{$row['varianta']}</td>";
                echo "<td>{$row['nr_odai']}</td>";
                echo "<td>{$row['metraj']}</td>";
                echo "<td class='actions'>";
                ?>
                <form method="POST" action="delete.php">
                   <?php
                   echo "<button name='delete' class='delete'  value={$row['id']}>Delete</button>";
                   echo "</form>";  
                   ?>
                   <form method="GET" action="update.php">
                       <?php
                   echo "<button name='update' class='update' value={$row['id']}>Update</button></td>";
                   echo "</form>";
                   echo "</tr>";
                } 
               ?>
        </table>
    

    </main>
</body>
</html>