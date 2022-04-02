@extends('welcome')
@section('content')
<div class="row">
                <div class="col-12 bg-light p-2 shadow rounded">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img  src="{{ asset('images/firstSlide.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img  src="{{ asset('images/secondSlide.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img  src="{{ asset('images/thirdSlide.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 mt-2 bg-light p-2 mb-5 shadow rounded">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mb-2">
                                <div class="col">
                                <a href="{{ url('user/create') }}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Create">Create</a>
                                </div>
                            </div>
                            <div class="row form-group mb-2">
                                <div class="col-sm-12 col-md-4 col-lg-3">
                                    <input type="text" name="search" class="form-control btn-search" placeholder="Search by Name">
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-12 ms-auto">
                                    <select class="form-control btn-filter">
                                        <option value="">--Filter--</option>  
                                        @foreach([5,10,15] as $key)
                                        <option value="{{ $key }}" {{ Request::input('filter') == $key ? 'selected' : '' }}>{{  $key }}</option>
                                        @endforeach                               
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Email</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $key)
                                    <tr>
                                        <th scope="row">{{ $key->id }}</th>
                                        <td>{{ $key->name }}</td>
                                        <td>{{ $key->age }}</td>
                                        <td>{{ $key->email }}</td>
                                        <td>
                                            <input type="hidden" name="id" value="{{ $key->id }}">
                                            <a href="{{ url('/user/'.$key->id.'/edit') }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </a>
                                            <button class="btn btn-sm btn-danger btn-delete" onclick="deleteUser(this)" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-12">{{ $user->withQueryString()->links('pagination::bootstrap-5') }}</div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
