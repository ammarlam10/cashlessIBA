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
    <th>User ID</th>
    <th>Name</th> 
    <th>Role</th>
    <th>Institute</th>
    <th>Balance</th>
    <th>Institute balance</th>
    
  </tr>
  @foreach($users as $u)
  <tr>
    <td>{{$u->id}}</td>
    <td>{{$u->name}}</td>
    
    <td>{{App\Role::findOrFail($u->role_id)->name}}</td> 
    <td>{{App\Institute::findOrFail($u->institute_id)->name}}</td>
    
    <td>{{App\Wallet::find($u->wallet_id)->balance}}</td>
    <td>{{App\Wallet::find($u->wallet_id)->institute_balance}}</td>
    <td><a href="{{route('users.edit',$u->id)}}"><h1><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></h1></td>
    <td>
      <form action="{{ route('users.destroy',$u->id)}}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button class="btn btn-primary btn-sm">Delete</button>
</form>

    </td>

  </tr>
  @endforeach
  </table>
   <a href="{{route('users.create')}}"><button type="button" class="btn btn-primary btn-lg">Add a new user</button></a>

 </div>
 </div>
 </div>
 </div>
 </div>


@endsection