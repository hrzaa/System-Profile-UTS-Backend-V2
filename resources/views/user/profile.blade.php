@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1>User Profile</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
       <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3>Data Users</h3>
                </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-12 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                          <div class="card-header text-muted border-bottom-0">
                            User ID :  {{ Auth::user()->id }}
                          </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>{{ Auth::user()->name }}</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email : {{ Auth::user()->email }} </li>
                              </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="/img/{{ Auth::user()->foto }}" alt="" width="100px" class="img-circle img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                         @if (Auth::user()->role=="Admin")
                           <a href="#"class="btn btn-warning" onclick="alert('Demi keamanan \n  tidak dapat mengubah password !')">Update password</a>
                      @else
                           <a href="/updatePassword50" class="btn btn-warning">Update password</a>
                      @endif
                       
                        @if (Auth::user()->detail_data == null)
                            @if (Auth::user()->is_aktif)
                            <a href="/createData50" class="btn btn-success ">Lengkapi data</a>
                            @else
                            <a href="/createData50" class="btn btn-primary disabled">Lengkapi data</a>
                            <i>Menunggu persetujuan</i>
                            @endif
                        @else
                        <a href="/detailUser50/{{ Auth::user()->id }}" class="btn btn-primary">Detail User</a>
                        @endif
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
