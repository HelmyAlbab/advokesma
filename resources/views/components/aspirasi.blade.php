@extends('index')

@section('content')
    <div class="section">
        <div class="container d-flex justify-content-center">
            <div>
                <h2><img src="{{ asset('assets/inbox.jpg') }}" width="50" class="img-fluid" alt=""> Kotak Suara dari</h2>
                <h1 class="text-center" style="letter-spacing: 3px">ADVOKESMA</h1>
            </div>
        </div>
        <div class="container pb-5">
            @if (session()->has('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('berhasil') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/aspirasi" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mt-5">
                        <div class="container">
                            <h3>Kelompok Aspirasi</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kel_aspirasi" id="kel_aspirasi1" value="Sosial"/>
                                <label class="form-check-label"> Sosial </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kel_aspirasi" id="kel_aspirasi2" value="Ekonomi" checked />
                                <label class="form-check-label"> Ekonomi </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kel_aspirasi" id="kel_aspirasi3" value="Akademik"/>
                                <label class="form-check-label"> Akademik </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kel_aspirasi" id="kel_aspirasi4" value="Aspirasi Pribadi"/>
                                <label class="form-check-label"> Aspirasi Pribadi </label>
                            </div>
                        </div>
                        @error('kel_aspirasi')
                            <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="container">
                            <h3>Isu Yang Dilaporkan</h3>
                            <textarea required class="form-control" name="isu" id="isu" cols="70" rows="3"></textarea>
                        </div>
                        @error('isu')
                            <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="col-lg-6 mt-5">
                        <div class="container">
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
                    <div class="col-lg-6 mt-5">
                        <div class="container">
                            <h3>Isi Opini Harapan Anda</h3>
                            <textarea value="{{ old('harapan') }}" required class="form-control" name="harapan" id="harapan" cols="70" rows="5"></textarea>
                            @error('harapan')
                                <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3 btn">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection