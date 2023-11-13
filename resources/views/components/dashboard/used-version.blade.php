@if(app()->isLocale('ar'))
<div class="col-md-12">
    <div class="note note-success">
        <p>{{__('You are using')}} {{__('version')}}<strong class="current_language_text">"{{__('Arabic')}}"</strong></p>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="note note-success">
        <p>{{__('You are using')}} "<strong class="current_language_text">{{__('English')}}</strong>" {{__('version')}}</p>
    </div>
</div>
@endif