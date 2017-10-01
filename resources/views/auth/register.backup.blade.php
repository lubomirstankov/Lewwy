@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                     <h2 class="form-signin-heading">Please login</h2>
      <br />

                <div class="panel-body">
                    <form class="form-signin" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

          
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          

                
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        
                        </div>

                        <div class="form-group">
                         

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        
                        </div>

                        <div class="form-group">
                  
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                     
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
