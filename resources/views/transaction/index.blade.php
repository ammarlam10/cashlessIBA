@extends('layouts.app')

@section('content')


  <!-- Table -->
  <table class="table table-striped">
      <tr>
    <th>Transaction id</th>
    <th>sender</th> 
    <th>Receipent</th>
    <th>Amount(PKR)</th>
    <th>Description</th>
    <th>Time</th>
  </tr>
  @foreach($transactions as $t)
  <tr>
<td>{{$t->id}}</td>
    @if($t->to_id == $t->from_id)
    <td>-</td>
    <td>-</td>
    @else
    <td>{{App\User::findOrFail($t->from_id)->name}}</td> 
    <td>{{App\User::findOrFail($t->to_id)->name}}</td>
    @endif
    <td>{{$t->amount}}</td>
    <td>{{$t->description}}</td>
    <td>{{$t->created_at}}</td>
  </tr>
  @endforeach
  </table>
   <a href="/transaction/create"><button type="button" class="btn btn-primary btn-lg">Make a new Transaction</button></a>


@endsection