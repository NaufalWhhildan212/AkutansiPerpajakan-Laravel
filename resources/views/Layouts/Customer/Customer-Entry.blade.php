<span style="font-family: verdana, geneva, sans-serif;">
    <html>
     <head>
       <meta charset ="UTF-8">
     <meta http-equiv = "X-UA_Compatible" content = "IE=edge">
     <meta name = "viewport" content = "width=device-width,initial-scale = 1.0">
       <title>E - Pajak</title>
       <link rel="stylesheet" href="../Css/Dashboard.css" />
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     </head>
     <body>
         <nav>
           <div class="navbar">
             <div class="logo">
               <img src="../assets/image/Logo.png" alt="">
               
             </div>
             <ul>
               <li><a href="Dashboard.html">
                 <i class='bx bxs-home'></i>
                 <span class="nav-item">Dashboard</span>
               </a>
               </li>
               <li><a href="">
                 <i class='bx bxs-user-plus'></i>
                 <span class="nav-item">User</span>
               </a>
               </li>
               <li><a href="Layanan.html">
                 <i class='bx bx-task' ></i>
                 <span class="nav-item">E Faktur</span>
               </a>
               </li>
               </li>
               <li><a href="Logout.html" class="logout">
                 <i class='bx bx-log-out' ></i>
                 <span class="nav-item">Logout</span>
               </a>
               </li>
             </ul>
           </div>
         </nav>
         <section class="main">
           <div class="main-top">
             <h3>Data Customer</h3>
           </div>
           <div class="main-body">
             <div class="home-content">
                <h1>Input Data Customer</h1>
                <div class="form">
                <form action="Customer-proses" method="post">
                {{csrf_field()}}
                        <label for="Id_customer	">Id Customer</label>
                    <input class="input" type="text" name="Id_customer" id="Id_customer" placeholder="Id Customer"/>
                        <label for="Nama_customer">Nama Customer</label>
                    <input class="input" type="text" name="Nama_customer" id="Nama_customer" placeholder="Nama Customer" />
                        <label for="Alamat">Alamat</label>
                    <input class="input" type="text" name="Alamat" id="Alamat" placeholder="Alamat" />
                        <label for="no_telepon">No Telepon</label>
                    <input class="input" type="number" name="no_telepon" id="no_telepon" placeholder="No Telepon"/>
                    <label for="Perusahaan">Perusahaan</label>
                    <input class="input" type="text" name="Perusahaan" id="Perusahaan" placeholder="Perusahaan"/>
                    
                    <button type="submit" class="btn-tambah"name="simpan"
				              id="simpan">
                        <a class="btn-tambah">Simpan Data</a>
                        </button>
                </div> 
            </div>              
           </div>
           </html>