<div class="form-group">
    <label for="val_license_number">{{__('Val license number')}}</label>
    <input type="text" class="form-control" name="val_license_number" id="val_license_number" required value="{{Auth::user()->broker->val_license_number}}">
    @if($errors->has('val_license_number'))
    <span class="invalid-feedback d-block">
        <strong>
            {{ $errors->first('val_license_number') }}
        </strong>
    </span>
    @endif
</div>

<div class="form-group">
    <label for="commercial_registration">{{__('Commertial registration')}}</label>
    <input type="text" class="form-control" name="commercial_registration" id="commercial_registration" required value="{{Auth::user()->broker->commercial_registration}}">
    @if($errors->has('commercial_registration'))
    <span class="invalid-feedback d-block">
        <strong>
            {{ $errors->first('commercial_registration') }}
        </strong>
    </span>
    @endif
</div>



<div class="form-group">
    <label for="license_number">{{__('license number')}}</label>
    <input type="text" class="form-control" name="license_number" id="license_number" required value="{{Auth::user()->broker->license_number}}">
    @if($errors->has('license_number'))
    <span class="invalid-feedback d-block">
        <strong>
            {{ $errors->first('license_number') }}
        </strong>
    </span>
    @endif
</div>