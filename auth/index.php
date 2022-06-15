<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/login.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/sweetalert.min.js"></script>
    <title>Login</title>
</head>
<body>
    <h3>LOGIN FORM</h3>
    <img src="../assets/images/profil.png" alt="">
    <form action="auth.php" method="post">
        <label for="">Username</label> <i class="fa fa-user"></i> <br> <br> 
        <input type="text" name="username" id="username" placeholder="Masukkan Username..." class="form-input" /><br> <br>
        <label for="">Password</label> <i class="fa fa-key" aria-hidden="true"></i><br> <br>
        <input type="password" name="password" id="password" placeholder="Masukkan Password.." class="form-input" /> <br> <br>
        <button type="submit" name="flogin">Login</button>
    </form>
</body>
</html>