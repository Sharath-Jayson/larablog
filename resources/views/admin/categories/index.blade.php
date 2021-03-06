@extends('layouts.app')
@section('content')
<div class="card">
     <div class="card-header"> Categories</div>

          <div class="card-body">
                        <!-- <div class="alert alert-success" role="alert">
                            
                        </div> -->
               <table class="table table-hover">

                    <thead>
                         <th>
                              Category Name   
                         </th> 
                         
                         <th>
                               Editing
                         </th>
                         <th>
                                   Deleting
                         </th>
                    </thead>
                    <tbody>
                         @if($categories->count() > 0)
                              @foreach($categories as $category)

                                   <tr>
                                        <td>
                                        {{ $category->name}}
                                        </td>
                                        <td>
                                        <a href="{{route('category.edit', ['id'=>$category->id])}}" class="btn btn-xs btn-info">
                                             <span class="fa fa-pen"></span>
                                        </a>
                                        </td>
                                        <td>
                                        <a href="{{route('category.delete', ['id'=>$category->id])}}" class="btn btn-xs btn-danger">
                                             <span class="fa fa-trash"></span>
                                        </a>
                                        </td>

                                   </tr>

                              @endforeach

                         @else

                         <tr>
                            <th colspan="5" class="text-center">No Categories yet.</th>

                        </tr>


                         @endif
                    
                        
                    </tbody>




                           </table>
                  
     </div>
     </div>






@stop