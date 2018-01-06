@extends('layouts.user')

@section('content')


  <div class="container">
                  <div class="row"> 
                      <div class="col-md-10 col-md-offset-1 gradient">
                    <ul>
                        <h3 class="col-md-offset-4">Transaction History</h4>
                        <li><h4>Cash in Wallet: Rs. {{$cash->balance}} </h4></li>
                        <li><h4>Institute Due: Rs.  </h4> </li>
                        <h4>Recent transactions:</h4>

                    </ul>

                    <div class="margin-top row">
                        <div class="table-responsive col-md-push-2 col-md-8">
                            <table class="table table-bordered" >
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
                        </div>
                    </div>
                    </div>
                    </div>
            </div>


@endsection