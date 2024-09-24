@extends('adminlayout.adminpage')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">EditAbout  </h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admins.index')}}">Home</a></li>

            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong class="d-block">About Us </strong></div>
                            <div class="block-body">
                                <form action="{{ route('admins.autheditabouts',$about->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" placeholder="Enter Name" value="{{$about->name}}" class="form-control
                                            @error('name') is-invalid @enderror" name="name">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" value="{{$about->title}}" class="form-control
                                            @error('title') is-invalid @enderror" name="title">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Qualification</label>
                                        <textarea name="qualification"   id="editor5">{{$about->qualification}}</textarea>


                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Work Experience</label>
                                        <textarea name="work_experience" id="editor4">{{$about->work_experience}}</textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="text" placeholder="email" value="{{$about->email}}" class="form-control
                                            @error('email') is-invalid @enderror" name="email">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Contact.No</label>
                                        <input type="text" placeholder="phone" value="{{$about->phone}}" class="form-control
                                            @error('phone') is-invalid @enderror" name="phone">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Description</label>

                                        <textarea name="description" id="editor1">{{$about->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Short Description</label>
                                        <textarea name="shortdescription" id="editor2">{{$about->shortdescription}}</textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Address</label>
                                        <textarea name="address" id="editor3">{{$about->address}}</textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Consultation Timing</label>
                                        <textarea name="consultationtiming" id="editor">{{$about->consultationtiming}}</textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror "
                                            name="image">
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Add" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            @endsection
