<span style="font-family: verdana, geneva, sans-serif;">
    <html>
     <head>
       <meta charset ="UTF-8">
     <meta http-equiv = "X-UA_Compatible" content = "IE=edge">
     <meta name = "viewport" content = "width=device-width,initial-scale = 1.0">
       <title>E - Pajak</title>
       <link rel="stylesheet" href="{{asset('Css/Dashboard.css')}}" />
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     </head>
     <body>
         <nav>
           <div class="navbar">
             <div class="logo">
               <img src="../assets/image/Logo.png" alt="">
               
             </div>
             <ul>
               <li><a href="Dashboard">
                 <i class='bx bxs-home'></i>
                 <span class="nav-item">Dashboard</span>
               </a>
               </li>
               <li><a href="Customer">
                 <i class='bx bxs-user-plus'></i>
                 <span class="nav-item">User</span>
               </a>
               </li>
               <li><a href="Layanan">
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
               <button type="button" class="btn-tambah">
				<a href="Customer-Entry" class="btn-tambah">Tambah Data</a>
			    </button>

          <button type="button" class="btn-tambah">
				<a href="Customer-cetak" class="btn-tambah">Cetak Data</a>
			    </button>
                <table class="table-data">
                    <thead>
                     <tr>
                       <th style="width: 13%">Id Customer</th>
                       <th style="width: 13%">Nama Customer</th>
                       <th style="width: 13%">Alamat</th>
                       <th style="width: 13%">No Telepon</th>
                       <th style="width: 13%">Perusahaan</th>
                       <th style="width: 15%">Action</th>
                     </tr>
                    </thead>
                    <tbody>
                    @foreach($dtCustomer as $item)
                        <tr>
                            <td>{{$item->Id_customer}}</td>
                            <td>{{$item->Nama_customer}}</td>
                            <td>{{$item->Alamat}}</td>
                            <td>{{$item->no_telepon}}</td>
                            <td>{{$item->Perusahaan}}</td>
                            <td>
                                <button type="button" class="btn-edit">
                                    <a href="{{ url('Customer-Edit', $item->id) }}" class="btn-edit">Edit</a>
                                </button>
                                <button type="button" class="btn-delete">
                                    <a href="{{ url('Customer-Delete', $item->id) }}" class="btn-delete">Delete</a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                 </table>
            </div>              
           </div>
           </html>