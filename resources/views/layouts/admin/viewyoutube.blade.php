@extends('master')
@section('title')
 Page Youtube
@endsection
@section('konten')
@section('judul')
View youtube
@endsection
<div class="container">
    <a href="{{ url('youtube/tambah') }}" class="btn btn-outline mb-2" style="border-color:blue;border-radius:20px;"><span ><img src="https://img.icons8.com/color/24/000000/youtube-play.png"/></span>Tambah Vidio</a>

    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Url</th>
                            <th>Upload</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no=1; @endphp
                        @foreach ($youtube as $list)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $list->judul }}</td>
                            <td>{{ $list->url }}</td>
                            <td>{{ $list->created_at }}</td>
                            <td><a href="{{ url('youtube/delete/'.$list->id) }}">Hapus</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection