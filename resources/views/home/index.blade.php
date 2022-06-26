@extends('layouts.app-master')

@section('content')
    <div>
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
        <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides
    <div class="carousel-inner">

      <div class="item active">
        <img src="{!! url('images/slide-1.jpeg') !!}" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="{!! url('images/slide-2.jpeg') !!}" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="{!! url('images/slide-3.jpeg') !!}" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->
  <!-- Carousel Start -->
  <div style="width: 100%" class="carousel">
      <div class="container-fluid">
          <div class="owl-carousel">
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="{!! url('images/slide-1_.jpeg') !!}" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Salezbook</h1>
                      <p>
                      Recording your success
                      </p>
                      <div class="carousel-btn">
                          <a class="btn btn-custom" href="donate.php">Download App</a>
                          <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="{!! url('images/slide-2.jpeg') !!}" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Salezbook</h1>
                      <p>
                      Simple Inventory management software
                      </p>
                      <div class="carousel-btn">
                          <a class="btn btn-custom" href="donate.php">Download App</a>
                          <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="{!! url('images/slide-3.jpeg') !!}" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Salezbook</h1>
                      <p>
                      Generate accurate invoice for sales
                      </p>
                      <div class="carousel-btn">
                          <a class="btn btn-custom" href="donate.php">Download App</a>
                          <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Carousel End -->
    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>        
                  <!-- 16:9 aspect ratio -->
                  <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                  </div>
              </div>
          </div>
      </div>
  </div> 
  <!-- Video Modal End -->
        @endguest
    </div>
@endsection