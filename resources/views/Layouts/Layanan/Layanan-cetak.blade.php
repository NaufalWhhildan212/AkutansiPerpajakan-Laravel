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
<h3>Data Faktur Report</h3>
</center>
<table id="customers">
    <tr><th>No</th>
        <th>Id Faktur</th>
        <th>Id Customer</th>
        <th>NPWP</th>
        <th>No Faktur Pajak</th>
        <th>DPP</th>
        <th>PPN</th>
      </tr>
      @foreach ($dtCetakLayanan as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->Id_faktur}}</td>
        <td>{{ $item->Id_customer}}</td>
        <td>{{ $item->NPWP}}</td>
        <td>{{ $item->No_fakturPajak}}</td>
        <td>{{ $item->DPP}}</td>
        <td>{{ $item->PPN}}</td>
      </tr>
      @endforeach
</table>
</body>
</html>