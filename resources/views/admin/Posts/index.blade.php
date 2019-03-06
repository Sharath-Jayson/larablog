@extends('layouts.app')
@section('content')
<div class="card">
     <div class="card-header">Create New Category</div>

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
                                   Delete
                         </th>
                    </thead>
                    <tbody>
                    
                    @foreach($posts as $post)
                   <tr>
                   <td>
                   <img src="{{$post->featured}}" alt="{{$post->title}}" width="50px" height="50px">
                   </td>
                   <td>
                       {{$post->title}}
                   </td>
                   <td>
                       Edit
                   </td>
                   <td>
                       Delete
                   </td>
                   
                   </tr>

                    @endforeach
                    
                    </tbody>




                           </table>
                  
     </div>
     </div>






@stop