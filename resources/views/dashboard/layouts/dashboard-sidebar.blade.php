<div class="col-lg-3 col-md-12">
    <div class="simple-sidebar sm-sidebar" id="filter_search">

        <div class="search-sidebar_header">
            <h4 class="ssh_heading">Close Filter</h4>
            <button class="w3-bar-item w3-button w3-large close_search_menu"><i class="ti-close"></i></button>
        </div>

        <div class="sidebar-widgets">
            <div class="dashboard-navbar">
                <div class="d-user-avater">
                    <img src="storage/accounts/1-150x150.jpg" alt="{{Auth::user()->first_name}} {{Auth::user()->last_name}}" class="img-fluid avater" style="width: 150px;">
                    <h4>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h4>
                    <span>{{Auth::user()->phone}}</span>
                </div>

                <div class="d-navigation">
                    <ul>
                        <li class="active">
                            <a href="#" title="Profile">
                                <i class="ti-dashboard"></i>Dashboard
                            </a>
                        </li>

                        <li class="">
                            <a href="{{route('account.settings.edit')}}" title="Settings">
                                <i class="fas fa-cogs mr1"></i>Settings
                            </a>
                        </li>


                        <li class="">
                            <a href="#" title="Temp Ads">
                                <i class="far fa-ad mr1"></i>Temp Ads
                            </a>
                        </li>

                        <li class="">
                            <a href="#" title="Featured Ads">
                                <i class="far fa-ad mr1"></i>Featured Ads
                            </a>
                        </li>


                        <li class="">
                            <a href="#" title="Applications">
                                <i class="far fa-home mr1"></i>Real Estate Applications
                            </a>
                        </li>


                        <li class="">
                            <a href="#" title="Properties">
                                <i class="far fa-newspaper mr1"></i>Properties
                            </a>
                        </li>

                        

                        <li class="">
                            <a href="#">
                                <i class="ti-unlock"></i>
                                Security
                            </a>
                        </li>

                        
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>