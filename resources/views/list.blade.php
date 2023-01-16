@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-8 section offset-md-2">
            <div class="panel panel-primary">
                <table class="table table-bordered mb-5">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->surname }}</td>
                            <td>{{ $row->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center pdf-btn">
                    <a href="{{ route('peoples.list') }}" class="btn btn-primary">Generate PDF</a>
                </div>
            </div>
        </div>
    </div>


@endsection
