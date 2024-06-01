<?php 

    class Database{

        private $host = 'localhost';
        private $db_name = 'sj_project';
        private $user_name = 'root';
        private $password = '';
    
        protected $connection;

      
        
        public function __destruct() {
            $this->connection = null;
        }

        protected function db_connection(){
            try {
                $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8", 
                                    $this->user_name, 
                                    $this->password
                                    );
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                
                return $this->connection;
            }catch(PDOException $e){
                return 0;
                die("Chyba pripojenia k databáze: " . $e->getMessage());
            }
        }
    }

?>