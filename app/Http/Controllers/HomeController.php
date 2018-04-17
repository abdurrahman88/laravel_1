<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;

class HomeController extends Controller
{
    public function listSantri() 
    {
        $santri = Santri::orderby('id', 'desc')->get();
        return view('santri.index', compact('santri'));
    }
    public function insert(Request $request) 
    {
        // $santri = new santri;
        // $santri->nama = $request->nama;
        // $santri->alamat = $request->alamat;
        // $santri->tgl_lahir = $request->tgl_lahir;
        // $santri->jenis_kelamin = $request->jenis_kelamin;
        // $santri->save();
        santri::create($request->all());
        return redirect('santri');
    }

    public function hapus($id) 
    {
        Santri::find($id)->delete();
        return redirect('santri')->with('Santri', 'Data santri berhasil di hapus');
    }

    public function create() 
    {
        return view('santri.create');
    }
    public function edit($id)
    {
        $santri = Santri::find($id);
        return  view('santri.edit', compact('santri'));
    }
    public function update(Request $abc) //typhim (  )
    {
        // $santri = santri::find($request->id);
        // $santri->nama = $request->nama;
        // $santri->alamat = $request->alamat;
        // $santri->tgl_lahir = $request->tgl_lahir;
        // $santri->jenis_kelamin = $request->jenis_kelamin;
        // $santri->save();
        Santri::find($abc->id)->update($abc->all());
        return redirect('santri')->with('santri', 'data santri berhasil di update');
    }
}