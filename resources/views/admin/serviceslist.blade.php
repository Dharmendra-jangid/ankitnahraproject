@extends('layout.masterlayout')
@section('content')

<section class="welcome_area">
            <div class="container">
                <div class="row welcome_inner">
                <div class="col-lg-12">
                @foreach ($servicename as $servicenames )


                <h1>{{$servicenames->name}}</h1>
                </div>

                <div class="col-lg-4">
                        <div class="welcome_img">
                            <img class="img-fluid" src="{{asset('service/'.$servicenames->image)}}" alt="">
                        </div>
                </div>

                    <div class="col-lg-8">
                        <div class="welcome_text">
                           @php
                               echo "{$servicenames->description}";
                           @endphp
                        </div>
                    </div>


                {{-- </div> --}}
            </div>

        </section>

     @endforeach
        @endsection
