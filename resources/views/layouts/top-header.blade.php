<div class="topbar bg-brand p-2 d-none d-sm-block">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="currency-wrapper">
                <div class="dropdown">
                    <x-shared.language-select />

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