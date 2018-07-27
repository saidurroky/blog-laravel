@extends('master')
@section('content')
<div id="templatemo_content">

    <div class="post_section">

        <div class="post_date">
            30<span>Nov</span>
        </div>
        
        @foreach($published_blog as $result)
        <div class="post_content">

            <h2><a href="{{URL::to('/blog_detail/'.$result->blog_id)}}">{{$result->blog_title}}</a></h2>

            <strong>Author:</strong> Steven | <strong>Category:&nbsp</strong> <a href="#">{{$result->category_name}}</a>

            <a href="" target="_parent"><img src="{{$result->blog_image}}" alt="image" width="500px" height="200px"/></a>

            {{$result->blog_short_description}}
            <p><a href="blog_post.html">24 Comments</a> | <a href="{{URL::to('/blog_detail/'.$result->blog_id)}}">Continue reading...</a>                </p>
        </div>
        @endforeach
        <div class="cleaner"></div>
    </div>


 @endsection