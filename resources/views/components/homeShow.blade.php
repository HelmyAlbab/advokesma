@extends('index')

@section('content')
    <div class="section">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="mb-3 text-dark">{{ $topnew->judul }}</h2>

                    <article class="my-3 fs-5 text-dark">
                        {!! $topnew->body !!}
                    </article>
                    <a style="background: #37beb0;color: #fff" class="btn mt-4" href="/">Kembali ke Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection