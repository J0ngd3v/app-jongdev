
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-custome">
  <div class="container pt-2 pb-2">
    <img  src="aset/img/jong.png" alt="" width="150px">
    <button style="border:none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <img src="https://img.icons8.com/fluency-systems-filled/35/000000/menu.png"/>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link nav-custome text-dark mr-4" href="/">Home</a>
        <a class="nav-link nav-custome text-dark mr-4" href="{{ route('about') }}">About</a>
        <a class="nav-link nav-custome text-dark mr-4" href="{{ route('live') }}">Vidio</a>
        <a class="nav-link text-dark mr-4" href="{{ route('contact') }}">Contact</a>
        <a href="{{ url('/login') }}" class="nav-link btn-custome text-white text-center" ><span><img width="16px" src="aset/img/enter.png" alt=""></span> Login </a>
      </div>
    </div>
  </div>
 
</nav>

