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
                            <h2 class="">Add Complain</h2>
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
                                    <form action="{{route('add-complain')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group form-group-sm">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" name="subject" value="{{old('subject')}}"
                                                   placeholder="Enter the subject of complain" class="form-control">
                                            <a href="" style="color: red">{{$errors->first('subject')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <label for="details">Details</label>
                                            <textarea name="details" id="details_id" class="form-control"></textarea>
                                            <a href="" style="color: red">{{$errors->first('details')}}</a>

                                        </div>
                                        <div class="form-group form-group-sm">
                                            <label for="name">Complainer's Name</label>
                                            <input type="text" id="name" name="name" value="{{old('name')}}"
                                                   placeholder="Enter Your Name" class="form-control">
                                            <a href="" style="color: red">{{$errors->first('name')}}</a>

                                        </div>
                                        <div class="form-group form-group-sm">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" name="email" value="{{old('email')}}"
                                                   placeholder="Enter Your Email" class="form-control">
                                            <a href="" style="color: red">{{$errors->first('email')}}</a>

                                        </div>

                                        <div class="form-group form-group-sm">
                                            <label for="phone">Contact No.</label>
                                            <input type="text" id="phone" name="phone" value="{{old('phone')}}"
                                                   placeholder="Enter Your Phone Number" class="form-control">
                                            <a href="" style="color: red">{{$errors->first('phone')}}</a>

                                        </div>

                                        <div class="form-group form-group-sm">
                                            <label for="upload">Additional File (Image,Documents etc)</label>
                                            <input type="file" id="upload" name="upload" class="btn btn-default btn-sm">
                                            <a href="" style="color: red">{{$errors->first('upload')}}</a>
                                        </div>


                                        <div class="form-group form-group-sm">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-comment"></i> Submit Complain</button>

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