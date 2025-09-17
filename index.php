<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/style.css">
        <title>Checklist</title>
    </head>
    <body>
        <div class="container">
            <div class="header-section">
                <h1>Checklist</h1>
                <a href="/resources/views/create.php" class="button btn-add-list">Add List</a>
            </div>
            <hr>
            <div class="item-list">
                <table>
                    <tr>
                        <th>Item</th>
                        <th class="column-action">Action</th>
                    </tr>
                    <tr class="item-row">
                        <td>Utan</td>
                        <td class="column-action">
                            <a href="#" class="button btn-edit-item">Edit</a>
                            <a href="#" class="button btn-delete-item">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>