<div>
  @extends('.layouts.app')
  @section('content')

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/.css')}}">
  <style>
    .slide-container {
      /* max-width: 1450px; */
      width: 100%;
      padding: 10px 0;
      margin: 40px 0px;
    }

    .slide-content {
      margin: 0 40px;
      overflow: hidden;
      width: 100%;
      /* border-radius: 25px; */
    }

    .card {
      width: 100%;
      margin-right: 0px;
      /* border-radius: 25px; */
      background-color: #FFF;
    }

    .image-content,
    .card-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      /* padding: 10px 14px; */
    }

    .image-content {
      position: relative;
      row-gap: 5px;
      /* padding: 25px 0; */
    }

    .card-image {
      position: relative;
      /* height: 100px;
  width: 100px; */
      /* border-radius: 50%; */
      /* background: #FFF; */
      /* padding: 3px; */
    }

    /* .card-image .card-img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid #4070F4;
} */
    .swiper-wrapper {
      /* width: 100%; */
      height: auto;
      /* z-index: 1;
    display: flex;
    transition-property: transform;
    box-sizing: content-box; */
    }

    .name {
      font-size: 18px;
      font-weight: 500;
      color: #333;
    }

    .description {
      font-size: 14px;
      color: #707070;
      text-align: center;
    }

    .button {
      border: none;
      font-size: 16px;
      color: #FFF;
      padding: 8px 16px;
      background-color: #4070F4;
      border-radius: 6px;
      margin: 14px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .button:hover {
      background: #265DF2;
    }

    .swiper-navBtn {
      color: #6E93f7;
      transition: color 0.3s ease;
    }

    .swiper-navBtn:hover {
      color: #4070F4;
    }

    .swiper-navBtn::before,
    .swiper-navBtn::after {
      font-size: 35px;
    }

    .swiper-button-next {
      right: 0;
    }

    .swiper-button-prev {
      left: 0;
    }

    .swiper-pagination-bullet {
      background-color: #6E93f7;
      opacity: 1;
    }

    .swiper-pagination-bullet-active {
      background-color: #4070F4;
    }



    .new_collection {
      position: absolute;
      top: 10px;
      left: 10px;
      padding: 2px 10px;
      background: #333;
      color: white;
      border-radius: 8px;
    }

    .favi {
      position: absolute;
      top: 10px;
      right: 12px;
      font-size: 24px;
    }

    /* .shop_btn{
        border: 2px solid black;
        padding: 8px 20px;
        font-size: 18px;
        margin-bottom: 20px;
        font-weight: 500;
        background-color: #FFF;
      } */

    /* .img_content{
        margin: 20px 0px;
      } */

    /* .shop_card{
        margin: 30px 0px; 
      } */

    /* .......................... */
    #love_your {
      position: relative;
      background-image: url('image/2023_GW-HP-FWMH-Desktop.webp');
      background-repeat: no-repeat;
      background-size: 100%;
      background-origin: padding-box;
      background-position: center;
      margin: 40px 0px;
      height: 500px;
    }


    #Source_your {
      position: relative;
      background-image: url('image/2021_Bloomgberg-HP_FWMH-Desktop2.webp');
      background-repeat: no-repeat;
      background-size: 100%;
      background-origin: padding-box;
      background-position: center;
      margin: 40px 0px;
      height: 500px;
    }

    .love_card {
      width: 25%;
      position: absolute;
      top: 35%;
      right: 100px;
    }

    .Source_card {
      width: 25%;
      position: absolute;
      top: 35%;
      left: 100px;
    }

    /* ...................... */

