@if(session()->has('error'))
<div id="alert-container">
    <div class="alert alert-danger alert-dismissible" id="190">
        <span class="close fa fa-times" data-bs-dismiss="alert" aria-label="close"></span>
        <i class="fa fa-times message-icon"></i>
        {{session()->get('error')}}.
    </div>
</div>
@endif

@if(session()->has('success'))
<div id="alert-container">
    <div class="alert alert-success alert-dismissible" id="190">
        <span class="close fa fa-times" data-bs-dismiss="alert" aria-label="close"></span>
        <i class="fa fa-check message-icon"></i>
        {{session()->get('success')}}.
    </div>
</div>
@endif


@if($errors->any())

<div id="alert-container">
    @foreach($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible" id="190">
        <span class="close fa fa-times" data-bs-dismiss="alert" aria-label="close"></span>
        <i class="fa fa-times message-icon"></i>
        {{ $error }}
    </div>
    @endforeach
</div>
@endif