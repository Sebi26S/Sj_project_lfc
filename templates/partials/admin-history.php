<h2>History</h2>
<?php
    $history_object = new history();
    $history = $history_object->select();
    if(isset($_POST['delete_history'])){
        $history_id = $_POST['delete_history'];
        $history_object->delete($history_id);
        header('Location: admin.php');
        exit();
    }
    
    echo'  <a class="btn btn-danger" href="admin-history-add.php" role="button">Add new history</a>  ';
    


    echo '<table class="admin-table">';
    echo '<tr><th>id</th>
                <th>Name</th>
                <th>Panel</th>
                <th>Text</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>';
    foreach($history as $c){
 
        echo '<tr>';
        echo '<td>'.$c->id;'</td>';
        echo '<td>'.$c->name;'</td>';
        echo '<td>'.$c->panelname;'</td>';
        echo '<td>'.$c->text;'</td>';
        echo '<td>
                <form action="" method="POST">
                    <button type="submit" name="delete_history" value="'.$c->id.'"'.'>Vymazať</button>
                </form>
                </td>';
        echo '<td>
                <form action="admin-history-update.php" method="POST">
                    <button type="submit" name="edit_history" value="'.$c->id.'"'.'>Editovať</button>
                </form>  
             </td>';
        echo '</tr>';
    }
        
    echo '</table>';
?>