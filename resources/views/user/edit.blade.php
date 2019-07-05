@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 >Edit Profile</h3></div>

                <div class="card-body">
                    <form method="POST" action="/user/{{$user->id}}">
                        @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required >
                            </div>
                        </div>
                        
                        @can('isAdmin')
                        <div id="type-group" class="form-group row">
                            <label for="user_type" class="col-md-4 col-form-label text-md-right">Confirm Role</label>

                            <div class="col-md-6">
                                <input id="admin" type="radio" class="form-control" name="user_type_role" value="admin" style="width:2em;display: inline;vertical-align: middle;">Admin &nbsp;&nbsp;&nbsp;
                                <input id="user" type="radio" class="form-control" name="user_type_role" value="user" style="width:2em;display: inline;vertical-align: middle;" checked>User
                            </div>
                        </div>
                        @endcan

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
