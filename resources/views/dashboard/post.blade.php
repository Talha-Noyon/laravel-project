
@extends('layouts.dashboard')

@section('container-fluid')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title"><span class="theauthor"><span><i class="fa fa-paperclip fa-fw"></i></span>&nbsp;<a href="/dashboard/post/create" title="create post" rel="author">Create Post</a></span>
            </h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Post</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12">
            
                @foreach($usrPost as $post)
                <article class="post excerpt">
                    <div class="post-date-ribbon"><div class="corner"></div>{{date_format(date_create($post->post_date),"F d, Y")}}
                    </div>
                    <header>

                        <h2 class="title">
                            <a href="{{route('post.detail', ['id'=> $post->post_id])}}" title="{{$post->post_title}}" rel="bookmark">{{$post->post_title}}</a> &nbsp;<a title="edit" href="{{route('post.edit',['id'=> $post->post_id])}}"><i class="fa fa-edit"></i></a> &nbsp;<a title="delete" href="{{route('post.delete',['id'=> $post->post_id])}}"><i class="fa fa-eraser"></i></a>
                        </h2>
                        <div class="post-info">
                            <span class="theauthor"><span><i class="fa fa-users"></i></span>By&nbsp;<a href="" rel="author">{{ucfirst($usrData->username)}}</a></span>
                            <span class="featured-cat"><span><i class="fa fa-bookmark"></i></span><a href="" rel="category tag">{{$post->category->category_name}}</a></span>
                           
                            <span class="thecomment"><span><i class="fa fa-comments-o"></i></span>&nbsp;<a href="">{{count($post->comments)}} Comments</a>
                            </span>
                           
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
            
        </div>
    </div>
</div>
@endsection
<!-- /.container-fluid -->