@extends('layout.template')
@section('title', 'Noir Parking-Update')

@section('content')

<div class="container">
<a onclick="history.back(-1)" class="btn btn-warning">BACK</a>
    <form class="row g-3" action="{{url('parkir/'.$ubah->id)}}" method="POST" enctype="multipart/form-data">
    <div class="card bg-info" style="width: 50rem;">
    <div class="card-body">
    {{-- form untuk memasukan data kendaraan parkir --}}
    
        {{-- {{ route('/Index-create') }} --}}
        @csrf
        <input type="hidden" name="_method" value="patch">
        {{-- <div class="col-auto"> --}}
            <label for="text" class="form-label"><h4>Plat Nomor Kendaraan</h4></label>
            <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" placeholder="Masukan Nomr Plat Kendaraan" value="{{ $ubah->plat_nomor }}">
        {{-- </div> --}}
        <br>

        {{-- <div class="col-auto"> --}}
            <label  class="form-label"><h4>Pilih Jenis Kendaraaan anda</h4></label>
            <select class="form-select" aria-label="Default select example" name="jenis_kendaraan" value="{{ $ubah->jenis_kendaraan }}">
                <option selected>Pilih Jenis Kendaraan</option>
                <option name="jenis_kendaraan" id="motor" value="Motor">Motor</option>
                <option name="jenis_kendaraan" id="mobil" value="Mobil">Mobil</option>
            </select>
        {{-- </div> --}}
        <br>

            <label for="harga" class="form-label"><h4>Waktu Keluar</h4></label>
            <select class="form-select" name="harga">
                <option selected>Jumlah Waktu Parkir</option>
                <option name="harga" id="harga">2 Jam</option>
                <option name="harga" id="harga">3 Jam</option>
                <option name="harga" id="harga">4 Jam</option>
                <option name="harga" id="harga">5 Jam</option>
                <option name="harga" id="harga">6 Jam</option>
                <option name="harga" id="harga">24 Jam</option>
            </select><br>

        {{-- <div class="position-relative"> --}}
            <div class="d-grid gap-2 col-6 mx-auto ">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        {{-- </div> --}}
    
    </div>
    </div>
    </form>
</div>


    
@endsection