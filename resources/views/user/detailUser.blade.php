@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Users</h1>
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
                  <h3>Table Detail Users</h3>
                    
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    @if($user->detail_data==null)
                      <tr class="text-center">
                        <th colspan="2"> <img src="/img/{{ $user->foto }}" alt="ggambar tidak ditemukan" width="200px" class="rounded-circle"></th>
                      </tr>
                      <tr>
                        <th>Nama Lengkap</th>
                        <td>{{ $user->name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <th>{{ $user->email }}</th>
                      </tr>
                    @else
                      <tr class="text-center">
                        <th colspan="2"><img src="/img/{{ $user->foto }}" alt="error" width="200px" class="rounded-circle"></th>
                      </tr>
                      <tr>
                        <th style="width: 50%">Nama lengkap</th>
                        <td style="width: 50%">{{ $user->name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td>{{ $user->detail_data->alamat }}</td>
                      </tr>
                      <tr>
                        <th>Tempat Lahir</th>
                        <td>{{ $user->detail_data->tempat_lahir }}</td>
                      </tr>
                      <tr>  
                        <th>Tanggal Lahir</th>
                        <td>{{ $user->detail_data->tanggal_lahir }}</td>
                      </tr>
                      <tr>  
                        <th>Agama</th>
                        <td>{{ $user->detail_data->agama->nama_agama }}</td>
                      </tr>
                      <tr>  
                        <th>Umur</th>
                        <td>{{ $user->detail_data->umur }}</td>
                      </tr>
                      <tr>
                        <th>Foto KTP</th>
                        <td colspan="2"><img src="/img/{{ $user->detail_data->foto_ktp }}" width="100px" alt="error" class="rounded-circle"></td>
                      </tr>
                     
                      @endif
                    </thead>
                  </table>
                  <div class="row">
                    <div class="col mt-2">
                        <a href="/updateData50" class="btn btn-warning">Update data</a>
                    </div>
                </div>
                  
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
