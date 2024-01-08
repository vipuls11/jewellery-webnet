<div>
    @extends('.layouts.app')
    @section('content')
<div class="container">
    <div class="my-4">
        <h3 class="text-center">Wishlists</h3>
    </div>

    <table class="w-100 mb-2">
        <tbody >
            <tr class="border">
                <th class="py-2"></th>
                <th class="py-2">Product Name</th>
                <th class="py-2">Unit Price</th>
                <th class="py-2">Stock Status</th>
                <th class="py-2">Add to Cart</th>
            </tr>
            <tr class="border">
                <td class="px-2"><button style="border-style: none;"><i class="fa-solid fa-trash"></i></button></td>
                <td><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" style="width: 80px; height:80px;"></td>
                <td><span><del>&#8377; 5000</del></span> <span>&#8377; 300</span></td>
                <td>In Stock </td>
                <td>
                    <p class="" style="font-size: 14px;" style="margin: 0px; padding: 0px;">Lorem ipsum dolor sit amet.</p>
                   <a href="{{asset('shoppingbag')}}"><button class="px-3">Add to Cart</button></a> </td>
            </tr>

            <tr class="border">
                <td class="px-2"><button style="border-style: none;"><i class="fa-solid fa-trash"></i></button></td>
                <td><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" style="width: 80px; height:80px;"></td>
                <td><span><del>&#8377; 5000</del></span> <span>&#8377; 300</span></td>
                <td>In Stock </td>
                <td>
                    <p class="" style="font-size: 14px;" style="margin: 0px; padding: 0px;">Lorem ipsum dolor sit amet.</p>
                    <button class="px-3">Add to Cart</button></td>
            </tr>

            <tr class="border">
                <td class="px-2"><button style="border-style: none;"><i class="fa-solid fa-trash"></i></button></td>
                <td><img src="{{asset('image/tiffany-lockring-71855244_1061447_ED_M.webp')}}" alt="" style="width: 80px; height:80px;"></td>
                <td><span><del>&#8377; 5000</del></span> <span>&#8377; 300</span></td>
                <td>In Stock </td>
                <td>
                    <p class="" style="font-size: 14px;" style="margin: 0px; padding: 0px;">Lorem ipsum dolor sit amet.</p>
                    <button class="px-3">Add to Cart</button></td>
            </tr>
        </tbody>
        
    </table>
</div>


    @endsection
</div>