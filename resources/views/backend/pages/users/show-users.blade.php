@extends('backend.master.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('add-user')}}" style="font-size: small;" class="btn btn-primary btn-xs"><i
                                class="fa fa-plus"></i>Add New User</a>
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>List of Admins/Users</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                @include('backend.layouts.messages')
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Privilege</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($adminData as $key=>$admin)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$admin->fullname}}</td>
                                            <td>{{$admin->username}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>
                                                <form action="{{route('update-user-status')}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="criteria" value="{{$admin->id}}">
                                                    @if($admin->user_type=='admin')
                                                        <button name="admin" class="btn btn-success btn-xs">
                                                            Admin
                                                        </button>
                                                    @else
                                                        <button name="user" class="btn btn-warning btn-xs">
                                                            User
                                                        </button>
                                                    @endif
                                                </form>
                                            </td>
                                            <td>
                                                <form action="" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="criteria" value="{{$admin->id}}">
                                                    @if($admin->status==1)
                                                        <button name="active" class="btn btn-success btn-xs">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                    @else
                                                        <button name="inactive" class="btn btn-danger btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    @endif
                                                </form>
                                            </td>


                                            <td>
                                                <a href="{{route('edit-user').'/'.$admin->id}}"
                                                   class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete-user').'/'.$admin->id}}"
                                                   onclick="return confirm('Are you sure?')"
                                                   class="btn btn-danger btn-xs"><i
                                                            class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>


                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->





@endsection