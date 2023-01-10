@extends('frontend.layouts.master')

@section('title','Home')

@section('content')
{{-- home section --}}
    <div class="container-fluid parallax mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 text-center text-white overlay">
                <h2 style="margin-top: 200px">Welcome To</h2>
                    <h1>Digital Service</h1>
                    <a class="btn btn-danger mt-3" href="#"> Get Start Now</a>
            </div>
        </div>
    </div>
{{-- about section --}}
<section class="about-area">
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-img-area">
                    <img src="{{asset('frontend/img/Image.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-text-area mt-5">
                    <h3>About Us</h3>
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
{{-- services section --}}
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
{{-- portfolio section --}}
<section id="portfolio" class="portfolio">
    <div class="container mt-5">

      <div class="section-title">
        <h2 class="text-center text-danger">Portfolio</h2>
        <p class="text-center mb-3">Our Awesome Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active bg-danger">All</li>
            <li data-filter=".filter-app" class="bg-danger">App</li>
            <li data-filter=".filter-card" class="bg-danger">Card</li>
            <li data-filter=".filter-web" class="bg-danger">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/img/portfolio/w01.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('frontend/img/portfolio/w01.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/img/portfolio/w02.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('frontend/img/portfolio/w02.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/img/portfolio/w03.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('frontend/img/portfolio/w03.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/img/portfolio/w04.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('frontend/img/portfolio/w04.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/img/portfolio/w05.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('frontend/img/portfolio/w05.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('frontend/img/portfolio/w06.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('frontend/img/portfolio/w06.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
{{-- contact section --}}
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