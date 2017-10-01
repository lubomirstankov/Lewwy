@extends('layouts.login')
@section ('content')
  <div class="wrapper">
    <form class="form-signin" method="POST" action="{{ route('login') }}">       
    	{{ csrf_field() }}
      <h2 class="form-signin-heading">Please login</h2>
      <br />
                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                           
      <input type="text" class="form-control" name="email" placeholder="Email Address" required autofocus value="{{old('email')}}" />

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                       
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

     <input type="password" class="form-control" name="password" placeholder="Password" required=""/>    

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                                <div class="checkbox">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомни ме!
                                    </label>
                                </div>
                  
                        </div>     
                        <div class="form-group">
                               <center> <button type="submit" class="btn btn-success">
                                    Login
                                </button></center>
<br />
<center>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Забравили сте си паролата?
                                </a>
                                         <a class="btn btn-link" href="{{ route('register') }}">
                                    Регистрирай се?
                                </a>
                            </center>
                        </div>
    </form>
  </div>
@endsection