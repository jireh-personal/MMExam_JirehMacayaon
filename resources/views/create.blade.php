@extends('welcome')
@section('content')
<div class="row justify-container-center">
        <div class="col-5 bg-light p-2 shadow rounded">
            <form action="{{ url('user') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12">Name</div>
                    <div class="col-12"><input type="text" name="name" class="form-control" value="{{ old('name') }}"></div>
                    @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12">Age</div>
                    <div class="col-12"><input type="text" name="age" class="form-control" value="{{ old('age') }}"></div>
                    @if($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12">Email</div>
                    <div class="col-12"><input type="text" name="email" class="form-control" value="{{ old('email') }}"></div>
                    @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="row mt-2">
                    <div class="col-3 float-end">
                    <a href="{{ url('/user') }}" class="btn btn-sm btn-secondary mr-2">Back</a>
                    <button class="btn btn-sm btn-primary" type="submit">Save</button></div>
                    
                </div>
            </form>
        </div>
@endsection