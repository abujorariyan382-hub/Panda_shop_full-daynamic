@extends('layout.layout')

@section('content')
<main>
                    <div class="container-fluid px-4 ">
                        <h1 class="mt-4">Add Catagory</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Catagory</li>
                        </ol>

                        
                       <div>

                    
                        <div>
                            <h1 class="text-center fs-1 fw-bold">Add Catagory</h1>
                        </div>

                        <form action="{{ route('catagory.store') }}" method="post" class="text-center mt-4">
                            @csrf
                            @method('PUT')
                            <input class="p-1 type="text" name="add_catagory" id="add_catagory" placeholder="Write a catagory"" >
                            <input type="submit" class=" btn btn-dark" name="submit" value="Add Catagory">
                        </form>

                        

                      </div>

                      <div class="wrap mt-5" >
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Catagory name</th>
                                <th>Action</th>
                            </tr>

                            <tbody>
                                @if (count($catagory)>0)
                                @foreach ($catagory as $catagory)
                                    <tr>
                                    <td>{{$catagory->id}}</td>
                                    <td>{{$catagory->add_catagory}}</td>
                                    <td>
                                
                                        <form action="{{ route('delete.catagory',$catagory->id) }}" method="POST">
                                                   @csrf
                                                  @method('delete')
                                                   <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                     </form>
                                    </td>
                                </tr>
                                @endforeach
                                    
                                @endif
                               
                            </tbody>

                        </table>
                      </div>

                    
                  
                    </div>
                </main>
               
@endsection
             
             
             
                 