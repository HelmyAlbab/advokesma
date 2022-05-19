@extends('index')

@section('content')
<div class="section">
    <div class="d-flex justify-content-center mb-5">
        <img src="{{ asset('/assets/inbox.jpg') }}" width="50" alt="inbox" id="inbox-Aspirasi">
        <h1 class="text-center">Let's Talk</h1>
    </div>
    <form action="/pertanyaan" method="post">
        @csrf
        <div class="row pb-5">
            <div class="col-lg-6 px-5">
                <div class="container">
                    @if (session()->has('berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('berhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h3>Data Diri</h3>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required value="{{ old('nama') }}">
                        @error('nama')
                            <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" required value="{{ old('nim') }}">
                        @error('nim')
                            <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Studi</label>
                        <input type="text" name="prodi" id="prodi" class="form-control" required value="{{ old('prodi') }}">
                        @error('prodi')
                            <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-5">
                <div class="container">
                    <h3>Silahkan masukkan pertanyaan anda</h3>
                    <textarea value="{{ old('pertanyaan') }}" required class="form-control" name="pertanyaan" id="pertanyaan" cols="70" rows="10"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4 btn">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </div>
    </form>
</div>
    
@endsection