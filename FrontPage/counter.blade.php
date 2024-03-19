@extends('FrontPage/layout')

@section('content')

<main id="main">

<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter">
  <div class="container" data-aos="zoom-out">

    <div class="row gy-4">
     @if($ratingdata)
        @foreach($ratingdata as $key => $rating)
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="{{$rating->rating}}" data-purecounter-duration="1" class="purecounter"></span>
          <p>{{$rating->name}}</p>
        </div>
      </div><!-- End Stats Item -->
      @endforeach
        @endif


    </div>

  </div>
</section><!-- End Stats Counter Section -->

</main>

  @endsection
 