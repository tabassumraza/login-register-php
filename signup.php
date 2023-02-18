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
    <form action="dbinsert.php" method= "post" class="w-50 bg-dark text-light rounded mx-auto mt-5">
        <h1> signup</h1>
        <input type="text" name="fname" class="form-control" placeholder="first name">
        <input type="text" name="lname" class="form-control" placeholder="last name">
        <input type="text" name="email" class="form-control" placeholder=" email">
        <input type="text" name="city" class="form-control" placeholder="city">
        
        <input type="password" name="pasword" class="form-control" placeholder="password">

        <button type="submit" class="btn btn-info w-50 mx-auto">submit</button>
    </form>
</body>
</html>