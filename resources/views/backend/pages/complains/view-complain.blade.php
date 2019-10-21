
@extends('backend.master.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <a href="{{route('show-comments')}}" class="btn btn-sm" style="font-size: medium"><i class="fa fa-backward"> Back</i></a>
                <div class="ln_solid"></div>
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>View Complain</h2>
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
                                            <form action="#" method="post"
                                                  enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <input type="hidden" name="criteria" value="{{$ComplainData->id}}">
                                                <div class="form-group form-group-sm">
                                                    <label for="subject" style="font-size: small">Subject: {{$ComplainData->subject}}</label>
                                                </div>
                                                <div class="form-group form-group-sm">
                                                    <label for="details" style="font-size: small">Details: {{$ComplainData->details}}</label>

                                                </div>
                                                <div class="form-group form-group-sm">
                                                    <label for="name" style="font-size: small"> Complainer's Name: {{$ComplainData->name}}</label>
                                                </div>

                                                <div class="form-group form-group-sm">
                                                    <label for="phone" style="font-size: small">Phone: {{$ComplainData->phone}}</label>
                                                </div>
                                                <div class="form-group form-group-sm">
                                                    <label for="email" style="font-size: small">Email: {{$ComplainData->email}}</label>

                                                </div>
                                                <br>
                                                @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->user_type=='admin')
                                                    <div class="form-group form-group-sm">
                                                        <a href="{{route('add-comment').'/'.$ComplainData->id}}"
                                                           class="btn btn-success btn-sm"><i class="fa fa-comment"></i>
                                                            Assign
                                                            Complain</a>
                                                    </div>
                                                @endif
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