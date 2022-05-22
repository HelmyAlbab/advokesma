@extends('index')

@section('content')
  <div class="section">
    <div class="row" id="homeContent">
      <div class="col text-center py-4">
        <h1>Advokesma</h1>
        <p class="mx-5 mt-4" id="context">
          Advokesma bertanggung jawab dalam melakukan kegiatan advokasi
          terhadap permasalahan mahasiswa kepada pihak terkait sebagai
          bentuk perjuangan aspirasi mahasiswa.Advokesma juga bertugas
          untuk menghimpun permasalahan serta menyampaikan informasi
          terkait kesejahteraan mahasiswa.
        </p>
        <div class="d-flex justify-content-evenly">
          <a class="button" href="/aspirasi">Aspirasi</a>
          <a class="button" href="/pertanyaan">Pertanyaan</a>
          <a class="button" href="/about">About Us</a>
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
            <div class="mb-3">
              {{ $item->created_at->diffForHumans() }}
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