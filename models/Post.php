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
        var_dump($stmt->fetchAll());
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
        $intpost = $data['intpost'];
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
// echo $idmember;
// die;
        $stmt = DB::connect()->prepare('SELECT p.* ,l.idlike   FROM post p inner join like_ l WHERE  l.intpost=p.intpost and p.idmember=:idmember  ');
        $stmt->bindParam(':idmember', $idmember);
        $stmt->execute();
        return $stmt->fetchAll();
        
        // try {
        //     $stmt = DB::connect()->prepare('SELECT p.* ,l.idlike   FROM post p inner join like_ l WHERE  l.intpost=p.intpost and p.idmember=l.idmember'  );
        //     $stmt->execute(array(":intpost" => $idmember));
        //     $stmt->execute();
        //       return $stmt->fetchAll();
        // } catch (PDOException $ex) {
        //     echo 'error' . $ex->getMessage();
        // }
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
        $id = $data['idlike'];
        
    
        try {
            $query = 'DELETE FROM like_ WHERE idlike=:idlike';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":idlike" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
    // static public function likepost($data)
    // { 
    //             $stmt = DB::connect()->prepare('SELECT * FROM like_ WHERE idmember = :idmember AND intpost = :intpost');
    //             $stmt->execute(array(":idmember" => $data["idmember"], ":intpost" => $data["intpost"]));
    //             $result = $stmt->fetchAll();
    //             // var_dump($result);
    //             // die;
    //             if (count($result) > 0) {
    //                 return "Product already in wishlist";

    //             } else {
    //                 $stmt = DB::connect()->prepare('INSERT INTO like_ (idpost, idmember) VALUES (:idmember, :intpost)');
    //                 $stmt->execute(array(":idmember" => $data["idmember"], ":intpost" => $data["intpost"]));
    //                 return "ok";
    //             }


    // }
}
