@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4 mt-5 mb-5">
            <h1 class="h1 text-center">Login</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email"  class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                  <label for="pass" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="pass">
                </div>
                <div class="error btn-danger p-3 mt-3 mb-3"></div>
                <button type="submit" name="submit" class="btn btn-primary text-center">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection