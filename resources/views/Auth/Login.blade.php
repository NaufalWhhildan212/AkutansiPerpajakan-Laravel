<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "stylesheet" href ="{{asset('Css/Login.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>   
</head>

<body>
<form action="login" method="post">
    @csrf
   <div class="wrapper">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" name="Username" id="Username" placeholder="Username" required> 
        </div>
        <div class="input-box">
            <input type="Password" name="Password" id="Password" placeholder="Password" required> 
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember-forgot">
            <label>
                <input type="checkbox">Remember me
            </label>
            <a href="#">Forgot password</a>
        </div>
        <button type="submit" class="btn"name="login"  
                      id="login">Login</button>
        <div class="register-link">
            <p>Anda Belum Punya Akun?<a href="Register.php">Register</a></p>
        </div>
   </div>
</form>  
</body>
</html>
