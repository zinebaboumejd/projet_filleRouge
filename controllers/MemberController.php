<?php

class MemberController{
   
       
        public function register(){

            if(isset($_POST['submit'])){
                $options =[
                    'cost' => 12
                ];
                $motedepass = password_hash($_POST['motedepass'],PASSWORD_BCRYPT,$options);
                $data = array(
                    'prenom' => $_POST['prenom'],
                    'nom' => $_POST['nom'],
                    'email' => $_POST['email'],
                    'motedepass' => $motedepass,
                    
                );
                
                $result = Member::createMember($data);
                
                if($result === 'ok'){
                        Session::set('success', 'Account created!');
                        header("Location: " . BASE_URL."login");
                }else{
                   echo $result ;
                }
            }
        }
        public function login(){
            if(isset($_POST['submit'])){
              
              
                $data['email'] = $_POST['email'];
                $result = Member::login($data);
                if($result->email === $_POST['email'] && password_verify($_POST['motedepass'], $result->motedepass)){
                        $_SESSION['log'] = true;
                        $_SESSION['idmember'] = $result->idmember;
                        $_SESSION['nom'] = $result->nom;
                        $_SESSION['prenom'] = $result->prenom;
                        $_SESSION['rool'] = $result->rool;
                        if($result->rool == 0 ){
                            
                            header("Location: " . BASE_URL."home");
                        }else{
                            header("Location: " . BASE_URL."HomeAdmin");
                            // Redirect::to('HomeAdmin');
                        }
                }else{
                    Session::set('error', 'Username or Password incorrect');
                    header("Location: " . BASE_URL."login");
                  
                }
            }
        }
        static public function logout(){
            session_destroy();
         
        }
}