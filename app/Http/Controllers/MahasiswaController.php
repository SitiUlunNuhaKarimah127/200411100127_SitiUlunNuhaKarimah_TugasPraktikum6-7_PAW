<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return View('tampilan.index', compact('mahasiswa'), ['no' => 1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('tampilan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMahasiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMahasiswaRequest $request)
    {
        $request->validate([
            'nrp' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return View('tampilan.aboutme');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        // $data=Mahasiswa::all();
        // dd($mahasiswa);
        return View('tampilan.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMahasiswaRequest  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $rules = [
            'nama' => 'required',
            'alamat' => 'required|min:5'
        ];
        if ($request->nrp != $mahasiswa->nrp) {
            $rules['nrp'] = 'required|max:12|unique:mahasiswas';
        } elseif ($request->email != $mahasiswa->email) {
            $rules['email'] = 'required|email|unique:mahasiswas';
        }
        $validasi = $request->validate($rules);
        $mahasiswa->update($validasi);
        return redirect()->route('home')->withPesan('Data Berhasil Di Edit');
    }

    public function displayImage($foto)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->nrp);
        return redirect()->route('home')->withPesan('Data Berhasil Di Hapus');
    }
}
