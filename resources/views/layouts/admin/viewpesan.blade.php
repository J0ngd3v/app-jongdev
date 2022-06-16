@extends('master')
@section('title')
 Pesan Netizen
@endsection
@section('konten')
@section('judul')
View Pesan
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @php $no=1; @endphp
            @foreach ($pesan as $psn)
            <div class="card">
                <div class="card-group m-4">
                    <h4><span>{{ $no++ }}.</span> Pesan dari {{ $psn->nama }} </h4>
                    <br>
                    <p>Email : {{ $psn->email }}</p>
                    <br>
                    <p>
                        {{ $psn->pesan }}
                    </p>
                    <div id="hapus">
                        <a href="{{ url('pesan/delete/'.$psn->id) }}"><img align="center" src="https://img.icons8.com/external-outline-kendis-lasman/30/000000/external-trash-user-interface-outline-kendis-lasman.png"/>
                        </a>
                    </div>
                    
                        
                </div>  
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection