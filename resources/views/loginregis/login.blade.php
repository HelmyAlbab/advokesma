@extends('index')

@section('content')
  <div class="w-25 container containLogin">
      <div class="py-5">
        <div class="text-center mb-5">
            <img src="{{ asset('assets/foto.jpg') }}" width="190" class="img-fluid" alt="foto">
        </div>
        <h2 class="text-center fst-italic fw-bolder mb-4">ASPIKESMA</h2>
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session()->has('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form class="form" action="/login" method="post">
          @csrf
          {{-- <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Log In by Email">
          </div>
          <h5 class="text-center mb-3">or</h5> --}}
          <div class="mb-3">
            <input type="text" value="{{ old('username') }}" class="form-control" id="username" name="username" placeholder="Username" value="">
          </div>
          <div class="mb-3">
            <input type="password" value="{{ old('password') }}" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <div class="d-flex justify-content-center mb-3">
              <button type="submit" class="btn btn-secondary">Login</button>
          </div>
          <h6 class="text-center">No account? <a class="text-decoration-none" href="#">Create one</a></h6>
        </form>
      </div>
      
  </div>
  
@endsection