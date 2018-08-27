@extends('layouts.default')

@section('content')
<div id="page" class="home-page">
	
	<div id="content" class="article">
		@foreach($postlist as $i=>$post)
        <article class="post excerpt">
            <div class="post-date-ribbon"><div class="corner"></div>{{date_format(date_create($post->post_date),"F d, Y")}}</div>
            <header>

                <h2 class="title">
                    <a href="{{route('post.detail', ['id'=> $post->post_id])}}" title="A Post with Everything In It" rel="bookmark">{{$post->post_title}}</a>
                </h2>
                <div class="post-info">
                    <span class="theauthor"><span><i class="fa fa-users"></i></span>By&nbsp;<a href="/dashboard/profile" title="{{ucfirst($post->username)}}" rel="author">{{ucfirst($post->username)}}</a>
                    </span>
                    <span class="featured-cat"><span><i class="fa fa-bookmark"></i></span><a href="" rel="category tag">{{$post->category_name}}</a>
                    </span>


                    <!-- <span class="thecomment"><span><i class="fa fa-comments-o"></i></span>&nbsp;<a href="https://demo.mythemeshop.com/ribbon/2017/01/07/a-post-with-everything-in-it/#comments">{{count($commentDetail)}} Comments</a></span> -->
                </div>
            </header>
            <!--.header-->
            @if(isset($post->post_pic))
                <a href="" title="A Post with Everything In It" id="featured-thumbnail">
                    <div class="featured-thumbnail">
                        <img width="150" height="150" src="/assets/images/{{$post->post_pic}}" class="attachment-ribbon-lite-featured size-ribbon-lite-featured wp-post-image" alt="" title="{{$post->post_pic}}" sizes="(max-width: 150px) 100vw, 150px">
                    </div>
                </a>
            @endif
            <div class="post-content">{{substr($post->post_description,0, 200)}}<span style="font-weight: bold;">.....</span>    
            </div>
            <div class="readMore">
            	<a href="{{route('post.detail', ['id'=> $post->post_id])}}" title="{{$post->post_title}}">Read More
            	</a>
        	</div>
        </article>
        @endforeach    
            
            
            
    	<nav class="navigation posts-navigation" role="navigation">
		<!--Start Pagination-->
        
			<nav class="navigation pagination" role="navigation">
				<h2 class="screen-reader-text">Posts navigation</h2>
				<div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
				<a class="page-numbers" href="https://demo.mythemeshop.com/ribbon/page/2/">2</a>
				<a class="next page-numbers" href="https://demo.mythemeshop.com/ribbon/page/2/"><i class="ribbon-icon icon-angle-right"></i></a>
				</div>
			</nav>
		</nav><!--End Pagination-->
	</div><!-- .article -->
		

@endsection