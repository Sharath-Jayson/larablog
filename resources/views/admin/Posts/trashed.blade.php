@extends('layouts.app')
@section('content')
<div class="card">
     <div class="card-header">Trashed Posts</div>

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
                                   Restore
                         </th>
                         <th>
                                   Destroy
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
                              <a href="" class="btn btn-xs btn-info">
                                   <span class="fa fa-pen"></span>
                              </a>
                              
                         </td>
                         <td>
                              <a href="{{route('post.restore', ['id' => $post->id])}}" class="btn btn-xs btn-success">
                                        <span class="fa fa-undo"> Restore</span>
                              </a>
                         </td>
                         <td>
                              <a href="{{route('post.kill', ['id' => $post->id])}}" class="btn btn-xs btn-danger">
                                        <span class="fa fa-trash"> Delete</span>
                              </a>
                         </td>
                         
                         </tr>

                         @endforeach


                    @else
                    <tr>
                        <th colspan="5" class="text-center">No Trashed Posts</th>

                    </tr>
                    @endif
                    
                    </tbody>




                           </table>
                  
     </div>
     </div>






@stop