@extends('adminlayout.adminpage')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Video Add </h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>

            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong class="d-block">Video </strong></div>
                            <div class="block-body">
                                <form action="{{ route('admins.insertvideo') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" value="{{ old('name') }}" class="form-control"
                                            name="name" id="name" placeholder="name">
                                        <label for="name" class="form-label">Name</label>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Video</label>
                                        <input type="file" class="form-control" name="video">
                                        <p>
                                            @if ($errors->has('video'))
                                                {{ $errors->first('video') }}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Add" class="btn btn-primary">
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
                        <li class="breadcrumb-item active"> Video </li>
                    </ul>
                </div>
                <section class="no-padding-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="block margin-bottom-sm">
                                    <div class="title"><strong>Video Table</strong></div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th> Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($video as $index => $videos)
                                                    <tr>

                                                        <td>{{$index + 1 }}</td>
                                                        <td>{{ $videos->name }}</td>


                                                        <td>

                                                            <a href="{{ route('admins.deleteVideo',$videos->id) }}"
                                                                class="btn btn-danger">Delete</a>
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
                </section>
            @endsection
