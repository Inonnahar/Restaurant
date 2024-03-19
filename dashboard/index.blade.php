@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">


            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

       

                <div class="card-body pb-0">
                  <h5 class="card-title" style="text-align:center">WELCOME TO OUR PAGE</h5>

                  <div style="text-align:center">
                   
                        <span style="font-weight:bold" class="text-success">We are always here to serve you. Life is short, make it sweet. A taste you'll remember. Life is dull without good food.</span>
                    
                  </div>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

      

      </div>
    </section>

  </main><!-- End #main -->

  @endsection
 