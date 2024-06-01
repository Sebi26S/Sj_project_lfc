<?php
include('partials/header.php');
echo "<br>";
echo "<br>";
echo "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $panelname = $_POST['panelname'];
        $text = $_POST['text'];

        if (empty($id) || empty($name) || empty($panelname) || empty($text)) {
            echo "All fields are required!";
        } else {
            $history_obj = new history();
            $history_obj->update($id, $name, $panelname, $text);
        }
    }
}
?>

<body class="body p-2">
<div class="add_history"> 
    <div class="form-container"> 
        <h2>Update History</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="id">ID:</label><br>
            <input type="text" id="id" name="id"><br>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="panelname">Panel Name:</label><br>
            <input type="text" id="panelname" name="panelname"><br>
            <label for="text">Text:</label><br>
            <textarea id="text" name="text"></textarea><br>
            <input type="submit" name="update" value="Update">
        </form>
    </div>

</div>


</body>
</html>
