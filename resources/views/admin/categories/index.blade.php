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
                    
                    </tbody>




                           </table>
                  
     </div>
     </div>






@stop