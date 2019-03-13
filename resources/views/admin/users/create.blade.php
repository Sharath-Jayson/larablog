@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
                <div class="card-header">Create New User </div>

                <div class="card-body">
                        <!-- <div class="alert alert-success" role="alert">
                            
                        </div> -->
                    <form action="{{ route('user.store') }}" method="post" >
                     @csrf()

                     <div class="form-group">
                        <label for="name">User name</label>
                        <input type="text" name="name"class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="name">Email </label>
                        <input type="email" name="email"class="form-control">
                     </div>

                     
                     <div class="form-group">
                       <div class="text-center">
                       <button class="btn btn-success btn-lg" type="submit">Add User</button>
                       
                       
                       </div>
                     
                     </div>
                    
                    </form>
                </div>
                </div>

@stop