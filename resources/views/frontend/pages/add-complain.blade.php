@extends('frontend.master.master')

@section('content')
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class=" col-md-6">
                <h1 style="font-size: large"><b>Write Your Complain Here</b></h1>
                <br>
                @include('frontend.layouts.messages')
                <form action="{{route('add-complain')}}" method="post" id="my-form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group form-group-sm">
                        <label for="subject"><b>Subject</b></label>
                        <input type="text" id="subject" name="subject" value="{{old('subject')}}"
                               placeholder="Enter the subject of complain" class="form-control">
                        <a href="" style="color: red">{{$errors->first('subject')}}</a>
                    </div>
                    <div class="form-group form-group-sm">
                        <label for="details"><b>Details</b></label>
                        <textarea name="details" id="details" class="form-control"></textarea>
                        <a href="" style="color: red">{{$errors->first('details')}}</a>

                    </div>
                    <div class="form-group form-group-sm">
                        <label for="name"><b>Complainer's Name</b></label>
                        <input type="text" id="name" name="name" value="{{old('name')}}"
                               placeholder="Enter Your Name" class="form-control">
                        <a href="" style="color: red">{{$errors->first('name')}}</a>

                    </div>
                    <div class="form-group form-group-sm">
                        <label for="email"><b>Email (Optional)</b></label>
                        <input type="text" id="email" name="email" value="{{old('email')}}"
                               placeholder="Enter Your Email" class="form-control">
                        <a href="" style="color: red">{{$errors->first('email')}}</a>

                    </div>

                    <div class="form-group form-group-sm">
                        <label for="phone"><b>Contact No.</b></label>
                        <input type="text" id="phone" name="phone" value="{{old('phone')}}"
                               placeholder="Enter Your Phone Number" class="form-control">
                        <a href="" style="color: red">{{$errors->first('phone')}}</a>

                    </div>

                    <div class="form-group form-group-sm">
                        <label for="upload"><b>Additional File (Image,Documents etc)</b></label>
                        <input type="file" id="upload" name="upload" class="btn btn-default btn-sm">
                        <a href="" style="color: red">{{$errors->first('upload')}}</a>
                    </div>

                    <div class="form-group form-group-sm">
                        <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                        @if($errors->has('g-recaptcha-response'))
                            <span class="invalid-feedback" style="display:block">
                                    <strong>{{$errors->first('g-recaptcha-response')}}</strong>
                                </span>
                        @endif

                    </div>


                    <div class="form-group form-group-sm">
                        <button class="btn btn-success btn-sm" id="add-data"><i class="fa fa-send"></i> Submit Complain</button>

                    </div>

                </form>
            </div>
        </div>
    </div><br><br>

@stop