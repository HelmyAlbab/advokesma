@extends('dashboard.index')

@section('dashboardContent')
<div class="container mt-3">
    <div class="row mx-4 col-lg-12">
        <div class="col-lg-8">
                <h2 class="mb-3 text-dark">{{ $aspirasi->nama }}</h2>
                <a href="/dashboard/aspirasi" class="btn text-white mb-3" style="background: #37beb0;">Back to aspirasi</a>

                <h4>ISU</h4>
                <article class="mb-3 fs-5 text-dark">
                    {!! $aspirasi->isu !!}
                </article>
                <h4>HARAPAN</h4>
                <article class="mb-3 fs-5 text-dark">
                    {!! $aspirasi->harapan !!}
                </article>
        </div>
    </div>
</div>
@endsection