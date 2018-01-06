@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Role</div>

                <div class="panel-body">
                <!-- Table -->
                <table class="table table-striped">
                    <tr>
                  <th>Role ID</th>
                  <th>Name</th> 
                </tr>
                @foreach($roles as $r)
                <tr>
                  <td>{{$r->id}}</td> 
                  <td>{{$r->name}}</td>

                  <td><a href="{{route('roles.edit',$r->id)}}"><h1><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></h1></td>
                  <td>
                    <form action="{{ route('roles.destroy',$r->id)}}" method="POST">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button class="btn btn-primary btn-sm">Delete</button>
              </form>

                  </td>
                </tr>
                @endforeach
                </table>
                 <a href="{{route('roles.create')}}"><button type="button" class="btn btn-primary btn-lg">Add</button></a>
               </div>
                    </div>
                               </div>
                                        </div>
                                                      </div>


@endsection