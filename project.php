<?php
include_once('header.php');
include_once('dbconn.php');
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
	<title>WeLove</title>
</head>


    <div class=container>
        <div class="form-group mt-3">
            <form method="post" action="insert.php" class="input_form">
                <label for="cim">Cím:</label><br>
                <input type="text" name="cim" class="rounded form-control" required><br>
                <label for="leiras">Leíras:</label><br>
                <input type="text" name="leiras" class="rounded form-control" required><br>
                <label for="statusz">Státusz:</label><br>
                <select name="statusz" id="statuszok" class = "rounded">  <br>
                        <option value="Fejlesztésre vár">Fejlesztésre Vár</option>
                        <option value="Folyamatban">Folyamatban</option>
                        <option value="Kész">Kész</option>
                </select><br>
                <label for="kapcsolatnev" class = "pt-3">Kapcsolattartó neve:</label><br>
                <input type="text" name="knev" class="rounded form-control" required><br>
                <label for="kapcsolatemail">Kapcsolattartó e-mail címe:</label><br>
                <input type="text" name="kemail" class="rounded form-control" required>
                <button type="submit" name="submit" id="add_btn" class="btn btn-primary mt-2">Mentés</button>
            </form>
        </div>
    </div>


