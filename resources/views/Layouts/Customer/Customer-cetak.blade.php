<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1d528a;
  color: white;
}
</style>
</head>
<body>
<center>
<h3>Data Customer Report</h3>
</center>
<table id="customers">
    <tr><th>No</th>
        <th>Id Customer</th>
        <th>Nama Customer</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Perusahaan</th>
      </tr>
      @foreach ($dtCetakCustomer as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->Id_customer }}</td>
        <td>{{ $item->Nama_customer }}</td>
        <td>{{ $item->Alamat}}</td>
        <td>{{ $item->no_telepon }}</td>
        <td>{{ $item->Perusahaan }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>