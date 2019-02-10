@extends('master.layout')

@section('content')
<div class="container">
    <h2>Search result for "{{ $data['search_term'] }}"</h2>
    <div id="search">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2 col-md-offset-2 col-md-8 col-md-offset-2 search">

                {!! Form::open(['method' => 'get', 'url' => 'search', 'id' => 'search_form_inner', 'class' => 'search_form validate' ]) !!}
                <input type="text" class="form-control input_search" name="search" placeholder="Search...">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div id="search_result">
        @if($data['products'])
        <div class="category_product_list product_list_wrapper">
            <div class="row">
                @foreach($data['products'] as $p)
                <div class="col-md-3 col-sm-3">
                    <div class="item">
                        <div class="image">
                            <a href="product_detail.html"><img class="img-responsive" src="{{ $p->medias[0]->full_path }}" alt="{{ $p->title }}"></a>
                        </div>
                        <div class="caption">
                            <h4><a href="product_detail.html">{{ $p->title }}</a></h4>
                            <div class="description">{!! strlen($p->short_description) > 25 ? substr($p->short_description, 0, 25): $p->short_description !!}</div>
                            <p class="price">${{ $p->price->price }}</p>
                            <a href="{{ url('product/'.$p->slug)}}" class="btn btn-primary btn-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if($data['products']->links())
            <div id="pagination">
                {{ $data['products']->links() }}
            </div>
            @endif
        </div>
        @else
        <p>{{ $data['message'] }}</p>
        @endif
    </div>
</div>

@endsection
