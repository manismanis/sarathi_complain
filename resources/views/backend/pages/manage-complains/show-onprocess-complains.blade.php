@extends('backend.master.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <a href="{{route('show-comments')}}" class="btn btn-sm" style="font-size: medium"><i
                            class="fa fa-backward"> Back</i></a>
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>OnProcess Complains</h2>
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
                                        <th>Created At</th>
                                        <th>Subject</th>
                                        <th>Complainer's Name</th>
                                        <th>Assigned To</th>
                                        <th>Replies</th>
                                        <th>Status</th>
                                        @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->user_type=='user')
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($commentData as $key=>$comment)
                                        {{--Reply ma kehi lekhiyeko complains lai matra OnProccess Complains ma dekhauna--}}
                                        @if ($comment->status == 'OnProcess' && (!$comment->replies == ''))
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$comment->created_at->diffForHumans()}}</td>
                                                <td>{{$comment->complain->subject}}</td>
                                                <td>{{$comment->complain->name}}</td>
                                                <td>
                                                    <a href=""
                                                       class="btn btn-success btn-xs"> {{$comment->user->fullname}}</a>

                                                </td>
                                                {{--to avoid nbsp tag php tag is used--}}
                                                <td><?= $comment->replies ?></td>

                                                <td>
                                                    <form action="{{route('update-complain-status')}}"
                                                          method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="criteria"
                                                               value="{{$comment->id}}">
                                                        @if($comment->status=='OnProcess')
                                                            <button name="OnProcess" class="btn btn-warning btn-xs">
                                                                OnProcess
                                                            </button>
                                                        @else
                                                            <button name="Completed" class="btn btn-success btn-xs">
                                                                Completed
                                                            </button>
                                                        @endif
                                                    </form>
                                                </td>
                                                <td>
                                                    @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->user_type=='user')

                                                        <a href="{{route('view-comment').'/'.$comment->id}}"
                                                           class="btn btn-success btn-xs"><span class="fa fa-eye"
                                                                                                title="View Comment">
                                                        </span></a>
                                                        <a href="{{route('write-comment').'/'.$comment->id}}"
                                                           class="btn btn-success btn-xs"><span class="fa fa-comment"
                                                                                                title="Comment">
                                                        </span></a>
                                                    @endif
                                                    @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->user_type=='admin')

                                                        {{--<a href="{{route('edit-comment').'/'.$comment->id}}"--}}
                                                        {{--class="btn btn-success btn-xs"><i--}}
                                                        {{--class="fa fa-edit"></i></a>--}}
                                                        {{--<a href="{{route('delete-comment').'/'.$comment->id}}"--}}
                                                        {{--onclick="return confirm('Are you sure?')"--}}
                                                        {{--class="btn btn-danger btn-xs"><i--}}
                                                        {{--class="fa fa-trash"></i></a>--}}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
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