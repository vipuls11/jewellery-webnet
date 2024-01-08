@extends('layouts.app')
 @section('content')


<div class="container">
<div class="text-center"><h4>Shopping Cart</h4></div>

<div class="row">
<div class="col-lg-8 border p-2">
<div class="d-flex ">
  <div>
    <img src="{{asset('image/QuickLink_464x464_ChainNecklaces.webp')}}" alt="" style="width: 150px">  
</div>
<div class="px-2">
  <div>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>  
</div>
<div>
    <div class="counter">
        <span class="down border bg-black text-white px-2" onClick='decreaseCount(event, this)'>-</span>
        <input type="text" value="1" max="5" class="" style="width:30px;">
        <span class="up"  onClick='increaseCount(event, this)'>+</span>
      </div> 
</div>  
<div>
    <button>Add to bag</button>
    <button>Remove</button>
</div>
</div> 
<div class="text-center w-25">
    <p style="font-size:24px; font-weight:600;"><span>&#8377;</span>5000</p>
    </div> 
</div>
</div>
<div class="col-lg-4">
    
</div>
</div>
</div>

<script type="text/javascript">
    function increaseCount(a, b) {
      var input = b.previousElementSibling;
      var value = parseInt(input.value, 10); 
      if (value <=4) {
      value = isNaN(value)? 0 : value;
      value ++ ;
      input.value = value;
      }
    }
    function decreaseCount(a, b) {
      var input = b.nextElementSibling;
      var value = parseInt(input.value, 10); 
      if (value > 1) {
        value = isNaN(value)? 0 : value;
        value --;
        input.value = value;
      }
    }
  </script>


 @endsection