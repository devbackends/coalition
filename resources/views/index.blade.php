@extends('templates.outs.home')

@section('content')
    {{-- HEADER--}}
	<div class="hug hug-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="{{ route('home') }}" class="pull-left"><img src="{{ \App\Helpers\Helpers::logoUrl() }}" alt="
Coalition"></a>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-line pull-right login">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-line pull-right register">Register</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
	</div>

    {{-- HEREO SECTION --}}
    <div class="hug hug-hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="left-side">
                        <h1>Welcome To Coalition</h1>
                        <a href="{{ route('register') }}" class="btn btn-special">GET STARTED</a>
                    </div>
                    <div class="right-side">
                        <img class="mascot" src="{{ asset('assets/img/mascot_left.png')  }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="hug hug-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Current Version <span class="color-primary">1.0.0</span> | <a class="color-primary" href="" target="_blank">Go To Project</a></h3>
                    <hr class="special">
                    <p class="text-center last-line">Copyright {{ date("Y") }} &copy;  <a href="javascript:;" target="_blank">Mohamad Kabalan</a></p>
                </div>
            </div>
        </div>
    </div>
@stop