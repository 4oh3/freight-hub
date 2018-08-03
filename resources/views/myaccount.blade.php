@extends('layout') 

@section('content')

<div class="my-account container" id="orders">
    <div class="my-account-greeting">
        @if (Auth::check())
        <h3>Hello, <span class="greeting-name">{{ Auth::user()->name }}</span>!</h3>
        <h5>Here are your orders:</h5>
        @endif
    </div>

    <div class="row justify-content-around">
        <div class="card col-lg-5">
            <div class="card-header">
                Order # 7239-9543-5044-9066
            </div>
            <div class="card-body">
                <h5 class="card-title">Quick Details:</h5>
                <h6 class="card-title">Service:</h6>
                <p class="card-text">Priority</p>
                <h6 class="card-title">Ship Date:</h6>
                <p class="card-text">26 Jul 2018</p>
                <h6 class="card-title">Shipment Address:</h6>
                <p class="card-text">John Doe
                    <br>123 Main ST SE
                    <br>Toronto, ON T6Q 8E9
                    <br>Canada</p>
                <a href="#" class="btn btn-primary">More Details</a>
            </div>
        </div>
        <div class="card col-lg-5">
            <div class="card-header">
                Order # 7239-9543-5044-9066
            </div>
            <div class="card-body">
                <h5 class="card-title">Quick Details:</h5>
                <h6 class="card-title">Service:</h6>
                <p class="card-text">Priority</p>
                <h6 class="card-title">Ship Date:</h6>
                <p class="card-text">26 Jul 2018</p>
                <h6 class="card-title">Shipment Address:</h6>
                <p class="card-text">John Doe
                    <br>123 Main ST SE
                    <br>Toronto, ON T6Q 8E9
                    <br>Canada</p>
                <a href="#" class="btn btn-primary">More Details</a>
            </div>
        </div>
        <div class="card col-lg-5">
            <div class="card-header">
                Order # 7239-9543-5044-9066
            </div>
            <div class="card-body">
                <h5 class="card-title">Quick Details:</h5>
                <h6 class="card-title">Service:</h6>
                <p class="card-text">Priority</p>
                <h6 class="card-title">Ship Date:</h6>
                <p class="card-text">26 Jul 2018</p>
                <h6 class="card-title">Shipment Address:</h6>
                <p class="card-text">John Doe
                    <br>123 Main ST SE
                    <br>Toronto, ON T6Q 8E9
                    <br>Canada</p>
                <a href="#" class="btn btn-primary">More Details</a>
            </div>
        </div>
    </div>
</div>

@endsection