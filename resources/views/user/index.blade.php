@extends('main-index')
@section('navbar')
@include('access.navbar')
@endsection
@section('sidebar')
@include('access.sidebar')
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-plain">
            <div class="header">
                <h4 class="title text-uppercase">{{ $namatable }}</h4>
                <a href="/add-user" class="btn btn-primary bg-primary text-light mb-2">User Registration</a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped table-light">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($datauser as $data )
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->status }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
@endsection