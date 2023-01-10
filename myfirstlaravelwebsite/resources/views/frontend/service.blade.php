@extends('frontend.layouts.master')
@section('title','Service')

@section('content')
<section class="service-area">
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-5">
                <div class="about-text-area mt-5">
                    <h3>Our Service</h3>
                    <h2>We offer a wide range <br>
                        of service provide</h2>
                    <p>It is a long established fact that a reader will<br> be distracted
                        by the readable content of a<br> page when looking at its layout.
                    </p>
                    <a class="btn btn-md btn-danger p-2" href="#">Get Start</a>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-xl-6 text-center">
                        <div class="single-service-item mb-4">
                            <img src="{{asset('frontend/img/ux-design.svg')}}"/>
                            <h4>UI/ux design</h4>
                            <p>It is a long established fact<br> that a reader will be</p>
                        </div>
                        <div class="single-service-item">
                            <img src="{{asset('frontend/img/illustration.svg')}}"/>
                            <h4>Graphics design</h4>
                            <p>It is a long established fact<br> that a reader will be</p>
                        </div>
                    </div>
                    <div class="col-xl-6 text-center mt-60">
                        <div class="single-service-item mb-4">
                            <img src="{{asset('frontend/img/responsive.svg')}}"/>
                            <h4>Web design</h4>
                            <p>It is a long established fact<br> that a reader will be</p>
                        </div>
                        <div class="single-service-item">
                            <img src="{{asset('frontend/img/mobile-app.svg')}}"/>
                            <h4>App design</h4>
                            <p>It is a long established fact<br> that a reader will be</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection