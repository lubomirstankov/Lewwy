@extends('layouts.login')
@section ('content')
  <div class="wrapper">
    <form class="form-signin" method="POST" action="{{ route('register') }}">       
        {{ csrf_field() }}
      <h2 class="form-signin-heading">Please register</h2>
      <br />
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

          
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          
                        </div>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                
                        </div>  

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          

                
                                <input id="password" type="password" class="form-control" name="password"  placeholder="Your password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        
                        </div>

                        <div class="form-group">
                         

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
        
                        </div>

                        <div class="form-group">
                               <center> <button type="submit" class="btn btn-success">
                                    Register
                                </button></center>
                            </center>
                        </div>
    </form>
  </div>
@endsection