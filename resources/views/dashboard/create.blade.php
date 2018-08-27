
@extends('layouts.dashboard')

@section('container-fluid')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Create Post</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <ol class="breadcrumb">
                <li><a href="/dashboard">Dashboard</a></li>
                <li class="active">Create Post</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-2 col-xs-12">

        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <form class="form-horizontal form-material" method="post" enctype="multipart/form-data >
                    <input type="hidden" name="id" value="{{$usrData->user_id}}">
                    <div class="form-group">
                        <label class="col-md-12">Post Title</label>
                        <div class="col-md-12">
                            <input type="text" value="" name="title" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Descripton</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="desc" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Featured Image</label>
                        <div class="col-md-12">
                            <input type="file" value="" name="file" class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Category</label>
                        <div class="col-md-3 col-sm-4 col-xs-6 ">
                            <select name="catid" class="form-control pull-right row ">
                                @foreach($catItem as $catItem)
                                <option value="{{$catItem->category_id}}">{{$catItem->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Publish</button>
                        </div>
                    </div>
                </form>
                @if($errors->any())
                    @foreach($errors->all() as $err)
                    <span style="color: red" >{{$err}}<br/></td>
                    @endforeach
                @endif
                @if(session('publishMsg'))
                    <a href="{{asset('/dashboard/post')}}"><h4 style="color: red;">{{session('publishMsg')}}</h4></a>
                @endif
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
<!-- /.container-fluid -->