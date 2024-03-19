@extends('FrontPage/layout')

@section('content')

<main id="main">

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>gallery</h2>
      <p>Check <span>Our Gallery</span></p>
    </div>

    <div class="gallery-slider swiper">
      <div class="swiper-wrapper align-items-center">
      @if($gallerydata)
      @foreach($gallerydata as $key => $gallery)
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{url('uploads/'.$gallery->image)}}"><img src="{{url('uploads/'.$gallery->image)}}" class="img-fluid" alt=""></a></div>
        @endforeach
      @endif </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Gallery Section -->
</main>

  @endsection
 