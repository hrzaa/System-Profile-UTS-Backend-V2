@extends('layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Agama</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary ">
            <div class="card-header">
              <h3>Tambah Agama</h3>
            </div>
            <form action="/createAgama50Proses" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Nama agama</label>
                  <input type="text" class="form-control" name="nama_agama" placeholder="Nama agama" >
                 @error('nama_agama')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
