@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Edit about</li>
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
                      <a href="{{route('about')}}" class="btn btn-md " style="width:12%; background:#547258; color:white; margin-bottom: 15px;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
                        <form action="{{route('update_about',$data->id)}}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        @method('PUT') 
                          <table class="table table-bordered table-hover">
                        
                          <tr>
                                <th width="10%">Image</th>
                                <td width="90%">
                                    <img src="{{url('uploads/'.$data->image)}}" alt="" style="width: 25%">  
                                    <input type="file" name="image" value="">                  
                                    <input type="hidden" name="old_photo" value="{{url('uploads/'.$data->image)}}"> 
                                    @error('image')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Description</th>
                                <td width="90%"><textarea name="description" id="description" cols="30" rows="10"  value="{{$data->description}}">{{$data->description}}</textarea>
                                  @error('description')
                                  <span style="color:red">{{$message}}</span>
                                  @enderror
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Video Photo</th>
                                <td width="90%">
                                    <img src="{{url('uploads/photo/'.$data->video_photo)}}" alt="" style="width: 25%">  
                                    <input type="file" name="video_photo" value="">                  
                                    <input type="hidden" name="old_video" value="{{url('uploads/photo/'.$data->video_photo)}}"> 
                                    @error('video_photo')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                           
                            <tr>
                                <th colspan="2" style="text-align:center;" class="bg-success" ><input type="submit" value="Submit" class="btn btn-block" style="font-weight:bold"></th>
                                
                            </tr>
                            
                            
                          </table>
                        </form>
                </div>
              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  @endsection
 