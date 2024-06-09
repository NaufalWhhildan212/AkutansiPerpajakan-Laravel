<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtCustomer = Customer::all();
        return view('Layouts.Customer.Customer',compact('dtCustomer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Customer.Customer-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create([
            'Id_customer' =>$request->Id_customer,
            'Nama_customer' =>$request->Nama_customer,
            'Alamat' =>$request->Alamat,
            'no_telepon' =>$request->no_telepon,
            'Perusahaan' =>$request->Perusahaan,
        ]);
        return redirect ('Customer')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cus = Customer::findorfail($id);
        return view('Layouts.Customer.Customer-Edit',compact('cus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cus = Customer::findorfail($id);
        $cus ->update($request->all());
        return redirect ('Customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cus = Customer::findorfail($id);
        $cus->delete();
        return back();
    }
    public function downloadpdf()
    {
    $dtCetakCustomer = Customer::all();
        $pdf = 'PDF'::loadview('Layouts.Customer.Customer-cetak',compact('dtCetakCustomer'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Customer.pdf');
    }
}
