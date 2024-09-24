@extends('adminlayout.adminpage')
@section('content')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Service Show</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admins.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Services </li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Services Table</strong></div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th> Name</th>
                                            <th>description</th>
                                            <th>long description </th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($servicedit as $index=> $servicedits )

                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$servicedits->name}}</td>
                                         <td>   <textarea class="bg-dark text-white" cols="50" rows="5">@php echo "$servicedits->description" @endphp</textarea></td>

                                         <td>   <textarea class="bg-dark text-white" cols="50" rows="5">@php echo "$servicedits->longdescription" @endphp</textarea></td>
                                            <td><a href="{{route('admins.editservices',$servicedits->id)}}"class="btn btn-success" width="">Edit</a>


                                                <form action="{{ route('admins.delete', $servicedits->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

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
