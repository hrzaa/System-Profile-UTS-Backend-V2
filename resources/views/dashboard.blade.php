@extends('layouts.master')
@section('content')
<div class="text-center">
  <div class="text ">
     <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 mt-5" style="opacity: .8" width="100px">
    <h1><b>Sistem Profile</b></h1>
    <h1><strong>Selamat Datang </strong>{{ Auth::user()->name }}</h1>
  </div>
</div>
@endsection
