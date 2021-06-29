@extends('layout.template')
@section('title', 'Noir Parking-Insert')

@section('content')

<div class="container">
    <a onclick="history.back(-1)" class="btn btn-warning">BACK</a>
    <form class="row g-3" action="{{url('parkir')}}" method="POST" enctype="multipart/form-data">
    <div class="card bg-info" style="width: 50rem;">
    <div class="card-body">
    {{-- form untuk memasukan data kendaraan parkir --}}
    
        {{-- {{ route('/Index-create') }} --}}
        @csrf
        {{-- <div class="col-auto"> --}}
            <label for="text" class="form-label">Plat Nomor Kendaraan</label>
            <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" placeholder="Masukan Nomr Plat Kendaraan" value="{{ old('plat_nomor')}}">
        {{-- </div> --}}
        <br>

        {{-- <div class="col-auto"> --}}
            <label for="jenis_kendaraan" class="form-label">Pilih Jenis Kendaraaan anda</label>
            <select class="form-select" aria-label="Default select example" name="jenis_kendaraan">
                <option selected>Pilih Jenis Kendaraan</option>
                <option name="jenis_kendaraan" id="motor" value="Motor">Motor</option>
                <option name="jenis_kendaraan" id="mobil" value="Mobil">Mobil</option>
            </select>
        {{-- </div> --}}
        <br>

        {{-- <div class="col-auto"> --}}
        <label for="foto" class="form-label">Masukkan Gambar yang di pilih</label>
        <input class="form-control" type="file" id="foto" name="foto">
        {{-- </div> --}}
        <br>

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