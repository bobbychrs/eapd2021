<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\masterJabatan;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->Pegawai = new Pegawai();
    }

    public function index()
    {
        // $data = [
        //     'master_pegawai'=> $this->Pegawai->allData(),
        // ];
        // return view('AdminWilayah.anggota_aw', $data);
    }
    public function detail($NRK)
    {
        $data = [
            'master_pegawai'=> $this->Pegawai->detailData($NRK),
        ];
        return view('AdminWilayah.detailanggota', $data);
    }
    public function create()
    {
        $master_jabatan = masterJabatan::all();
        return view('AdminWilayah.add_anggota_aw', compact('master_jabatan'));

        // return view('AdminWilayah.add_anggota_aw');
    }
    public function store(Request $request)
    {
        $request->validate([
            'NIP' => 'required|unique:master_pegawai',
            'NRK' => 'required|unique:master_pegawai|min:6',
            'phl' => 'required|max:1',
            'nama' => 'required',
            'jabatan_id' => 'required',
            'kode_pos' => 'required',
            'no_telepon' => 'required',
            'group_piket' => 'required|max:1',
        ],[
            'NIP.required' => 'NIP wajib diisi',
            'NIP.unique' => 'NIP sudah digunakan',
            'NRK.required' => 'NRK wajib minimal 6',
            'NRK.unique' => 'NRK sudah digunakan',
            'NRK.min' => 'NRK wajib minimal 6',
            'phl.required' => 'Phl wajib diisi',
            'phl.max' => 'Phl wajib maximal 1',
            'nama.required' => 'Nama wajib diisi',
            'jabatan_id.required' => 'Jabatan wajib diisi',
            'kode_pos.required' => 'Kode Pos wajib diisi',
            'no_telepon.required' => 'No telepon wajib diisi',
            'group_piket.required' => 'Group piket wajib diisi',
            'group_piket.max' => 'Group piket wajib maximal 1 karakter saja',
        ]);
        Pegawai::create([
            'NIP'=>$request->NIP,
            'NRK'=>$request->NRK,
            'phl'=>$request->phl,
            'nama'=>$request->nama,
            'jabatan_id'=>$request->jabatan_id,
            'kode_pos'=>$request->kode_pos,
            'no_telepon'=>$request->no_telepon,
            'group_piket'=>$request->group_piket,
        ]);
        return redirect('/')->with('pesan', 'Berhasil menambahkan pegawai baru!!!');
    }
}

