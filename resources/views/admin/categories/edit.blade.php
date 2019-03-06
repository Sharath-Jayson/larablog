@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
                <div class="card-header">Update Category: {{ $category->name }}</div>

                <div class="card-body">
                        <!-- <div class="alert alert-success" role="alert">
                            
                        </div> -->
                    <form action="{{ route('category.update', ['id'=>$category->id]) }}" method="post" >
                     @csrf()

                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                     </div>

                     
                     <div class="form-group">
                       <div class="text-center">
                       <button class="btn btn-success btn-lg" type="submit">Update Category</button>
                       
                       
                       </div>
                     
                     </div>
                    
                    </form>
     </div>
    </div>

@stop