@extends('default')
@section('title')
 Rysnanto
@endsection
@section('content')
<div class="container">
   <div id="hero" class="jumbotron jumbotron-fluid" style="margin-bottom:-1px;">
          <div class="row" style="margin-top:80px;">
              <div class="col-md-7 animate__animated animate__backInLeft">
                    <img width="380px" src="aset/img/hero.png" alt="">
              </div>
              <div class="col-md-5 text-md-left text-center hero-title animate__animated animate__backInRight">
                    <h1 >JongDev</h1>
                     <p >
                       JongDev - Nama JongDev sendiri di ambil dari kosa kata  Belanda, Jong yang
                       Berarti "Anak muda". Jadi kita bisa menarik kesimpulan menjadi Pemuda Developer.
                     </p>

                    <a class="btn btn-custome" style="color:white;" href="{{ route('about') }}">About Me</a>
                  </div>
          </div>
      </div>
  </div>

  <section id="tech">
<div class="container">
  <div class="jumbotron jumbotron-fluid jumbotron-custome">
      <div class="row" style="margin-top:-50px;margin-bottom:-90px;">
        <div class="col text-center mt-4">         
            <ul>
              <li >
                <img class="animate__animated animate__fadeInLeft"  src="aset/img/Bootstrap.svg" alt="">      
              </li>
              <li>
                <img class="animate__animated animate__fadeInDown" src="aset/img/Laravel.svg" alt="">
              </li>
              <li>
                <img class="animate__animated animate__fadeInRight" src="aset/img/figma.png" alt="">
              </li>
              <li>
                
              </li>
            </ul>
        </div>
      </div>
    </div>
</div>

  </section>

  <section id="about">
    <div class="container">
      <div class="row justify-content-center" style="margin-top:100px;">
        <div class="col-md-6 text-center">
          <h3>About</h3>
          <p >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut assumenda ut quod ad magnam aspernatur quia ullam ratione fugiat, iste explicabo possimus.
             Est nihil distinctio voluptatibus dolore, alias, numquam totam dolores a delectus consequatur explicabo. Unde eum quaerat facilis quos.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="footer">
    <div class="container" style="margin-top:150px;margin-bottom:-40px;">
      <div class="jumbotron jumbotron-fluid" style="border-radius:20px;">
        <div class="row text-center">
          <div class="col">
            <h5> &copy; {{ $data['items'][0]['snippet']['title'] }} 2022 - 2026</h5>
            {{-- <p>Website Aktif Hingga Lord Rangga Menjadi Presiden.</p> --}}
          </div>
        </div>
        <div class="row text-center">
          <div class="col">
            <ul>
              <li>
                <a href="https://wa.me/+6281225599141"><img src="https://img.icons8.com/cotton/34/000000/whatsapp--v4.png"/></a>
              </li>
              <li>
                <img src="https://img.icons8.com/cotton/44/000000/twitter.png"/>
              </li>
              <li>
                <a href="https://youtube.com/channel/UCuWaoRaB3rB7A0ZiGH0uqNw/featured"> <img style="margin-left:-10px;"  src="https://img.icons8.com/cotton/44/000000/youtube.png"/></a>
              </li>
            </ul>
            <p>Bibuat Dengan Sepenuh Hati Di Gubug Derita.<br>
              <a href="">Home</a><span> / </span> <a href="">About</a><span> / </span> <a href="">Project</a>
            </p>
          </div>
        </div>

      </div>
    </div>
    
  </section>

  
  


  
@endsection