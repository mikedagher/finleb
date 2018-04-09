<?php

function connex() {
	
	$idcon=mysqli_connect("localhost", "root", "root", "finleb");
	
	if ($idcon)
		echo "connexion reussie";
	else
		echo "connexion impossible...";
	return $idcon;
}
?>