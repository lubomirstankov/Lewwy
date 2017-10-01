@extends('layouts.index')


@section ('content')
 <div id="content-wrap">

    <div class="row">

        <div id="main" class="eight columns">
            <article class="entry">
                    <header class="entry-header">
@foreach($news as $newsinfo)
                        <h2 class="entry-title">
                            <a href="/news/{{$newsinfo->NewsID}}" title="">{{$newsinfo->NewsTitle}}</a>
                        </h2>                
                    
                        <div class="entry-meta">
                            <ul>
                                <li>{{$newsinfo->created_at}}</li>
                                <span class="meta-sep">&bull;</span>                                
                                <li>John Doe</li>
                            </ul>
                        </div> 
                     
                    </header> 
                    
                    <div class="entry-content">
                        {{$newsinfo->NewsBody}}
                    </div> 
                    <hr />
                                                  @endforeach
                </div>

                </article> <!-- end entry -->


        <div id="sidebar" class="four columns">

            <div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">

                     <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">

                  </form>
               </div>
      <div class="widget widget_text group">

            </div>
            <div class="widget widget_categories group">
                <h3>Latest Posts.</h3> 
                <ul>
                    @foreach ($news as $newsinfo)
                        <li><a href="/news/{{$newsinfo->NewsID}}" title="">{{$newsinfo->NewsTitle}}</a></li>
                        @endforeach               
                    </ul>
                </div>

                <div class="widget widget_text group">
                    <h3>Widget Text.</h3>

                <p>Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.</p>

            </div>


            
        </div> <!-- end sidebar -->



@endsection
@section('title')
LewwyBlog
@endsection