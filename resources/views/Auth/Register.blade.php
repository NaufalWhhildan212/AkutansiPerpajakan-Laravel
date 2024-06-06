<html>
</head>
    <meta charset ="UTF-8">
    <meta http-equiv = "X-UA_Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width,initial-scale = 1.0">
    <title> Register  </title>
    <link rel = "stylesheet" href ="{{asset('Css/Login.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>   
<body>
   <div class = "wrapper">
   <form action="register" method="post">
   @csrf
        <h1>Register</h1>
        <div class = "input-box">
            <input type = "text" name="Username" id="Username"placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class ="input-box">
            <input type ="text" name="Email"id="Email"placeholder="Email"required>
            <i class='bx bxs-envelope'></i>
        </div>
        <div class ="input-box">
            <input type ="password" name="Password"id="Password"placeholder="Password"required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
    
        <button type="submit" class ="btn"name="register"
				id="register">Login</button>
        <div class ="register-link">
            <p>Anda Sudah Punya Akun?<a
            href="Login.html">Login</a></p>
        </div>
    </form>
   </div>  
</body>
</html>
