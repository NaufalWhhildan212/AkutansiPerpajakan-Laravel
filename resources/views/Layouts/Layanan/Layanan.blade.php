<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Pajak</title>
    <link rel="stylesheet" href="{{asset('Css/Dashboard.css')}}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                <img src="../assets/image/Logo.png" alt="Logo">
            </div>
            <ul>
                <li>
                    <a href="Dashboard">
                        <i class='bx bxs-home'></i>
                        <span class="nav-item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Customer">
                        <i class='bx bxs-user-plus'></i>
                        <span class="nav-item">User</span>
                    </a>
                </li>
                <li>
                    <a href="Layanan">
                        <i class='bx bx-task'></i>
                        <span class="nav-item">E Faktur</span>
                    </a>
                </li>
                <li>
                    <a href="Logout" class="logout">
                        <i class='bx bx-log-out'></i>
                        <span class="nav-item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="main">
        <div class="main-top">
            <h3>Data E-Faktur</h3>
        </div>
        <div class="main-body">
            <div class="home-content">
                <button type="button" class="btn-tambah">
                    <a href="Layanan-Entry" class="btn-tambah">Tambah Data</a>
                </button>
                <button type="button" class="btn-tambah">
				<a href="Layanan-cetak" class="btn-tambah">Cetak Data</a>
			    </button>
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 10%">Id Faktur</th>
                            <th style="width: 10%">Id Customer</th>
                            <th style="width: 10%">NPWP</th>
                            <th style="width: 15%">No Faktur Pajak</th>
                            <th style="width: 10%">Dpp</th>
                            <th style="width: 10%">PPN</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dtLayanan as $item)
                        <tr>
                            <td>{{$item->Id_faktur}}</td>
                            <td>{{$item->Id_customer}}</td>
                            <td>{{$item->NPWP}}</td>
                            <td>{{$item->No_fakturPajak}}</td>
                            <td>{{$item->DPP}}</td>
                            <td>{{$item->PPN}}</td>
                            <td>
                                <button type="button" class="btn-edit">
                                    <a href="{{ url('Layanan-Edit', $item->id) }}" class="btn-edit">Edit</a>
                                </button>
                                <button type="button" class="btn-delete">
                                    <a href="{{ url('Layanan-Delete', $item->id) }}" class="btn-delete">Delete</a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
