{{__('Dashboard Navigation')}}
{{__('Search')}}">
                                        <
{{__('Create')}}</a>
                            <
{{__('Name')}}</th>
                                        <th class="text-cente
{{__('Created at')}}</th>
                                        <th class="text-cente
{{__('Status')}}</th>
                                        <th class="text-cente
{{__('Operations')}}</th>
                                    <
{{__('No data to display')}}</td>
                                    <


                                    ">{{__('All Agents')}}</h1>
                    <span class="ipn-sub
">{{__('Lists of our all expert agents')}}</span>

">{{__('View')}}</a>
                            </div>

                            {{__('All brokers')}}</h1>
                    <span class="ipn-
{{__('Lists of our all expert brokers')}}</
{{__('Phone:')}}</strong> {{$user->phone}}</
{{__('Email:')}}</strong> {{$user->email}}</li>
                            </
{{__('properties')}}</span>
                            </
{{__('View')}}</a>
                            </

                            {{__('Broker Detail')}}</h1>
                    <span class="ipn-
{{__('Property')}}</span>
                            </
{{__('Broker info')}}</h4>
                        </
{{__('Email')}}</strong>{{$user->email}}</li>
                                <li><strong
{{__('Phone')}}</strong>{{$user->phone}}</li>
                                <li><strong
{{__('Joined on')}}</strong> {{$user->created_at->diffForHumans()}}
                                </
{{__('results')}}</p>
                                            </
{{__('results')}}</p>
                                            </
                                            {{__('Val license number')}}</label>
    <input type="text" class="form-
{{__('Commertial registration')}}</label>
    <input type="text" class="form-
{{__('license number')}}</label>
    <input type="text" class="
    {{__('Approved properties')}}</span>
            </
{{__('Pending approve properties')}}</span>
            </
{{__('Rejected properties')}}</span>
            </
            {{__('Find By Locations')}}</h2>
                    <p>{{__('select your fevorite city and choese your real estate property')}}</p>
                </
{{__('Properties')}}</span>
                        </
{{__('Browse More Locations')}}</a>
            </
            {{__('Find accessible homes to rent')}}</h1>
            </
{{__('Search for a location')}}">
                                    <img src="{{asset('themes/resido/img/pin.svg')}}" width="18" alt="" 
{{__('Min Price')}}</label>
                                <
{{__('No Min')}}" name="min_price" class="form-control">
                                    <option value="">&nbsp;</
{{__('Max Price')}}</label>
                                <
{{__('No Max')}}" name="max_price" class="form-control">
                                    <option value="">&nbsp;</
{{__('Property Type')}}</label>
                                <
{{__('Category')}}" name="category_id" data-url="https://resido.thesky9.com/en/ajax/sub-categories" class="form-control has-sub-category">
                                    <option value="">&nbsp;</
{{__('Apartment')}}
                                    </
{{__('Villa')}}
                                    </
{{__('Condo')}}
                                    </
{{__('House')}}
                                    </
{{__('Land')}}
                                    </
{{__('Commercial property')}}
                                    </
{{__('Bed Rooms')}}</label>
                                <
{{__('Bedroom')}}" name="bedroom" class="form-control">
                                    <option value="">&nbsp;</
{{__('Property Location')}}</label>
                                <
{{__('Search Result')}}</button>
                </
                {{__('See Our Packages')}}</h2>
                    <p>{{__('see our latest pricing and select your subscription package')}}</p>
                </
{{__('Property Advertisement Allowed')}}.</li>
                                <li class="available">{{$plan->priority_support}} {{__('Priority Of Support')}}.</li>
                                <li class="available">{{$plan->
{{__('Add Your Logo')}}</li>
                            </
{{__('Choose Plan')}}</a>
                        </
                        {{__('How It Works?')}}</h2>
                        <p>
{{__('Evaluate Property')}}</h4>
                            <p>
{{__('Meet Your Agent')}}</h4>
                            <p>
{{__('Close The Deal')}}</h4>
                            <p>
                            {{__('For Sale')}}</span>
                                    @
{{__('For rent')}}</span>
                                    @
{{__('Beds')}}
                            </
{{__('Bath')}}
                            </
{{__('m²')}}
                            </
{{__('View')}}</a>
                        </
                        {{__('Found')}} {{ $properties->count() > 0 ? ($properties->firstItem() . ' - ' . $properties->lastItem()) : '0' }} {{__('Of')}} {{ $properties->total() }} {{__('Results')}}
                            </
{{__('Sort by')}}</option>
                                <option value
{{__('Default')}}</option>
                                <option value="
{{__('Oldest')}}</option>
                                <option value="date_desc
{{__('Newest')}}</option>
                                <option value="price_asc
{{__('Price: Low to high')}}</option>
                                <option value="price_desc
{{__('Price: High to low')}}</option>
                                <option value="name_asc">{{__('Name: A-Z')}}</option>
                                <option value="name_desc
{{__('Name: Z-A')}}</option>
                            </
{{__('no result found')}}</p>
                    </
                    {{__('Search for a location')}}"> <img src="{{asset('themes/resido/img/pin.svg')}}" width="20">
                        </div
{{__('City')}}" name="city_id" class="form-control">
                        <option value="">&nbsp;</option
{{__('Category')}}" name="category_id" data-url="https://resido.thesky9.com/en/ajax/sub-categories" class="form-control has-sub-category">
                            <option value="">&nbsp;</option
{{__('Type')}}" class="form-control" name="type">
                            <option value="">-- Select --</option
{{__('Min Price')}}">
                            </div
{{__('Max Price')}}">
{{__('Bedrooms')}}">
{{__('Bathroom')}}">
                    </div
{{__('Min Area')}}">
{{__('Max Area')}}">
{{__('Advanced Search')}}</a>
                        </h4
{{__('Find New Home')}}</button>
            </form
            {{__('Dashboard Navigation')}}

{{__('Search')}}">
                                        </
{{__('Create')}}</a>
                            </
{{__('Name')}}</th>
                                        <th class="text-center
{{__('Created at')}}</th>
                                        <th class="text-center
{{__('Status')}}</th>
                                        <th class="text-center
{{__('Operations')}}</th>
                                    </
{{__('Edit')}}"><i class="fa fa-edit"></i></a>
                                                <button href="#" class="btn btn-icon btn-sm btn-danger delete-button" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete-{{ $property->id 
{{__('Confirm delete')}}</strong></h4>
                                                    <button class="btn-close" data-bs-dismiss="modal" type
{{__('Do you really want to delete this record?')}}</div>
                                                </
{{__('Cancel')}}</
{{__('No properties found')}}.</td>
                                    </
                                    {{__('Account Information')}}</h4>
                                </div>
{{__('First name')}}</label>
                                            <input type="text" class
{{__('Middle name')}}</label>
                                            <input type="text" class=
{{__('Last name')}}</label>
                                            <input type="text" clas
{{__('Username')}}</label>
                                            <input type="text" cla
{{__('Phone')}}</label>
                                            <input type="text" 
{{__('Short description')}}</label>
                                            <textarea class="form-con
{{__('Tell something about yourself...')}}">{{Auth::user()->description}}</textarea>
                                            @if($errors->has('description'))
{{__('Email')}}</label>
                                            <input type="email"
{{__('Verified')}}<i class="ml1 far fa-check-circle"></i></small>
                                            @if($errors->has('email'
{{__('Birth Date')}}</label>
                                            <input type="date" class
{{__('Gender')}}</label>
                                            <select class="form-
{{__('Male')}}</option>
                                                <option value="female">{{__('Female')}}</option>
                                                @else
{{__('Male')}}</option>
                                                <option value="male">{{__('male')}}</option>
                                                @endif
{{__('Save')}}</button>
                                    </form>
{{__('Profile picture')}}</label>
                                                <div id="account-avatar">
{{__('Change avatar')}}</strong></h4>
                                            <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti
{{__('New image')}}</label>
                                                    <input class="avatar-inpu
{{__('Close')}}</button>
                                            <button class="btn btn-primary avatar-save" type="submit">{{__('Save')}}</button>
                                        </div>
                                        {{__('Dashboard Navigation')}}

{{__('Create Agent')}}</
{{__('Full Name')}}</th>
                                        <th class="text-center
{{__('Username')}}</th>
                                        <th class="text-center
{{__('Email')}}</th>
                                        <th class="text-center
{{__('Phone')}}</th>
                                        <th class="text-center
{{__('Operations')}}</th>
                                    </
{{__('No data to display')}}</td>
                                    </
{{__('First Name')}}</label>
                                <input required class="form-control" placeholder="{{__('First Name')}}" data-counter="255" v-pre name="first_name" type="text" id="first_name">
                            </
{{__('Middle Name')}}</label>
                                <input required class="form-control" placeholder="{{__('Middle Name')}}" data-counter="255" v-pre name="middle_name" type="text" id="middle_name">
                            </
{{__('Last Name')}}</label>
                                <input required class="form-control" placeholder="{{__('Last Name')}}" data-counter="255" v-pre name="last_name" type="text" id="last_name">
                            </
{{__('Username')}}</label>
                                <input required class="form-control" placeholder="{{__('Username')}}" data-counter="255" v-pre name="username" type="text" id="username">
                            </
{{__('Phone')}}</label>
                                <input required class="form-control" placeholder
{{__('Phone')}}" data-counter="15" v-pre name="phone" type="text" id="phone">
                            </
{{__('Description')}}</label>
                                <textarea required class="form-control" rows="4" 
{{__('Short description')}}" data-counter="350" v-pre name="description" cols="50" id="description"></textarea>
                            </
{{__('Birth Date')}}</label>
                                <input required class="form-control" placeholder="{{__('Birth Date')}}" v-pre name="birth_date" type="date" id="birth_date">
                            </
{{__('Email')}}</label>
                                <input required class="form-control" placeholder
{{__('Email')}}" data-counter="255" v-pre name="email" type="email" id="email">
                            </
{{__('Gender')}}</label>
                                <select required class="form-control" v-pre name="{{__('gender')}}" id="gender">
                                    <option value="male">{{__('Male')}}</option>
                                    <option value="
{{__('Female')}}</option>
                                </
{{__('Password')}}</label>
                                <input required class="form-control" placeholder="{{__('Password')}}" v-pre name="password" type="password" id="password">
                            </
{{__('Create Agent')}}</button>
                </
{{__('Close')}}</button>
            </
            {{__('Close Filter')}}</h4>
            <button class="w3-bar-
{{__('Dashboard')}}
                            </
{{__('Settings')}}
                            </
{{__('Properties')}}
                            </
{{__('Ads')}}
                            </
{{__('Agents')}}
                            </
{{__('Applications')}}
                            </
{{__('Properties')}}
                            </
{{__('Applications')}}
                            </
{{__('Security')}}
                            </
                            {{__('Dashboard Navigation')}}

{{__('Title')}}</label>
                                                    <input value="{{$property->title}}" class="form-
{{__('Title')}}" data-counter="120" v-pre name="title" type="text" id="title
{{__('Description')}}</label>
                                                    <textarea class="form-control" rows="4" 
{{__('Short description')}}" data-counter="350" v-pre name="description" cols="50" id="description">
                                                    {{$property->description
{{__('Images')}}</
{{__('Check')}}</title>
                                                                <defs
{{__('Error')}}</title>
                                                                <defs
{{__('City')}}</
{{__('Property location')}}</label>
                                                    <input value="{{$property->location->name}}" class="
{{__('Latitude')}}</label>
                                                        <input value="{{$property->location->
{{__('Go here to get Latitude from address')}}. </
{{__('Longitude')}}</label>
                                                        <input value="{{$property->location->
{{__('Go here to get Longitude from address')}}. </
{{__('Number bedrooms')}}</label>
                                                        <input value="{{$property->number_of_bedrooms}}" 
{{__('Number bathrooms')}}</label>
                                                        <input value="{{$property->number_of_bathrooms}}" 
{{__('Number floors')}}</label>
                                                        <input value="{{$property->number_of_floors}}" 
{{__('Square')}} (m&sup2;)</label>
                                                        <input value="{{$property->square}}" 
{{__('Price')}}</label>
                                                        <input value="{{$property->price}}" 
{{__('Currency')}}</
{{__('USD')}}</option>
                                                                <option value="{{App\Models\Currency::SAR}}">SAR</
{{__('SAR')}}</option>
                                                                @
{{__('Period')}}</
{{__('Day')}}</option>
                                                                <option value="
{{__('Month')}}</option>
                                                                <option value="year">{{__('Year')}}</option>
                                                            </
{{__('Property label')}}</label>
                                                    <input value="{{$property->label}}" 
{{__('Distance key between facilities')}}</span>
                                                </
{{__('No facilities available')}}.</p>
                                                    @
{{__('Type')}}</span>
                                                </
{{__('Type')}}</label>
                                                    <div class="ui-select-wrapper form-group
{{__('For Rent')}}</option>
                                                            @
{{__('For Sale')}}</option>
                                                            <option value="2" data-code="rent">{{__('For Rent')}}</option>
                                                            @
{{__('Features')}}</span>
                                                </
{{__('Addition Information')}}</span></h4>
                                                </
{{__('Youtube Video URL')}}</label>
                                                        <input value="{{$property->video_url}}" id="
{{__('Search Engine Optimize')}}</span></h4>
                                                </
{{__('Edit SEO meta')}}</a>
                                                    <div class="seo-preview" v-
{{__('SEO Title')}}</label>
                                                            <input value="{{$property->seo_title}}" 
{{__('SEO Title')}}" data-counter="120" name="seo_meta[seo_title]" type="text">
                                                        </
{{__('SEO description')}}</label>
                                                            <textarea class="form-control" rows="3" id="
{{__('Publish')}}</span>
                                                </
{{__('Save')}} &amp; {{__('Exit')}}
                                                    </
{{__('Custom layout')}}</span></h4>
                                                </
{{__('Layout 1')}}</option>
                                                                <option value="layout-2
{{__('Layout 2')}}</option>
                                                                <option value="layout-3
{{__('Layout 3')}}</option>
                                                            </

                                                            {{__('Home')}}
                        </
{{__('Properties')}}
                        </
{{__('Applications')}}
                        </
{{__('Agents')}}
                        </
{{__('Pages')}}
                        </
{{__('Brokers')}}
                                </
{{__('Pricing')}}
                                </
{{__('Contact')}}
                                </
{{__('Sign Up')}}
                        </
{{__('Add Property')}}</a>
                        </
{{__('Sign In')}}</a>
                        </
{{__('Add Property')}}</a>
                        </
{{__('Logout')}}</a></li>
                    </
                    {{__('Properties')}}</h1>
                <span class="ipn-
{{__('Search Property')}}<i class="ml-2 ti-menu"></i></a>
                    </
                    {{__('Real Estate Applications')}}</h1>
                <span class="ipn-
{{__('Search Property')}}<i class="ml-2 ti-menu"></i></a>
                    </