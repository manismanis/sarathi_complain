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
                            <h2>Edit Complain</h2>
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

                                    <div class="row">
                                        <div class="col-md-8">
                                            <form action="{{route('edit-complain-action')}}" method="post"
                                                  enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <input type="hidden" name="criteria" value="{{$ComplainData->id}}">
                                                <div class="form-group form-group-sm">
                                                    <label for="subject">Subject</label>
                                                    <input type="text" id="name" name="subject"
                                                           value="{{$ComplainData->subject}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group form-group-sm">
                                                    <label for="details">Details</label>
                                                    <textarea name="details" id="details_id"
                                                              class="form-control">{{$ComplainData->details}}</textarea>

                                                </div>
                                                <div class="form-group form-group-sm">
                                                    <label for="name">Complainer's Name</label>
                                                    <input type="text" id="phone" name="name"
                                                           value="{{$ComplainData->name}}"
                                                           class="form-control">

                                                </div>

                                                <div class="form-group form-group-sm">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" id="phone" name="phone"
                                                           value="{{$ComplainData->phone}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group form-group-sm">
                                                    <label for="email">Email</label>
                                                    <input type="text" id="email" name="email"
                                                           value="{{$ComplainData->email}}"
                                                           class="form-control">

                                                </div>

                                                <div class="form-group form-group-sm">
                                                    <label for="upload">Additional File (Image,Documents etc)</label>
                                                    <input type="file" id="upload" name="upload"
                                                           class="btn btn-default btn-sm">
                                                    <a href="" style="color: red">{{$errors->first('upload')}}</a>


                                                </div>

                                                <div class="form-group form-group-sm">
                                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-comment"></i> Update Complain</a>

                                                </div>
                                            </form>

                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{url('uploads/images/complains/' .$ComplainData->image)}}" alt=""
                                                 class="img-responsive thumbnail" style="margin-top: 23px">
                                        </div>
                                    </div>

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