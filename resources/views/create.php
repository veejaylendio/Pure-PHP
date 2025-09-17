<?php
session_start();
//$_SESSION['items'] = [];

if (isset($_POST['submit'])) {
   foreach ($_POST['items'] as $item) {
       $_SESSION['items'][] = $item;
   }
    $json = file_get_contents('data.json');
    $data = json_decode($json);
    $data[] = $_POST['data'];
    file_put_contents('data.json', json_encode($data));
}
var_dump($_SESSION['items']);
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
                <input type="submit" name="submit" class="button btn-add-list" value="Add">
<!--                <input type="submit" id="cancel" class="button btn-delete-item" value="Cancel">-->
            </form>
        </div>
    </div>
</body>
</html>

