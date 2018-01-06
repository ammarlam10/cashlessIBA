@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit a user</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.update',$user->id) }}">
                        <input type="hidden" name="_method" value = "PUT">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required value="{{$user->password}}">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="role_id" class="col-md-4 control-label">Role</label>

                            <!-- <div class="col-md-6">
                                <input id="institute_id" type="text" class="form-control" name="institute_id" required>
                            </div> -->
                            <select class="col-md-6" name="role_id">
                            @foreach(App\Role::all() as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                            </select>

                        </div>



                        <div class="form-group">
                            <label for="institute_id" class="col-md-4 control-label">Institute</label>

                            <!-- <div class="col-md-6">
                                <input id="institute_id" type="text" class="form-control" name="institute_id" required>
                            </div> -->
                            <select class="col-md-6" name="institute_id">
                            @foreach(App\Institute::all() as $institute)
                                <option value="{{$institute->id}}">{{$institute->name}}</option>
                            @endforeach
                            </select>

                        </div>


                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add User
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
