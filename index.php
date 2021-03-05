<?php
    // fejléc bekérés
    include_once('header.php'); 
	// adatbázis
	include_once('dbconn.php');
    // projekt törlés bekérése
    include_once('delete.php');
?> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <div class = pt-3>
        <?php //oldal léptetés
		if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;
        // adatbázis csatlakozás
        include_once('dbconn.php');
        // oldal számolás
        $total_pages_sql = "SELECT COUNT(*) FROM tasks";
        $result = mysqli_query($db,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        // adatok lekérés
        $sql = "SELECT * FROM tasks LIMIT $offset, $no_of_records_per_page";
        $tasks = mysqli_query($db,$sql);
        while($data= mysqli_fetch_array($tasks)){
            ?> 
            <div class=container>
                 <div class="p-3 pt-1 container rounded border border-secondary">
                     <strong><?php echo $data['cim']; ?></strong>
                     <div class="float-right"><?php echo $data['statusz']; ?></div><br>
                     <?php // echo $data['leiras']; ?>
                     <?php echo $data['knev']; ?>
                     <?php echo "(" . $data['kemail'] . ")"; ?><br><br>
                     <a href="projectmodify.php?id=<?php echo $data['id'] ?>">
                     <button type="button" class="btn btn-primary">Szerkesztés</button></a>
                     <a href="index.php?del_task=<?php echo $data['id'] ?>">
                     <button type="button" class="btn btn-danger">Törlés</button></a>
                     
                </div>
            </div>
     
            <?php
        }

    ?>
    </div>	
    
       <div class= "container-center d-flex justify-content-center">
        <ul class="pagination text-center">
            <li><a href="?pageno=1">Első</a></li>
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno <= 1){ echo '?pageno='; } else { echo "?pageno=".($pageno - 1); } ?>">Előző</a>
            </li>
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno >= $total_pages){ echo '?pageno='; } else { echo "?pageno=".($pageno + 1); } ?>">Következő</a>
            </li>
            <li><a href="?pageno=<?php echo $total_pages; ?>">Utolsó</a></li>
        </ul>
    </div>
 




