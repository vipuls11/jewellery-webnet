@extends('.layouts.app')
@section('content')
<div>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
 
    <div>
    <video class="vedio" muted>
        <source src="{{asset('image/TiffanyLandmark_6sCutdownFloral_1920x1080.mp4')}}" type="video/mp4" class="">
      </video>
    </div>
 {{-- ...........slider image ring................... --}}
      <div>                                 
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                              <span class="new_collection">New</span>
                              <span class="favi"><i class="fa-regular fa-heart"></i></span>
                               <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>
                            </div>
                        </div>

                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                         

                            <div class="card-image">
                              <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                              <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                    <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                    <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content"> 
                          <div class="card-image">
                            <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>
                            </div>
                        </div>                    
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                           <div class="card-image">
                            <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>
                            </div>
                        </div>                
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                    <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>
                            </div>
                        </div> 
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                  <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class="card-img"></a>                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
        {{-- ...........slider image ring................... --}}
        <div class="text-center">
          <button class="shop_btn">Shop Tiffany Lock</button>
        </div>

     {{-- ...........................shop card............... --}}
          <div class="shop_card container">
        <div class="row g-5">
          <div class="col-lg-6 ">
            <div class="text-center">
            <img src="{{asset('image/2023-SO_HP-50-50-PRODUCT10-Desktop.webp')}}" alt="" class="" style="width:100%;"> 
          </div>
          <div class="img_content text-center">
            <h4>Return to Tiffany™</h4>
            <p>Shop Now <span>></span></p>
          </div>
          </div>
          <div class="col-lg-6">
            <div class="text-center">
            <img src="{{asset('image/HW-HP_50-50-opt6-Desktop.webp')}}" alt="" style="width:100%;">
          </div>
          <div class="img_content text-center">
            <h4>Most Popular Jewellery</h4>
            <p>Shop Now <span>></span></p>
          </div>
          </div>
        </div>
      </div>
        {{-- ...........................shop card............... --}}

        {{-- ..........................Shop_by_Category......................... --}}
        <div class="">
          <div class="text-center">
            <h4>Shop by Category</h4>
            <p>Brilliant design and unparalleled craftsmanship.</p>
          </div>
          <div class=" row ">
            <div class="col text-center">
              <div class="text-center">
              <img src="{{asset('image/Necklace_op3.webp')}}" alt="" class="" style="width: 200px"> 
            </div>
            <p>Necklaces & Pendants</p>
            </div>
            <div class="col text-center">
              <div class="text-center">
              <img src="{{asset('image/Bracelet.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Rings</p>
            </div>
            <div class="col text-center">
              <div class="text-center">
              <img src="{{asset('image/Earrings.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Earrings</p>
            </div>
            <div class="col text-center">
              <div class=" text-center">
              <img src="{{asset('image/EngagementRings.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Bracelets</p>
            </div>
            <div class="col text-center">
              <div class="text-center">
              <img src="{{asset('image/Bracelet.webp')}}" alt="" style="width: 200px">
            </div>
            <p> Engagement Rings</p>
            </div>
            <div class="col text-center">
              <div class="text-center">
              <img src="{{asset('image/HomeDecor.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Home</p>
            </div>
          </div>
        </div>
        {{-- ..........................Shop_by_Category......................... --}}
        <div class="" style="margin: 50px 0px;">
          <div class="row">
            <div class="col-lg-9">
              <div>
                <video class="vedio" muted>
                    <source src="{{asset('image/TiffanyLandmark_6sCutdownFloral_1920x1080.mp4')}}" type="video/mp4" class="">
                  </video>
                </div>
            </div>
            <div class="col-lg-3 align-self-center">
              <div class="">
                <h3 class="" style="width:200px;">Now Open: The Landmark</h3>
                <p style="width: 80%; line-height: 24px;">A legacy of brilliance continues with The Landmark. Discover a new Tiffany & Co. for a new era at 727 Fifth Avenue, New York.</p>
                <p class="" style="	font-size: 20px;">Learn More <span>></span></p>
              </div>
            </div>
         
          </div>
        </div>

       
        {{-- ..................................Now Open: The Landmark.................................... --}}
        <div class="container-fluid">
          <div class="text-center">
            <h4 style="padding: 20px 0px; ">Stories</h4>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="">
                <div class="card" style="padding: 20px; border-radius:0px;">
                  <img src="image/BeyonceTour-HP-Stories.webp" class="card-img-top" alt="..."  style="border-radius:0px;">
                  <div class="card-body"  style="padding: 0px;">
                    <h5 class="card-title" style="margin:40px 0px;">Beyoncé Tours in Tiffany & Co.</h5>
                    <p class="card-text" style="margin-bottom:40px;">The House is the official jeweller for the RENAISSANCE WORLD TOUR.</p>
                    <a href="#" class="text-black">Learn More <span>></span></a>
                  </div>
                </div>
            </div>
          </div>
            <div class="col-lg-4">
              <div class="card" style="padding: 20px; border-radius:0px;">
                <img src="image/HA-HP-WhatIsNew1-Desktop-2.webp" class="card-img-top" alt="..." style="border-radius:0px;">
                <div class="card-body"  style="padding: 0px;">
                  <h5 class="card-title" style="margin:40px 0px;">At Home with Tiffany</h5>
                  <p class="card-text" style="margin-bottom:40px;">The House is the official jeweller for the RENAISSANCE WORLD TOUR.</p>
                  <a href="#" class="text-black">Learn More <span>></span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card" style="padding: 20px; border-radius:0px;">
                <img src="image/BB-HP-WhatIsNew-Desktop-1.webp" class="card-img-top" alt="..." style="border-radius:0px;">
                <div class="card-body"  style="padding: 0px;">
                  <h5 class="card-title" style="margin:40px 0px;">Beyoncé Tours in Tiffany & Co.</h5>
                  <p class="card-text" style="margin-bottom:40px;">The House is the official jeweller for the RENAISSANCE WORLD TOUR.</p>
                  <a href="#" class="text-black">Learn More <span>></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        {{-- ..................................Now Open: The Landmark.................................... --}}

         {{-- ................................Love Your Way.................................. --}}
    <div id="love_your" style="" class="d-lg-block d-none">
      <div class="love_card">
        <h3 style="margin-bottom: 20px;">Love Your Way</h3>
        <p style="margin-bottom: 20px; font-size:18px;">You’ll know who it’s for. You’ll know when it’s time. You’ll
          just know.</p>
        <a href="#" class="text-black">Explore Love & Engagement<span>></span></a>
      </div>
    </div>
    {{-- ................................Love Your Way.................................. --}}

      {{-- ................................Love Your Way mobile responsive.................................. --}}
      <div id="" style="margin-top:20px;" class="love_mobile d-block d-lg-none">
        <img src="{{asset('image/2023_GW-HP-FWMH-Desktop.webp')}}" alt="" style="width:100%;">
        <div class="love_mobile_content p-4">
          <h3 style="margin-bottom: 10px;">Love Your Way</h3>
          <p style="margin-bottom: 10px; font-size:18px;">You’ll know who it’s for. You’ll know when it’s time. You’ll
            just know.</p>
          <a href="#" class="text-black">Explore Love & Engagement<span>></span></a>
        </div>
      </div>
      {{-- ................................Love Your Way mobile responsive.................................. --}}

    {{-- ................................Love Your Way.................................. --}}
    <div id="Source_your" style="" class="d-lg-block d-none">
      <div class="Source_card">
        <h3 style="margin-bottom: 20px;">From the Source</h3>
        <p style="margin-bottom: 20px; font-size:18px;">Handcrafting the world’s best diamonds starts with knowing where
          they come from. We proudly trace 100% of our rough diamonds to known mines and sources.</p>
        <a href="#" class="text-black">Follow Your Diamond's Journey<span>></span></a>
      </div>
    </div>
    {{-- ................................Love Your Way.................................. --}}

   {{-- ................................Love Your Way mobile responsive.................................. --}}
   <div id="" style="margin-top: 30px;" class="Source_mobile d-block d-lg-none">
    <img src="{{asset('image/2021_Bloomgberg-HP_FWMH-Desktop2.webp')}}" alt="" style="width:100%;">
    <div class="Source_mobile_content p-4">
      <h3 style="margin-bottom: 10px;">From the Source</h3>
      <p style="margin-bottom: 10px; font-size:18px;">Handcrafting the world’s best diamonds starts with knowing where
        they come from. We proudly trace 100% of our rough diamonds to known mines and sources..</p>
      <a href="#" class="text-black">Follow Your Diamond's Journey<span>></span></a>
    </div>
  </div>
  {{-- ................................Love Your Way mobile responsive.................................. --}}

          
        {{-- ..........................Shop_by_Category......................... --}}
        <div style="background-color: #eeeded; padding: 40px 0px;">
        <div class="container" >
          <div class="text-center">
            <h3>The Tiffany Experience</h3>
          </div>
          <div class="row" style="margin: 50px 0px;">
            <div class="col-lg-3 text-center">
              <div class="text-center">
              <span class="" style="font-size: 28px; font-weight:500;"><i class="fa-solid fa-box"></i></span>
              <h6 style="margin-bottom: 20px;">Complimentary Shipping & Returns</h6>
              <p style="margin-bottom: 20px; font-size:18px;">We offer complimentary shipping and return on all Tiffany orders</p>
              <a href="#" class="text-black">Learn More<span>></span></a>
            </div> 
            </div>
            <div class="col-lg-3  text-center">
              <div class="text-center">
                <span  style="font-size: 28px; font-weight:500;"><i class="fa-solid fa-box"></i></span>
                <h6 style="margin-bottom: 20px;">Tiffany At Your Service</h6>
                <p style="margin-bottom: 20px; font-size:18px;">Our client care experts are always here to help</p>
                <a href="#" class="text-black">Contact Us<span>></span></a>
              </div>  
            </div>
            <div class="col-lg-3  text-center">
              <div class="text-center">
                <span  style="font-size: 28px; font-weight:500;"><i class="fa-solid fa-box"></i></span>
                <h6 style="margin-bottom: 20px;">Book an Appoinment</h6>
                <p style="margin-bottom: 20px; font-size:18px;">We're happy to help with in-store or virtual appointments.</p>
                <a href="#" class="text-black">Book Now<span>></span></a>
              </div> 
            </div>
            <div class="col-lg-3  text-center">
              <div class="text-center">
                <span  style="font-size: 28px; font-weight:500;"><i class="fa-solid fa-box"></i></span>
                <h6 style="margin-bottom: 20px;">The Iconic Blue Box</h6>
                <p style="margin-bottom: 20px; font-size:18px;">Your Tiffany purchase comes wrapped in our Blue Box packaging</p>
                <a href="#" class="text-black">Explore All Gifts<span>></span></a>
              </div> 
            </div>
          </div>
        </div>
      </div>
        {{-- ..........................Shop_by_Category......................... --}}

    <!-- Swiper JS -->
   <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

    <script>
         
var swiper = new Swiper(".slide-content", {
    slidesPerView: 5,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 5,
        },
    },
  });

    </script>


</div>
@endsection