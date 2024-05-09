<?php    
    $history_object = new history();

    if(isset($_POST['edit_history'])) {
        $edit_history_id = $_POST['edit_history'];
        $history_data = $history_object->select_single($edit_history_id);
    }

    if($history_data) {
        // Vyplnenie údajov do formulára
        $name = $history_data->name;
        $panelname = $history_data->panelname;
        $text = $history_data->text;
    }
    if(isset($_POST['edit_history_id'], $_POST['name'], $_POST['panelname'], $_POST['text'])) {
        $edit_history_id = $_POST['edit_history_id'];
        $new_data = array(
            'name' => $_POST['name'],
            'panelname' => $_POST['panelname'],
            'text' => $_POST['text']
        );
    
        $history_object->edit($edit_history_id, $new_data);
    
        header('Location: admin.php');
        exit();
    }
    
?>

<body class="body p-2">
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <form action="" method="POST">
                    <label for="name">Name:</label>
                    <br>
                    <input type="text" id="name" name="name" value="<?php echo $name?>">
                    <br>
                    <label for="text">Panelname:</label>
                    <br>
                    <input type="text" id="text" name="text" value="<?php echo $panelname?>">
                    <br>
                    <label for="text">text:</label>
                    <br>
                    <textarea id="text" name="text"> <?php echo $text?> </textarea>
                    <br>
                    <button type="submit"name="edit_history_id" value="<?php echo $edit_history_id?>">Uložiť zmeny</button>
                </form>
            </div>
        </div>
    </section>
</main>
</body>

</body>
            <!--next--> 

            <?php
include_once('partials/footer.php');
?>
