<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">  
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}"> 

   <!-- Script
   ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>

   <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" >

</head>
<body>
   <!-- Header
   ================================================== -->
   <header id="top">

    <div class="row">

        <div class="header-content twelve columns">

              <h1 id="logo-text"><a href="index.html" title="">@yield('title').</a></h1>
                <p id="intro">Smoke weed every day! :)</p>

            </div>          

       </div>

       <nav id="nav-wrap"> 

        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
           <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

        <div class="row">                       

                <ul id="nav" class="nav">
                    <li class="current"><a href="{{route('home')}}">Начало</a></li>
                    <li class="has-children"><a href="#">Информация</a>
                      <ul>
                         <li><a href="{{route('forme')}}">За мен</a></li>
                      </ul>
                   </li>
                    <li><a href="{{route('blog')}}">Блог</a>
                    </li> 

            @if (Auth::user())
<li class="has-children">   <a href="#">Профил</a>  
 <ul>
   <li> <a href="#">Моят профил</a></li>
     <li><a href="{{ url('/logout') }}" 
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
Излез
    </a></li>
         <form id="logout-form" 
            action="{{ url('/logout') }}" 
        method="POST" 
        style="display: none;">
              {{ csrf_field() }}
             </form>
             <hr />
             
</ul>
</li>
               @endif
               @if(Auth::guest())

<li><a style="float:right" href="{{route('login')}}">Влез</a></li>               @endif
                                
              
                </ul> <!-- end #nav -->              

        </div> 

       </nav> <!-- end #nav-wrap -->         

   </header> <!-- Header End -->
      @yield('content')
</body>
</html>
