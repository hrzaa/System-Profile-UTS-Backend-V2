@extends('layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Agama</h1>
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
          <div class="card card-primary">
            <div class="card-header">
              <h3>Update Agama</h3>
            </div>
            <form action="/updateAgama50Proses/{{ $agama->id }}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Nama agama</label>
                  <input type="text" class="form-control" name="nama_agama" placeholder="Nama agama" value="{{ $agama->nama_agama }}">
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
