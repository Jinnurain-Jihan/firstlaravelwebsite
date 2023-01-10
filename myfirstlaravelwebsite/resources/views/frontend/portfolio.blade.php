@extends('frontend.layouts.master')
@section('title','Portfolio')

@section('content')
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
                {{-- <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
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

@endsection