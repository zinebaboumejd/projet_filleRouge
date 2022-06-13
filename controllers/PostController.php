<?php
class PostController
{
     public function AjouterPost(){
            if(isset($_POST['submit'])){
                // var_dump($_POST);
                // var_dump($_FILES);
                $ext = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
                $new_name = time().'.'.$ext;
                $target = getcwd().'\public\image\\'.$new_name; //C:\wamp64\www\FilleRouge
                // echo $target;
                move_uploaded_file($_FILES["image"]["tmp_name"],$target);
                $data = array(                 
                    'titrei_mg' => $_POST['titrei_mg'],
                    'descreption' => $_POST['descreption'],
                    'image' => $new_name,
                    'idmember' => $_SESSION['idmember'],
                    'category' => $_POST['category'],
                    
                    
                );
                // var_dump($data);
                  
                // die(var_dump($data));
                $result = Post::AjouterPost($data); 
                if($result === 'ok'){
                    // echo 'Yoo';
                    Session::set('success', ' Added post');
                    Redirect::to('AfficherPost');
                   // header('Location: http://localhost/FilleRouge/AfficherPost');
            }else{
               echo $result ;
            }
                // die(var_dump($result));      
            }
        }  
       
    public function AfficherPost(){
       
            $posts = Post::AfficherPost();
            return $posts;
          
        }
        public function All_Post_id(){ // afichier selant dmember
       if (!isset($_SESSION['log'])){
        $posts= Post::AfficherPost();
       }else{
                   $posts = Post::All_AfficherPost_id($_SESSION['idmember']);
           
          
        }
        return $posts;
    }
        public function un_Post(){
            if(isset($_POST['intpost'])){
                $data = array(
                    'intpost' => $_POST['intpost']
                );
                $post = Post::un_Post($data);
                return $post;
            }
        }
        
       public function supprimerPost(){
        if(isset($_POST['intpost'])){
            $data['intpost'] = $_POST['intpost'];
            $result = post::supprimerPost($data);
            if($result === 'ok'){
                 Session::set('success', 'post Deleted');
                 Redirect::to('AfficherPost');
            }else{
               echo $result ;
            }
        }
       }
       public function modifierPost(){
        if(isset($_POST['submit'])){
            $ext = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
            $new_name = time().'.'.$ext;
            $target = getcwd().'\public\image\\'.$new_name; //C:\wamp64\www\FilleRouge
            // echo $target;
            // var_dump($_FILES);
            // exit();
            move_uploaded_file($_FILES["image"]["tmp_name"],$target);
            $data = array(
                'intpost' => $_SESSION['intpost'],
                'titrei_mg' => $_POST['titrei_mg'],
                'descreption' => $_POST['descreption'],
                'image' => $new_name,
                'category' => $_POST['category'],
                
            );
            $result = Post::modifierPost($data);
            if($result === 'ok'){
                Session::set('success', 'post Updated');
                    Redirect::to('AfficherPost');
            }else{
               echo $result ;
            }
        }
       }
     
    //    public function Ajouterlike(){
    //     if(isset($_POST['submit'])){
    //         $data = array(
    //             'idmember' => $_SESSION['idmember'],
    //             'intpost' => $_POST['intpost'],   
                         
    //         );
    //         $result = Post::like($data);
    //         if($result === 'ok'){
    //                 Session::set('success', '  Ajouter like');
    //                 Redirect::to('HomeMember');
    //         }else{
    //            echo $result ;
    //         }
    //     }
    // }
    




    public function addLike()
    {

        if (isset($_POST["submit"])) {
            $data = array(
                "idmember" => $_SESSION["idmember"],
                "intpost" => $_POST["intpost"]
            );
            $result = Post::addlike($data);
            if ($result === "ok") {
                Session::set("success", "product added to wishlist!");
                Redirect::to("Profile");
            } else {
                Session::set("error", "Product already in wishlist!");
                Redirect::to("HomeMemeber");
            }
        }
    }

}