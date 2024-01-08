@extends('layouts.app')
 @section('content')


  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/necklaces_pendants.css')}}">





    <div class="" style="width: 95%; margin:auto;">
      {{-- ..........................Shop_by_Category......................... --}}
      <div>
        <div class="text-center" style="padding: 24px 0px; ">
          <h4>Necklaces & Pendants</h4>
          {{-- <p>Brilliant design and unparalleled craftsmanship.</p> --}}
        </div>
        <div class="row justify-content-center" style="width: 70%; margin:auto">
          <div class="col text-center">
            <div class="text-center">
              <img src="{{asset('image/QuickLink_464x464_ChainNecklaces.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Earrings</p>
          </div>
          <div class="col text-center">
            <div class=" text-center">
              <img src="{{asset('image/QuickLink_464x464_EverydayDiaNecklaces.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Bracelets</p>
          </div>
          <div class="col text-center">
            <div class="text-center">
              <img src="{{asset('image/QuickLink_464x464_LayeringNecklaces.webp')}}" alt="" style="width: 200px">
            </div>
            <p> Engagement Rings</p>
          </div>
          <div class="col text-center">
            <div class="text-center">
              <img src="{{asset('image/QuickLink_464x464_StatementNecklaces.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Home</p>
          </div>
        </div>
      </div>
      {{-- ..........................Shop_by_Category......................... --}}
      {{-- .............necklaces to home......................... --}}
      <div class="">
        <p class="" style="font-size: 12px; padding: 14px;"><span><a href="{{asset('home')}}"
              class="text-black link-underline link-underline-opacity-0">Home</a></span> / <span><a
              href="{{asset('necklaces_pendants')}}" class="text-black link-underline link-underline-opacity-0">Designer
              Jewellery</a></span></p>
      </div>
      {{-- .............necklaces to home......................... --}}

      {{-- .....................filter menu deskpot............................... --}}
      <div class="d-lg-block d-none">
      <div class="d-flex justify-content-between" style="margin: 10px 0px;">
        <div>
          <div class="filter d-lg-flex">
            <div class="" style="">
              <p>Fliter :</p>
            </div>
            <div class="">
              <div class="dropdown">
                <button class="bg-white dropdown-toggle" style="outline-style:none; border-style: none;" type="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Designers & Collections
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Tiffany Lock
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Tiffany T
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Tiffany HardWear
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Tiffany Knot
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Return to Tiffany
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Tiffancy Victoria
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Tiffany Keys
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Elsa Peretti
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Paloma Picasso
                        </label>
                    </a></li>
                </ul>
              </div>
            </div>

            <div class="">
              <div class="dropdown">
                <button class="bg-white dropdown-toggle" type="button" style="outline-style:none; border-style: none;"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Materials
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Gold
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Sterling Silver
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Rose Gold
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          White Gold
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Platinum
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Crystal
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Lacquer
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Silk
                        </label>
                    </a></li>
                </ul>
              </div>
            </div>
            <div class="">
              <div class="dropdown">
                <button class="bg-white dropdown-toggle" type="button" style="outline-style:none; border-style: none;"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Gemstone
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Diamonds
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Coloured Diamonds
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Pearls
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Rubies
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Tanzanites
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Sapphires
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Aquamarines
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Turquoise
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Onyx
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Opal
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Colored Gemstones
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Yellow Diamonds
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          No Gemstones
                        </label>
                    </a></li>
                </ul>
              </div>
            </div>
            <div class="">
              <div class="dropdown">
                <button class="bg-white dropdown-toggle" type="button" style="outline-style:none; border-style: none;"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Price
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          under - 500
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          500 - 1000
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          1000-2000
                        </label>
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          2000 - 3000
                        </label>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <select class="form-select bg-white ring-focus ring-focus-none"
            style=" outline-style:none; border-style: none;" aria-label="Default select example">
            <option selected>Recommendations</option>
            <option value="1">New to Tiffany</option>
            <option value="2">Price: high to low</option>
            <option value="3">Price: low to high</option>
          </select>
        </div>
      </div>
    </div>
       {{-- .....................filter menu deskpot............................... --}}

        {{-- .....................filter menu Responsive............................... --}}
        <div class="d-block d-lg-none sticky-top">
          <div class="row border-0" style="margin:10px 0;">
            <div class="col">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="border-2 py-1 bg-white" style="width: 100%; font-size:20px; font-weight:500;" >Fliter By</button>
            </div>
            <div class="col">
              <select name="" id="" style="width: 100%; font-size:20px; font-weight:500;" class="border-2 py-1 text-center">
                <option value="" selected>Sort By</option> 
              <option value="">New to Tiffany</option>  
              <option value="">Price: high to low</option>  
              <option value="">Price: low to high</option>  
              {{-- <option value="">4</option>  
              <option value="">5</option>   --}}
            </select>
          </div>
          </div>

      
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="dropdown">
          <button class="bg-white dropdown-toggle" style="outline-style:none; border-style: none;" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Designers & Collections
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Lock
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany T
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany HardWear
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Knot
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Return to Tiffany
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffancy Victoria
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Keys
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Elsa Peretti
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Paloma Picasso
                  </label>
              </a></li>
          </ul>
        </div>

        <div class="dropdown">
          <button class="bg-white dropdown-toggle" style="outline-style:none; border-style: none;" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Designers & Collections
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Lock
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany T
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany HardWear
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Knot
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Return to Tiffany
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffancy Victoria
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Keys
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Elsa Peretti
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Paloma Picasso
                  </label>
              </a></li>
          </ul>
        </div>

        <div class="dropdown">
          <button class="bg-white dropdown-toggle" style="outline-style:none; border-style: none;" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Designers & Collections
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Lock
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany T
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany HardWear
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Knot
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Return to Tiffany
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffancy Victoria
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Tiffany Keys
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Elsa Peretti
                  </label>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Paloma Picasso
                  </label>
              </a></li>
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
       {{-- .....................filter menu Responsive............................... --}}

      {{-- ...............product list number.................... --}}
      <div>
        <p>showing <span>1 - 515</span> of <span>1 - 515</span></p>
      </div>
      {{-- ...............product list number.................... --}}

      {{-- ..............................product design......................... --}}
      {{-- @php
      $collection=0;
      $collection= array("Volvo", "BMW", "Toyota","jhjdf");
      $category= array("Volvo", "BMW", "Toyota");
      @endphp --}}
      <div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          {{-- @foreach ($collection as $item) --}}
          <div class="col">
            <div class="card">
              <a href="{{asset('singleproduct')}}">
                <div>
                  <div class="productwrapper  transition delay-700 duration-300 ease-in-out">
                    <div><img src="{{asset('image/return-to-tiffanyheart-tag-pendant-72975138_1056263_ED.webp')}}"
                        alt="" style="width: 100%;"> </div>
                    <div><img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" alt=""
                        style="width: 100%;"> </div>
                    <div><img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" alt=""
                        style="width: 100%;"> </div>
                    <div><img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" alt=""
                        style="width: 100%;"> </div>
                  </div>
                  <div class="card_next_prev ">
                    <span id="next" style="cursor: pointer; color:black;"><</span>

                        <span id="prev" style="cursor: pointer; color:black;">></span>
                  </div>
                </div>
              </a>
              <span class="card_collection">New</span>
              {{-- <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top"
                alt="..."> --}}
              <div class="card-body">
                {{-- <h5 class="card-title">Card title</h5> --}}
                <p class="card-text">Return to Tiffany™ Heart Tag Pendant in Sterling Silver and Rose Gold, Small</p>
              </div>
              <div class="card-body d-flex justify-content-between">
                <h5><span>Rs</span>5000</h5>
                <div class="d-flex" style="gap:30px; font-size:24px;">
                  <span><i class="fa-solid fa-bag-shopping"></i></span>
                  <span><i class="fa-solid fa-heart"></i></span>
                  {{-- <span></span> --}}
                </div>
              </div>
            </div>
          </div>
          {{-- @endforeach --}}
          <div class="col">
            <div class="card">

              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6" style="">
            <div class="card">
              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top " alt="..."
                style="height: 470px;">
              <div class="">

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>


          <div class="col">
            <div class="card">
              <img src="{{asset('image/tiffany-lockpendant-72791290_1060178_ED.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
{{-- ..............................product design......................... --}}

      
      {{-- ................................pagination......................... --}}
      <div class="" style="margin: 40px;">
        <nav aria-label="Page navigation ">
          <ul class="pagination justify-content-center border border-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      {{-- ................................pagination......................... --}}
      {{-- ................................button......................... --}}
      <div class="text-center">
        <a href=""><button class="" style="padding: 8px 40px; font-size:20px;">View More</button></a>
      </div>
      {{-- ................................button......................... --}}

      {{-- ..........................Shop_by_Category......................... --}}
      <div>
        <div class="text-center" style="padding: 24px 0px; ">
          <h4>Shop by Category</h4>
          {{-- <p>Brilliant design and unparalleled craftsmanship.</p> --}}
        </div>
        <div class="row justify-content-center" style="width: 55%; margin:auto">
          <div class="col text-center">
            <div class="text-center">
              <img src="{{asset('image/Bracelet.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Earrings</p>
          </div>
          <div class="col text-center">
            <div class=" text-center">
              <img src="{{asset('image/Earrings.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Bracelets</p>
          </div>
          <div class="col text-center">
            <div class="text-center">
              <img src="{{asset('image/Necklace_op3.webp')}}" alt="" style="width: 200px">
            </div>
            <p> Engagement Rings</p>
          </div>
          {{-- <div class="col text-center">
            <div class="text-center">
              <img src="{{asset('image/EngagementRings.webp')}}" alt="" style="width: 200px">
            </div>
            <p>Home</p>
          </div> --}}
        </div>
        {{-- ..........................Shop_by_Category......................... --}}
      </div>

      <div style="margin-top: 40px;">
        <h4 style="margin-bottom: 20px;">Necklaces and Pendants</h4>
        <p class="" style="line-height: 2;">The long and the short of it is, Tiffany & Co. necklaces are the only
          finishing touch you need. <br>
          Keep your style simple with striking essentials you’ll wear every day, like a diamond pendant or simple chain
          necklace that goes with everything. Add a long necklace or colourful gemstones the next time you want simple
          drama without trying. When you want to go all out, wear a mix of metals, lengths and styles for a look that’s
          sure to strike up a conversation. From bold link chains to minimalist pendants, when it comes to Tiffany & Co.
          necklaces, one is never enough.
        </p>
        <p class="" style="display:flex; gap:50px; font-size:20px; font-weight:500;"><a href="" class=""
            style="color:black;">Shop Earings <span>></span></a> <a href="" style="color:black;">Shop Braclets
            <span>></span></a> <a href="" style="color:black;">Shop Rings <span>></span></a></p>
      </div>
    </div>



<script>
  // ------------next pre jq--------------------

  $(document).ready(function() {
            $(".productwrapper div").each(function(e) {
                if (e != 0)
                    $(this).hide();
            });

            $("#next").click(function() {
                if ($(".productwrapper div:visible").next().length != 0)
                    $(".productwrapper div:visible").next().show().prev().hide();
                else {
                    $(".productwrapper div:visible").hide();
                    $(".productwrapper div:first").show();
                }
                return false;
            });

            $("#prev").click(function() {
                if ($(".productwrapper div:visible").prev().length != 0)
                    $(".productwrapper div:visible").prev().show().next().hide();
                else {
                    $(".productwrapper div:visible").hide();
                    $(".productwrapper div:last").show();
                }
                return false;
            });
        });
</script>
@endsection
