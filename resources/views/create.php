<?php
$listitems = [];
if (isset($_POST['items'])) {
    $items = $_POST['items'];

    
}
var_dump($_POST['items']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/create.css">
    <title>Checklist</title>
</head>
<body>
    <div class="container">
        <div class="header-section">
            <h1>Add Item</h1>
        </div>
        <hr>
        <div class="add-item">
            <form method="post" action="create.php">
                <label for="fname">New Item:</label><br>
                <input type="text" id="input-new-item" name="items[]" placeholder="Add New Item"><br>
                <input type="submit" class="button btn-add-list" value="Add">
<!--                <input type="submit" id="cancel" class="button btn-delete-item" value="Cancel">-->
            </form>
        </div>
    </div>
</body>
</html>

