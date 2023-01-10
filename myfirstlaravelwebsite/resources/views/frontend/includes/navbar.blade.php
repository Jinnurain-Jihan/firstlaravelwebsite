<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#"><img height="50" src="{{asset('frontend/img/logo.svg')}}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/service')}}">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/portfolio')}}">PORTFOLIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/contact')}}">CONTACT</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <button class="btn logbtn" style="border:1px solid #000;border-radius:20px;padding:10px;background-color:#BB2D3B;border:none;" type="submit"><a href="#" class="text-decoration-none text-white">Login Now</a></button>
        </form>
      </div>
    </div>
  </nav>