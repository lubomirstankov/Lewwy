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
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}"> 

   <!-- Script
   ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>

   <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" >

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

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
                </ul> <!-- end #nav -->              

        </div> 

       </nav> <!-- end #nav-wrap -->         

   </header> <!-- Header End -->
@yield('content')
</body>
</html>
