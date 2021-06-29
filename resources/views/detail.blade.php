@extends('layout.template')
@section('title', 'Noir Parking-Detail')

@section('content')
<a onclick="history.back(-1)" class="btn btn-warning">BACK</a>
<div class="card" style="width: 50rem;">
    <div class="card-body">
      <h5 class="card-title">DETAIL PARKIR</h5>
      <br>
    
    <div class="form-group">
      <label for="id" class="form-label"><h4><strong>ID</strong></h4></label>
      <h5>{{ $tampil->id }}</h5>
    </div><br>

    <div class="form-group">
      <label for="plat_nomor" class="form-label"><h4><strong>Plat Nomor Kendaraan</strong></h4></label>
      <h5>{{ $tampil->plat_nomor }}</h5>
    </div><br>

    <div class="form-group">
      <label for="jenis_kendaraan" class="form-label"><h4><strong>Jenis Kendaraan</strong></h4></label>
      <h5>{{ $tampil->jenis_kendaraan }}</h5>
    </div><br>

    <div class="form-group">
      <label for="created_at" class="form-label"><h4><strong>Waktu Masuk</strong></h4></label>
      <h5>{{ $tampil->created_at }}</h5>
    </div><br>

    <label for="harga" class="form-label"><h4><strong>Harga</strong></h4></label>
    @switch($tampil->id)
        @case($tampil->harga === '2 Jam')
            <h5>Rp. 2000</h5>
            @break
        @case($tampil->harga === '3 Jam')
            <h5>Rp. 3000</h5>
            @break
        @case($tampil->harga === '4 Jam')
            <h5>Rp. 4000</h5>
            @break
        @case($tampil->harga === '5 Jam')
            <h5>Rp. 5000</h5>
            @break
        @case($tampil->harga === '6 Jam')
            <h5>Rp. 6000</h5>
            @break
        @case($tampil->harga === '24 Jam')
            <h5>Rp. 25.000</h5>
            @break
        @default
            <h5>-</h5>
    @endswitch <br>

    <div class="form-group">
        <label for="foto" class="form-label"><h4><strong>Foto</strong></h4></label><br>
        <img src="{{url('image/'. $tampil->foto)}}" width="200px">
    </div><br>

    <div class="d-grid gap-2 col-6 mx-auto ">
        <a class="btn btn-success float-left" href="{{$tampil->id}}/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
    </div><br>

    <div class="d-grid gap-2 col-6 mx-auto ">
        <a href="{{url('parkir/'. $tampil->id .'/edit')}}" class="btn btn-warning">Edit</a>
    </div><br>

    
    <form action="{{url('parkir/'. $tampil->id )}}" method="POST">
        @csrf
    <div class="d-grid gap-2 col-6 mx-auto ">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger" >Delete</button>
    </div>
    </form>
    
    
    </div>
</div>

    
@endsection