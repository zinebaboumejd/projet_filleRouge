<?php 
class AdmineController{
    // public function index($page){
    //     // include('views/'.$page.'.php');
    // }

    public function nombre_post(){
    
            $nombrepost = Admin::nombre_post();
            return $nombrepost;
        
    }
    public function nombre_member(){
        $nombremember = Admin::nombre_member();
        return $nombremember;
    }
    public function Ajouter_category(){
        if(isset($_POST['submit'])){
            $data = array(
                'typecategory' => $_POST['typecategory'],
             
            );
            $result = Admin::Ajouter_category($data);
            if($result === 'ok'){
                    Session::set('success', ' category Ajouter');
                    header("Location: " . BASE_URL."AjouterCategory");
            }else{
               echo $result ;
            }
        }
    }
   
    public function afficherselect(){
        $category = Admin::AfficherSelect();
        return $category;
    }
    public function affichermember(){
        $afficher_member = Admin::afficher_member();
        return $afficher_member;
    }
    public function supprimercategory(){
        if(isset($_POST['idcategory'])){
            $data['idcategory'] = $_POST['idcategory'];

            $result = Admin::supprimer_category($data);
            if($result === 'ok'){
                 Session::set('success', 'post Deleted');
                 header("Location: " . BASE_URL."AjouterCategory");
            }else{
               echo $result ;
            }
        }
        
       }


       public function  Afficher_commande(){
        $afficher_member = Admin:: Affichercommande();
        return $afficher_member;
    }
    public function totallike(){
        $total =Admin::totallike();
           return $total;
           
       }
      
}