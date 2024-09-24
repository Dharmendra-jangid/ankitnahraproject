@extends('adminlayout.adminpage')
@section('content')
<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Photo Add </h2>
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
              <div class="title"><strong class="d-block">Photo  </strong></div>
              <div class="block-body">
                <form action="{{route('admins.uploadImage')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group">
                    <label class="form-control-label">Image</label>
                    <input type="file"  class="form-control" name="image">
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
                <li class="breadcrumb-item active"> Photo </li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Photo Table</strong></div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>id</th>
                                            <th> Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($photo as  $index =>$photos)
                                        <tr>

                                                <td>{{$index+1}}</td>
                                                <td><img width="50px" height="50px" src="{{asset('photo/'.$photos->image)}}" alt=""></td>

                                                  <td>
                                                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                                        <a href="{{route('admins.deletePhoto',$photos->id)}}" class="btn btn-danger">Delete</a>
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



