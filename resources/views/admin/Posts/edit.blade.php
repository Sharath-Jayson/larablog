@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
                <div class="card-header">Edit Post: {{$post->title}}</div>

                <div class="card-body">
                        <!-- <div class="alert alert-success" role="alert">
                            
                        </div> -->
                    <form action="{{ route('post.update', ['id'=> $post->id]) }}" method="post" enctype="multipart/form-data">
                     @csrf()

                     <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title"class="form-control" value="{{$post->title}}">
                     </div>

                     <div class="form-group">
                        <label for="title">Featured Image</label>
                        <input type="file" name="featured"class="form-control-file">
                     </div>  
                     <div class="form-group">
                        <label for="category">Select a Category</label>
                        <select class="form-control" name="category_id" id="category">
                          @foreach($categories as $category)
                          
                           <option value="{{$category->id}}"

                           @if($post->category->id == $category->id)
                               selected
                           @endif
                           
                           >{{$category->name}}</option>
                          @endforeach
                        </select>
                     </div> 

                     <div class="form-group">
                        <label for="tags">Select Tags</label>
                        @foreach($tags as $tag)
                        <div class="checkbox">

                        <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                        
                        @foreach($post->tags as $t)
                           @if($tag->id == $t->id)
                               checked
                           @endif

                        @endforeach
                        
                        > &nbsp; {{ $tag->tag }}</label>

                        </div>
                        @endforeach

                      </div>

                     <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" cols="5" rows="5">{{$post->content}}</textarea>
                     </div>
                     
                     <div class="form-group">
                       <div class="text-center">
                       <button class="btn btn-success btn-lg" type="submit">Update Post</button>
                       
                       
                       </div>
                     
                     </div>
                    
                    </form>
                </div>
                </div>

@stop