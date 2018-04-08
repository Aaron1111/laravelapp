<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  @if (!empty($halaman) && $halaman == 'homepage')
  <a class="navbar-brand" href="{{url ('homepage')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only"></span>
  </button>
  @else
  <a class="navbar-brand" href="{{url ('homepage')}}">Home</a>
  @endif
  
<div class="collapse navbar-collapse" id = "navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     @if (!empty($halaman) && $halaman == 'arsip')
      <li class="nav-item active">
        <a class="nav-link" href="{{url ('arsip')}}">Arsip<span class="sr-only">(current)</span></a>
      </li>
      @else
      <li><a class="nav-link" href="{{url ('arsip')}}">Arsip</a></li> 
      @endif

      @if (!empty($halaman) && $halaman == 'about')
      <li class="nav-item active">
        <a class="nav-link" href="{{url ('about')}}">About <span class="sr-only">(current)</span></a>
      </li>
      @else
      <li><a class="nav-link" href="{{url ('about')}}">About</a></li> 
      @endif

     

<!--
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pasien
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('arsip')}}">Data Pasien</a>
          <a class="dropdown-item" href="{{url('arsip/create')}}">Form</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
-->
     
    </ul>
    
  </div>
</nav>

