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
                        $result.= '</div>'; // Close row after every four items or at the end
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

        
    }
?>