<?php
    require_once "connect.php";

    if (isset($_POST['add'])) {
        $listText = $_POST['add'];

        $sql = "INSERT INTO list_items(ListText) VALUES ('$listText')";

        if ($db_server->query($sql)) {
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->connect;
        }
    }
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adding data</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>
    <body>
        <form action="post.php" class="form" method="post">
            <div class="field is-grouped">
              <p class="control is-expanded">
                <input class="input" name="add" type="text" placeholder="Insert text">
              </p>
              <p class="control">
                <button class="button is-info" type="submit">Add</button>
              </p>
            </div>
        </form>

        <ul>
            <?php
                $todo_res = $db_server->query("SELECT * FROM list_items ORDER BY ListItemID DESC");
                while($row = $todo_res->fetch_assoc()) {
                    echo "<li><strike>" . $row['ListText'] . "</strike></li>";
                }
            ?>
        </ul>

        <span></span>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script>
            $("li").click(function() {
                var index = $("li").index(this);
                $("span").text("That was li index #" + index);
            });
        </script>

    </body>
</html>