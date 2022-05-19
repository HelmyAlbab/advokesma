@extends('dashboard.index')

@section('dashboardContent')
<div class="container my-5">
    <div class="container">
        <h3 class="mb-3">Tambah Informasi Baru</h3>
        <div class="col-lg-8">
            <form action="/dashboard/topnews" method="post" class="mb-5">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required autofocus value="{{ old('judul') }}">
                    @error('judul')
                        <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pj" class="form-label">Penanggung Jawab</label>
                    <input type="text" class="form-control" id="pj" name="pj" required value="{{ old('pj') }}">
                    @error('pj')
                        <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <input type="text" class="form-control" id="excerpt" name="excerpt" required value="{{ old('excerpt') }}">
                    @error('excerpt')
                        <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi Informasi</label>
                    <input type="text" class="form-control" id="body" name="body" required value="{{ old('body') }}">
                    @error('body')
                        <div class="alert alert-danger p-0 lh-sm">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Informasi</button>
            </form>
        </div>
    </div>
</div>
@endsection