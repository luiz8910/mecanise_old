{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}

<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>


    <meta charset="utf-8" />
    <title>Mecanise | Para quem Ama Carros</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->

    <!--begin:: Vendor Plugins -->
    <link href="assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/plugins/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/plugins/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/plugins/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Vendor Plugins -->
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--begin:: Vendor Plugins for custom pages -->
    <link href="assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/@fullcalendar/core/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/@fullcalendar/daygrid/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/@fullcalendar/list/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/@fullcalendar/timegrid/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/jqvmap/dist/jqvmap.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/uppy/dist/uppy.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/jkanban/dist/jkanban.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Vendor Plugins for custom pages -->

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
<!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/pages/login/login-6.css" rel="stylesheet" type="text/css" />

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                <div class="kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__body">
                            <div class="kt-login__logo">
                                <a href="javascript:">
                                    <img src="logo/logo_bw.jpeg" style="width: 50%;">
                                </a>
                            </div>
                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Login</h3>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" method="POST" action="{{ route('login.post') }}">
                                        @csrf
                                        <div class="form-group">

                                            @if(Session::has('wrong-login'))
                                                <div class="alert alert-danger alert-dismissible" role="alert">
                                                    <div class="alert-text">{{ Session::get('wrong-login') }}</div>
                                                    <div class="alert-close">
                                                        <i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i>
                                                    </div>
                                                </div>
                                            @endif

                                            <input class="form-control" type="text" placeholder="Email" name="email" id="email" autocomplete="off" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-last" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                        <div class="kt-login__extra">

                                            <label class="kt-checkbox">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                                                <span></span>
                                            </label>
                                            <a href="javascript:;" id="kt_login_forgot">Esqueceu sua senha ?</a>

                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="btn_login_submit" class="btn btn-dark btn-pill btn-elevate" type="submit">Entrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="kt-login__signup">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Cadastre-se</h3>
                                    <div class="kt-login__desc">Complete seus dados:</div>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" action="">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Nome Completo" name="fullname">
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Telefone com DDD" name="cel" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" placeholder="Senha" name="password">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-last" type="password" placeholder="Confirmar Senha" name="rpassword">
                                        </div>
                                        <div class="kt-login__extra">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="agree">Eu li e entendi <a href="#"> os termos e condições de uso</a>.
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="kt_login_signup_submit" class="btn btn-dark btn-pill btn-elevate">Cadastrar</button>
                                            <button id="kt_login_signup_cancel" class="btn btn-outline-dark btn-pill">Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="kt-login__forgot">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Esqueceu sua senha ?</h3>
                                    <div class="kt-login__desc">Entre com seu email para recuperar sua senha:</div>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" action="">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="kt_login_forgot_submit" class="btn btn-dark btn-pill btn-elevate">Recuperar</button>
                                            <button id="kt_login_forgot_cancel" class="btn btn-outline-dark btn-pill">Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-login__account">
								<span class="kt-login__account-msg">
									Ainda não tem sua conta ?
								</span>&nbsp;&nbsp;
                        <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Cadastre-se já!</a>
                    </div>
                </div>
            </div>

            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(images/motor.png);">
                <div class="kt-login__section">
                    <div class="kt-login__block">
                        <h3 class="kt-login__title">Bem vindo ao Mecanise</h3>
                        <div class="kt-login__desc" style="font-size: 25px;">
                            O Mais completo sistema de oficinas
                            <br>
                            Para quem Ama Carros!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->

<!--begin:: Vendor Plugins -->
<script src="assets/plugins/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/plugins/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/plugins/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="assets/plugins/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/wnumb/wNumb.js" type="text/javascript"></script>
<script src="assets/plugins/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="assets/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="assets/plugins/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="assets/plugins/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="assets/plugins/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="assets/plugins/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="assets/plugins/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="assets/plugins/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="assets/plugins/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="assets/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="assets/plugins/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="assets/plugins/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/jquery-validation.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="assets/plugins/general/raphael/raphael.js" type="text/javascript"></script>
<script src="assets/plugins/general/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/plugins/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/plugins/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="assets/plugins/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="assets/plugins/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/plugins/general/js/global/integration/plugins/sweetalert2.init.js" type="text/javascript"></script>
<script src="assets/plugins/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="assets/plugins/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="assets/plugins/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="assets/plugins/general/dompurify/dist/purify.js" type="text/javascript"></script>

<!--end:: Vendor Plugins -->
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

<!--begin:: Vendor Plugins for custom pages -->
<script src="assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/@fullcalendar/core/main.js" type="text/javascript"></script>
<script src="assets/plugins/custom/@fullcalendar/daygrid/main.js" type="text/javascript"></script>
<script src="assets/plugins/custom/@fullcalendar/google-calendar/main.js" type="text/javascript"></script>
<script src="assets/plugins/custom/@fullcalendar/interaction/main.js" type="text/javascript"></script>
<script src="assets/plugins/custom/@fullcalendar/list/main.js" type="text/javascript"></script>
<script src="assets/plugins/custom/@fullcalendar/timegrid/main.js" type="text/javascript"></script>
<script src="assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>
<script src="assets/plugins/custom/flot/dist/es5/jquery.flot.js" type="text/javascript"></script>
<script src="assets/plugins/custom/flot/source/jquery.flot.resize.js" type="text/javascript"></script>
<script src="assets/plugins/custom/flot/source/jquery.flot.categories.js" type="text/javascript"></script>
<script src="assets/plugins/custom/flot/source/jquery.flot.pie.js" type="text/javascript"></script>
<script src="assets/plugins/custom/flot/source/jquery.flot.stack.js" type="text/javascript"></script>
<script src="assets/plugins/custom/flot/source/jquery.flot.crosshair.js" type="text/javascript"></script>
<script src="assets/plugins/custom/flot/source/jquery.flot.axislabels.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
<script src="assets/plugins/custom/js/global/integration/plugins/datatables.init.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jszip/dist/jszip.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/pdfmake/build/pdfmake.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/pdfmake/build/vfs_fonts.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-buttons/js/buttons.colVis.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-buttons/js/buttons.flash.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-buttons/js/buttons.html5.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-buttons/js/buttons.print.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-select/js/dataTables.select.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jstree/dist/jstree.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jqvmap/dist/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/plugins/custom/uppy/dist/uppy.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/tinymce/tinymce.min.js" type="text/javascript"></script>
<script src="assets/plugins/custom/tinymce/themes/silver/theme.js" type="text/javascript"></script>
<script src="assets/plugins/custom/tinymce/themes/mobile/theme.js" type="text/javascript"></script>
<script src="assets/plugins/custom/jkanban/dist/jkanban.min.js" type="text/javascript"></script>

<!--end:: Vendor Plugins for custom pages -->

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>
<script src="js/login.js" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
