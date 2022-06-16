@extends('master')
@section('title')
 Add User New
@endsection
@section('konten')
 @section('judul')
 Add User
 @endsection

 <div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tambahuser') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username"><b> Username</b></label>
                        <div class="row">
                            <div class="col-12">
                                <input style="border-radius:15px;" type="username" name="name" id="username" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b> </label>
                        <div class="row">
                            <div class="col-12">
                                <input style="border-radius:15px;" type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <div class="row">
                            <div class="col-12">
                                <input style="border-radius:15px;" type="username" name="password" id="password" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection