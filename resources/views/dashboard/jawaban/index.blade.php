@extends('dashboard.index')

@section('dashboardContent')
    <div class="container mt-4">
        <h2 class="text-center">PERTANYAAN</h2>
        @foreach ($pertanyaans as $item)
        <div class="container mt-5 mb-5 formPertanyaan">
            @if (session()->has('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('berhasil') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
                <div class="mb-3">
                    <h3>{{ $item->nama }}</h3>
                </div>
                <div class="mb-3">
                    <p>{{ $item->pertanyaan }}</p>
                </div>
                <form action="/dashboard/jawaban" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Jawaban: </label>
                        <textarea class="form-control" name="jawaban" id="jawaban" cols="50" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button> 
                </form>
            </div>
        @endforeach
    </div>
@endsection