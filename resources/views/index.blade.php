@extends('layout.template')
@section('title','Noir Parking-Index')

@section('content')

    <div class="row"> 
      <div class="col-6">
      <a href="{{url('parkir/create')}}" class="btn btn-info">ADD</a>
      </div>
    </div>
    

    <table class="table table-info table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">PLAT NOMOR</th>
          <th scope="col">JENIS KENDARAAN</th>
          <th scope="col">WAKTU MASUK</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
        {{-- memanggil variable ('parkir') yang ada di controller dan telah diinisiasi oleh variable $data --}}
        {{-- sera tampilkan seluruh tabel dalam bentuk array --}}
        @foreach ($data as $isi)
            <tr>
              <td>{{ $isi->id }}</td>
              <td>{{ $isi->plat_nomor }}</td>
              <td>{{ $isi->jenis_kendaraan }}</td>
              <td>{{ $isi->created_at }}</td>
              <td><a href="{{route('parkir.show', $isi->id)}}" class="btn btn-success">Detail</a></td>
            </tr>
        @endforeach
      </tbody>
        
    </table>


@endsection
    

    