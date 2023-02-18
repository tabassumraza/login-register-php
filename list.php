<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table bordered p-4 bg-light mx-auto w-75 mt-5">
        <tr>
            <th>fname</th>
            <th>lname</th>
            <th>email</th>
            <th>city</th>
            <th>operations</th>
        </tr>
        <?php
            include "config.php";
            $mysql="SELECT *FROM users";
            $result = mysqli_query($conn,$mysql);
            while ($row = mysqli_fetch_assoc($result)){
                echo 
                "<tr><td>".$row["fname"].
                "</td><td>".$row["lname"].
                "</td><td>".$row["email"].
                "</td><td>".$row["city"]."</td>";
        ?>
        <td>
            <a class="btn btn-success" href="edit.php?id=<?php echo $row['id']?>">edit</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">delete</a>

        </td>
        <?php
            }

        ?>
    </table>
</body>
</html>