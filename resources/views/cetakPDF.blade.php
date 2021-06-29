<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <title>Print Pembayaran</title>
</head>

<body>

    {{-- <div class="card" style="width: 50rem;">
        <div class="card-body"> --}}
          <h3 class="card-title">DETAIL PARKIR</h3>
          <br>
        
        @foreach($cetak as $isi)
        {{-- <div class="form-group"> --}}
          <h4><strong>ID</strong></h4>
          <h5>{{ $isi->id }}</h5>
        {{-- </div> --}}
        
    
        {{-- <div class="form-group"> --}}
          <h4><strong>Plat Nomor Kendaraan</strong></h4>
          <h5>{{ $isi->plat_nomor }}</h5>
        {{-- </div> --}}
        
    
        {{-- <div class="form-group"> --}}
          <h4><strong>Jenis Kendaraan</strong></h4>
          <h5>{{ $isi->jenis_kendaraan }}</h5>
        {{-- </div> --}}
        
    
        {{-- <div class="form-group"> --}}
          <h4><strong>Waktu Masuk</strong></h4>
          <h5>{{ $isi->created_at }}</h5>
        {{-- </div> --}}
        
    
        <h4><strong>Harga</strong></h4>
        @switch($isi->id)
            @case($isi->harga === '2 Jam')
                <h5>Rp. 2000</h5>
                @break
            @case($isi->harga === '3 Jam')
                <h5>Rp. 3000</h5>
                @break
            @case($isi->harga === '4 Jam')
                <h5>Rp. 4000</h5>
                @break
            @case($isi->harga === '5 Jam')
                <h5>Rp. 5000</h5>
                @break
            @case($isi->harga === '6 Jam')
                <h5>Rp. 6000</h5>
                @break
            @case($isi->harga === '24 Jam')
                <h5>Rp. 25.000</h5>
                @break
            @default
                <h5>-</h5>
        @endswitch
    
        @endforeach
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>