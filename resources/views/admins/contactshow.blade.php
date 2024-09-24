@extends('adminlayout.adminpage')
@section('content')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">

                <h2 class="h5 no-margin-bottom">Contact Show</h2>
            </div>

        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">

            <ul class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{route('admins.index')}}">Home</a></li>
                <li class="breadcrumb-item active"> Contact </li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Contact Table</strong></div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>id</th>
                                            <th> Name</th>
                                            <th> Email</th>
                                            <th>mobil</th>
                                            <th>Message</th>
                                            <th>City</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as  $index =>$contacts)
                                        <tr>

                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $contacts->name }}</td>
                                                <td>{{ $contacts->email }}</td>
                                                <td>{{ $contacts->phone }}</td>
                                                <td>{{ $contacts->city }}</td>
                                                <td><textarea name="" id="" cols="30" rows="3">{{ $contacts->message }}</textarea></td>
                                                <td><a href="https://wa.me/+91{{ $contacts->phone }}/?text="
                                                        class="btn btn-success" width="5px"><i class="bi bi-whatsapp"></i></a>
                                                <td>
                                                    <form action="{{ route('admins.destroy', $contacts->id) }}"
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
