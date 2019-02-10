<section id="header_top">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <ul>
                    <li>Welcome to Makaju Store |</li>
                    <li>Phone: 3434849944</li>
                </ul>
            </div>
            <div class="col-sm-8 col-md-8 right">
                <ul>
                    <li>Email: info@makajustore.com |</li>
                    <li><a href="{{ route('contact') }}">Contact |</a></li>
                    @if(Auth::user() && Auth::user()->status == '1' && Auth::user()->group_id =='2')
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">Hi ! {{ Auth::user()->username }}</a></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('user.profile', Auth::user()->username)}}">Profile</a>
                            </li>
                            <li><a href="{{ route('user.logout') }}">Sign out</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li><a href="{{ route('user.login') }}">Login / Register <i class="fa fa-sign-in"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>

<section  id="header_middle">
    <div class="container">
        <div class="row">
            <div id="logo">
                <div class="col-sm-5 col-md-3">
                    <a href="{{ route('home') }}"><img src="{{ URL::asset('images/logo.png')}}" alt="logo"></a>
                </div>
            </div>
            <div id="search">
                <div class="col-sm-4 col-md-6 search">
                    {!! Form::open(['method' => 'get', 'url' => 'search', 'id' => 'search_form', 'class' => 'search_form validate' ]) !!}
                    <input type="text" class="form-control input_search" name="search" placeholder="Search...">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    {!! Form::close() !!}
                </div>
            </div>
            <div id="cart">
                <div class="col-sm-3 col-md-3">
                    <p> @if(session()->has('cart'))
                        <a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i><span>{{ session()->get('cart')->totalQty }} Products</span></a>
                        @else
                        <a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i><span>0 Product</span></a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="header">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button data-target="#navbar-collapse-main" data-toggle="collapse" class="navbar-toggle collapsed"  type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav">
                    <li class=""><a href="{{ URL('category/watches') }}">All</a></li>
                    <li><a href="{{ URL('category/tissot') }}">Tissot</a></li>
                    <li><a href="{{ URL('category/omega') }}">Omega</a></li>
                    <li><a href="{{ URL('category/rolex') }}">Rolex</a></li>
                    <li><a href="{{ URL('category/rado') }}">Rado</a></li>
                    <li><a href="{{ URL('category/gucci') }}">Gucci</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</section>
<div class="row">
    <div class="container">
        @include('frontend.includes.message')
    </div>
</div>