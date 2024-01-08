<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" type="image/x-icon" href="">
        <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
    <title>Jewellery Webnet</title>

           
          
  
  
</head>
<body>
    {{-- .............................minin header................................... --}}
    <div id="carouselExampleInterval" class="carousel slide bg-success-subtle py-2" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active text-center " data-bs-interval="10000">
            {{-- <img src="..." class="d-block w-100" alt="..."> --}}
            <p>Show them you understood the assigment shop our <a href="">most popular jewellery</a></p>
          </div>
          <div class="carousel-item text-center" data-bs-interval="2000">
            {{-- <img src="..." class="d-block w-100" alt="..."> --}}
           <p>Stay in the loop Sign up to our <a href="">Newletter</a> and <a href="">text  Updates</a></p>
          </div>
          <div class="carousel-item text-center ">
            {{-- <img src="..." class="d-block w-100" alt="..."> --}}
           <p>Everyone is talking about Tiffany look. Discover the latest designs from our iconic collection. <a href="">Shop Now</a></p>   
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
       {{-- .............................minin header................................... --}}

       {{-- .......................header........................... --}}
       <div class="d-lg-block d-none">
            <div class="center_menu d-flex justify-content-between px-4 align-items-center">
                <div class="client_care d-flex">
                    <div><span><i class="fa-solid fa-magnifying-glass"></i></span></div>
                    <div><span><i class="fa-solid fa-location-dot"></i></span></div>
                    <div><span><i class="fa-solid fa-bell-concierge"></i></span> Client Care</div>
                </div>
                <div>
                   <a href="{{asset('home')}}"><img src="{{asset('image/Capture.PNG')}}" alt=""></a> 
                </div>
                <div class="book_an_appoinment d-flex">
                    <div><span><i class="fa-regular fa-calendar"></i></span> Book an Appoinment</div>
                    <div><span><i class="fa-regular fa-user"></i></span></div>
                    <div><span><a href="{{asset('checkout')}}" style="color:black; text-decoration: none;"><i class="fa-regular fa-heart"></i></a></span></div>
                    <div><span><a href="{{asset('shoppingbag')}}" style="color:black; text-decoration: none;"><i class="fa-solid fa-bag-shopping"></i></a></span></div>
                </div>
            </div>
          </div>
        {{-- .......................header........................... --}}
  {{-- .....................navbar..........................  --}}
  {{-- @php
    $collection=0;
      $collection= array("Volvo", "BMW", "Toyota","jhjdf");
      $category= array("Volvo", "BMW", "Toyota");
  @endphp --}}
  <div class="d-lg-block d-none">
  <div class="navbar1 ">
    {{-- @foreach ($collection as $item) --}}
        
    <div class="dropdown1">
      <button class="dropbtn">Jewellery
        {{-- <i class="fa fa-caret-down"></i> --}}
      </button>
      <div class="dropdown-content">
        {{-- <div class="header">
          <h2>Mega Menu1</h2>
        </div>    --}}
        <div class="row1">
          <div class="column1">
            <h3>Shop by Category</h3>
            <ul class="sub_menu">
              <li><a href="{{asset('necklaces_pendants')}}">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
            <p><a href="">Explore All Categories</a></p>
            <ul class="sub_menu">
              <li><a href="">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
          </div>
          <div class="column1">
            <h3>Shop by Metal</h3>
            <ul class="sub_menu">
              <li><a href="#">Gold Jewellery</a></li>
              <li> <a href="#">Rose Gold Jewellery</a></li>
              <li> <a href="#">White Gold Jewellery</a></li>
              <li><a href="">Platinum Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
            </ul>
          </div>
          <div class="column1">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
          <div class="column1">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    {{-- @endforeach --}}
    <div class="dropdown1">
      <button class="dropbtn">Gifts
        {{-- <i class="fa fa-caret-down"></i> --}}
      </button>
      <div class="dropdown-content">
        {{-- <div class="header">
          <h2>Mega Menu2</h2>
        </div>    --}}
        <div class="row1">
          <div class="column1">
            <div style="float: left;">
              <h3 class="" >Shop by Category</h3>
            </div>
            <ul class="sub_menu">
              <li><a href="">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
            <p><a href="">Explore All Categories</a></p>
          </div>
          <div class="column1">
            <h3>Shop by Metal</h3>
            <ul class="sub_menu">
              <li><a href="#">Gold Jewellery</a></li>
              <li> <a href="#">Rose Gold Jewellery</a></li>
              <li> <a href="#">White Gold Jewellery</a></li>
              <li><a href="">Platinum Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
            </ul>
          </div>
       
          <div class="column1" style="">
           <img src="{{asset('image/WATCH-Flyout-Desktop.webp')}}" alt="" style="width:100%;">
          </div>
        </div>
      </div>
    </div>
     <div class="dropdown1">
      <button class="dropbtn">Love & Engagement
        {{-- <i class="fa fa-caret-down"></i> --}}
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>Mega Menu3</h2>
        </div>   
        <div class="row1">
          <div class="column1">
            <h3>Shop by Category</h3>
            <ul class="sub_menu">
              <li><a href="">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
            <h3><a href="">Explore All Categories</a></h3>
          </div>
          <div class="column1">
            <h3>Shop by Metal</h3>
            <ul class="sub_menu">
              <li><a href="#">Gold Jewellery</a></li>
              <li> <a href="#">Rose Gold Jewellery</a></li>
              <li> <a href="#">White Gold Jewellery</a></li>
              <li><a href="">Platinum Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
            </ul>
          </div>
          <div class="column1">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
          <div class="column1">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn">Fine Watches
        {{-- <i class="fa fa-caret-down"></i> --}}
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>Mega Menu4</h2>
        </div>   
        <div class="row1">
          <div class="column1">
            <h3>Shop by Category</h3>
            <ul class="sub_menu">
              <li><a href="">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
            <h3><a href="">Explore All Categories</a></h3>
          </div>
          <div class="column1">
            <h3>Shop by Metal</h3>
            <ul class="sub_menu">
              <li><a href="#">Gold Jewellery</a></li>
              <li> <a href="#">Rose Gold Jewellery</a></li>
              <li> <a href="#">White Gold Jewellery</a></li>
              <li><a href="">Platinum Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
            </ul>
          </div>
          <div class="column1">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
          <div class="column1">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn">Home & Accessories
        {{-- <i class="fa fa-caret-down"></i> --}}
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>Mega Menu5</h2>
        </div>   
        <div class="row1">
          <div class="column1">
            <h3>Shop by Category</h3>
            <ul class="sub_menu">
              <li><a href="">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
            <h3><a href="">Explore All Categories</a></h3>
          </div>
          <div class="column1">
            <h3>Shop by Metal</h3>
            <ul class="sub_menu">
              <li><a href="#">Gold Jewellery</a></li>
              <li> <a href="#">Rose Gold Jewellery</a></li>
              <li> <a href="#">White Gold Jewellery</a></li>
              <li><a href="">Platinum Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn">Fragrance
        {{-- <i class="fa fa-caret-down"></i> --}}
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>Mega Menu6</h2>
        </div>   
        <div class="row">
          <div class="column">
            <h3>Shop by Category</h3>
            <ul class="sub_menu">
              <li><a href="">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
            <h3><a href="">Explore All Categories</a></h3>
          </div>
          <div class="column">
            <h3>Shop by Metal</h3>
            <ul class="sub_menu">
              <li><a href="#">Gold Jewellery</a></li>
              <li> <a href="#">Rose Gold Jewellery</a></li>
              <li> <a href="#">White Gold Jewellery</a></li>
              <li><a href="">Platinum Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn">Men's
        {{-- <i class="fa fa-caret-down"></i> --}}
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>Mega Menu7</h2>
        </div>   
        <div class="row">
          <div class="column">
            <h3>Shop by Category</h3>
            <ul class="sub_menu">
              <li><a href="">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
            <h3><a href="">Explore All Categories</a></h3>
          </div>
          <div class="column">
            <h3>Shop by Metal</h3>
            <ul class="sub_menu">
              <li><a href="#">Gold Jewellery</a></li>
              <li> <a href="#">Rose Gold Jewellery</a></li>
              <li> <a href="#">White Gold Jewellery</a></li>
              <li><a href="">Platinum Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
    <div class="dropdown1">
      <button class="dropbtn">Stories
        {{-- <i class="fa fa-caret-down"></i> --}}
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>Mega Menu7</h2>
        </div>   
        <div class="row">
          <div class="column">
            <h3>Shop by Category</h3>
            <ul class="sub_menu">
              <li><a href="">Necklaces & Pendants</a></li>
              <li><a href="">Bracelets</a></li>
              <li><a href="">Earrings</a></li>
              <li><a href="">Rings</a></li>
              <li><a href="">Fine Watches</a></li>
              <li><a href="">Fine Watches</a></li>
            </ul>
            <h3><a href="">Explore All Categories</a></h3>
          </div>
          <div class="column">
            <h3>Shop by Metal</h3>
            <ul class="sub_menu">
              <li><a href="#">Gold Jewellery</a></li>
              <li> <a href="#">Rose Gold Jewellery</a></li>
              <li> <a href="#">White Gold Jewellery</a></li>
              <li><a href="">Platinum Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
              <li><a href="">Sterling Silver Jewellery</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
          <div class="column">
            <h3>Curated Shops</h3>
            <ul class="sub_menu">
              <li><a href="#">Most Popular Jewellery</a></li>
              <li> <a href="#">New Jewellery</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li><a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li> <a href="#">Online Exclusives</a></li>
              <li>  <a href="#">Online Exclusives</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>  
    {{-- .....................navbar..........................  --}}

     {{-- .............................Responsive mobile................................... --}}
     <div class="d-lg-none d-block">
      <div class="center_menu d-flex justify-content-between px-4 align-items-center">
          <div class="client_care d-flex">
              <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><span><i class="fa-solid fa-bars"></i></span>
              </button>
              </div>
              {{-- <div><span><i class="fa-solid fa-location-dot"></i></span></div> --}}
              {{-- <div><span><i class="fa-solid fa-bell-concierge"></i></span> Client Care</div> --}}
          </div>
          <div>
              <img src="{{asset('image/Capture.PNG')}}" alt="">
          </div>
          <div class="book_an_appoinment d-flex">
              {{-- <div><span><i class="fa-regular fa-calendar"></i></span> Book an Appoinment</div> --}}
              {{-- <div><span><i class="fa-regular fa-user"></i></span></div> --}}
              <div><span><a href="{{asset('checkout')}}" style="color:black; text-decoration: none;"><i class="fa-regular fa-heart"></i></a></span></div>
              <div><span><a href="{{asset('shoppingbag')}}" style="color:black; text-decoration: none;"><i class="fa-solid fa-bag-shopping"></i></a></span></div>
          </div>
      </div>
    </div>
     {{-- .............................Responsive mobile................................... --}}

        {{-- <a class="navbar-brand" href="#">Offcanvas navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div class="offcanvas-body">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Jewellery
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="column">
                      <h5>Shop by Category</h5>
                      <ul class="sub_menu">
                        <li><a href="">Necklaces & Pendants</a></li>
                        <li><a href="">Bracelets</a></li>
                        <li><a href="">Earrings</a></li>
                        <li><a href="">Rings</a></li>
                        <li><a href="">Fine Watches</a></li>
                      </ul>
                      <h5>Explore All Categories</h5>
                    </div>
                    <div class="column">
                      <h5>Shop by Metal</h5>
                      <ul class="sub_menu">
                        <li><a href="">Gold Jewellery</a></li>
                        <li><a href="">Rose Gold Jewellery</a></li>
                        <li><a href="">White Gold Jewellery </a></li>
                        <li><a href="">Platinum Jewellery</a></li>
                        <li><a href="">Sterling Silver Jewellery</a></li>
                      </ul>
                      {{-- <h5>Explore All Categories</h5> --}}
                    </div>
                    <div class="column">
                      <h5>Shop by Gemstone</h5>
                      <ul class="sub_menu">
                        <li><a href="">Diamond Jewellery</a></li>
                        <li><a href="">Pearl Jewellery</a></li>
                        <li><a href="">Coloured Gemstone Jewellery</a></li>
                      </ul>
                      {{-- <h5>Explore All Categories</h5> --}}
                    </div>
                    <div class="column">
                      <h5>Curated Shops</h5>
                      <ul class="sub_menu">
                        <li><a href="">Most Popular Jewellery</a></li>
                        <li><a href="">New Jewellery</a></li>
                        <li><a href="">High Jewellery</a></li>
                        <li><a href="">Bold Silver Jewellery</a></li>
                        <li><a href="">Dainty Jewellery</a></li>
                        <li><a href="">Couples' Bracelets</a></li>
                      </ul>
                      {{-- <h5>Explore All Categories</h5> --}}
                    </div>
                    <div class="column">
                      <h5>Featured Collections</h5>
                      <ul class="sub_menu">
                        <li><a href="">Tiffany Lock</a></li>
                        <li><a href="">Tiffany T</a></li>
                        <li><a href="">Tiffany HardWear</a></li>
                        <li><a href="">Tiffany Knot</a></li>
                        <li><a href="">Tiffany Victoria®</a></li>
                        <li><a href="">Return to Tiffany™</a></li>
                        <li><a href="">Tiffany Keys</a></li>
                        <li><a href="">Tiffany 1837™</a></li>
                        <li><a href="">Elsa Peretti®</a></li>
                        <li><a href="">Tiffany & Co. Schlumberger</a></li>
                        <li><a href="">Paloma Picasso®</a></li>
                      </ul>
                      <h5>Explore All Categories</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Gifts
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="column">
                    <h5>Gifts for…</h5>
                    <ul class="sub_menu">
                      <li><a href="">Her</a></li>
                      <li><a href="">Him</a></li>
                      <li><a href="">Baby</a></li>
                      <li><a href="">The Home</a></li>
                      <li><a href="">The Couple</a></li>
                      <li><a href="">Graduates</a></li>
                    </ul>
                    <h5>Explore All Gifts</h5>
                  </div>
                </div>
                <div class="column">
                  <h5>Discover</h5>
                  <ul class="sub_menu">
                    <li><a href="">Gifts £500 & Under</a></li>
                    <li><a href="">Gifts to Personalise</a></li>
                    <li><a href="">Anniversary Gifts</a></li>
                    <li><a href="">Birthday Gifts</a></li>
                    <li><a href="">Jewellery Sets</a></li>
                    <li><a href="">Business Gifts</a></li>
                    <li><a href="">The Tiffany Gift Card</a></li>
                  </ul>
                  {{-- <h5>Explore All Gifts</h5> --}}
                </div>
              </div>
                </div>
              
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Love & Engagement
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="column">
                      <h5>Engagement</h5>
                      <ul class="sub_menu">
                        <li><a href="">Engagement Rings</a></li>
                        {{-- <li>Him</li>
                        <li>Baby</li>
                        <li>The Home</li>
                        <li>The Couple</li>
                        <li>Graduates</li> --}}
                      </ul>
                      <h5>Book an Appointment</h5>
                    </div>
                    <div class="column">
                      <h5>Wedding</h5>
                      <ul class="sub_menu">
                        <li><a href="">Women’s Wedding Bands</a></li>
                        <li><a href="">Men’s Wedding Bands</a></li>
                        <li><a href="">Wedding Band Sets</a></li>
                        <li><a href="">Couples’ Rings</a></li>
                        {{-- <li>The Couple</li>
                        <li>Graduates</li> --}}
                      </ul>
                      <h5>Begin Your Journey</h5>
                    </div>
                    <div class="column">
                      <h5>The Tiffany Difference</h5>
                      <ul class="sub_menu">
                        <li><a href="">The Guide to Diamonds</a></li>
                        <li><a href="">A Lifetime of Service</a></li>
                        <li><a href="">A Tiffany Ring</a></li>
                        <li><a href="">Responsible Sourcing</a></li>
                        <li><a href="">How to Choose an Engagement Ring</a></li>
                      </ul>
                      {{-- <h5>Book an Appointment</h5> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            
          </div>
        </div>
     
</body>
</html>