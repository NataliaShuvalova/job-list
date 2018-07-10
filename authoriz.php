<!doctype html>
<html lang="RU-ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="1.css" media="screen" type="text/css" />
    <title>Document</title>
</head>
<body>
<form action="authoriz_db.php" method="post">
    <div class="form-group">
        <label for="exampleInputLogin">Login</label>
        <input type="text" class="form-control" id="exampleInputLogin"  placeholder="Login" name="login">
    </div> <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div> <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button></div>
</form>
</body>
</html>