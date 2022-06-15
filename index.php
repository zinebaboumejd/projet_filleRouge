<?php
require_once './autoload.php';
require_once("./views/includes/header.php");
// require_once('./bootstrap.php');
require_once("controllers/HomeController.php");
$home = new HomeController();


$pages=['home','register','login','logout','show','AjouterPost','HomeMember','HomeAdmin','AfficherPost','supprimerpost','modifierpost','Memebers','detailpost','AfficherMember','Profile','AjouterCategory','like','supprimerLike'];

if(isset($_SESSION['log']) && $_SESSION['log'] == true){
    //  require_once("./views/includes/navbar.php");
    
    if(isset($_GET['page'])){      
        if(in_array($_GET['page'], $pages)){
          $page=$_GET['page'];
          $home->index($page);
        }else{
            include('./views/includes/404.php');
        }
    }else if($_SESSION['rool']==0){
        $home->index('HomeMember');
    }else if($_SESSION['rool']==1){
        $home->index('HomeAdmin');
    }


}else if (isset($_GET['page']) && $_GET['page'] === 'register'){
    $home->index('register');
}
else if (isset($_GET['page']) && $_GET['page'] === 'login'){
    $home->index('login');
}else{
    
    if(isset($_GET['page']) && $_GET['page'] === 'AfficherPost'){

        $home->index('AfficherPost');
        
    } elseif(isset($_GET['page']) && $_GET['page'] === 'detailpost'){

        $home->index('detailpost');
        
    }
    else
    $home->index('home');
    
   
}



 require_once("./views/includes/footer.php");