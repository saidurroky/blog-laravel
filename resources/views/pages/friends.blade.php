@extends('master')
@section('friends')
<h4>Recent</h4>
<?php
    $recent_blog=DB::table('tbl_blog')
                ->orderby('blog_id','desc')
                ->where('publication_status',1)
                ->take(2)
                ->get();
?>
<ul class="templatemo_list">
    @foreach($recent_blog as $recent)
    <li><a href="{{URL::to('/blog_detail/'.$recent->blog_id)}}" target="_parent">{{$recent->blog_title}}</a></li>
    @endforeach
</ul>
@endsection