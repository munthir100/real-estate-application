<div class="header header-light head-shadow">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{route('home')}}"><img class="logo" src="https://resido.thesky9.com/storage/general/logo.png" alt=""></a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    <li class=" menu-item-has-children   ">
                        <a href="{{route('home')}}">
                            Home
                        </a>


                    </li>
                    <li class=" menu-item-has-children   ">
                        <a href="{{route('properties')}}">
                            Properties
                        </a>


                    </li>
                    <li class="  ">
                        <a href="{{route('applications')}}">
                            Applications
                        </a>
                    </li>
                    @auth
                    @if(request()->user()->isBroker)
                    <li class="  ">
                        <a href="{{route('agents')}}">
                            Agents
                        </a>
                    </li>
                    @endif
                    @endauth
                    <li class=" menu-item-has-children    current-menu-item ">
                        <a href="{{route('home')}}">
                            Pages
                        </a>
                        <ul class="nav-dropdown nav-submenu">
                            <li class="  ">
                                <a href="{{route('brokers')}}">
                                    brokers
                                </a>
                            </li>
                            <li class="  ">
                                <a href="{{route('plans.index')}}">
                                    Pricing
                                </a>
                            </li>

                            <li class="  ">
                                <a href="{{route('contact.index')}}">
                                    Contact
                                </a>
                            </li>
                        </ul>

                    </li>
                    @guest
                    <li class="  ">
                        <a href="{{route('registerForm')}}">
                            Sign Up
                        </a>
                    </li>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li class="">
                            <a href="{{route('dashboard.properties.create')}}" class="text-success"><img src="{{asset('themes/resido/img/submit.svg')}}" width="20" alt="" class="mr-2"> Add Property</a>
                        </li>
                        <li class="add-listing">
                            <a href="{{route('login')}}">
                                <img src="{{asset('themes/resido/img/user-light.svg')}}" width="12" alt="" class="mr-2">Sign In</a>
                        </li>

                    </ul>
                    @else



                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li class="login-item">
                            <a href="{{route('dashboard.properties.create')}}" class="text-success"><img src="{{asset('themes/resido/img/submit.svg')}}" width="20" alt="" class="mr-2"> Add Property</a>
                        </li>
                        <li class="login-item">
                            <a href="{{route('dashboard.home')}}" rel="nofollow"><i class="fas fa-user"></i> <span>
                                    {{ substr(Auth::user()->first_name . ' ' . Auth::user()->last_name, 0, 21) }}

                                </span>
                            </a>
                        </li>
                        <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                    <form action="{{route('logout')}}" method="post" type="hidden" id="logout-form">
                        @csrf
                    </form>
                    @endguest

                </ul>







                <div class="clearfix"></div>
                <div class="d-sm-none mobile-menu">
                    <div class="mobile-menu-item mobile-wishlist">
                        <a href="https://resido.thesky9.com/en/wishlist"><i class="fas fa-heart"></i> Wishlist(<span class="wishlist-count">0</span>)</a>
                    </div>
                    <div class="mobile-menu-item currency-wrapper">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLinkMobile" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLinkMobile">
                                <li>
                                    <a class="dropdown-item" href="https://resido.thesky9.com/en/currency/switch/USD" class="active"><span>USD</span></a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://resido.thesky9.com/en/currency/switch/VND"><span>VND</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-item currency-wrapper">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
                                <img src="vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English">
                                English
                            </button>
                            <ul class="dropdown-menu language_bar_chooser ">
                                <li>
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('vendor/core/core/base/images/flags/vn.svg')}}" title="Tiếng Việt" width="16" alt="Tiếng Việt">
                                        <span>Tiếng Việt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>