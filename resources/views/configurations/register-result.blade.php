@extends('layouts.app')

@section('title', 'Registration result')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-filled ">
                <div class="panel-body">
                    <div class="btn-group pull-right m-b-md">
                        <button class="btn btn-default btn-xs">Show</button>
                        <button class="btn btn-default btn-xs">Messages</button>
                    </div>
                        <img alt="image" class="img-rounded image-lg" src="images/a2.jpg">
                        <h5 class="m-b-none"><a href=""> {{$user->attributes['first_name']}} {{$user->attributes['last_name']}} </a></h5>

                        <div class="m-b-xs c-white small">{{$user->attributes['email']}}</div>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                        <small><i class="fa fa-clock-o"></i> Created at: {{$user->attributes['created_at']}}</small>
                </div>
            </div>
        </div>
    </div>    
</section>

@endsection
