@extends('dashboard.index')

@section('dashboardContent')
<h2 class="text-center my-4">Top news</h2>
<div class="container" style="padding: 0 5rem">
    <a href="/dashboard/topnews/create" class="btn btn-success mb-3">Tambah informasi baru</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Date</th>
                <th scope="col">Judul</th>
                <th scope="col">Penanggung Jawab</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($topnews as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->pj }}</td>
                    <td>
                        <a href="/dashboard/topnews/{{ $item->id }}" class="btn btn-warning">Show</a>
                        <a href="/dashboard/topnews/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/dashboard/topnews/{{ $item->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger mb-3" onclick="return confirm('are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection