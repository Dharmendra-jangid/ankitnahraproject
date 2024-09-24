@extends('layout.masterlayout')
@section('content')
<h1 class="text-center bgcolors">{{$servicedit->name}}</h1>
<section class="welcome_area">
            <div class="container">
                <div class="row welcome_inner">
                <div class="col-lg-12">

                </div>

                <div class="col-lg-4">
                        <div class="welcome_img">
                            <img class="img-fluid" src="{{ asset('service/' . $servicedit->image) }}" alt="">
                        </div>
                </div>

                    <div class="col-lg-8">
                        <div class="welcome_text">
                        @php

                         echo "{$servicedit->description}" @endphp

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="welcome_text">
                            @php

                             echo "{$servicedit->longdescription}" @endphp

                            </div>
                    </div>

                </div>
            </div>
        </section>


        @endsection
