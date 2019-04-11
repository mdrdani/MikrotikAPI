<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mikrotik API V.1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="login-box">
        <h1>Login Router</h1>
    <form action="Connection.php" method="POST">
        
        <div class="textbox">
                <i class="fa fa-home" style="font-size:24px"></i><input type="text" name="ip" placeholder="IP Router" autocomplete="off">
        </div>
        
        <div class="textbox">
        <i class="fa fa-user" style="font-size:24px"></i> <input type="text" name="username" placeholder="Username" autocomplete="off">
        </div>
        
        <div class="textbox">
                <i class="fa fa-lock" style="font-size:24px"></i>
        <input type="password" name="password" placeholder="Password">
        </div>
        
        <button class="btn" type="submit" name="login">Login</button>
    </form>
    </div>
</body>
</html>