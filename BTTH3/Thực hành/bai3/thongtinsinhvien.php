<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <fieldset style="border: 1px solid black; width:fit-content; ">
            <legend style="color: blue;">Thông tin sinh viên</legend>
            <?php
                echo "<p>Tên: ".$_GET["name"]."</p>";
                echo "<p>Mật khẩu: ".$_GET["pass"]."</p>";
            ?>
        </fieldset>
    </body>
</html>