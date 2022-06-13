<?php 

    class Member{

static public function createMember($data){
        $stmt = DB::connect()->prepare('INSERT INTO member (prenom,nom,email,motedepass) 
                                                    VALUES (:prenom,:nom,:email,:motedepass)');
        $stmt->bindParam(':prenom',$data['prenom']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':motedepass',$data['motedepass']);
        //  $stmt->bindParam(':rool',$data['rool']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
            
        }
        
        }
        static public function login($data){
            $email = $data['email'];
            try{
                $query = 'SELECT * FROM member WHERE email=:email';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":email" => $email));
                $member = $stmt->fetch(PDO::FETCH_OBJ);
                return $member;
            }catch(PDOException $ex){
                echo 'error' . $ex->getMessage();
            }
        }

        














    }
