@extends('layouts.app')

@section('title', 'Registro')

@section('content')
<section class="content">
    <div class="container-center lg animated slideInDown">
        <div class="view-header">
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-add-user"></i>
            </div>
            <div class="header-title">
                <h3>Register</h3>
                <small>
                    Please enter your data to register.
                </small>
            </div>
        </div>

        <div class="panel panel-filled">
            <div class="panel-body">
                <p>

                </p>
                <form action="{{ route('register-user-store')}}" id="loginForm" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Email Address</label>
                            <input type="email" value="" id="email" name="email" class="form-control" required>
                            <span class="help-block small">Your address email to contact</span>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>First Name</label>
                            <input type="text" value="" id="first_name" name="first_name" class="form-control" required>
                            <span class="help-block small">Your First Name</span>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Last Name</label>
                            <input type="text" value="" id="last_name" name="last_name" class="form-control">
                            <span class="help-block small">Your Last Name</span>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Password</label>
                            <input type="password" value="" id="password" class="form-control" name="password" required>
                            <span class="help-block small">Your hard to guess password</span>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Repeat Password</label>
                            <input type="password" value="" id="password_confirmation" class="form-control" name="password_confirmation" required>
                            <span class="help-block small">Please repeat your pasword</span>
                        </div>                       
                    </div>
                    <div>
                        <button class="btn btn-accent pull-right">Register</button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection