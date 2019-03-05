@extends('layouts.app')

@section('content')

@if(count($errors) > 0)
<ul class="list-group">

@foreach($errors->all() as $error)

<li class="list-group-item text-danger">

{{$error}}
</li>
@endforeach
</ul>

@endif

<div class="card">
                <div class="card-header">Create New Post</div>

                <div class="card-body">
                        <!-- <div class="alert alert-success" role="alert">
                            
                        </div> -->
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                     @csrf()

                     <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title"class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="title">Featured Image</label>
                        <input type="file" name="featured"class="form-control-file">
                     </div>  
                     <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" cols="5" rows="5"></textarea>
                     </div>
                     
                     <div class="form-group">
                       <div class="text-center">
                       <button class="btn btn-success btn-lg" type="submit">Store Post</button>
                       
                       
                       </div>
                     
                     </div>
                    
                    </form>
                </div>
                </div>

@stop