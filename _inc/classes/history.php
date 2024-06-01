<?php

    class history extends Database{
        
        private $db;

        public function __construct(){
            $this->db = $this->db_connection();        
        }

        public function select(){
            try{
                $db_query = "SELECT * FROM history";
                $query =  $this->db->query($db_query);
                $history = $query->fetchAll();
                return $history;

            }catch(PDOException $e){
                echo($e->getMessage());
            }   
        }

        public function get_history(){
            $history = $this->select();
            $result = '';
            for ($i=0;$i<count($history);$i++){
                $temp_i = $i + 1;
                if ($temp_i % 2 == 1) {
                    $result.= '<div class="row mt-3">';
                }
                        $result .=  '<div class="col-lg-6 border border-success p-2 mb-2 border-opacity-50 border-3">';
                            $result .=  '<button class="accordion">'.$history[$i]->name.'</button>';
                                $result .=  '<div class="panel">';
                                $result .=  '<h2 class="fs-3">'.$history[$i]->panelname.'</h2>';
                                $result .=  '<p>'.$history[$i]->text.'</p>';
                            $result .=  '</div>';
                        $result .=  '</div>';

                    if ($temp_i % 2 == 0 || $temp_i == count($history)) {
                        $result.= '</div>'; 
                    }

              }
            return $result;
        }
        public function delete(){
            try{
                $data = array(
                    'history_id' => $_POST['delete_history']
                );
                $query = "DELETE FROM history WHERE id = :history_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function add($name, $panelname, $text){
            try{
                $data = array(
                    'name' => $name,
                    'panelname' => $panelname,
                    'text' => $text
                );
                $query = "INSERT INTO history (name, panelname, text) VALUES (:name, :panelname, :text)";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }


        public function update($id, $name, $panelname, $text){
            try{
                $check_query = "SELECT * FROM history WHERE id = :id";
                $check_stmt = $this->db->prepare($check_query);
                $check_stmt->execute(array(':id' => $id));
                if ($check_stmt->rowCount() > 0) {
                    $data = array(
                        'id' => $id,
                        'name' => $name,
                        'panelname' => $panelname,
                        'text' => $text
                    );
                    $query = "UPDATE history SET name = :name, panelname = :panelname, text = :text WHERE id = :id";
                    $query_run = $this->db->prepare($query);
                    $query_run->execute($data);
                    echo "Update successful!";
                } else {
                    echo "Invalid ID!";
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }


          

        
    }
?>