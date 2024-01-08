<div>
    @extends('.layouts.app')
    @section('content')
    <div class="" style="width:95%; margin:auto;">
        <div style="margin-top:50px; margin-bottom:20px;">
            <a href="" class="text-black" style=" text-decoration: none;"><span>
                    <</span>Continue Browsing</a>
        </div>
        {{-- ................................................. --}}
        <div class="row">
            <div class="col-lg-8">
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

            <div class="col-lg-4 ">
                <div class="border p-4">
                    <h4 class="" style="margin: 20px 0px;">Order Summary</h4>
                    <div class="d-flex justify-content-between" style="margin: 20px 0px; ">
                        <span>Subtotal</span>
                        <span>Rs3,900.00</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Free Standard Delivery (3 working days) — Rs0</span>
                        <span>Rs0.00</span>
                    </div>
                    <div class="border-bottom" style="margin-bottom: 10px;">
                        <div class="accordion accordion-flush" id="accordionFlushExample" class="padding:0px 0px;">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Edit
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Free Standard Delivery (3 working days) — £0
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Free Next Day Delivery (Order by 1pm Mon - Fri) — £0
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Scheduled Delivery (within 7 days, including Next Day) £0
                                            </label>
                                            <span style="font-size: 14px;">Eligible Greater London postcodes can select
                                                a preferred 1-hour timeslot with a concierge delivery service.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>Total</h5>
                            <p>(Prices include VAT.)</p>
                        </div>
                        <div>
                            <h4>Rs 3,900.00</h4>
                        </div>
                    </div>

                    <div class="" style="margin: 20px 0px;">
                        <button class="w-100 py-2">Checkout</button>
                    </div>

                    <div style="width:300px; margin:auto;" class="text-center">
                        <p style="font-size: 14px;">Enjoy complimentary delivery and returns on your order.</p>
                    </div>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed d-flex justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Neend Help?
                                <span>learn More</span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                               <h5> At Your Service</h5>

                                We invite you to call us or provide your information so we can contact you.

                                Call us at <h5>0800 160 1837</h5>.

                                Our Return Policy

                                Purchased items may be returned for exchange or refund, provided they are returned
                                within 30 days to the distribution centre in the original condition and accompanied by
                                the sales receipt. Retail stores cannot offer refunds or replacements for products
                                purchased online.

                                Secured Transactions

                                We use secure encryption technologies when transferring and receiving customer
                                information.
                            </div>
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

    @endsection
</div>