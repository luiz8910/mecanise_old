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


		@include('includes.head')

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
											<form class="kt-form" action="">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
												</div>
												<div class="form-group">
													<input class="form-control form-control-last" type="password" placeholder="Senha" name="password">
												</div>
												<div class="kt-login__extra">
													<label class="kt-checkbox">
														<input type="checkbox" name="remember"> Lembrar-me
														<span></span>
													</label>
													<a href="javascript:;" id="kt_login_forgot">Esqueceu sua senha ?</a>
												</div>
												<div class="kt-login__actions">
													<button id="kt_login_signin_submit" class="btn btn-dark btn-pill btn-elevate">Entrar</button>
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
													<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
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

		@include('includes.core-scripts')

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
