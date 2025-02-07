<div>
    @if(\Illuminate\Support\Facades\Session::has('shopping'))
                                    <h5>{{count(session('shopping'))}}
        @foreach(session('shopping') as $shopping)
            @php  $product = \App\Models\Product::where('id',$shopping['id'])->first(); @endphp
            <div class="media row">
                <div class="img-holder ml-1 mr-2 col-4">
                    <a  href="javascript:void(0)"><img src="/storage/product_img/{{$product->images[0]['path']}}" width="100px" class="align-self-center" alt="cartitem"></a>
                </div>
                <div class="media-body mt-auto mb-auto col-8">
                    <h5 class="name"><a href="javascript:void(0)">So Sad Today</a></h5>
                    <p class="category">light wear Lastest</p>
                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                    <a class="btn black-sm-btn"><i class="fas fa-eye"></i></a>
                </div>
            </div>
        @endforeach
    @endif
</div>
