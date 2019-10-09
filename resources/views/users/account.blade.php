@extends('layouts.frontLayouts.front_design')


@section('content')
    <section id="form" style="margin-top: 20px;"><!--form-->
        <div class="container">
            <div class="row">
                @if(Session::has('flash_message_error'))

                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! Session('flash_message_error') !!}</strong>
                    </div>
                @endif
                @if(Session::has('flash_message_success'))

                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! Session('flash_message_success') !!}</strong>
                    </div>
                @endif
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <h2>Update Account</h2>
                        <form id="accountForm" name="accountForm" action="{{url('/account')}}" method="post">
                            {{csrf_field()}}

                            <input value="{{$userDetails->name}}" id="name" name="name" type="name" placeholder="Name" />
                            <input value="{{$userDetails->address}}" id="address" name="address" type="address" placeholder="Address" />
                            <input value="{{$userDetails->city}}" id="city" name="city" type="city" placeholder="City" />
                            <input value="{{$userDetails->state}}" id="state" name="state" type="state" placeholder="State" />
                            <select id="country" name="country">
                                <option  value="">Select Country</option>
                                @foreach($countries as $country)
                                <option  value="{{$country->country_name}}" @if($country->country_name==$userDetails->country)>Selected @endif>{{$country->country_name}}</option>
                                    @endforeach
                            </select>
                            <input style="margin-top: 10px;" {{$userDetails->pincode}} id="pincode" name="pincode" type="pincode" placeholder="Pincode" />
                            <input {{$userDetails->mobile}} id="mobile" name="mobile" type="mobile" placeholder="Mobile" />
                            <button type="submit" class="btn btn-default">Update</button>
                        </form>

                    </div>
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form">
                        <h2>Update Password</h2>
                        <form id="passwordForm" name="passwordForm" action="{{url('/update-user-pwd')}}" method="post">
                            {{csrf_field()}}
                            <input  id="current_pwd" name="current_pwd" type="password" placeholder="Current Password" />
                            <span id="chkPwd"></span>
                            <input  id="new_pwd" name="new_pwd" type="password" placeholder="New Password" />
                            <input  id="confirm_pwd" name="confirm_pwd" type="password" placeholder="Confirm Password" />
                            <button type="submit" class="btn btn-default">Update</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/form-->

@endsection