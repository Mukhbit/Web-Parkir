<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkir;
use Illuminate\Support\Facades\DB;

class ParkirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //menginisiasi table parkir yang ada di dalam model lalu menampilkan semua data yang ada di tabel parkir
        $data = Parkir::all();
        //mengembalikan data yang di tangkap dari model, serta menampilkannya di halaman ('index')
        return view('/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menginisiasi table parkir yang ada di dalam model lalu menampilkan semua data yang ada di tabel parkir
        $dataBaru = new Parkir;
        //mengembalikan data yang di tangkap dari model, serta menampilkannya di halaman ('create')
        return view('/create', compact('dataBaru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menginisiasi table parkir yang ada di dalam model lalu menginput data baru kedalam tabel parkir
        $tambah = new Parkir;
        $tambah->plat_nomor = $request->plat_nomor;
        $tambah->jenis_kendaraan = $request->jenis_kendaraan;
        // $model->foto = $request->foto;
        //kita akan membuat code untuk upload file
        if($request->file('foto')){
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('image', $nama_file);
            $tambah->foto = $nama_file;
        }
        $tambah->save();

        //mengembalikan data yang di tangkap kedalam tabel, serta menampilkannya di halaman ('index')
        return redirect('parkir')->with('success', "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menginisiasi table parkir yang ada di dalam model lalu menampilkan data berdasarkan id yang ada di tabel parkir
        $tampil = Parkir::find($id);
        //mengembalikan data yang di tangkap dari model, serta menampilkannya di halaman ('detail')
        return view('/detail', ['tampil'=>$tampil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menginisiasi table parkir yang ada di dalam model lalu menampilkan data berdasarkan id yang ada di tabel parkir
        $ubah = Parkir::find($id);
        //mengembalikan data yang di tangkap dari model, serta menampilkannya di halaman ('update')
        return view('/update', compact('ubah'));
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
        //menginisiasi table parkir yang ada di dalam model lalu mengubah data yang ada kedalam tabel parkir
        $tambah = Parkir::find($id);
        $tambah->plat_nomor = $request->plat_nomor;
        $tambah->jenis_kendaraan = $request->jenis_kendaraan;
        $tambah->harga = $request->harga;
        $tambah->save();

        //mengembalikan data yang di tangkap kedalam tabel, serta menampilkannya di halaman ('index')
        return redirect('parkir')->with('success', "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menginisiasi table parkir yang ada di dalam model lalu menghapus data yang ada di dalam tabel parkir
        $hapus = Parkir::find($id);
        $hapus->delete();
        //mengembalikan data yang di tangkap kedalam tabel, serta menampilkannya di halaman ('index')
        return redirect('parkir');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->get('search');

    	// mengambil data dari table parkir sesuai pencarian data
		$data = Parkir::where('plat_nomor','like', "%".$cari."%")->paginate(5);

    	// mengirim data parkir ke view index
		return view('/index',compact('data'));
    }

}