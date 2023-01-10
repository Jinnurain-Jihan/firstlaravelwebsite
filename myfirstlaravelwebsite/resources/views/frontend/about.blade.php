@extends('frontend.layouts.master')
@section('title','About')

@section('content')
            <section class="about-area mt-150 mb-150">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-img-area">
                                <img src="{{asset('frontend/img/Image.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-text-area mt-5">
                                <h3 class="line">About Us</h3>
                                <h2>We Are Totaly <br>
                                    Online Service Provider</h2>
                                <p>
                                    It is a long established fact that a reader will be distracted<br>
                                    by the readable content of a page when looking <br>
                                    at its layout. <br> <br>
    
                                    The point of using Lorem Ipsum is that it has a more-or-<br>
                                    less normal distribution of letters as opposed to using
                                </p>
                                <a class="btn btn-danger p-2" href="#">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection