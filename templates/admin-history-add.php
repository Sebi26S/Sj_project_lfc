<?php
include('partials/header.php');
echo "<br>";
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $history = new History();

    $name = $_POST["name"];
    $panelname = $_POST["panelname"];
    $text = $_POST["text"];

    if (!empty($name) && !empty($panelname) && !empty($text)) {
        $history->add($name, $panelname, $text);
        echo "Data added successfully!";
    } else {
        echo "Please fill in all the fields!";
    }
}
?>
<body class="body p-2">
<div class="add_history"> 
        <div class="form-container"> 
            <h1>Add history</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="name" placeholder="Name"><br><br>
                <input type="text" name="panelname" placeholder="Panel Name"><br><br>
                <textarea name="text" placeholder="Text"></textarea><br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>






