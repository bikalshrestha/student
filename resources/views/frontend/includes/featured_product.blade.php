<section id="latest_product" class="latest_product">
    <div class="container">
        <h2 class="title">Featured Products</h2>
        <div class="owl-carousel owl-theme owl-carousel-latest">
            @foreach($data['featured_products'] as $p)
            <div class="item">
                <div class="image">
                    <a href="{{ URL('product/'.$p->slug)}}"><img class="img-responsive" src="{{ $p->medias[0]->full_path }}" alt="{{ $p->title }}"></a>
                </div>
                <div class="caption">
                    <h4><a href="{{ URL('product/'.$p->slug)}}">{{ $p->title }}</a></h4>
                    <div class="description">{!! strlen($p->short_description) > 25 ? substr($p->short_description, 0, 25): $p->short_description !!}</div>
                    <p class="price">${{ $p->price->price }}</p>
                    <a href="{{ URL('product/'.$p->slug)}}" class="btn btn-primary btn-cart">Buy Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>