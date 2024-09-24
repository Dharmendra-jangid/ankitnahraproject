@extends('layout.masterlayout')
@section('content')


    <h2 class="photo_gallery" >Photo Gallery</h2>

        <section class="feature_area p_120">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">


<div class="image-row">

   @foreach ($photo as $photos)

<a class="example-image-link" href="{{ asset('photo/' . $photos->image) }}" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('photo/' . $photos->image) }}" alt=""></a>
@endforeach

{{--
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g2.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g2.jpg" alt=""></a>
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g3.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g3.jpg" alt=""></a>
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g4.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g4.jpg" alt=""></a>
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g5.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g5.jpg" alt=""></a>
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g6.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g6.jpg" alt=""></a>
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g7.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g7.jpg" alt=""></a>
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g8.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g8.jpg" alt=""></a>
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g9.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g9.jpg" alt=""></a>
<a class="example-image-link" href="{{asset('')}}assets/img/gallery/g10.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{asset('')}}assets/img/gallery/g10.jpg" alt=""></a> --}}
</div>
</div>
</section>

@endsection
