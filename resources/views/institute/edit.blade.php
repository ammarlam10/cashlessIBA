@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit an Institute</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('institute.update',$institute->id)}}">
                    <input type="hidden" name="_method" value = "PUT">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $institute->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                            <label for="area" class="col-md-4 control-label">Area</label>

                            <div class="col-md-6">
                                <input id="area" type="text" class="form-control" name="area" value="{{ $institute->area }}" required>

                                @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('credit_limit') ? ' has-error' : '' }}">
                            <label for="credit_limit" class="col-md-4 control-label">Credit limit</label>

                            <div class="col-md-6">
                                <input id="credit_limit" type="text" class="form-control" name="credit_limit" value="{{$institute->credit_limit}}" required>

                                @if ($errors->has('credit_limit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('credit_limit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
