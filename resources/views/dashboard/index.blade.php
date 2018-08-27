@foreach($usrData as $usrData)
    @extends('layouts.dashboard')
@endforeach
@section('container-fluid')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Visit</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Page Views</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash2"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Unique Visitor</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash3"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.row -->
    <!--row -->
    <!-- /.row -->

    <!-- ============================================================== -->
    <!-- table -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                    <select class="form-control pull-right row b-none">
                        <option>March 2017</option>
                        <option>April 2017</option>
                        <option>May 2017</option>
                        <option>June 2017</option>
                        <option>July 2017</option>
                    </select>
                </div>
                <h3 class="box-title">Recent Posts</h3>
                <div class="">
                    <ul style="list-style: inside;">
                        @foreach($recentPost as $i=>$recentPost)
                        
                        <li>
                            <a href="{{route('post.detail', ['id'=> $recentPost->post_id])}}">{{$recentPost->post_title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- chat-listing & recent comments -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- .col -->
        <div class="col-md-12 col-lg-8 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Recent Comments</h3>
                <div class="comment-center p-t-10">
                    @foreach($recentComment as $recentComment)
                    <div class="comment-body">
                        
                        <div class="user-img"> <img src="/assets/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle">
                        </div>

                        <div class="mail-contnet">
                            <h5>{{$recentComment->username}}</h5><span class="time">{{date_format(date_create($recentComment->comment_date),"d F, Y")}}</span>
                            <br/><span class="mail-desc">{{$recentComment->comment_detail}}</span> <!-- <a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Approve</a><a href="javacript:void(0)" class="btn-rounded btn btn-default btn-outline"><i class="ti-close text-danger m-r-5"></i> Reject</a> -->
                        </div>
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="panel">
                <div class="sk-chat-widgets">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            CHAT LISTING
                        </div>
                        <div class="panel-body">
                            <ul class="chatonline">
                                <li>
                                    <div class="call-chat">
                                        <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                        <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                    </div>
                                    <a href=""><img src="/assets/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
</div>
@endsection
<!-- /.container-fluid -->