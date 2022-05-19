@extends('index')

@section('content')
  <div class="container containRegistrasi">
      <div class="row" id="row">
        <div class="col-lg-6">
            <div class="container">
                <h2 class="text-center mb-3 fst-italic fw-bolder">ASPIKESMA</h2>
                <form action="/registrasi" method="post" class="form">
                    @csrf
                    <div class="mb-3">
                        <input type="text" value="{{ old('name') }}" class="form-control" name="name" id="name" placeholder="Nama" required autofocus>
                        @error('name')
                        <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" value="{{ old('username') }}" class="form-control" name="username" id="username" placeholder="Username" required>
                        @error('username')
                        <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="email" placeholder="Email (Menggunakan Email UB)" required>
                        @error('email')
                        <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        @error('password')
                        <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <h5 class="text-center mb-3">Confirm Password</h5> --}}
                    {{-- <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div> --}}
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-secondary">Create Account</button>
                    </div>
                    <h6 class="text-center">Already have an account? <a class="text-decoration-none" href="#">Log in</a></h6>
                </form>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center text-center">
            <div>
                <h2><img src="{{ asset('assets/inbox.jpg') }}" width="50" class="img-fluid" alt="">Kotak Suara dari ADVOKESMA</h2>
                <p class="fs-5">Kotak Suara Advokesma adalah inovasi baru dari advokesma untuk menyediakan sarana aspirasi bagi seluruh mahasiswa Fakultas Ilmu Komputer UB.</p>
            </div>
        </div>
      </div>
  </div>
  
@endsection