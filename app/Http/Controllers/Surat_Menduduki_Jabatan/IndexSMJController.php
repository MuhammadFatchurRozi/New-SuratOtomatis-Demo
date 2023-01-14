<?php

namespace App\Http\Controllers\Surat_Menduduki_Jabatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\suratmendudukijabatan;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Crypt;

class IndexSMJController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SuratMendudukiJabatan.message');
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
        $SMJ = suratmendudukijabatan::create($request->all());
        $id = Crypt::encrypt($SMJ->id);
        return redirect()->route('SuratMendudukiJabatan.success', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $SMJ = suratmendudukijabatan::find($id);
        return view('SuratMendudukiJabatan.result_letter', compact('SMJ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $id = Crypt::decrypt($id);
        // $SMI = suratmendudukijabatan::find($id);
        // return view('SuratPengunduranDiri.edit', compact('SMI'));
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
        $SMI = suratmendudukijabatan::find($id);
        $SMI->update($request->all());
        return redirect()->route('SuratMendudukiJabatan.index');
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
        // $id = Crypt::decrypt($id);
        // $SMI = suratmendudukijabatan::find($id);
        // return view('SuratPengunduranDiri.sukses', compact('SMI'));
    }
}
