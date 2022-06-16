@extends('master')
@section('title')
 Dashboard
@endsection
@section('konten')
 @section('judul')
 Dashboard
 @endsection

 <div class="row">
     <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                   <a href="{{ url('/user') }}"> <h3>User Active</h3></a>
                </div>
               <p>{{ $users }} User</p>
              
            </div>
        </div>
     </div>
     <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Youtube</h3>
                </div>
                <p>{{ $youtube }} Vidio</p>
            </div>
        </div>
     </div>
     <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Komentar</h3>
                </div>
                <p>{{ $pesan }} Pesan</p>
            </div>
        </div>
     </div>
 </div>
@endsection