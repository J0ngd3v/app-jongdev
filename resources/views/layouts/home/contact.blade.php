@extends('default')
@section('title')
 Rysnanto
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top:100px;">
            <div class="col-md-6">
                <div class="card" style="border:none;box-shadow: 5px 10px 54px 1px rgba(0, 0, 0, 0.1);">
                    @if ($message = Session::get('pesan'))
                        <div class="alert alert-primary">
                            {{ $message }}
                        </div>
                     @endif
                    <div class="card-body">
                        <form action="{{ route('KirimPesan') }}">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="username" name="nama" required class='form-control'   Required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="email" name="email" required class='form-control'   Required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Pesan</label>
                                <div class="row">
                                    <div class="col">
                                        <textarea name="pesan"  required id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="row">
                                    <div class="col">
                                      <input type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="border:none;box-shadow: 5px 10px 54px 1px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                       <h4 class="animate__animated animate__fadeIn"> <span><img width="20px" src="aset/img/warning.png" alt=""></span>Warning!</h4>
                        <p>
                            Kirim masukan atau kritikan yang tanpa menyisipkan kata kata kurang pantas
                            dan mengandung unsur unsur sara
                        </p>
                        <p>
                            Terimakasih saya ucapkan untuk teman teman yang sudah memberi saya kritikan yang 
                            membangun
                        </p>
                        <p>
                            <ul>
                                <li>+6281225599141</li>
                                <li>Rembang , Desa Kayangan Jl.Isekai Rt.03 Rw.02</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection