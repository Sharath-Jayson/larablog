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

<tr><td>{{ $category->name}}</td></tr>

@endforeach
     
     </tbody>




</table>
                  
                </div>
                </div>






@stop