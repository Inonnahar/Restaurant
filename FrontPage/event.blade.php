@extends('FrontPage/layout')

@section('content')

<main id="main">

<!-- ======= Events Section ======= -->
<section id="events" class="events">
  <div class="container-fluid" data-aos="fade-up">

    <div class="section-header">
      <h2>Events</h2>
      <p>Share <span>Your Moments</span> In Our Restaurant</p>
    </div>

    <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

      @if($eventdata)
          @foreach($eventdata as $k => $event)
        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{url('uploads/'.$event->image)}})">
          <h3>{{$event->name}}</h3>
          <div class="price align-self-start">${{$event->price}}</div>
          <p class="description">${{$event->details}}</p>
        </div><!-- End Event item -->
        @endforeach
        @endif

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Events Section -->
</main>

  @endsection
 