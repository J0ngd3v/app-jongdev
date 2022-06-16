@extends('master')
@section('title')
 User
@endsection
@section('konten')
@section('judul')
View User
@endsection
<a href="{{ route('adduser') }}" class="btn btn-outline mb-2" style="border-color:blue;border-radius:20px;"><span ><img src="https://img.icons8.com/ios/25/000000/add-user-group-man-man--v1.png"/></span>Tambah User</a>

<div class="row">
    <!-- column -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- title -->
          <div class="d-md-flex">
            <div>
              <h4 class="card-title">Lihat User</h4>
            </div>
          </div>
          <!-- title -->
          <div class="table-responsive">
            <table
              class="table mb-0 table-hover align-middle text-nowrap"
            >
              <thead>
                <tr>
                  <th class="border-top-0">No</th>
                  <th class="border-top-0">Nama</th>
                  <th class="border-top-0">Email</th>
                  <th class="border-top-0">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @php $no=1; @endphp
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ url('user/delete/'.$user->id) }}"><img src="https://img.icons8.com/ios/30/000000/delete-forever--v1.png"/></a> <a href=""><img src="https://img.icons8.com/ios-glyphs/28/000000/edit--v1.png"/></a></td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection