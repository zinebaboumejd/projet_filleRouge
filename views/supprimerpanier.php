<?php

	if(isset($_POST['intpost'])){      
		$suplike = new PostController();
		$suplike->supprimerpanier();
        Redirect::to("panier");
	}

?>

