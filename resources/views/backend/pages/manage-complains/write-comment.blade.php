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
                            <h2 class="">Reply to Comment</h2>
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
                                <div class="col-md-12">
                                    <form action="{{route('write-comment-action')}}" method="post"
                                          enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="criteria" value="{{$commentData->id}}">
                                        <div class="form-group form-group-sm">
                                            <label for="comments">Replies</label>
                                            <textarea name="replies" id="details_id"
                                                      class="form-control">{{$commentData->replies}}</textarea>
                                            <a href="" style="color: red">{{$errors->first('replies')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-comment"></i> Update
                                                Comment
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->





@endsection