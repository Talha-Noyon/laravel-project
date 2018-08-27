
@extends('layouts.dashboard')

@section('container-fluid')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Profile page</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            
            <ol class="breadcrumb">
                <li><a href="/dashboard">Dashboard</a></li>
                <li class="active">Profile Page</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> <!-- <img width="100%" alt="user" src="/assets/plugins/images/large/img1.jpg"> -->
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img style="height: 150px;" src="/assets/images/{{$usrData->user_pic}}" class="img-circle" alt="img"></a>
                            
                            <h4 class="text-white">{{ucfirst($usrData->username)}}</h4>
                            <h5 class="text-white">{{$usrData->user_email}}</h5> </div>
                    </div>
                </div>
                <div class="user-btm-box">
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple"><i class="ti-facebook"></i></p>
                        <h1>{{substr($usrData->nid,0, 3)}}</h1> </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-blue"><i class="ti-twitter"></i></p>
                        <h1>{{substr($usrData->nid,3, 3)}}</h1> </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger"><i class="ti-dribbble"></i></p>
                        <h1>{{substr($usrData->nid,7, 6)}}</h1> </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="id" value="{{$usrData->user_id}}">
                    <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                            <input type="text" value="{{ucfirst($usrData->username)}}" name="username" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" value="{{$usrData->user_email}}" name="email" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" value="{{$usrData->password}}" name="password" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone No</label>
                        <div class="col-md-12">
                            <input type="text" value="{{$usrData->phone}}" name="phone" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-md-12">File Name</label>
                        <div class="col-md-12">
                            <input type="file" name="file" class="form-control form-control-line">
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Update Profile</button>
                        </div>
                    </div>
                </form>
                @if($errors->any())
                  @foreach($errors->all() as $err)
                        <span style="color: red" >{{$err}}<br/></td>
                  @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
<!-- /.container-fluid -->