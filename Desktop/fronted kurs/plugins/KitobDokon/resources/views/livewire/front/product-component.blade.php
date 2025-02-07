<div>
    @foreach($products as $product)
        <div class="cbp-item {{$product->category->name['uz']}}">
            <a class="portfolio-circle-cart" style="cursor: pointer;" wire:click="shoppingCard({{$product->id}})">
                <i class="fa fa-shopping-cart"></i>
            </a>
            <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                <div class="item"><a href="book-shop/img/book-1.jpg" class="cbp-caption" data-fancybox="gallery1" data-title="Book 1"><img style="width: 400px; border-radius: 20px; height: 500px;" src="/storage/product_img/{{$product->images[0]['path']}}" alt="Book 1"></a></div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title" style="text-transform: capitalize">{{$product->name['uz']}}</a></div>
                </div>
                <div class="col-12 text-center">
                    <div class="cbp-l-grid-blog-desc portfolio-des">{{$product->sale_price}} UZS</div>
                </div>
            </div>
        </div>
    @endforeach

</div>
