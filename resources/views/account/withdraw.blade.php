@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 gradient">
            <h3 class="col-md-offset-4">Withdraw from Bank </h4>
            <br>
             <form class="form-horizontal" method="POST" action="/withdraw">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Account #</label>

                            <div class="col-md-6">
                                <input id="account" type="text" class="form-control" name="account" value="{{ old('account') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" value="{{ old('area') }}" required>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Withdraw
                                </button>
                            </div>
                        </div>
                    </form>
              <!--   </div>
            </div>
        </div> -->
    </div>
</div>
@endsection
