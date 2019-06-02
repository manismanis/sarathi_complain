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
                            <h2 class="">Make Comment</h2>
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
                                    <form action="" method="post"
                                          enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{--tettikai form submit nahune huda..yo line chainchha--}}
                                        <input type="hidden" name="criteria" value="{{$complainData->id}}">
                                        <div class="form-group form-group-sm">
                                            <label for="subject">Subject: {{$complainData->subject}}</label>

                                        </div>
                                        <div class="form-group form-group-sm">
                                            <label for="subject">Complainer's Name: {{$complainData->name}}</label>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-group-sm">
                                                    <input type="hidden" id="name" name="id"
                                                           value="{{$complainData->id}}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <label for="comments">Comments</label>
                                            <textarea name="comments" id="details_id"
                                                      class="form-control"></textarea>
                                            <a href="" style="color: red">{{$errors->first('comments')}}</a>
                                        </div>


                                        <div class="form-group form-group-sm">
                                            <form action="{{route('add-user-comment')}}" method="post">
                                                <button class="btn btn-warning btn-sm"><i class="fa fa-send"></i>
                                                    OnProccess
                                                </button>
                                            </form>
                                            <br><br><br>
                                            {{--<form action="{{route('add-complete-complain')}}" method="post">--}}
                                                {{--{{csrf_field()}}--}}
                                                {{--<button class="btn btn-success btn-sm"><i class="fa fa-send"></i>--}}
                                                    {{--Completed--}}
                                                {{--</button>--}}
                                            {{--</form>--}}
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