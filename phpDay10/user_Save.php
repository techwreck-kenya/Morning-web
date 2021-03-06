<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            background-color: #00c7dc;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        legend{
        @keyframes example;
            from {background-color: red;
            to {background-color: yellow;
            width: 100px;
            height: 100px;
            background-color: red;
            animation-name: example;
            animation-duration: 4s;
        }
    </style>
</head>
<body>
<form action="user_Save_Process.php" method="POST">
    <legend>
        <a href="view_Users.php" class="btn btn-outline-dark">View users</a>
    </legend>
    <input type="text" name="x" placeholder="Name" class="form-group" required><br>
    <input type="email" name="y" placeholder="Email" class="form-group" required><br>
    <input type="password" name="z" placeholder="Password" required><br>
    <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
    <input type="reset" name="btnreset" value="Refresh" class="btn btn-primary">
</form>
</body>
</html>