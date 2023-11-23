<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> FoodieHube </title>

@include('layouts.user.styles')

</head>

<body class="sub_page">
  @include('sweetalert::alert')
  <div class="hero_area">
    <div class="bg-box">
      <img src="{{ asset('user/images/hero-bg.jpg') }}" alt="">
    </div>
    <!-- header section strats -->
    @include('layouts.user.header')
    <!-- end header section -->
  </div>

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="d-flex justify-content-center">
        <div class="heading_container">
          
          <h2>
            Book A Table
          </h2>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif
        </div>
        
      </div>
     
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div>
                <input type="text" class="form-control" placeholder="First Name" name="firstname" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Last Name"  name="lastname" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" name="phone_number"/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name="email"/>
              </div>

              <div>
                <input type="number" class="form-control" placeholder="People Number" name="guest_number"/>
              </div>

              <div>

                <select class="form-control nice-select wide" name="table_id">
                  <option value="" selected>
                   Choose Table
                  </option>
                      @foreach ($tables as $table)
                        <option value="{{ $table->id }}" @if($table->id == ($reservation->table_id ?? null)) selected @endif>
                          {{ $table->name }} {{ $table->guest_number }} (Place)
                        </option>
                      @endforeach

                  
                 
                </select>
              </div>
              
              <div>
                <input type="datetime-local" class="form-control" name="reservation_date" id="reservation_date" 
                min="{{ $mindate}}" 
                max="{{ $maxdate}}"
                value="{{ $reservation->reservation_date ?? '' }}">
              </div>
              <div class="btn_box d-flex justify-content-center">
                <button>
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              FoodieHube
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  

</body>

</html>