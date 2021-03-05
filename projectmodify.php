<?php
include_once('header.php');
include_once('dbconn.php');

$id = $_GET['id']; // Szerkesztő id

$query = mysqli_query($db,"SELECT * from tasks where id=".$id);

$data = mysqli_fetch_array($query); // Adatok megszerzése


if(isset($_POST['update'])) // update gomb lenyomása
{
    $cim = $_POST['cim'];
    $leiras = $_POST['leiras'];
    $statusz = $_POST['statusz'];
    $knev = $_POST['knev'];
    $kemail = $_POST['kemail'];
	
    $edit = mysqli_query($db,"UPDATE tasks set cim='$cim', leiras='$leiras', statusz='$statusz', knev='$knev', kemail='$kemail' where id=".$id);
	
    if($edit)
    {
        mysqli_close($db); // bezárás
        header("location:index.php"); // visszairánytás
        exit;
    }
    else
    {
        echo "mysqli_error()";
    }
}
// Szerkesztés form
?>
<h3>Szerkesztés</h3> 
<div class=container>
        <div class="form-group mt-3">
            <form method="post">
                <label for="cim">Cim:</label><br>
                <input type="text" name="cim" class="rounded form-control" value="<?php echo $data['cim'] ?>" required ><br>
                <label for="leiras">Leiras:</label><br>
                <input type="text" name="leiras" class="rounded form-control" value="<?php echo $data['leiras'] ?>" required><br>
                <label for="statusz">Státusz:</label><br>
                <select name="statusz" id="statuszok" class = "rounded" value="<?php echo $data['statusz'] ?>">  <br>
                        <option value="Fejlesztésre vár">Fejlesztésre Vár</option>
                        <option value="Folyamatban">Folyamatban</option>
                        <option value="Kész">Kész</option>
                </select><br>
                <label for="kapcsolatnev" class = "pt-3">Kapcsolattartó neve:</label><br>
                <input type="text" name="knev" class="rounded form-control" value="<?php echo $data['knev'] ?>" required><br>
                <label for="kapcsolatemail">Kapcsolattartó e-mail cime:</label><br>
                <input type="text" name="kemail" class="rounded form-control" value="<?php echo $data['kemail'] ?>" required>
                <button type="submit" name="update" id="add_btn" class="btn btn-primary mt-2" value="update">Mentés</button>
            </form>
        </div>
    </div>

