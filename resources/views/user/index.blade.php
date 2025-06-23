@extends('main-index')
@section('sidebar')
@include('access.sidebar')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="header">
                <h4 class="title text-uppercase">{{ $namatable }}</h4>
                <p class="category">Here is a subtitle for this table</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover danger">
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