@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1>Detail User Profile</h1>
        </div>
      </div>
    </div>
  </section>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
               
                <div class="card-header">
                  <h4>Detail User Profile</h4>
                </div>
                
                <div class="card-body">
                  <form action="/updateDataProses50" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Alamat" name="alamat" required value="{{ Auth::user()->detail_data->alamat }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir" required value="{{ Auth::user()->detail_data->tempat_lahir }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="date" class="form-control" placeholder="Tanggal lahir" name="tanggal_lahir" required value="{{ Auth::user()->detail_data->tanggal_lahir }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="id_agama" required>
                          <option selected disabled value="{{ Auth::user()->id_agama }}">{{ Auth::user()->detail_data->agama->nama_agama }}</option>
                          @foreach ($agamas as $agama)
                          <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                          @endforeach
                        </select>
                      </div>
                    <div class="input-group mb-3">
                      <input type="number" class="form-control" placeholder="Umur" name="umur" required value="{{ Auth::user()->detail_data->umur }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4 ">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                      </div>
                    </div>
                  </form>

              </div>
            </div>
          </div>
    </div>
  </div>
@endsection
