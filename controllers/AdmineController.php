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
                    Redirect::to('home');
            }else{
               echo $result ;
            }
        }
    }
    public function afficherselect(){
        $category = Admin::AfficherSelect();
       
        // echo "<pre>";
        // echo print_r($category);
        // die;
        return $category;
    }
}