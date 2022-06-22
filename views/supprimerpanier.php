<?php

	if(isset($_POST['intpost'])){      
		$suplike = new PostController();
		$suplike->supprimerpanier();
    
		header("Location: ".BASE_URL."panier");
	}

?>

