@extends('layouts.app')
@section('content')
<div class="card">
     <div class="card-header">Published Posts</div>

          <div class="card-body">
                        <!-- <div class="alert alert-success" role="alert">
                            
                        </div> -->
               <table class="table table-hover">

                    <thead>
                         <th>
                             Image  
                         </th> 
                         
                         <th>
                               Titie
                         </th>
                         <th>
                                   Edit
                         </th>
                         <th>
                                   Trash
                         </th>
                    </thead>
                    <tbody>
                    @if($posts->count() > 0)
                            @foreach($posts as $post)
                        <tr>
                        <td>
                        <img src="{{asset($post->featured)}}" alt="{{$post->title}}" width="80px" height="40px">
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            <a href="{{route('post.edit', ['id' => $post->id])}}" class="btn btn-xs btn-info">
                                <span class="fa fa-pen">Edit</span>
                            </a>
                            
                        </td>
                        <td>
                        <a href="{{route('post.delete', ['id' => $post->id])}}" class="btn btn-xs btn-danger">
                                <span class="fa fa-trash"> Trash</span>
                            </a>
                        </td>
                        
                        </tr>

                            @endforeach

                    @else
                    <tr>
                        <th colspan="5" class="text-center">No Published Posts</th>

                    </tr>

                    @endif
                    
                    </tbody>




                           </table>
                  
     </div>
     </div>






@stop