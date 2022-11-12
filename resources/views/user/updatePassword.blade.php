@extends('layouts.master_login')
@section('content')
<div class="register-box">
    <div class="card card-primary">
      <div class="card-header text-center">
        <h3><b>Update</b>Password</h3>
      </div>
      <div class="card-body">
        <form action="/updatePasswordProses50/{{ Auth::user()->id }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password baru" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            <div class="col">
              <button type="submit" class="btn btn-primary">Update password</button>
              <a href="/profile50" class="btn btn-danger">Back</a>
            </div>
            <!-- /.col -->
          </div>
        </form>
        </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection
