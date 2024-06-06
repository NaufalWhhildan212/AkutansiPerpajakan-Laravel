<?php

namespace App\Http\Controllers;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtLayanan = Layanan::all();
        return view('Layouts.Layanan.Layanan',compact('dtLayanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Layanan.Layanan-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Layanan::create([
            'Id_faktur' =>$request->Id_faktur,
            'Id_customer' =>$request->Id_customer,
            'NPWP' =>$request->NPWP,
            'No_fakturPajak' =>$request->No_fakturPajak,
            'DPP' =>$request->DPP,
            'PPN' =>$request->PPN,
        ]);
        return redirect ('Layanan')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $lay = Layanan::findorfail($id);
        return view('Layouts.Layanan.Layanan-Edit',compact('lay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lay = Layanan::findorfail($id);
        $lay ->update($request->all());
        return redirect ('Layanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lay = Layanan::findorfail($id);
        $lay->delete();
        return back();
    }
}
