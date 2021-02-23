<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::to('/')}}/images/logo.png" alt="logo"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
        
            <form action="/search" method="GET" role="search" class="form-inline w-100">
                <input type="text" class="form-control mr-sm-2 w-75" name="search" id="inlineFormInputName" placeholder="Seach Book Name, Author, or ISBN">
                <button type="submit" class="btn btn-primary my-2 my-sm-0"><span class="fa fa-search"></span></button>
            </form>

            <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        @if (Auth::check())
                        <div class="cart my-2 my-lg-0">
                            <a class="nav-link" href="{{URL::to('/')}}/wishes">
                                <span><i class="fa fa-heart" aria-hidden="true" title="Wishes"></i></span>
                                <span class="quntity">{{Auth::user()->wishes()->count()}}</span>
                            </a>
                        </div>
                        @else
                        <a class="nav-link" >
                            <span><i class="fa fa-heart" aria-hidden="true" title="Wishes"></i></span>
                        </a>
                        @endif     
                    </li>

                    <li class="nav-item">
                        @if (Auth::check())
                        <div class="cart my-2 my-lg-0">
                            <a class="nav-link" href="{{URL::to('/')}}/products">
                                <span><i class="fa fa-shopping-cart " aria-hidden="true" title="Products"></i></span>
                                <span class="quntity">{{Auth::user()->products()->count()}}</span>
                            </a>
                        </div>
                        @else
                        <a class="nav-link" >
                            <span><i class="fa fa-shopping-cart" aria-hidden="true" title="Products"></i></span>
                        </a>
                        @endif     
                    </li>

                    <li class="nav-item">
                        @if (Auth::check())
                        <div class="cart my-2 my-lg-0">
                            <a class="nav-link" href="{{URL::to('/')}}/orders">
                                <span><i class="fa fa-file" aria-hidden="true" title="Orders"></i></span>
                                <span class="quntity">{{Auth::user()->orders()->count()}}</span>
                            </a>
                        </div>
                        @else
                        <a class="nav-link" >
                            <span><i class="fa fa-file" aria-hidden="true" title="Orders"></i></span>
                        </a>
                        @endif     
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/')}}/books">Browse</a>
                    </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <form method="POST" action="{{URL::to('/')}}/logout">
                        @csrf
                            <button class="btn text-muted">logout</button>
                        </form>                            
                    </li>
                @else
                    <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/')}}/login">Login</a>
                    </li>
                @endif 
                    @if (Auth::check())
                    <li class="nav-item dropdown dropleft">
                        <a class="nav-link dropdown-toggle" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="{{URL::to('/')}}/users">My Information</a>
                            <a class="dropdown-item" href="{{URL::to('/')}}/addresses">My Addresses</a>
                            <a class="dropdown-item" href="{{URL::to('/')}}/wishes">My Wishes</a>
                            <a class="dropdown-item" href="#">My Orders</a>
                            <a class="dropdown-item" href="{{URL::to('/')}}/products">My Sellers</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/')}}/register">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
