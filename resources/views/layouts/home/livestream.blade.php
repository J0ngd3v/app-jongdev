@extends('default')
@section('title')
Live Stream
@endsection
@section('content')
    <div class="conatiner">
        @foreach ($live as $lives)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card " style="margin-top:100px;border-radius:20px;border:none;-webkit-box-shadow: 9px 6px 63px -4px rgba(0,0,0,0.27);
                -moz-box-shadow: 9px 6px 63px -4px rgba(0,0,0,0.27);
                box-shadow: 9px 6px 63px -4px rgba(0,0,0,0.27);">
                    <div class="card-body">
                        <iframe  src="{{ $lives->url }}"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h4 class="mt-2">
                            {{ $lives->judul }}
                        </h4>
                        <p>Di Upload Pada {{ $lives->created_at }}</p>
                       
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection