@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">General</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                <a href="{{route('add_general')}}" class="btn btn-md " style="width:12%; background:#548CA8; color:white; margin-bottom: 15px;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Insert</a>

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opening Time</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $key=>$list)
                      <tr>
                        <td scope="row">{{++$key}}</td>
                        <td scope="row">{{$list->title}}</td>
                        <td scope="row">{{$list->description}}</td>
                        <td scope="row"><img src="{{asset('uploads/'.$list->image)}}" alt="" height="50px" width="50px"></td>
                        <td scope="row">{{$list->address}}</td>
                        <td scope="row">{{$list->phone}}</td>
                        <td scope="row">{{$list->email}}</td>
                        <td scope="row">{{$list->opening_time}}</td>
                      
                        <td scope="row">
                        <a href="{{route('edit_general',$list->id)}}" class="btn btn-xs btn-success">Edit</a>
                        <form action="{{route('delete_general',$list->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('delete')
                                <button type="submit" class="btn btn-danger btn-xs"
                                    onclick="return confirm('Are You Sure !!!')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Deal">Delete <i class="fas fa-trash-alt"></i>
                                </button>
                        </form>
                        </td>
                      
                      </tr>

                      @endforeach
                    
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        
      

      </div>
    </section>

  </main><!-- End #main -->

  @endsection
 