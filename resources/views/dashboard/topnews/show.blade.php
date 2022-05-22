@extends('dashboard.index')

@section('dashboardContent')
<div class="container mt-3">
    <div class="row mx-4 col-lg-12">
        <div class="col-lg-8">
            <a href="/dashboard/topnews" class="btn text-white mb-3" style="background: #37beb0;">Back to topnews</a>
            <h2 class="text-dark">{{ $topnews->judul }}</h2>   
            <p class="mb-4">Penanggung jawab: {{ $topnews->pj }}</p>
            <h4>Informasi:</h4>
            <article class="mb-3 fs-5 text-dark">
                {!! $topnews->body !!}
            </article>
        </div>
    </div>
</div>
@endsection