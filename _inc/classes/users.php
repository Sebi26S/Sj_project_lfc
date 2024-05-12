<?php

    class User extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function login($email, $password){
            //$username a $password došli z $_POST 
            try{
                $data = array(
                    'user_email'=>$email,
                    'user_password'=>md5($password),
                );
                
                $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                $n_rows = $query_run->rowCount();
                if($n_rows == 1) {
                    // login je uspesny
                    $_SESSION['logged_in'] = true;
                    $_SESSION['is_admin'] =  $query_run->fetch()->role;
                    return true;
                } else {
                    return false;
                }
            }catch(PDOException $e){
                    echo $e->getMessage();
            }
        }

        public function register($email, $password){
            try{
             
                $hashed_password = $password;
        
                // Dáta pre vloženie nového používateľa do databázy
                $data = array(
                    'user_email' => $email,
                    'user_password' => md5($hashed_password),
                    'user_role'=>'0'
                );
        
                // SQL dopyt na vloženie nového používateľa
                $sql = "INSERT INTO user (email, password,role) VALUES (:user_email, :user_password,:user_role)";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
        
                // Úspešná registrácia
                return true;
            } catch(PDOException $e){
                // Spracovanie chyby, ak nastane
                echo "Chyba pri registrácii: " . $e->getMessage();
                return false;
            }
        }
    }


?>