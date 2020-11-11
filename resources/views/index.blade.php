<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}" />
      <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}" />
      <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
      
      <title>KetKet-Home</title>
  </head>
  <body>
    
    <header>
          <div >
              <!-- Top-Headr-Part -->
              <nav class="navbar navbar-expand-lg navbar-light Top-Headr-Part">
                  <a class="navbar-brand" href="#">
                      <i class="fas fa-envelope text-white"></i>
                      <span class="text-white">support@ketket.com</span>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="nav justify-content-end collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav">
                    
                      <li class="nav-item active">
                          <a class="nav-link text-white" href="#"><i class="fas fa-shuttle-van" style="
                              transform: scaleX(-1);"></i> Your Delivery </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fas fa-map-marker-alt"></i> 
                          Store Address</a>
                      </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  English
                              </a>
                              <div class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Arabic</a>
                              </div>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  USD
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">EGP </a>
                              </div>  
                          </li>  
                    </ul>
                  </div>
              </nav>
              <div class="container-fluid">
                  <!-- Search-Header-Part -->
                  <div class="row mt-3">
                      <div class="col-md-3  text-center">
                          <img src="{{ asset('assets/img/logo.png')}}"
                              class="mt-md-0 mt-3">
                      </div>
                      <div class="col-md-5">
                          <div class="form-group has-search mt-3">
                              <span class="fa fa-search form-control-feedback"></span>
                              <input type="text" class="form-control" placeholder="Search">
                          </div>
                      
                      </div>

                      <div class="col-md-4 text-center acc-account mt-3">
                          <i class="fas fa-shopping-basket mr-3"></i>
                          <img class="mr-3" src="{{ asset('assets/img/Group 33.png')}}" width="20">    
                          <button class="btn text-white " style="background: #FF7020;"> My Account
                              <img src="{{ asset('assets/img/Acc.png')}}">
                          </button>  
                      </div>    
                  </div>
                  <!-- Bottom-Header-Part -->
                  <div class="row mt-3">
                      <nav class="navbar navbar-expand-lg navbar-light bg-white">

                          <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse"
                              data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                              aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
                              <div class="navbar-nav">
                                  <a class="nav-item nav-link active" href="#">All Categories<span
                                          class="sr-only">(current)</span></a>
                                  <a class="nav-item nav-link " href="#">Games</a>
                                  <a class="nav-item nav-link " href="#">Entertainment </a>
                                  <a class="nav-item nav-link" href="#">Mobile Balance</a>
                                  <a class="nav-item nav-link" href="#"> Itunes & Icloud</a>
                                  <a class="nav-item nav-link" href="#"> Delivery Serveces</a>
                                  <a class="nav-item nav-link" href="#">Gift Cards</a>
                                  <a class="nav-item nav-link" href="#">Amazon</a>
                                  <a class="nav-item nav-link" href="#">
                                      <img src="{{ asset('assets/img/fire.png')}}"> Best Offers </a>
                              </div>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
    </header>

    <!-- Slider section Start -->
      <section>
                      <div class="container mt-5">
                          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="{{ asset('assets/img/slider-img.png')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{ asset('assets/img/slider-img.png')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{ asset('assets/img/slider-img.png')}}" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div> 
                      </div>
      </section>
    <!-- Slider section End -->

    <!-- Small Cards Start -->
      <section>
                      <div class="container mt-5">
                          <div class="row">
                            @foreach ($products as $product)
                              <div class="col-10 col-md-5 col-lg-3 mr-4 mr-lg-0 mt-5 ml-4 ml-md-0">
                                    <div class="card mb-3" style="max-width: 350px; max-height: 120px;">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="small-card-img rounded-lg img-fluid m-2">
                                        <a href="{{asset('img/'.$product->image)}}" target="_blank"><img src="{{asset('img/'.$product->image)}}" width="80px" height="80px"/></a>
                                      </div>  
                                    </div>
                                    <div class="col-7">
                                      <div class="card-body p-0">
                                        <h6 class="card-title mb-0 mt-2">{{$product->name}}-{{$product->SKE}}</h6>
                                        <p class="card-text mb-0 price">{{$product->price}}</p>
                                        <div class="row mb-1 ml-1 star-container">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                              {{-- <div class="col-10 col-md-5 col-lg-3 mr-4 mr-lg-0 mt-5 ml-4 ml-md-0">
                                  <div class="card mb-3" style="max-width: 350px; max-height: 120px;">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="small-card-img rounded-lg img-fluid m-2"></div>  
                                    </div>
                                    <div class="col-7">
                                      <div class="card-body p-0">
                                        <h6 class="card-title mb-0 mt-2">Super Boost Headphones</h6>
                                        <p class="card-text mb-0 price">$33.3</p>
                                          <div class="row mb-1 ml-1 star-container">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-10 col-md-5 col-lg-3 mr-4 mr-lg-0 mt-5 ml-4 ml-md-0">
                                    <div class="card mb-3" style="max-width: 350px; max-height: 120px;">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="small-card-img rounded-lg img-fluid m-2"></div>  
                                    </div>
                                    <div class="col-7">
                                      <div class="card-body p-0">
                                        <h6 class="card-title mb-0 mt-2">Super Boost Headphones</h6>
                                        <p class="card-text mb-0 price">$33.3</p>
                                          <div class="row mb-1 ml-1 star-container">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                          <img src="{{ asset('assets/img/e27')}}">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-10 col-md-5 col-lg-3 mr-4 mr-lg-0 mt-5 ml-4 ml-md-0">
                                    <div class="card mb-3" style="max-width: 350px; max-height: 120px;">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="small-card-img rounded-lg img-fluid m-2"></div>  
                                    </div>
                                    <div class="col-7">
                                      <div class="card-body p-0">
                                        <h6 class="card-title mb-0 mt-2">Super Boost Headphones</h6>
                                        <p class="card-text mb-0 price">$33.3</p>
                                          <div class="row mb-1 ml-1 star-container">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div> --}}
                          </div>
                          {{-- <div class="row">
                              <div class="col-10 col-md-5 col-lg-3 mr-4 mr-lg-0 mt-5 ml-4 ml-md-0">
                                    <div class="card mb-3" style="max-width: 350px; max-height: 120px;">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="small-card-img rounded-lg img-fluid m-2"></div>  
                                    </div>
                                    <div class="col-7">
                                      <div class="card-body p-0">
                                        <h6 class="card-title mb-0 mt-2">Super Boost Headphones</h6>
                                        <p class="card-text mb-0 price">$33.3</p>
                                          <div class="row mb-1 ml-1 star-container">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-10 col-md-5 col-lg-3 mr-4 mr-lg-0 mt-5 ml-4 ml-md-0">
                                  <div class="card mb-3" style="max-width: 350px; max-height: 120px;">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="small-card-img rounded-lg img-fluid m-2"></div>  
                                    </div>
                                    <div class="col-7">
                                      <div class="card-body p-0">
                                        <h6 class="card-title mb-0 mt-2">Super Boost Headphones</h6>
                                        <p class="card-text mb-0 price">$33.3</p>
                                          <div class="row mb-1 ml-1 star-container">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-10 col-md-5 col-lg-3 mr-4 mr-lg-0 mt-5 ml-4 ml-md-0">
                                    <div class="card mb-3" style="max-width: 350px; max-height: 120px;">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="small-card-img rounded-lg img-fluid m-2"></div>  
                                    </div>
                                    <div class="col-7">
                                      <div class="card-body p-0">
                                        <h6 class="card-title mb-0 mt-2">Super Boost Headphones</h6>
                                        <p class="card-text mb-0 price">$33.3</p>
                                          <div class="row mb-1 ml-1 star-container">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-10 col-md-5 col-lg-3 mr-4 mr-lg-0 mt-5 ml-4 ml-md-0">
                                    <div class="card mb-3" style="max-width: 350px; max-height: 120px;">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="small-card-img rounded-lg img-fluid m-2"></div>  
                                    </div>
                                    <div class="col-7">
                                      <div class="card-body p-0">
                                        <h6 class="card-title mb-0 mt-2">Super Boost Headphones</h6>
                                        <p class="card-text mb-0 price">$33.3</p>
                                          <div class="row mb-1 ml-1 star-container">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                          <img src="img/e27">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div> --}}
                      </div>
      </section>
    <!-- Small Cards End -->

    <!-- Best offers Section Start -->
      <section class="progress-card mt-5">
          <div class="container">
            <h4 class="mt-2 mb-3"><img src="{{ asset('assets/img/fire.png')}}"> Best Offers</h4>
           
            <div class="owl-carousel owl-theme ">
                @foreach ($products as $product)
                            <div  class="item">
                                <div class="progress-card">
                                    <div class="">
                                      <div class="card p-3">
                                        <div class="prog-card-img rounded-lg">
                                            <div class=" sale rounded-circle mt-2"><h4 class="text-white">SALE</h4></div>
                                        </div>  
                                        <div class="card-body">
                                          <h5 class="progress-card-title text-center">${{$product->price}}</h5>
                                          <div class="text-center"><span class="text-secondary">${{$product->price}}</span></div>
                                          <h4 class="text-center">{{$product->name}}</h4>
                                          <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <div class="text-center"><span class="text-secondary">26 Left Stock</span></div>
                                          <div class="text-center"><button type="button" class="btn add-button mt-4">Add To Card</button></div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div> 
                @endforeach  
            </div> 
          
          </div>
      </section>
    <!-- Best offers Section End -->

    <!-- Footer-start -->
      <footer>   
          <hr>
          <!-- copyright -->
          <div class="row container-fluid">
              <div class="col-5"><p class="text-secondary">Saleh - &copy; 2020 All Rights Reserved</p></div>
              <div class="col-7 text-md-right">
                  <h6 class="d-inline text-secondary">Payment</h6>
                  <ul class="font-italic list-inline d-inline ml-5">
                      <li class="list-inline-item font-weight-bold"><a href="#" class="text-primary text-uppercase nav-link">VISA</a></li>
                      <li class="list-inline-item font-weight-bold"><a href="#" class="text-danger text-uppercase nav-link">MASTERcARD</a></li>
                      <li class="list-inline-item font-weight-bold"><a href="#" class="text-info text-uppercase nav-link">PaYPaL</a></li>
                      <li class="list-inline-item font-weight-bold"><a href="#" class="maincolor text-uppercase nav-link">BITcOIN</a></li>
                  </ul>
              </div>
          </div>
      </footer>
    <!-- Footer-End -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/owl.carousel.js')}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    </script>
  </body>
</html> 