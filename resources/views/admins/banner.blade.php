@extends('adminlayout.adminpage')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Banner Add </h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">Home</a></li>

            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong class="d-block">Banner Add </strong></div>
                            <div class="block-body">
                                <form action="{{ route('admins.addbanner') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Image</label>
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" placeholder="Enter Name" class="form-control"
                                            @error('name') is-invalid @enderror name="name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Description</label>
                                        <input type="text" placeholder="description" class="form-control"
                                        @error('description') is-invalid @enderror name="description">
                                            @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="form-control-label">Contact</label>
                                        <input type="text" placeholder="Enter Contact" name="contact"
                                        @error('contact') is-invalid @enderror  class="form-control">
                                            @error('contact')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div> --}}

                                    <div class="form-group">
                                        {{-- <input type="submit" value="Signin" class="btn btn-primary"> --}}
                                        <button type="submit" class="btn btn-dark">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>



        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admins.index')}}">Home</a></li>
                <li class="breadcrumb-item active"> Banner </li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Banner Table</strong></div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th> image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($banner as  $index =>$banners)
                                        <tr>

                                                <td>{{$index+1}}</td>
                                                <td>{{$banners->name}}</td>
                                                <td><img width="50px" height="50px" src="{{asset('banner/'.$banners->image)}}" alt=""></td>

                                                  <td>

                                                         <a href="{{route('admins.deleteBanner',$banners->id)}}" class="btn btn-danger">Delete</a>
                                                </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            @endsection
