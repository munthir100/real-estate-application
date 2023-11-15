@if(!session()->has('locale') || session()->get('locale') === 'ar')
<button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
    <img src="/vendor/core/core/base/images/flags/sa.svg" title="arabic" width="16" alt="arabic">
    العربية
</button>
<ul class="dropdown-menu language_bar_chooser ">
    <li>
        <a>
            <img src="/vendor/core/core/base/images/flags/us.svg" title="english" width="16" alt="english">
            <span onclick="document.getElementById('enForm').submit()">
                English
            </span>
        </a>
    </li>
</ul>
@else
<button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
    <img src="/vendor/core/core/base/images/flags/us.svg" title="english" width="16" alt="english">
    English
</button>
<ul class="dropdown-menu language_bar_chooser ">
    <li>
        <a>
            <img src="/vendor/core/core/base/images/flags/sa.svg" title="arabic" width="16" alt="arabic">
            <span onclick="document.getElementById('arForm').submit()">
                العربية
            </span>
        </a>
    </li>
</ul>
@endif