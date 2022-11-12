
@extends('layouts.master')
@section('content')
<div class="container-fluid">

  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card card-primary">
          <div class="card-header">
            <h4>Form Lengkapi Data
            <a href="{{ 'profile50' }}" class="btn btn-danger float-right">Back</a>
            </h4>
          </div>
        <div class="card-body">
            <form action="{{ url('/createDataProses50') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <label for="" class="form-label">Alamat</label>
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <label for="" class="form-label">Tempat Lhir</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <label for="" class="form-label">Tanggal Lahir</label>
          <div class="input-group mb-3">
            <input type="date" class="form-control" placeholder="Tanggal lahir" name="tanggal_lahir" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <label for="" class="form-label">Agama</label>
          <div class="input-group mb-3">
              <select class="form-control" name="id_agama">
                <option selected disabled>Pilih agama</option>
                @foreach ($agamas as $agama)
                <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                @endforeach
              </select>
            </div>
            <label for="" class="form-label">Umur</label>
          <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Umur" name="umur" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <label for="" class="form-label">Foto KTP</label>
          <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="foto_ktp" required>
                <label class="custom-file-label" for="exampleInputFile">Foto KTP</label>
            </div>
          </div>
          <div class="row">
            <div class="col-10">
            </div>
            <!-- /.col -->
            <div class="col-2">
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
            <!-- /.col -->
          </div>                    
                    </form>
                </div>
            </div>
          </div>
        </div>
</div>@endsection
