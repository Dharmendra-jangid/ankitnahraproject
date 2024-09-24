@extends('layout.masterlayout')

@section('content')


        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">

                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Video Gallery</h2>
                    </div>
                </div>
            </div>
        </section>


       <section class="video-area">

       <div class="container">

        <div class=" video-row">
                <div class="col-lg-6">
                    @foreach ($video as  $videos)
                        <video width="100%" height="315" autoplay muted controls >
                            <source src="{{asset('videoes/'.$videos->video)}}" type="video/mp4">
                        </video>

                    {{-- <iframe width="100%" height="315" src="{{asset('')}}assets/embed/HoaxwSZXK0s.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> --}}
                    @endforeach
                    </div>


                </div>
                </div>
       </section>

       @endsection
