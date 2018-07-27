@extends('master')
@section('content')
<div id="templatemo_content">

    <div class="post_section">

        <div class="post_date">
            30<span>Nov</span>
        </div>
        
        
        <div class="post_content">

            <h2>{{$blog_info->blog_title}}</a></h2>

            <strong>hit count:&nbsp</strong>{{$blog_info->hit_count}} | <strong>Category:&nbsp</strong> <a href="#">{{$blog_info->category_name}}</a>

            <a href="" target="_parent"><img src="{{URL::to($blog_info->blog_image)}}" alt="image" width="500px" height="200px"/></a>

            <?php echo $blog_info->blog_long_description;?>
           
        </div>
        
        <div class="cleaner"></div>
    </div>


 @endsection