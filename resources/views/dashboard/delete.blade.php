

@extends('layouts.dashboard')

@section('container-fluid')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Delete Post</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <ol class="breadcrumb">
                <li><a href="/dashboard">Dashboard</a></li>
                <li class="active">Delete Post</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-2 col-xs-12">

        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box form-horizontal form-material">
                
                    <div class="form-group">
                        <label class="col-md-12">Post Title</label>
                        <div class="col-md-12">
                            <input type="text" value="{{$post->post_title}}" name="title" class="form-control form-control-line" readonly> </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-md-12">Descripton</label>
                        <div class="col-md-12">
                            <textarea readonly rows="5" name="desc" class="form-control form-control-line">{{$post->post_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Category</label>
                        <div class="col-md-3 col-sm-4 col-xs-6 ">
                            <select name="catid" class="form-control pull-right row ">
                                @foreach($catItem as $catItem)
                             <option {{ ($post->category_id == $catItem->category_id) ? 'selected' : 'disabled'}} value="{{$catItem->category_id}}">{{$catItem->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            	<h4>This cannot be undone. Are you sure?</h4>
                <form class="form-horizontal form-material" method="post">
                    <input type="hidden" name="uid" value="{{$usrData->user_id}}">
                    <input type="hidden" name="pid" value="{{$post->post_id}}">  
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
                @if(session('publishMsg'))
                    <a href="{{asset('/dashboard/post')}}"><h4 style="color: red;">{{session('publishMsg')}}</h4></a>
                @endif
            
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
<!-- /.container-fluid -->