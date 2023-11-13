@if(request()->routeIs('dashboard.properties.create'))
<div class="form-group mb-3">
    <label for="license_number" class="control-label">{{__('license number')}}</label>
    <input required="required" class="form-control" name="license_number" type="text" id="license_number">
</div>
<div class="form-group mb-3">
    <label for="date_of_license" class="control-label">{{__('Property date of license')}}</label>
    <input required="required" class="form-control" name="date_of_license" type="date" id="date_of_license">
</div>
<div class="form-group mb-3">
    <label for="license_expiration_date" class="control-label">{{__('license expiration date')}}</label>
    <input required="required" class="form-control" name="license_expiration_date" type="date" id="license_expiration_date">
</div>
<div class="form-group mb-3">
    <label for="postal_code" class="control-label">{{__('postal code')}}</label>
    <input required="required" class="form-control" name="postal_code" type="text" id="postal_code">
</div>
<div class="form-group mb-3">
    <label for="building_number" class="control-label">{{__('building number')}}</label>
    <input required="required" class="form-control" name="building_number" type="text" id="building_number">
</div>
<div class="form-group mb-3">
    <label for="additional_number" class="control-label">{{__('additional number')}}</label>
    <input required="required" class="form-control" name="additional_number" type="additional_number" id="additional_number">
</div>
<div class="form-group mb-3">
    <label for="has_restriction" class="control-label">{{__('property has restriction')}}</label>
    <input type="hidden" name="has_restriction" value="0"> <!-- Add hidden field -->
    <input name="has_restriction" type="checkbox" id="has_restriction" value="1"> <!-- Checkbox value is set to '1' when checked -->
</div>
<div class="form-group mb-3">
    <label for="has_mortgage" class="control-label">{{__('Property has mortgage')}}</label>
    <input type="hidden" name="has_mortgage" value="0"> <!-- Add hidden field -->
    <input name="has_mortgage" type="checkbox" id="has_mortgage" value="1"> <!-- Checkbox value is set to '1' when checked -->
</div>

<div class="form-group mb-3">
    <label for="obligations_on_property" class="control-label">{{__('obligations on property')}}</label>
    <input required="required" class="form-control" name="obligations_on_property" type="text" id="obligations_on_property">
</div>
@endif