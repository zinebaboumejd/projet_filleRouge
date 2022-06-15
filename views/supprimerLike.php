<?php
// echo '<pre>';
// var_dump($_POST);
// die;
	if(isset($_POST['idlike'])){
       
		$suplike = new PostController();
		$suplike->supprimerlike();
        Redirect::to("detailpost");
	}
 
?>