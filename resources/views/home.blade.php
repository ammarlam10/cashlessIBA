@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(Auth::user()->role_id==1)
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Panel</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"><a href="{{Route('institute.index')}}">Institutes</a></li>
                    <li role="presentation"><a href="{{Route('roles.index')}}">Roles</a></li>
                    <li role="presentation"><a href="{{Route('users.index')}}">Users</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
