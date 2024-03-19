@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">categorymenu</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                <a href="{{route('add_categorymenu')}}" class="btn btn-md " style="width:12%; background:#548CA8; color:white; margin-bottom: 15px;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Insert</a>

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                       
                        <th scope="col">Category Name</th>
                        
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $key=>$list)
                      <tr>
                        <td scope="row">{{++$key}}</td>
                       
                        <td scope="row">{{$list->category_name}}</td>
                       
                        <td scope="row">
                        <a href="{{route('edit_categorymenu',$list->id)}}" class="btn btn-xs btn-success">Edit</a>
                        <form action="{{route('delete_categorymenu',$list->id)}}" method="post" style="display: inline-block">
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
 