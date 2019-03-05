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
                <div class="card-header">Create New Category</div>

                <div class="card-body">
                        <!-- <div class="alert alert-success" role="alert">
                            
                        </div> -->
                    <form action="{{ route('category.store') }}" method="post" >
                     @csrf()

                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name"class="form-control">
                     </div>

                     
                     <div class="form-group">
                       <div class="text-center">
                       <button class="btn btn-success btn-lg" type="submit">Store Category</button>
                       
                       
                       </div>
                     
                     </div>
                    
                    </form>
                </div>
                </div>

@stop