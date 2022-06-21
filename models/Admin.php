<?php
class Admin
{

    static public function nombre_post()
    {
        $stmt = DB::connect()->prepare('SELECT count(intpost) as nombrepost FROM post');
        if ($stmt->execute()) {
            $nbp= $stmt->fetch(PDO::FETCH_OBJ);
            return $nbp;            
        } else {
            return 'error';
        }
    }
    static public function nombre_member()
    {
        $stmt = DB::connect()->prepare('SELECT count(idmember) as nombremember FROM member');
        if ($stmt->execute()) {
            $nbm= $stmt->fetch(PDO::FETCH_OBJ);
            return $nbm;            
        } else {
            return 'error';
        }
    }
    static public function Ajouter_category($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO category (typecategory) VALUES(:typecategory)');
        $stmt->bindParam(':typecategory',$data['typecategory']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
            
        }
    }
    static public function AfficherSelect()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM category');
        $stmt->execute();
        return $stmt->fetchAll();
}
static public function afficher_member(){
    $rool=0;
    $stmt = DB::connect()->prepare('SELECT * FROM member WHERE rool=:rool');
    $stmt->bindParam(':rool',$rool);
    $stmt->execute();
    return $stmt->fetchAll();
}

static public function supprimer_category($data)
{
//     echo '<pre>';
//   var_dump($data);
//   die;
    $id = $data['idcategory'];    
    try {
        $query = 'DELETE FROM category WHERE idcategory=:idcategory';
        $stmt = DB::connect()->prepare($query);
        $stmt->execute(array(":idcategory" => $id));
        if ($stmt->execute()) {
            return 'ok';
        }
    } catch (PDOException $ex) {
        echo 'error' . $ex->getMessage();
    }
}
static public function Affichercommande()
{
    $stmt = DB::connect()->prepare('SELECT * FROM `commende` INNER JOIN post WHERE commende.intpost=post.intpost   ');
    $stmt->execute();
    return $stmt->fetchAll();

}
static public function totallike(){
    $stmt = DB::connect()->prepare('SELECT count(idlike) as totallike FROM `like_` WHERE intpost=:intpost ');
    $stmt->bindParam(':intpost',$_POST['intpost']);
    $stmt->execute();
    return $stmt->fetchAll();
}
}