@extends('index')

@section('content')
  <div class="section">
    <div class="row" id="homeContent">
      <div class="col text-center py-4">
        <h1>Advokesma</h1>
        <p class="mx-5 mt-4" id="context">
          salah satu Departemen yang berada di bawah naungan Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Brawijaya. Sesuai dengan fungsi BEM sebagai badan eksekutif yang menaungi
          mahasiswa FILKOM, BEM diharapkan mampu memberikan manfaat dan pengabdian kepada mahasiswa.
        </p>
        <div class="d-flex justify-content-evenly">
          <a class="button" href="#">Aspirasi</a>
          <a class="button" href="#">Pertanyaan</a>
          <a class="button" href="#">About Us</a>
        </div>
      </div>
      <div class="col text-center pt-5">
        <img id="image" src="{{ asset('assets/foto.jpg') }}" alt="foto" />
      </div>
    </div>
  </div>

  <div class="px-5" id="sec">
    <h2 class="text-center py-4">Top News</h2>
    <div class="row g-3">
      @foreach ($topnews as $item)    
        <div class="col-sm-4">
          <div class="card h-100 text-center">
            <div class="card-body">
              <h5 class="card-title">{{ $item->judul }}</h5>
              <p class="card-text">{{ $item->excerpt }}</p>
            </div>
            <div class="card-footer bg-transparent border-top-0 mb-3">
              <a href="/topnews/{{ $item->id }}" class="button">Read More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@stop