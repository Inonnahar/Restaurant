@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Edit general</li>
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
                      <a href="{{route('generalindex')}}" class="btn btn-md " style="width:12%; background:#547258; color:white; margin-bottom: 15px;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
                        <form action="{{route('update_general',$data->id)}}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        @method('PUT') 
                          <table class="table table-bordered table-hover">
                        
                            <tr>
                                <th width="10%">Title</th>
                                <td width="90%"><input type="text" name="title" id="title" value="{{$data->title}}">
                                  @error('title')
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
                                <th width="10%">Address</th>
                                <td width="90%"><input type="text" name="address" id="address"  value="{{$data->address}}">
                                  @error('address')
                                  <span style="color:red">{{$message}}</span>
                                  @enderror
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Phone</th>
                                <td width="90%"><input type="text" name="phone" id="phone"  value="{{$data->phone}}">
                                  @error('phone')
                                  <span style="color:red">{{$message}}</span>
                                  @enderror
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Email</th>
                                <td width="90%"><input type="text" name="email" id="email"  value="{{$data->email}}">
                                  @error('email')
                                  <span style="color:red">{{$message}}</span>
                                  @enderror
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Opening Time</th>
                                <td width="90%"><input type="time" name="opening_time" id="opening_time"  value="{{$data->opening_time}}">
                                  @error('opening_time')
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
 