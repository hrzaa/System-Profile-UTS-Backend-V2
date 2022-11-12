@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3>Data Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success</h5>
                       {{ $message }}
                      </div>
                    @endif
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Foto</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Approved at</th> --}}
                        <th style="width: 8rem">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="/img/{{ $user->foto }}" alt="" width="100px"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            {{-- <td>{{ $user->updated_at }}</td> --}}
                            <td>
                                @if ($user->is_aktif)
                                {{-- <a href="/detailUser50/{{ $user->id }}" class="btn btn-primary">Detail</a> --}}
                                <a href="/detailData50/{{ $user->id }}" class="btn btn-primary">Detail</a>
                                @else
                                <a href="/approveUser50/{{ $user->id }}" class="btn btn-danger">Approve</a>
                                @endif
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
