@extends('dashboard.index')

@section('dashboardContent')
    <h2 class="text-center my-4">Aspirasi</h2>
    <div class="container" style="padding: 0 5rem">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aspirasi as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>
                            <a href="/dashboard/aspirasi/{{ $item->id }}" class="btn btn-warning text-white">Show</a>
                            <form action="/dashboard/aspirasi/{{ $item->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection