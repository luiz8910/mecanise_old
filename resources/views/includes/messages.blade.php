@if(\Session::has('success.msg'))
    <div class="alert alert-success alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-light"></i></div>
        <div class="alert-text">
            {{ Session::get('success.msg') }}
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
