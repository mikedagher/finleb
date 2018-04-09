<?php
	include ("connexion.inc.php");
    $idcon = connex();
    extract($_POST);
    $query = "SELECT * From category";
	$result = mysqli_query($idcon,$query);
    echo"<table border='1'>";
	while($row = mysqli_fetch_array($result)){
		echo"
		<tr>
		<td>{$row['cat_id']}</td>
		<td>{$row['cat_name']}</td>
		</tr>
		";
	}
	echo"</table>";
    ?>