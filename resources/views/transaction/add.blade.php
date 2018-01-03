@extends('layouts.app')


@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script >
$(document).ready(function(){
    $("#transfer").click(function(){
    $('#fuck').attr('action', "/transaction");
        });

    $("#transferI").click(function(){
    $('#fuck').attr('action', "/transactionI");
        });

});
    
</script>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Make transaction</div>

                <div class="panel-body">
                    <form id="fuck"class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}
@if ($errors->any())
        <div class="alert alert-danger" role="alert">
        {{ implode('', $errors->all('you have insufficent balance in your account to proceed with this transaction')) }}</div>
@endif
                         <div class="form-group">
                            <label for="to_id" class="col-md-4 control-label">Recipent</label>

                            <!-- <div class="col-md-6">
                                <input id="institute_id" type="text" class="form-control" name="institute_id" required>
                            </div> -->
                            <select class="col-md-6" name="to_id">
                            @foreach($user as $usr)
                                <option value="{{$usr->wallet_id}}">{{$usr->name}}</option>
                            @endforeach
                            </select>

                        </div>

                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" required>

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" >

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button id="transfer"  value = "wallet" class="btn btn-primary">
                                    Transfer with wallet
                                </button>
                                <button id="transferI" value = "institute" class="btn btn-primary">
                                Transfer with Institute </button>

                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection