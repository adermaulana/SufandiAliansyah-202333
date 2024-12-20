<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function view()
    {
    $mahasiswas=Mahasiswa::all();
    return view('view_viewmahasiswa', compact('mahasiswas'));
    }
   
    public function create()
    {
    return view('view_inputmahasiswa');
    }

    public function store(Request $request)
    {


        $request->validate([
            'nim' => 'required|numeric',
            'nama' => 'required|min:4|regex:/^[a-zA-Z\s]+$/',
            ]);

    $mahasiswa=new Mahasiswa();
    $mahasiswa->nim=$request->nim;
    $mahasiswa->nama=$request->nama;
    $mahasiswa->alamat=$request->alamat;
    $mahasiswa->kodejurusan=$request->kodejurusan;
    $mahasiswa->save();
    return redirect('mahasiswa');
    }

    public function edit($nim)
    {

        $mahasiswa = Mahasiswa::findOrFail($nim);

    return view('view_editmahasiswa',[
        'mahasiswa' => $mahasiswa
    ]);
    }

    public function update(Request $request, $nim){

        $mahasiswa = Mahasiswa::findOrFail($nim);


        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kodejurusan = $request->kodejurusan;

        $mahasiswa->save();

        return redirect('mahasiswa');

    }

    public function destroy($nim){

        $mahasiswa = Mahasiswa::findOrFail($nim);

        Mahasiswa::destroy($mahasiswa->nim);

        return redirect('mahasiswa');
    }

}
