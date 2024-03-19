@include('FrontPage/header')

@include('FrontPage/topbar')

@include('FrontPage/hero')


    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            @yield('content')

        </div>
        <!-- end container-fluid -->

    </div>
@include('FrontPage/footer')