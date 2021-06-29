<div class="container-md">
    {{-- Navbar pada setiap menu --}}
    <nav class="navbar navbar-primary bg-primary">
      <div class="container-fluid">
        <a href="/parkir" class="navbar-brand text-white"><strong>Noir</strong> Parking</a>
        
        <form class="d-flex" action="{{ url('cari') }}" method="GET">
          @csrf
          <input text="name" class="form-control me-2" placeholder="Search" name="search">
          <button class="btn btn-success" value="search">Search</button>
          
        </form>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          <button type="submit" class="btn btn-info">Logout</button>
        </form>
      </div>
    </nav>

    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        
        <h1 class="display-4"><strong>Sistem Parkir Online</strong></h1>
        
        
      </div>
    </div>

  