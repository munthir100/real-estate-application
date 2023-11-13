@if($property->property_type_id == App\Models\PropertyType::SALE)
<span class="prt-types sale">
    {{__('For Sale')}}
</span>
@else
<span class="prt-types rent">
    {{__('For rent')}}
</span>
@endif