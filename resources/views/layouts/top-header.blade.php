<div class="topbar bg-brand p-2 d-none d-sm-block">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="currency-wrapper">
                <div class="dropdown">
                    @if(session()->get('locale') === 'ar')
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
                        <img src="/vendor/core/core/base/images/flags/sa.svg" title="english" width="16" alt="english">
                        English
                    </button>
                    <ul class="dropdown-menu language_bar_chooser ">
                        <li>
                            <a>
                                <img src="/vendor/core/core/base/images/flags/us.svg" title="arabic" width="16" alt="arabic">
                                <span onclick="document.getElementById('arForm').submit()">
                                    العربية
                                </span>
                            </a>
                        </li>
                    </ul>
                    @endif

                </div>


            </div>

            <div class="topbar-right d-flex align-items-center">

                <div class="ms-3 text-white currency-wrapper">
                    <div class="dropdown">


                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/en/currency/switch/USD" class="active"><span>USD</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/en/currency/switch/VND"><span>VND</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<form hidden action="{{route('changeLocale')}}" method="post" id="arForm">
    @csrf
    <input type="text" name="locale" value="ar">
</form>
<form hidden action="{{route('changeLocale')}}" method="post" id="enForm">
    @csrf
    <input type="text" name="locale" value="en">
</form>