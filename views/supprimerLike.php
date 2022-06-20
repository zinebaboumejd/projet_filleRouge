<?php
// echo '<pre>';
// var_dump($_POST);
// die;
if(isset($_POST['intpost'])){
    
    $suppanier = new PostController();
    $suppanier->supprimerLike();
    Redirect::to("like");
}
 
?>