<div>
  @extends('.layouts.app')
  @section('content')
  <div class="" style="width:95%; margin:auto;">
      {{-- <div style="margin-top:50px; margin-bottom:20px;">
          <a href="" class="text-black" style=" text-decoration: none;"><span>
                  <</span>Continue Browsing</a>
      </div> --}}
      {{-- ................................................. --}}
      <div class="row" style="margin: 20px 0px;">
          <div class="col-8">
              <div class="d-flex align-items-center justify-content-between ">
                  <div>
                      <h2>Shopping Bag</h2>
                  </div>

                  <div>
                      <span class="" style="margin-right: 10px"><i class="fa-solid fa-print"></i></span>
                      <span><i class="fa-regular fa-envelope"></i></span>
                  </div>
              </div>

              <div class="" style="margin-top: 10px;">
                  <label for="">Check for collect in store availability :</label>
                  <select value="" style="border:none">
                      <option name="" id="">option a store</option>
                      <option name="" id="">London-Convent Garden</option>
                      <option name="" id="">London-Old Bond Street</option>
                      <option name="" id="">London-Royal Ex</option>
                      <option name="" id=""></option>
                  </select>
              </div>

              <div class="border-top border-bottom">
                  <div class="d-flex" style="margin: 40px 0px;">
                      <div><img src="{{asset('image/tiffany-tsmile-pendant-35189459_950626_ED.webp')}}" alt=""
                              style="width:200px; height:200px;"></div>
                      <div class=" w-100">
                          <div class="d-flex justify-content-between ">
                              <h5>Tiffany T
                                  Smile Pendant</h5>

                              <span><i class="fa-solid fa-trash"></i></span>
                          </div>
                          <div class="d-flex justify-content-between align-items-center" style="margin:20px; 0px;">
                              <div class="" style="margin-top: 10px; ">
                                  <label for="">Qty</label><br>
                                  <select value="" style="border:none width:100px">
                                      <option name="" id="">1</option>
                                      <option name="" id="">2</option>
                                      <option name="" id="">3</option>
                                      <option name="" id="">4</option>
                                      <option name="" id="">5</option>
                                  </select>
                              </div>
                              <div><span>Rs 2,295.00</span></div>
                          </div>
                          <div>
                              <p>Save a later</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-4 ">
              <div class="border p-4 ">
                 <h4>The Tiffany Experience</h4>
              <div class="py-3">
                <div class="d-flex align-items-center justify-content-between" style="font-size: 20px; ">
                  <div class="d-flex align-items-center" style="gap: 10px;">
                    <span><i class="fa-regular fa-bell" ></i></span>
                   <h6 data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar1" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="cursor: pointer;">Contact Us</h6>
                  </div>
                    <div data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar1" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="cursor: pointer;">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
              </div>
              <div class="py-3">
                <div class="d-flex align-items-center justify-content-between" style="font-size: 20px;">
                  <div class="d-flex align-items-center" style="gap: 10px;">
                    <span><i class="fas fa-truck"></i></span>
                   <h6 data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="cursor: pointer;">Shipping & Returns</h6>
                  </div>
                    <div data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="cursor: pointer;">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
              </div>
              <div class="py-3">
                <div class="d-flex align-items-center justify-content-between" style="font-size: 20px;">
                  <div class="d-flex align-items-center" style="gap: 10px;">
                    <span><i class="fas fa-dollar-sign"></i></span>
                   <h6 data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar3" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="cursor: pointer;">Accepted Payment & Secure Transactions</h6>
                  </div>
                    <div data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar3" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="cursor: pointer;">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
              </div>
              <div class="py-3">
                <div class="d-flex align-items-center justify-content-between" style="font-size: 20px;">
                  <div class="d-flex align-items-center" style="gap: 10px;">
                    <span><i class="far fa-gem"></i></span>
                   <h6 data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar4" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="cursor: pointer;">Gemstone Care and Enhancement</h6>
                  </div>
                    <div data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar4" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="cursor: pointer;">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
              </div>
              <div>
                  
              </div>
          </div>
          <div>

          </div>
      </div>
  </div>





 
  
{{-- .......................modal contact Us....................... --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar1" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h6 class="" style="font-size: 14px; font-weight:700;">At Your Services</h6>
    <p class="py-2" style="font-size: 14px;">We invite you to call us for assistance or provide your information so we can contact you.</p>
    <p style="font-size: 14px;">Call us at <span><a href="">800 843 3269</a></span>.</p>
  </div>
</div>
{{-- .......................modal contact Us....................... --}}

{{-- .......................modal Shipping & Returns....................... --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h6 class="" style="font-size: 14px; font-weight:700;">At Your Services2</h6>
    <p class="py-2" style="font-size: 14px;">We invite you to call us for assistance or provide your information so we can contact you.</p>
    <p style="font-size: 14px;">Call us at <span><a href="">800 843 3269</a></span>.</p>
  </div>
</div>
{{-- .......................modal Shipping & Returns....................... --}}


{{-- .......................modal Accepted Payment & Secure Transactions....................... --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar3" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h6 class="" style="font-size: 14px; font-weight:700;">At Your Services3</h6>
    <p class="py-2" style="font-size: 14px;">We invite you to call us for assistance or provide your information so we can contact you.</p>
    <p style="font-size: 14px;">Call us at <span><a href="">800 843 3269</a></span>.</p>
  </div>
</div>
{{-- .......................modal Accepted Payment & Secure Transactions....................... --}}


{{-- .......................modal Gemstone Care and Enhancement....................... --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar4" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h6 class="" style="font-size: 14px; font-weight:700;">At Your Services4</h6>
    <p class="py-2" style="font-size: 14px;">We invite you to call us for assistance or provide your information so we can contact you.</p>
    <p style="font-size: 14px;">Call us at <span><a href="">800 843 3269</a></span>.</p>
  </div>
</div>
{{-- .......................modal Gemstone Care and Enhancement...................... --}}
</div>

  @endsection
</div>