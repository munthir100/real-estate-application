<div class="col-lg-3 col-md-12">
    <div class="simple-sidebar sm-sidebar" id="filter_search">

        <div class="search-sidebar_header">
            <h4 class="ssh_heading">{{__('Close Filter')}}</h4>
            <button class="w3-bar-item w3-button w3-large close_search_menu"><i class="ti-close"></i></button>
        </div>

        <div class="sidebar-widgets">
            <div class="dashboard-navbar">
                <div class="d-user-avater">
                    @php
                    $user = Auth::user();
                    $profileImage = optional($user)->getFirstMediaUrl('profile_images');
                    @endphp

                    <img src="{{ $profileImage ?: asset('custom/profile.jpeg') }}" alt="{{Auth::user()->first_name}} {{Auth::user()->middle_name}}" class="img-fluid avater" style="width: 150px;">
                    <h4>{{Auth::user()->first_name}} {{Auth::user()->middle_name}}</h4>
                    <span>{{Auth::user()->phone}}</span>
                </div>

                <div class="d-navigation">
                    <ul>
                        <li class="{{ request()->routeIs('dashboard.home') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.home') }}" title="Profile">
                                <i class="ti-dashboard"></i> {{__('Dashboard')}}
                            </a>
                        </li>

                        <li class="{{ request()->routeIs('dashboard.account.settings.edit') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.account.settings.edit') }}" title="Settings">
                                <i class="ti-settings mr1"></i> {{__('Settings')}}
                            </a>
                        </li>
                        @if(request()->user()->user_type_id == App\Models\UserType::BROKER || request()->user()->user_type_id == App\Models\UserType::AGENT)

                        <li class="{{ request()->routeIs('dashboard.properties*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.properties.index')}}" title="Properties">
                                <i class="far fa-newspaper mr1"></i> {{__('Properties')}}
                            </a>
                        </li>

                        <li class="{{ request()->routeIs('dashboard.ads*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.ads.index')}}" title="ads">
                                <i class="far fa-star mr1"></i> {{__('Ads')}}
                            </a>
                        </li>


                        <li class="{{ request()->routeIs('agents*') ? 'active' : '' }}">
                            <a href="{{route('agents.index')}}" title="agents">
                                <i class="ti-user mr1"></i> {{__('Agents')}}
                            </a>
                        </li>
                        @endif
                        
                        @if(request()->user()->user_type_id == App\Models\UserType::ADMIN)
                        <li class="{{ request()->routeIs('admin.properties*') ? 'active' : '' }}">
                            <a href="{{route('admin.properties.index')}}" title="Properties">
                                <i class="far fa-newspaper mr1"></i> {{__('Properties')}}
                            </a>
                        </li>

                        <li class="{{ request()->routeIs('admin.applications*') ? 'active' : '' }}">
                            <a href="{{route('admin.applications.index')}}" title="Applications">
                                <i class="far fa-home mr1"></i> {{__('Applications')}}
                            </a>
                        </li>
                        @endif




                        <li class="{{ request()->routeIs('dashboard.account.settings.security') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.account.settings.security') }}">
                                <i class="ti-unlock"></i>
                                {{__('Security')}}
                            </a>
                        </li>
                        <div></div>

                    </ul>

                </div>

            </div>
        </div>

    </div>
</div>