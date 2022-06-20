<?php

class Post
{
    static public function AjouterPost($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO post (image,titrei_mg, descreption, idmember,category,prix) 
                                                VALUES (:image,:titrei_mg,:descreption,:idmember,:category,:prix)');
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':titrei_mg', $data['titrei_mg']);
        $stmt->bindParam(':descreption', $data['descreption']);
        $stmt->bindParam(':idmember', $data['idmember']);
        $stmt->bindParam(':category', $data['category']);
        $stmt->bindParam(':prix', $data['prix']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
    static public function AfficherPost()
    {

        $stmt = DB::connect()->prepare('SELECT * FROM post ');
        $stmt->execute();

        return $stmt->fetchAll();
        // var_dump($stmt->fetchAll());
    }

    static public function AfficherPost_id($idmember)
    {
        $stmt = DB::connect()->prepare('SELECT * FROM post WHERE idmember=:idmember  ');
        $stmt->bindParam(':idmember', $idmember);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    static public function All_AfficherPost_id($idmember)
    {
        if ($_SESSION['rool'] == 1) {
            $stmt = DB::connect()->prepare('SELECT
                p.intpost,
                p.titrei_mg,
                p.descreption,
                p.prix,
                p.image,
                p.category,
                m.idmember,
                m.nom,
                m.prenom
                
              
            FROM
                post as p
            INNER JOIN member as m ON p.idmember = m.idmember
            ORDER BY  p.idmember');
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = DB::connect()->prepare('SELECT * FROM post WHERE idmember=:idmember ');
            $stmt->bindParam(':idmember', $idmember);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
    static public function un_Post($data)
    {
        // print_r($data);
        // die;
        $intpost = $data;
        try {
            $query = 'SELECT * FROM post WHERE intpost=:intpost';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":intpost" => $intpost));
            $post = $stmt->fetch(PDO::FETCH_OBJ);
            return $post;
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function supprimerPost($data)
    {
        $id = $data['intpost'];
        try {
            $query = 'DELETE FROM post WHERE intpost=:intpost';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":intpost" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
    static public function  modifierPost($data)
    {
        $stmt = DB::connect()->prepare('UPDATE post SET  titrei_mg = :titrei_mg ,descreption = :descreption, image=:image,category=:category,prix=:prix  WHERE intpost=:intpost');
        $stmt->bindParam(':intpost', $data['intpost']);
        $stmt->bindParam(':titrei_mg', $data['titrei_mg']);
        $stmt->bindParam(':descreption', $data['descreption']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':category', $data['category']);
        $stmt->bindParam(':prix', $data['prix']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function like($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO like_ ( idmember,intpost) 
                                                VALUES (:idmember,:intpost)');
        $stmt->bindParam(':idmember', $_SESSION['idmember']);
        $stmt->bindParam(':intpost', $_POST['intpost']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function Afficherlike($idmember)
    {
        $stmt = DB::connect()->prepare('SELECT * FROM `post` INNER JOIN like_ WHERE like_.intpost=post.intpost and like_.idmember=:idmember  ');
        $stmt->bindParam(':idmember', $idmember);
      
        // $stmt->bindParam(':intpost', $intpost);
        $stmt->execute();
        return $stmt->fetchAll();
        // print_r($stmt->fetchAll());
        // die;
       
    }

    static public function AjouterLike($data)
    {
        // print_r($data);
        // die;
        $stmt = DB::connect()->prepare('INSERT INTO like_ (idmember,intpost)  VALUES (:idmember,:intpost)');
        $stmt->bindParam(':idmember', $data['idmember']);
        $stmt->bindParam(':intpost', $data['intpost']);
        if ($stmt->execute()) {
            return 'ok';
            
        } else {
            return 'error';
        }
    }
    static public function supprimerLike($data)
    {
    //     echo '<pre>';
    //   var_dump($data);
    //   die;
        $id = $data['intpost'];    
        try {
            $query = 'DELETE FROM like_ WHERE intpost=:intpost';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":intpost" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
    static public function testLike($intpost,$idmember)
    {
        $stmt = DB::connect()->prepare('SELECT *  FROM  like_ WHERE idmember=:idmember and intpost=:intpost ');
        $stmt->bindParam(':idmember', $idmember);
        $stmt->bindParam(':intpost', $intpost);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);

       
        }
        static public function Ajouterpanier($data)
        {
            
            $stmt = DB::connect()->prepare('INSERT INTO panier (idmember,intpost)  VALUES (:idmember,:intpost)');
            $stmt->bindParam(':idmember', $data['idmember']);
            $stmt->bindParam(':intpost', $data['intpost']);
            if ($stmt->execute()) {
                return 'ok';
                
            } else {
                return 'error';
            }
        }
        static public function Afficherpanier($idmember)
        {
            $stmt = DB::connect()->prepare('SELECT * FROM `post` INNER JOIN panier WHERE panier.intpost=post.intpost and panier.idmember=:idmember  ');
            $stmt->bindParam(':idmember', $idmember);
          
            // $stmt->bindParam(':intpost', $intpost);
            $stmt->execute();
            return $stmt->fetchAll();
            // print_r($stmt->fetchAll());
            // die;
           
        }
        static public function supprimerpanier($data)
    {
    //     echo '<pre>';
    //   var_dump($data);
    //   die;
        $id = $data['intpost'];    
        try {
            $query = 'DELETE FROM panier WHERE intpost=:intpost';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":intpost" => $id));
            
            if ($stmt->execute()) {
                return 'ok';
               
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
    static function total(){
        $stmt = DB::connect()->prepare('SELECT sum(post.prix) as totalprix FROM `post`  INNER JOIN panier  WHERE  panier.intpost=post.intpost  ');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    static public function valider($data)
    {
        // print_r($data); //Array ( [0] => 92 [1] => 91 )
        // die;
        $stmt = DB::connect()->prepare('INSERT INTO commende (idmember,intpost,datecom)  VALUES (:idmember,:intpost,NOW())');
        
    //  echo $_SESSION['idmember'];
    //  die;
        for($i=0;$i<sizeof($data);$i++){
            $stmt->bindParam(':idmember', $_SESSION['idmember']);
          $stmt->bindParam(':intpost', $data[$i]);
          $stmt->execute();
                  //   $exec='execute';     
            $stm = DB::connect()->prepare('DELETE FROM panier   WHERE intpost=:intpost');
            $stm->bindParam(':intpost',$data[$i] );         
        $stm->execute();
       
        }
       
    }
    
}