.love_mobile{

}
    @media screen and (max-width: 768px) {
      .slide-content {
        margin: 0 10px;
      }

      .swiper-navBtn {
        display: none;
      }

      .love_card {
        width: 50%;
        position: absolute;
        top: 35%;
        right: 10px;
      }
    }

    @media screen and (max-width: 414px) {
      .slide-content {
        margin: 0 10px;
      }

      .swiper-navBtn {
        display: none;
      }

   
    }
  </style>

  <div style="width: 95%; margin:auto;">

    {{-- ...........................Smile Pendant............... --}}
    <div class="shop_card ">
      <div class="row ">
        <div class="col-lg-8">
          <div class="row g-2">
            <div class="col-6">
              <img src="{{asset('image/tiffany-lockbangle-70158353_1044778_ED.webp')}}" alt="" class=""
                style="width:100%;">
            </div>
            <div class="col-6">
              <img src="{{asset('image/tiffany-lockbangle-70185601_1043570_ED_M.webp')}}" alt="" class=""
                style="width:100%;">
            </div>
            <div class="col-6">
              <img src="{{asset('image/tiffany-lockbangle-70425319_1044791_ED.webp')}}" alt="" class=""
                style="width:100%;">
            </div>
            <div class="col-6">
              <img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" class=""
                style="width:100%;">
            </div>
          </div>
          {{-- <div class="img_content text-center">
            <h4>Return to Tiffany™</h4>
            <p>Shop Now <span>></span></p>
          </div> --}}
        </div>
        <div class="col-lg-3">
          <div class=" " style="margin-top: 80px;">
            <p class="" style="font-size: 12px; "><span><a href="{{asset('home')}}"
                  class="text-black link-underline link-underline-opacity-0">Home</a></span> / <span><a
                  href="{{asset('necklaces_pendants')}}"
                  class="text-black link-underline link-underline-opacity-0">Designer
                  Jewellery</a></span> / <span><a href="{{asset('necklaces_pendants')}}"
                  class="text-black link-underline link-underline-opacity-0">Necklaces & Pendants</a></span>
            </p>
          </div>
          <div class="img_content">
            <h6><a href="" class="" style="color:black; font-weight:600;">Tiffany T</a></h6>
            <h3 style="font-family: Sterling Display A; font-size:28px; font-weight:500;">Smile Pendant</h3>
            <h5 style="font-family: Sterling Display A;">in Yellow Gold, Small</h5>
            <div class="d-flex" style="gap:20px; margin-bottom:15px;">
              <button type="button" class="border border-0 shadow-none" data-bs-toggle="modal"
                data-bs-target="#exampleModal"> <span><i class="fa-solid fa-gift"></i></span></button>
              <span><i class="fa-solid fa-heart"></i></span>
            </div>
          </div>

          <div class="d-flex justify-content-between border-top " style="padding-top: 15px;">
            <div>
              <p>Quantity</p>
            </div>
            <div><input type="number" value="2" min="1" max="5" /></div>
          </div>

          <div class="d-flex justify-content-between bg-black text-white py-4 px-2"
            style="font-weight: 600; margin-top:15px;">
            <div><span>Rup 5999</span></div>
            <div><a href="{{asset('shoppingbag')}}" style="text-decoration: none; color:white;">Add to Bag</a></div>
          </div>

          <div class="my-4">
            <p class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight" style="font-weight: 600;"><i class="fa-solid fa-location-dot"
                style="margin-right: 10px; font-size:20px;"></i><span class=""
                style="font-size:17px; text-decoration: underline;">Collection of Store</span></p>
          </div>

          <div>
            <h5>Description & Details</h5>
            <p>Simple and elegant, this curved pendant has a modern yet timeless aesthetic. The Tiffany T smile
              collection embodies the world's most universal gesture for happiness and the connections it creates. Layer
              this delicate pendant with other Tiffany pendants of varying sizes and lengths for a unique look.</p>

            <ul>
              <li>18k yellow gold</li>
              <li>Size small</li>
              <li>On a 16-18" adjustable chain</li>
              <li>Product number:60011679</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    {{-- ...........................Smile Pendant............... --}}



    {{-- ................................quantity.............................. --}}
    <div class="">
      {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">Toggle right offcanvas</button> --}}

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header text-right">
          {{-- <h5 id="offcanvasRightLabel">Offcanvas right</h5> --}}
          <button type="button" class="btn-close text-reset text-right" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div>
            <h2 class="" style="font-size:40px; font-weight:800; margin-bottom:34px;">Collect in store</h2>
            <p class="" style="text-decoration: underline; font-size:17px;">Tiffany T</p>
            <h4 class="" style="font-size:24px; font-weight:600; margin-bottom:34px;">Smile Pendant</h4>

            <div class="form-floating" style="border-bottom: 2px solid black; margin-bottom:50px;">
              <input type="email" class="form-control border-0 focus-ring focus-ring-light" id="floatingInput"
                placeholder="name@example.com">
              <label for="floatingInput">Recipient's Name</label>
            </div>
            <div class="" style="font-size:20px;">
              <label for="">Select Country :</label>
              <select name="" id="" class="" style="padding: 10px 10px; border: 0px solid black;">
                <option value="">United Kingdom</option>
                <option value="">France</option>
                <option value="">Germany</option>
                <option value="">Italy</option>
              </select>
            </div>

            <div class="text-center">
              <button class="w-75 py-2" style="margin:30px 0px; font-size:20px;">Search</button>
            </div>

            <div>
              <p>Need help? Contact Customer Service at <span><a href="" class="text-black" style="">0800 160
                    1837</a></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- ................................quantity.............................. --}}


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-8">
                <div class="row">
                  <div class="col-2">
                    <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist"
                      aria-orientation="vertical">
                      <a class="nav-link active" id="v-tabs-home-tab" data-bs-toggle="tab" href="#v-tabs-home"
                        role="tab" aria-controls="v-tabs-home" aria-selected="true">
                        <img src="{{asset('image/DAH_square.webp')}}" alt="" style="width: 50px; height: 50px;">
                      </a>
                      <a class="nav-link" id="v-tabs-profile-tab" data-bs-toggle="tab" href="#v-tabs-profile" role="tab"
                        aria-controls="v-tabs-profile" aria-selected="false">
                        <img src="{{asset('image/tiffany-tsmile-pendant-35189459_950626_ED.webp')}}" alt=""
                          style="width: 50px; height: 50px;">
                      </a>
                      {{-- <a class="nav-link" id="v-tabs-messages-tab" data-bs-toggle="tab" href="#v-tabs-messages"
                        role="tab" aria-controls="v-tabs-messages" aria-selected="false">Messages</a> --}}
                    </div>
                  </div>

                  <div class="col-lg-10">
                    <div class="tab-content" id="v-tabs-tabContent">
                      <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel"
                        aria-labelledby="v-tabs-home-tab">
                        <div>
                          <img src="{{asset('image/DAH_square.webp')}}" alt="" style="width:80% margin:auto;">
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel"
                        aria-labelledby="v-tabs-profile-tab">
                        <div>
                          <img src="{{asset('image/tiffany-tsmile-pendant-35189459_950626_ED.webp')}}" alt=""
                            style="width:80%; margin:auto;">
                        </div>
                      </div>
                      <div>
                        <p class="" style="font-size: 24px; font-weight:600; line-height:3.6rem;">
                          Dear ________________________ <br>
                          A little hint that this caught <br>
                          ______________________________'s eye. <br>
                          Love,
                          Your Friends at Tiffany.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 align-self-center">
                <h4 class="mb-3">Drop a Hint</h4>
                <form action="">
                  <div class="form-floating mb-5 " style="border-bottom: 2px solid black;">
                    <input type="email" class="form-control border-0 focus-ring focus-ring-light" id="floatingInput"
                      placeholder="name@example.com">
                    <label for="floatingInput">Recipient's Name</label>
                  </div>

                  <div class="form-floating mb-5" style="border-bottom: 2px solid black;">
                    <input type="text" class="form-control border-0 focus-ring focus-ring-light"
                      id="floatingPassword" placeholder="">
                    <label for="floatingPassword">Recipient's Email</label>
                  </div>

                  <div class="form-floating mb-5" style="border-bottom: 2px solid black;">
                    <input type="text" class="form-control border-0 focus-ring focus-ring-light"
                      id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Your Name</label>
                  </div>

                  <div class="form-floating mb-5" style="border-bottom: 2px solid black;">
                    <input type="text" class="form-control border-0 focus-ring focus-ring-light"
                      id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Your Email</label>
                  </div>

                  <button class="" style="padding: 8px 80px; font-size:17px; font-weight:400;">Send</button>
                </form>
              </div>
            </div>
          </div>
          {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

  {{-- ...........slider image ring................... --}}
  <div class="" style="margin: 40px 0px;">
    <h3 class="text-center">You May Also Like This</h3>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <span class="new_collection">New</span>
                <span class="favi"><i class="fa-regular fa-heart"></i></span>
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>

          </div>
          <div class="card swiper-slide">
            <div class="image-content">


              <div class="card-image">
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <a href=""><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt=""
                    class="card-img"></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      {{-- <div class="swiper-pagination"></div> --}}
    </div>
    {{-- ...........slider image ring................... --}}

    {{-- ....................................The tiffany Experience............................ --}}
    <div class="row mx-0" style="background-color: rgb(230,242,242); padding:60px 0px;">
      <div class="col-lg-6" style="display: grid; justify-content: center;align-content: center;">
        <div class="p-4" >
          <h4 class="" style="font-size:24px;">The Tifanny Experience</h4>
          <p class="w-75">When you choose Tiffany & Co., you become a valued member of the Tiffany family. Since 1837, we’ve prided ourselves on providing premium service, a tradition that continues to this day.</p>
        </div>
      </div>
      <div class="col-lg-6" style="background-color: rgb(230,242,242);">
        <div class="accordion accordion-flush" id="accordionFlushExample" style="background-color: rgb(230,242,242);">
          <div class="accordion-item" style="background-color: rgb(230,242,242);">
            <h2 class="accordion-header" style="background-color: rgb(230,242,242);">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: rgb(230,242,242); font-size:20px; font-weight:600;">
                Complimentary Shipping & Returns
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>We offer complimentary shipping and returns on all Tiffany & Co. orders.</p>
                <span><a href="">Learn More</a></span>
              </div>
            </div>
          </div>
          <div class="accordion-item" style="background-color: rgb(230,242,242);">
            <h2 class="accordion-header" style="background-color: rgb(230,242,242);">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: rgb(230,242,242); font-size:20px; font-weight:600;">
                At Your Service
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>
                  Experience personalised service tailored to your every need by Tiffany & Co. Client Advisors. From choosing an engagement ring or gift to providing in-store or virtual appointments, we’re always here to help.
                </p>
                <span><a href="">Contact Us</a></span>
              </div>
            </div>
          </div>
          <div class="accordion-item" style="background-color: rgb(230,242,242);">
            <h2 class="accordion-header" style="background-color: rgb(230,242,242);">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: rgb(230,242,242); font-size:20px; font-weight:600;">
                Blue Box
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><p>Every Tiffany & Co. purchase will arrive wrapped in a Tiffany Blue Box®. Though this famed packaging dates back to 1886, today all Blue Boxes and bags are made with paper from sustainable sources and recycled materials.</p>
                <span><a href="">Contact Us</a></span>
              </div>
            </div>
          </div>
          <div class="accordion-item" style="background-color: rgb(230,242,242);">
            <h2 class="accordion-header" style="background-color: rgb(230,242,242);">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour" style="background-color: rgb(230,242,242); font-size:20px; font-weight:600;">
                Responsibly Sourced
              </button>
            </h2>
            <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><p>For more than two decades, wehave  made dedicated efforts to responsibly source the precious materials we use in our journey.</p>
                <span><a href="">Learn More</a></span>
              </div>
            </div>
          </div>
          <div class="accordion-item" style="background-color: rgb(230,242,242);">
            <h2 class="accordion-header" style="background-color: rgb(230,242,242);">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive" style="background-color: rgb(230,242,242); font-size:20px; font-weight:600;">
                Size Guide
              </button>
            </h2>
            <div id="flush-collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><p>Determinde the correct bracelet, neacklace or ring size with me tiffany & Co.size guide.</p>
                <span><a href="">Contact Us</a></span>
              </div>
            </div>
          </div>
          <div class="accordion-item" style="background-color: rgb(230,242,242);">
            <h2 class="accordion-header" style="background-color: rgb(230,242,242);">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix" style="background-color: rgb(230,242,242); font-size:20px; font-weight:600;">
                Visit a Store
              </button>
            </h2>
            <div id="flush-collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><p>Visit a Tiffany & Co.store to discover the latest designs, iconic, collections and more.</p>
                <span><a href="">Find Your Nearest store</a></span>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    {{-- ....................................The tiffany Experience............................ --}}

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
      <div id="" style="" class="love_mobile d-block d-lg-none">
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

 

  @endsection
</div>