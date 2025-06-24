@extends('main-index')
@section('navbar')
@include('access.navbar')
@endsection
@section('sidebar')
@include('access.sidebar')
@endsection

@section('content')
<div class="card-header bg-info">
    <h4>User Registration</h4>
</div>
<div class="card p-3 bg-dark d-flex">
    <form action="/add-user" method="post" class="">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="collector" {{ old('status') == 'collector' ? 'selected' : '' }}>Collector</option>
                        <option value="receiver" {{ old('status') == 'receiver' ? 'selected' : '' }}>Receiver</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="btn-group float-right">
            <button class="btn btn-info btn-fill pull-left">Submit</button>
        </div>
        <div class="clearfix"></div>
    </form>

</div>

@endsection