@extends('layouts.app')

   @section('content')

      @include('admin.includes.errors')

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
                           <label for="category">Select a Category</label>
                           <select class="form-control" name="category_id" id="category">
                           @foreach($categories as $category)
                           
                              <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                           </select>
                        </div> 
                        
                        <div class="form-group">
                           <label for="tags">Select Tags</label>
                           @foreach($tags as $tag)
                           <div class="checkbox">

                           <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">&nbsp; {{ $tag->tag }}</label>

                           </div>
                           @endforeach

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



@section('scripts')

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key"></script>

<script>
  tinymce.init({
    selector: '#content'
  });
  </script>
@stop

