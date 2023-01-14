<?php

namespace App\Http\Controllers\Surat_Mengundurkan_Diri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\suratpengundurandiri;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Crypt;

class IndexSMIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SuratPengunduranDiri.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $SPI = suratpengundurandiri::create($request->all());
        $id = Crypt::encrypt($SPI->id);
        return redirect()->route('SuratPengunduranDiri.success', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @Now is Sukses View
     */
    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $SMI = suratpengundurandiri::find($id);
        return view('SuratPengunduranDiri.result_letter', compact('SMI'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $SMI = suratpengundurandiri::find($id);
        return view('SuratPengunduranDiri.edit', compact('SMI'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = Crypt::decrypt($id);
        $SMI = suratpengundurandiri::find($id);
        $SMI->update($request->all());
        $id = Crypt::encrypt($id);
        return redirect()->route('SuratPengunduranDiri.success', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function success($id)
    {
        $id = Crypt::decrypt($id);
        $SMI = suratpengundurandiri::find($id);
        return view('SuratPengunduranDiri.sukses', compact('SMI'));
    }
}
