

@extends('FrontPage/layout')

@section('content')

<main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      @if($aboutdata)
        @foreach($aboutdata as $key => $about)
        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>
       
        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url({{asset('uploads/'.$about->image)}}) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              @if($data)
                @foreach($data as $k => $l)
                  <p>{{$l->phone}}</p>
                @endforeach
              @endif
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              {{$about->description}}
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('uploads/photo/'.$about->video_photo)}}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </section><!-- End About Section -->

   

  </main><!-- End #main -->

  @endsection
 