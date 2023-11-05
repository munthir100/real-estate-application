<div class="col-lg-3 col-md-12">
    <div class="simple-sidebar sm-sidebar" id="filter_search">

        <div class="search-sidebar_header">
            <h4 class="ssh_heading">Close Filter</h4>
            <button class="w3-bar-item w3-button w3-large close_search_menu"><i class="ti-close"></i></button>
        </div>

        <div class="sidebar-widgets">
            <div class="dashboard-navbar">
                <div class="d-user-avater">
                    <img src="/storage/accounts/1-150x150.jpg" alt="{{Auth::user()->first_name}} {{Auth::user()->last_name}}" class="img-fluid avater" style="width: 150px;">
                    <h4>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h4>
                    <span>{{Auth::user()->phone}}</span>
                </div>

                <div class="d-navigation">
                    <ul>
                        <li class="{{ request()->routeIs('dashboard.home') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.home') }}" title="Profile">
                                <i class="ti-dashboard"></i>Dashboard
                            </a>
                        </li>

                        <li class="{{ request()->routeIs('dashboard.account.settings.edit') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.account.settings.edit') }}" title="Settings">
                                <i class="fas fa-cogs mr1"></i>Settings
                            </a>
                        </li>
                        @if(request()->user()->user_type_id == App\Models\UserType::SUBSCRIBER)

                        <li class="{{ request()->routeIs('dashboard.properties*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.properties.index')}}" title="Properties">
                                <i class="far fa-newspaper mr1"></i>Properties
                            </a>
                        </li>

                        <li class="{{ request()->routeIs('dashboard.ads*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.ads.index')}}" title="ads">
                                <i class="far fa-star mr1"></i>Ads
                            </a>
                        </li>
                        @endif

                        @if(request()->user()->user_type_id == App\Models\UserType::ADMIN)
                        <li class="{{ request()->routeIs('admin.properties*') ? 'active' : '' }}">
                            <a href="{{route('admin.properties.index')}}" title="Properties">
                                <i class="far fa-newspaper mr1"></i>Properties
                            </a>
                        </li>
                        @endif

                        <li class="{{ request()->routeIs('dashboard.applications*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.applications.index')}}" title="Applications">
                                <i class="far fa-home mr1"></i>Real Estate Applications
                            </a>
                        </li>

                        
                        <li class="{{ request()->routeIs('dashboard.account.settings.security') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.account.settings.security') }}">
                                <i class="ti-unlock"></i>
                                Security
                            </a>
                        </li>
                        <div></div>

                    </ul>

                </div>

            </div>
        </div>

    </div>
</div>