@extends('layout.layout')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit hero page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Hero</li>
                        </ol>
                       <form action="{{ route('update.hero.page',$hero->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <h3>image</h3>
                                         <img style="height: 30vh" src="{{ asset('storage/' . $hero->hero_image) }}" class="img-thumbnail" id="prevImage" >
                                    <input  class="mt-3" type="file" name="hero_image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                                <div class="col-md-4">

                                
                            <div class="mt-2">
                                <label for="title"><h4>Title</h4></label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ $hero->title }}">
                            </div>
                            <div class="mt-2">
                                 <label for="description"><h4>Description</h4></label>
                                <textarea name="description" id="description"  class="form-control">{{$hero->description}}</textarea>
                            </div>
                            <div class="mt-2">
                                <label for="price"><h4>Price</h4></label>
                                <input type="text" id="price" name="price" class="form-control" value="{{ $hero->price }}">
                            </div>
                            </div>
                           

                        
                         </div>
                         <input type="submit" class="btn btn-primary m-5">
                        </form>
                       
                    </div>
                </main>
               
@endsection
             
             
             
                 