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
                move_uploaded_file($_FILES["image"]["tmp_name"],$target);
                $data = array(                 
                    'titrei_mg' => $_POST['titrei_mg'],
                    'descreption' => $_POST['descreption'],
                    'image' => $new_name,
                    'idmember' => $_SESSION['idmember'],
                    'category' => $_POST['category'],
                    'prix' => $_POST['prix'],
                    
                );
                // var_dump($data);
                  
                // die(var_dump($data));
                $result = Post::AjouterPost($data); 
                if($result === 'ok'){
                    // echo 'Yoo';
                    // Session::set('success', ' Added post');
                    header("Location: " . BASE_URL."AfficherPost");
             
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
        public function AfficherPost_id(){ // afichier selant dmember
                   $posts = Post::AfficherPost_id($_SESSION['idmember']);      
      
        return $posts;
    }



        public function un_Post(){

            $post = Post::un_Post($_POST['intpost']);
            return $post;
          
        }
        
       public function supprimerPost(){
        if(isset($_POST['intpost'])){
            $data['intpost'] = $_POST['intpost'];
            $result = post::supprimerPost($data);
            if($result === 'ok'){
                 header("Location: " . BASE_URL."Profil");
               
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
                header("Location: " . BASE_URL."AfficherPost");
                  
            }else{
               echo $result ;
            }
        }
       }
       public function AjouterLike(){
      
            $data = array(   
                'idmember' => $_SESSION['idmember'],
                'intpost' => $_POST['intpost'],
            );
            // die(var_dump($data));
            $result = Post::AjouterLike($data);
            if($result === 'ok'){
                    header("Location: " . BASE_URL."like");
            }else{
                header("Location: " . BASE_URL."home");
            }
       
    }
    public function Afficherlike(){

       $idmember= $_SESSION['idmember'];
        $like = Post::Afficherlike($idmember);
           return $like;
    }

    public function supprimerLike(){
        if(isset($_POST['intpost'])){
            $data['intpost'] = $_POST['intpost'];

            $result = post::supprimerLike($data);
            if($result === 'ok'){
                 header("Location: ".BASE_URL."Profile");
            }else{
               echo $result ;
            }
        }
       }

       public function testLike(){
       
          
                $idmember =$_SESSION['idmember'];
                 $intpost=$_POST['intpost'];

            $result = Post::testLike($idmember,$intpost);
           
             return $result;
           
        }
        public function Ajouterpanier(){
            $data = array(   
                'idmember' => $_SESSION['idmember'],
                'intpost' => $_POST['intpost'],
            );
            // die(var_dump($data));
            if(isset($_POST['submit'])){
            $result = Post::Ajouterpanier($data);
            if($result === 'ok'){
                    header("Location: " . BASE_URL."panier");
                   
            }else{
                header("Location: " . BASE_URL."detailpost");
              
            }
        }
        
        }
        public function Afficherpanier(){
            //    $intpost=$_POST['intpost'];
                   $idmember= $_SESSION['idmember'];
                    $like = Post::Afficherpanier($idmember);
                    return $like;
                       
                    // var_dump($like);
                    // die;
                  
                }
                public function supprimerpanier(){
                    if(isset($_POST['intpost'])){
                        $data['intpost'] = $_POST['intpost'];
                //         echo '<pre>';
                //    var_dump($data['intpost']);
                //     die;
                        $result = post::supprimerpanier($data);
                        if($result === 'ok'){
                             header("Location: " . BASE_URL."panier");
                             
                        }else{
                           echo $result ;
                        }
                    }
                   }
                   public function totalprix(){
                    $total = Post::total();
                       return $total;
                       
                   }
                   public function valider($data){
                    if(isset($_POST['valider'])){
                      
                    $result = Post::valider($data);
                  
                    if($result === 'ok'){
                            header("Location: " . BASE_URL."panier");
                    }else{
                        header("Location: " . BASE_URL."panier");
                    }
                }
            } 
          
            
          
} 