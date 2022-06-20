
<?php
if (isset($_GET['intpost'])) {
    $data = new PostController();
    $post = $data->un_Post();
 
 
  
}

$post = $data->un_Post();
print_r($post);
die;

?>

