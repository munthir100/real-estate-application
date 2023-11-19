<div class="header header-light head-shadow">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{route('home')}}"><img class="logo" src="{{asset('themes/resido/img/logo_navigation.png')}}" alt=""></a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    <li class=" menu-item-has-children   ">
                        <a href="{{route('properties')}}">
                            {{__('Properties')}}
                        </a>
                    </li>

                    <li class="  ">
                        <a href="{{route('brokers')}}">
                            {{__('Brokers')}}
                        </a>
                    </li>
                    <li class="  ">
                        <a href="{{route('plans.index')}}">
                            {{__('Pricing')}}
                        </a>
                    </li>


                    @guest
                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li class="">
                            <a href="{{route('dashboard.properties.create')}}" class="text-success"><img src="{{asset('themes/resido/img/submit.svg')}}" width="20" alt="" class="mr-2"> {{__('Add Property')}}</a>
                        </li>

                        <li class="">
                            <a href="{{route('dashboard.applications.create')}}" class="text-secondary"><img src="{{asset('themes/resido/img/type.svg')}}" width="20" alt="" class="mr-2"> {{__('Request Property')}}</a>
                        </li>

                        <li class="add-listing">
                            <a href="{{route('login')}}">
                                <img src="{{asset('themes/resido/img/user-light.svg')}}" width="12" alt="" class="mr-2"> {{__('Sign In')}}
                            </a>
                        </li>

                    </ul>
                    @else



                    <ul class="nav-menu nav-menu-social align-to-right">
                        @if(auth()->user()->is_admin)
                        <li class="login-item">
                            <a href="{{route('admin.properties.index')}}" class="text-success"> {{__('Dashboard')}}</a>
                        </li>
                        @else
                        <li class="login-item">
                            <a href="{{route('dashboard.properties.create')}}" class="text-success"><img src="{{asset('themes/resido/img/submit.svg')}}" width="20" alt="" class="mr-2"> {{__('Add Property')}}</a>
                        </li>
                        <li class="">
                            <a href="{{route('dashboard.applications.create')}}" class="text-success"><img src="{{asset('themes/resido/img/submit.svg')}}" width="20" alt="" class="mr-2"> {{__('Request Property')}}</a>
                        </li>
                        @endif
                        @if(request()->user()->recently_verified)
                        <li class="login-item">
                            <a href="{{route('dashboard.home')}}" rel="nofollow"><i class="fas fa-user"></i> <span>
                                    {{ substr(Auth::user()->first_name . ' ' . Auth::user()->middle_name, 0, 21) }}

                                </span>
                            </a>
                        </li>
                        @endif
                        <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</a></li>
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
                            <x-shared.language-select />
                        </div>


                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>