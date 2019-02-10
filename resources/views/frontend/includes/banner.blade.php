<section id="banner">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach($data['banners'] as $banner)
            <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($data['banners'] as $banner)

            <div class="item {{ $loop->first ? ' active' : '' }}" >
                <img class="img-responsive" src="{{ $banner->medias[0]->full_path }}" alt="{{ $banner->title }}">
                <div class="carousel-caption">
                    <h3>{{ $banner->title }}</h3>
                    <p>{{ $banner->description }}</p>
                    @if($banner->link !='')
                    <a class="read_more" href="{{ $banner->link }}">{{ $banner->link_text }}</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> 
</section>