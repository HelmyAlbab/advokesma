@extends('index')

@section('content')
  <div class="container containRegistrasi">
      <div class="row">
        <div class="col-sm-6">
            <div class="container">
                <form class="form" action="/registrasi">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email (Menggunakan Email UB)" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    {{-- <h5 class="text-center mb-3">Confirm Password</h5> --}}
                    {{-- <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div> --}}
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                    <h6 class="text-center">Already have an account? <a class="text-decoration-none" href="#">Log in</a></h6>
                </form>
            </div>
        </div>
        <div class="col-sm-6 d-flex justify-content-center align-items-center">
            <div>
                <h2><img src="{{ asset('assets/inbox.jpg') }}" width="50" class="img-fluid" alt="">Kotak Suara dari ADVOKESMA</h2>
                <p class="fs-5">Kotak Suara Advokesma adalah inovasi baru dari advokesma untuk menyediakan sarana aspirasi bagi seluruh mahasiswa Fakultas Ilmu Komputer UB.</p>
            </div>
        </div>
      </div>
  </div>
  
@endsection