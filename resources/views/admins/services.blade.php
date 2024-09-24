@extends('adminlayout.adminpage')
@section('content')
<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Services Add </h2>
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
              <div class="title"><strong class="d-block">Service  </strong></div>
              <div class="block-body">
                <form action="{{route('admins.authservice')}}" method="POST" enctype="multipart/form-data">
                    @csrf


                  <div class="form-group">
                    <label class="form-control-label">Name</label>
                    <input type="text" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror " name="name">
                    @error('name')
                     <div class="text-danger">{{ $message }}</div>
                        @enderror
                  </div>


                  <div class="form-group">
                    <label class="form-control-label">Description</label>

                    <textarea name="description" id="editor"></textarea>
                  </div>

                  <div class="form-group">
                    <label class="form-control-label">Long Description</label>

                    <textarea name="longdescription" id="editor1"></textarea>
                  </div>
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
        @endsection
