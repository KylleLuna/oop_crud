<?php
    require_once('../dao/config.php');
    require_once('../dao/crudDAO.php');

    //$list = crudDAO::read(); //USE FOR STATIC MODE ONLY
    $a = new crudDAO();
    $list = $a -> read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="container-md">
            <table>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Username</th>
                <th>E-mail</th>
                <?php foreach ($list as $key => $value) {?>
                    <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['lname']; ?></td>
                        <td><?= $value['fname']; ?></td>
                        <td><?= $value['username']; ?></td>
                        <td><?= $value['email']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>