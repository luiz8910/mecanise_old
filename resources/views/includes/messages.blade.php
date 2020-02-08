@if(\Session::has('success.msg'))
    <div class="alert alert-dark alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            {{ Session::get('error.msg') }}
        </div>
    </div>
@endif

@if(\Session::has('error.msg'))
    <div class="alert alert-danger alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-light"></i></div>
        <div class="alert-text">
            {{ Session::get('error.msg') }}
        </div>
    </div>
@endif
