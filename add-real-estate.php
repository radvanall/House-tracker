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
        <hr>
        <div class="container">
            <div class="title">Add Real estate</div>
        <form method="POST" id="add-real-estate-form" enctype="multipart/form-data">
            <div class="fields"> 
            <span class="details">Oras:</span>
            <input type="text" name="oras" placeholder="Oras" id="oras">
            <br>
            <span class="details">Strada:</span>
            <input type="text" name="strada" placeholder="Strada">
            <br>
            <span class="details">Numarul casei:</span>
            <input type="text" name="nr" placeholder="Numarul casei">
            <br>
            
            <label for="tip" class="details">Alegeti tipul:</label>
        <select name="tip" id="tip">
            <option value="ap">Apartament</option>
            <option value="casa">Casa</option>
            <option value="depozit">Depozit</option>
            <option value="of">Oficiu</option>
        </select>
            <br>
            <span class="details">Pret($):</span>
            <input type="number" min="0" name="pret" placeholder="Pret">
            <br>
            <label for="varianta"  class="details">Alegeti varianta:</label>
        <select name="varianta" id="varianta">
            <option value="mob">Mobilata</option>
            <option value="alba">Alba</option>
        </select> 
            <br>
            <span class="details">Numarul de odai:</span>
            <input type="number" min="0" name="nr-odai" placeholder="Nr. odai">
            <br>
            <span class="details">Metraj m^2:</span>
            <input type="number" min="0" name="metraj" placeholder="Metraj">
            <br>
            <input type="submit" class="submit" value="Add estate">
            
</div>
        </form>
</div>
    </main>
<footer>
    <div>
</div>
</footer>
    <script src="add-real-estate.js"></script>
</body>
</html>
