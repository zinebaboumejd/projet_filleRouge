<?php 
	if(isset($_POST['intpost'])){
		$suppost = new PostController();
		$suppost->supprimerPost();
        Redirect::to("AfficherPost");
	}
   

?>