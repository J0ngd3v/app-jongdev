@extends('master')
@section('title')
 Page Youtube
@endsection
@section('konten')
@section('judul')
View youtube
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                <form action="{{ route('upload') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input class="form-control" type="text" name="judul" id="judul" required >
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input class="form-control" type="text" name="url" id="url" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection