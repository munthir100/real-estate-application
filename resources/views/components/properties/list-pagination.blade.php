@php
$properties->load('location','currency')
@endphp
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <x-properties.sidebar-search :userSearchCriteria="$userSearchCriteria" />
    </div>

    <div class="col-lg-8 col-md-12 list-layout">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="item-sorting-box">
                    <div class="item-sorting clearfix">
                        <div class="left-column pull-left">
                            <h4 class="m-0">
                                {{__('Found')}} {{ $properties->count() > 0 ? ($properties->firstItem() . ' - ' . $properties->lastItem()) : '0' }} {{__('Of')}} {{ $properties->total() }} {{__('Results')}}
                            </h4>
                        </div>
                    </div>
                    <div class="item-sorting-box-right">
                        <div class="sorting-by">
                            <select id="sort_by" name="sort_by" class="form-control" data-placeholder="{{__('Sort by')}}">
                                <option value="">{{__('Sort by')}}</option>
                                <option value="">{{__('Default')}}</option>
                                <option value="date_asc">{{__('Oldest')}}</option>
                                <option value="date_desc">{{__('Newest')}}</option>
                                <option value="price_asc">{{__('Price: Low to high')}}</option>
                                <option value="price_desc">{{__('Price: High to low')}}</option>
                                <option value="name_asc">{{__('Name: A-Z')}}</option>
                                <option value="name_desc">{{__('Name: Z-A')}}</option>
                            </select>
                        </div>
                        <ul class="shorting-list">

                            <li class="active">
                                <a class="{{ request()->input('view', 'list') == 'grid' ? 'active' : '' }}" href="{{ route('properties', ['view' => 'grid']) }}"><i class="ti-layout-grid2"></i></a>
                            </li>
                            <li>
                                <a class="{{ request()->input('view', 'list') == 'list' ? 'active' : '' }}" href="{{ route('properties', ['view' => 'list']) }}"><i class="ti-view-list"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($properties as $property)
            @switch(request()->input('view'))
            @case('grid')
            <x-properties.grid-view :property="$property" />
            @break

            @case('list')
            <x-properties.list-view :property="$property" />
            @break

            @default
            <x-properties.list-view :property="$property" />
            @endswitch

            @empty
            <div class="col-lg-12 col-md-12">
                <div class="alert alert-light">
                    <span class="test-light">
                        <p class="text-center">{{__('no result found')}}</p>
                    </span>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation">
                    <nav>
                        <ul class="pagination">
                            @if ($properties->currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $properties->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            @endif

                            @for ($i = 1; $i <= $properties->lastPage(); $i++)
                                <li class="page-item{{ $i == $properties->currentPage() ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $properties->url($i) }}">{{ $i }}</a>
                                </li>
                                @endfor

                                @if ($properties->currentPage() < $properties->lastPage())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $properties->nextPageUrl() }}" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                    @endif
                        </ul>
                    </nav>

                </nav>
            </div>
        </div>
    </div>
</div>