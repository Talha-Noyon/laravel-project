@extends('layouts.default')

@section('content')
<div id="page" class="single">
	
	<div id="content" class="article">
		
        <article>		
			<div>
				<div class="single_post">
				    <div class="post-date-ribbon"><div class="corner"></div>{{date_format(date_create($detailpost->post_date),"F d, Y")}}</div>
					    <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb" class="root"><a rel="v:url" property="v:title" href="/home">Home</a></span><span><i class="fa fa-angle-double-right"></i></span><span typeof="v:Breadcrumb"><a href="#" rel="v:url" property="v:title">{{$detailpost->category_name}}</a></span><span><i class="fa fa-angle-double-right"></i></span><span><span>{{$detailpost->post_title}}</span></span></div>
					<header>
							<!-- Start Title -->
							<h1 class="title single-title">{{$detailpost->post_title}}</h1>
							<!-- End Title -->
							<!-- Start Post Meta -->
							<div class="post-info">
								<span class="theauthor"><span><i class="fa fa-users"></i></span>By&nbsp;<a href="/dashboard" rel="author">{{$detailpost->username}}</a></span>
								<span class="featured-cat"><span><i class="fa fa-bookmark"></i></span><a href="https://demo.mythemeshop.com/ribbon/category/antiquarianism/" rel="category tag">{{$detailpost->category_name}}</a></span>
								<span class="thecomment"><span><i class="fa fa-comments-o"></i></span>&nbsp;<a href="https://demo.mythemeshop.com/ribbon/2016/07/16/4-killer-social-media-marketing-strategies/#respond">{{count($commentDetail)}} Comments</a></span>
							</div>
							<!-- End Post Meta -->
						</header>
						<!-- Start Content -->
						<div id="content" class="post-single-content box mark-links">
							<a href=""><img class="wp-image-1337" src="/assets/images/{{$detailpost->post_pic}}" width="660" height="100" sizes=""></a>
							<p>{{$detailpost->post_description}}</p>

						</div><!-- End Content -->
									  
						
<!-- You can start editing here. -->
<div id="comments">
	
	<div class="total-comments" style=" {{(count($commentDetail)==0) ? 'display: none':''}}" >{{count($commentDetail)}} Comments</div>
	
	@foreach($commentDetail as $detailComment)
		<ol class="commentlist">
			<div class="navigation">
				<div class="alignleft"></div>
				<div class="alignright"></div>
			</div>
			<li class="comment even thread-even depth-1" id="li-comment-7">
			<div id="comment-7" style="position:relative;" itemscope="" itemtype="http://schema.org/UserComments">
				<div class="comment-author vcard">
					<img alt="" src="{{asset('/assets/images/avatar.png')}}"  class="avatar avatar-70 photo" height="70" width="70">
					<div class="comment-metadata">
                        <span class="fn" ><a href="" rel="external nofollow" class="url">{{$detailComment->username}}</a></span>
					</div>
				</div>
				<div class="commentmetadata" itemprop="commentText">
					<p>{{$detailComment->comment_detail}}</p>
                    <time>{{date_format(date_create($detailComment->comment_date),"F d, Y")}}</time>
                    
                    <span class="reply">
                    	@if($usrData)
                        <a style="{{($detailComment->username == $usrData->username) ? '':'display: none'}}" rel="nofollow" class="comment-reply-link" href="/post/detail/comment/{{$detailComment->comment_id}}/{{$detailpost->post_id}}">Delete</a>
                        @endif
                    </span>

				</div>
			</div>
			</li>

			<div class="navigation bottomnav">
				<div class="alignleft"></div>
				<div class="alignright"></div>
			</div>
		</ol>
		@endforeach
	</div>
	@if(!$usrData)
		<div id="commentsAdd">
			<div id="respond" class="box m-t-6">
				<div id="respond" class="comment-respond">
					<h5><span><a href="{{route('login')}}">SignIn & Add Comment</a></span></h5>
				</div>
			</div>
		</div>
	@endif
	@if($usrData)
	<div id="commentsAdd" style="{{($usrData)?'':'display: none'}}" >
		<div id="respond" class="box m-t-6">
			<div id="respond" class="comment-respond">
				<h4><span>Add a Comment</span></h4>
			<form method="post"id="commentform" class="comment-form anti-spam-form-processed" novalidate="">
				<input type="hidden" name="uid" value="{{$usrData->user_id}}">
				<input type="hidden" name="pid" value="{{$detailpost->post_id}}">
				<p class="comment-form-comment"><label for="comment">Comment:<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="5" aria-required="true"></textarea></p>
				<p class="form-submit">
					<input name="submit" type="submit" id="submit" class="submit" value="Add Comment"> 
				</p>

		
		
			</form>
			</div><!-- #respond -->
			</div>
	</div>
	@endif

                @if($errors->any())
                    @foreach($errors->all() as $err)
                    <span style="color: red" >{{$err}}<br/></td>
                    @endforeach
                @endif
					</div>
				</div>
					</article>
            
	</div><!-- .article -->
		

@endsection