@extends('FrontPage/layout')

@section('content')

<main id="main">

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Testimonials</h2>
      <p>What Are They <span>Saying About Us</span></p>
    </div>

    <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
      @if($testimonialdata)
          @foreach($testimonialdata as $k => $testimonial)
        <div class="swiper-slide">
          <div class="testimonial-item">
         
            <div class="row gy-4 justify-content-center">
              <div class="col-lg-6">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                      {{$testimonial->description}}                    
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <h3>{{$testimonial->name}} </h3>
                  <h4>{{$testimonial->position}} </h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 text-center">
                <img src="{{url('uploads/'.$testimonial->image)}}" class="img-fluid testimonial-img" alt="">
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->
        @endforeach
        @endif


      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->
</main>

  @endsection
 