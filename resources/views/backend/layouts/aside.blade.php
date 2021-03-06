@section('aside')

    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic" style="margin-top: 5px">
                    <img src="{{url('uploads/images/complains/sarathi.png')}}" alt="..." height="80px" width="80px"
                         class="img-circle">
                </div>
                <div class="profile_info" style="margin-top: 13px">
                    <a href="{{route('index')}}" target="_blank"><h2 style="margin-left: 10px;font-size: 22px;font-family: Helvetica">
                            Sarathi</h2></a>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>Admin Panel</h3>
                    <ul class="nav side-menu">
                        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard "></i> Dashboard</a></li>

                        @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->user_type=='admin')

                            <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('add-user')}}"> Add User</a></li>
                                    <li><a href="{{route('users')}}"> Show Users</a></li>
                                </ul>
                            </li>
                        @endif
                        <li><a><i class="fa fa-comment"></i> Complains <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->user_type=='admin')
                                    {{--<li><a href="{{route('add-complain')}}"> Add Complain</a></li>--}}
                                    <li><a href="{{route('complains')}}"> New Complains</a></li>
                                @endif
                                <li><a href="{{route('show-comments')}}"> Assigned Complains</a></li>
                                <li><a href="{{route('show-onprocess-comments')}}"> OnProcess Complains</a></li>
                                <li><a href="{{route('completed-complains')}}"> Completed Complains</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>

@endsection