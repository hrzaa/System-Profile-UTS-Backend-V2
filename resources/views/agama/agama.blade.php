@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Agama</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success</h5>
                       {{ $message }}
                      </div>
                    @endif
                <div class="card-header">
                  <h3>Data Agama</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Agama</th>
                        <th style="width: 12rem">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($agamas as $agama)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $agama->nama_agama }}</td>
                            <td>
                                <a href="/updateAgama50/{{ $agama->id }}" class="btn btn-warning btn-sm">Update</a>
                                <a href="/deleteAgama50Proses/{{ $agama->id }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <a href="/createAgama50" class="btn btn-primary mt-3">Tambah</a>
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
