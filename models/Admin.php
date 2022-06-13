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
}