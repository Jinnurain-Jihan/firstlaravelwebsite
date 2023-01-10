@extends('frontend.layouts.master')

@section('title','Contact')
@section('content')
<section class="contact-area mt-5">
    <div class="container">
        <div class="section-title about-text-area text-center pb-60">
            <h3>Contact Us</h3>
            <h2>Get Tutch With Active <br>
                in 24 Hours.</h2>
        </div >
        <div class="contact-form-area">
            <form id="contact-form" action="mail.php" method="POST">
                <input type="text" name="name" placeholder="Name :">
                <input type="email" name="email" placeholder="Email :"><br>
                <textarea name="message" cols="30" rows="6" placeholder="Message"></textarea>
                <div class="submit-area text-center">
                    <button type="submit" class="submit btn btn-outline-danger">Sent Now</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection