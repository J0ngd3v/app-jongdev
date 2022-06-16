
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-custome">
    <div class="container pt-2 pb-2">
      
      <button style="border:none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <img src="https://img.icons8.com/fluency-systems-filled/35/000000/menu.png"/>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link btn-custome text-white text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span><img width="16px" src="aset/img/enter.png" alt=""></span> Logout </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>
      </div>
    </div>
   
  </nav>
  
  
  