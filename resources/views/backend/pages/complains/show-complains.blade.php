@extends('backend.master.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>List of Complains</h2>
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
                                        <th>Submitted At</th>
                                        <th>Subject</th>
                                        <th>Details</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($complainData as $key=>$complain)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$complain->created_at->diffForHumans()}}</td>
                                            <td>{{$complain->subject}}</td>
                                            <td>{{strip_tags($complain->details)}}</td>
                                            <td>{{$complain->name}}</td>
                                            <td>{{$complain->phone}}</td>
                                            <td>{{$complain->email}}</td>
                                            <td>
                                                <img src="{{url('uploads/images/complains/'.$complain->image)}}"
                                                     width="30"
                                                     alt="">
                                            </td>
                                            <td>
                                                <form action="" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="criteria" value="{{$complain->id}}">
                                                    @if($complain->status==1)
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
                                                <a href="{{route('view-complain').'/'.$complain->id}}"
                                                   class="btn btn-success btn-xs">
                                                        <span class="fa fa-eye" title="View Complain">
                                                        </span></a>
                                                {{--<a href="{{route('edit-complain').'/'.$complain->id}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>--}}
                                                <a href="{{route('delete-complain').'/'.$complain->id}}"
                                                   onclick="return confirm('Are you sure?')"
                                                   class="btn btn-danger btn-xs"><span class="fa fa-trash" title="Delete">
                                                        </span></a>
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