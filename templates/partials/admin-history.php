<h2>History</h2>
<?php
    $history_object = new history();
    $historys = $history_object->select();
    if(isset($_POST['delete_history'])){
        $history_id = $_POST['delete_history'];
        $history_object->delete($history_id);
        header('Location: admin.php');
        exit();
    }
    echo '<table class="admin-table">';
    echo '<tr><th>Name</th>
                <th>panelname</th>
                <th>text</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>';
    foreach($historys as $c){
        echo '<tr>';
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