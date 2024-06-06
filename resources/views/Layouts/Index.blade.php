<html>
</head>
    <meta charset ="UTF-8">
    <meta http-equiv = "X-UA_Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width,initial-scale = 1.0">
    <link rel = "stylesheet" href ="{{asset('Css/Index.css')}}">
    <title> Akutansi Perpajakan Negara </title>
<body>
    <header>
         <img src="{{asset('assets/image/Logo.png')}}">
         <nav class="navigation">
            <a href ="#">Home</a>
            <a href ="#">About</a>
            <a href ="#">Services</a>
            <a href ="#">Contact</a>
            <a href="Login.php"><button class="btnLogin-popup">Login</button></a>
        </nav>
    </header>
    <main>
        <nav class="nav1">
      <h1>Kami Hadir</h1>
      <h2>Mempermudah Anda Membayar Pajak</h2>
    </nav>
    <div class="carousel">
        <div class="carousel-container">
            <div class="carousel-item"><img src="./assets/image/Icon3.png" alt="Image 1"></div>
            <div class="carousel-item"><img src="./assets/image/Icon2.jpg" alt="Image 2"></div>
        </div>
        <button class="carousel-button prev" onclick="prevSlide()">&#10094;</button>
        <button class="carousel-button next" onclick="nextSlide()">&#10095;</button>
    </div>
    </main>
    <script>
        var slideIndex = 0;
        showSlide(slideIndex);
        function prevSlide() {
        showSlide(slideIndex -= 1);
        }
        function nextSlide() {
        showSlide(slideIndex += 1);
        }
        function showSlide(index) {
        var slides =
        document.getElementsByClassName("carousel-item");
        if (index >= slides.length) { slideIndex = 0; }
        if (index < 0) { slideIndex = slides.length - 1; }
        for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        }
        slides[slideIndex].style.display = "block";
        }
        </script>
</body>
</html>