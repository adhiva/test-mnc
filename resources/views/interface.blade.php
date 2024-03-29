<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title', config('template_frontend.title', ''))</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Invest project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{ asset('template/invest/styles/bootstrap4/bootstrap.min.css') }}">
		
		<link href="{{ asset('template/invest/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

		<link rel="stylesheet" type="text/css" href="{{ asset('template/invest/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('template/invest/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('template/invest/plugins/OwlCarousel2-2.2.1/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('template/invest/styles/financial.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('template/invest/styles/financial_responsive.css') }}">

	</head>
	<body>
		<div class="super_container">
			<!-- Home -->
			<div class="home">
				<div class="home_slider_container">
					<!-- Home Slider -->
					<div class="owl-carousel owl-theme home_slider">
						<!-- Slider Item -->
						<div class="owl-item">
							<div class="slider_background" style="
							background-image:url('{{ asset('template/invest/images/financial.jpg') }}')"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div class="home_slider_content">
											<h1>Invest your money for the future</h1>
											<div class="home_slider_text">Donec vel ante rhoncus, posuere nulla quis, interdum nisi. Vestibulum laoreet lacinia diam, eget blandit sem gravida at.</div>
											<div class="link_button home_slider_button"><a href="#">read more</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Slider Item -->
						<div class="owl-item">
							<div class="slider_background" style="background-image:url()"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div class="home_slider_content">
											<h1>Invest your money for the future</h1>
											<div class="home_slider_text">Donec vel ante rhoncus, posuere nulla quis, interdum nisi. Vestibulum laoreet lacinia diam, eget blandit sem gravida at.</div>
											<div class="link_button home_slider_button"><a href="#">read more</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Slider Item -->
						<div class="owl-item">
							<div class="slider_background" style="background-image:url()"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div class="home_slider_content">
											<h1>Invest your money for the future</h1>
											<div class="home_slider_text">Donec vel ante rhoncus, posuere nulla quis, interdum nisi. Vestibulum laoreet lacinia diam, eget blandit sem gravida at.</div>
											<div class="link_button home_slider_button"><a href="#">read more</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Slider Item -->
						<div class="owl-item">
							<div class="slider_background" style="background-image:url()"></div>
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col fill_height">
										<div class="home_slider_content">
											<h1>Invest your money for the future</h1>
											<div class="home_slider_text">Donec vel ante rhoncus, posuere nulla quis, interdum nisi. Vestibulum laoreet lacinia diam, eget blandit sem gravida at.</div>
											<div class="link_button home_slider_button"><a href="#">read more</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="home_slider_nav home_slider_prev d-flex flex-column align-items-center justify-content-center">
						<img src="{{ asset('template/invest/images/arrow_l.png') }}" alt=""></div>
					<div class="home_slider_nav home_slider_next d-flex flex-column align-items-center justify-content-center">
						<img src="{{ asset('template/invest/images/arrow_r.png') }}" alt=""></div>
				</div>
				<!-- Header -->
				<header class="header">
					<!-- Top Bar -->
					<div class="top_bar">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="top_bar_container d-flex flex-row align-items-center justify-content-start">
										<div class="logo_container">
											<div class="logo">
												<a href="#">
													<div class="logo_line_1"><span>in</span>vest</div>
													<div class="logo_line_2">Financial</div>
													<div class="logo_img"><img src="{{ asset('template/invest/images/logo.png') }}" alt=""></div>
												</a>
											</div>
										</div>
										<div class="top_bar_content ml-auto">
											<div class="main_menu_contact">
												<div class="main_menu_email"><img src="{{ asset('template/invest/images/envelope.svg') }}" class="svg" alt=""><span>office@iropin.org</span></div>
											</div>
											<div class="main_menu_social">
												@if (Auth::check())
													You are logged in as, {{ Auth::user()->name }} |
													<a href="{{ route('logout') }}"
													onclick="event.preventDefault();
																	document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
													</form>
												@else
													<a href="{{ route('login') }}">Login</a> | 
													<a href="{{ route('register') }}">Register</a>
												@endif
												<!-- <ul>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
												</ul> -->
											</div>
										</div>
										<div class="burger">
											<i class="fa fa-bars" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Main Menu -->
					<div class="main_menu">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
										<div class="main_menu_content">
											<ul class="main_menu_list">
												@foreach (config('template_frontend.menu') as $menu)
													<li @if(isset($moduleCode) && $moduleCode == $menu) class="active" @endif @if(isset($menu['subModule'])) class="hassubs" @endif>
														<a href="@if(isset($menu['subModule'])) javascript:; @else {{ $menu['url'] }} @endif">
															{{ $menu['text'] }}
															@if(isset($menu['subModule']))
															<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
																<g>
																	<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
																</g>
															</svg>
															@endif
														</a>
														@if(isset($menu['subModule']))
															<ul>
																@foreach($menu['subModule'] as $subModule)
																<li>
																	<a href="{{$subModule['url']}}">
																		{{$subModule['text']}}
																	</a>
																</li>
																@endforeach
															</ul>
														@endif
													</li>
												@endforeach

												<!-- <li class="active hassubs">
													<a href="#">
														home
														<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
															width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
															<g>
																<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
															</g>
														</svg>
													</a>
													<ul>
														<li>
															<a href="index.html">
																Blockchain
															</a>
														</li>
														<li>
															<a href="#">
																Financial
															</a>
														</li>
													</ul>
												</li> -->
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Menu -->
					<div class="menu">
						<div class="menu_register_login">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="menu_register_login_content d-flex flex-row align-items-center justify-content-end">
											<div class="register"><a href="#">register</a></div>
											<div class="login"><a href="#">login</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<ul class="menu_list">
							<li class="menu_item">
								<div class="container">
									<div class="row">
										<div class="col">
											<a href="#">home</a>
										</div>
									</div>
								</div>
							</li>
							<li class="menu_item">
								<div class="container">
									<div class="row">
										<div class="col">
											<a href="about.html">about us</a>
										</div>
									</div>
								</div>
							</li>
							<li class="menu_item">
								<div class="container">
									<div class="row">
										<div class="col">
											<a href="listings.html">services</a>
										</div>
									</div>
								</div>
							</li>
							<li class="menu_item">
								<div class="container">
									<div class="row">
										<div class="col">
											<a href="news.html">portfolio</a>
										</div>
									</div>
								</div>
							</li>
							<li class="menu_item">
								<div class="container">
									<div class="row">
										<div class="col">
											<a href="contact.html">blog</a>
										</div>
									</div>
								</div>
							</li>
							<li class="menu_item">
								<div class="container">
									<div class="row">
										<div class="col">
											<a href="contact.html">contact</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</header>
			</div>
			<!-- Features -->
			<div class="features">
				<div class="container">
					<div class="row">
						<!-- Features Title -->
						<div class="col-lg-3 features_col">
							<div class="features_content">
								<div class="features_title_container">
									<div class="features_subtitle">take a look at our</div>
									<div class="features_title">The Features</div>
									<div class="features_text">Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit.</div>
									<div class="link_button features_button"><a href="#">read more</a></div>
								</div>
							</div>
						</div>
						<!-- Features Item -->
						<div class="col-lg-3 features_col">
							<div class="features_item">
								<div class="features_image"><img src="{{ asset('template/invest/images/features_1.jpg') }}" alt=""></div>
								<div class="features_item_content">
									<div class="features_item_title"><a href="#">We take care of you</a></div>
									<div class="features_item_text">
										<p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Features Item -->
						<div class="col-lg-3 features_col">
							<div class="features_item">
								<div class="features_image"><img src="{{ asset('template/invest/images/features_2.jpg') }}" alt=""></div>
								<div class="features_item_content">
									<div class="features_item_title"><a href="#">Fast support & updates</a></div>
									<div class="features_item_text">
										<p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Features Item -->
						<div class="col-lg-3 features_col">
							<div class="features_item">
								<div class="features_image"><img src="{{ asset('template/invest/images/features_3.jpg') }}" alt=""></div>
								<div class="features_item_content">
									<div class="features_item_title"><a href="#">Well documented</a></div>
									<div class="features_item_text">
										<p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CTA -->
			<div class="cta">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="cta_content text-center d-flex flex-row align-items-center justify-content-center">
								<div class="cta_text"><a href="#">Make a good investment today!</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Services -->
			<div class="services">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row flex-wrap align-items-start justify-content-start">
							<!-- Service -->
							<div class="service">
								<div class="service_icon"><img src="{{ asset('template/invest/images/service_1.svg') }}" class="svg" alt=""></div>
								<div class="service_title">Transport & Logistics Consulting</div>
								<div class="service_text">
									<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
								</div>
								<div class="service_link"><a href="#">Read More</a></div>
							</div>
							<!-- Service -->
							<div class="service">
								<div class="service_icon">
									<img src="{{ asset('template/invest/images/service_2.svg') }}" class="svg" alt=""></div>
								<div class="service_title">Complete Financial Planning</div>
								<div class="service_text">
									<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
								</div>
								<div class="service_link"><a href="#">Read More</a></div>
							</div>
							<!-- Service -->
							<div class="service">
								<div class="service_icon"><img src="{{ asset('template/invest/images/service_3.svg') }}" class="svg" alt=""></div>
								<div class="service_title">Safe & Secure Transactions</div>
								<div class="service_text">
									<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
								</div>
								<div class="service_link"><a href="#">Read More</a></div>
							</div>
							<!-- Service -->
							<div class="service">
								<div class="service_icon"><img src="{{ asset('template/invest/images/service_4.svg') }}" class="svg" alt=""></div>
								<div class="service_title">Private Internet Banking</div>
								<div class="service_text">
									<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
								</div>
								<div class="service_link"><a href="#">Read More</a></div>
							</div>
							<!-- Service -->
							<div class="service">
								<div class="service_icon"><img src="{{ asset('template/invest/images/service_5.svg') }}" class="svg" alt=""></div>
								<div class="service_title">Best Business Consulting</div>
								<div class="service_text">
									<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
								</div>
								<div class="service_link"><a href="#">Read More</a></div>
							</div>
							<!-- Service -->
							<div class="service">
								<div class="service_icon"><img src="{{ asset('template/invest/images/service_6.svg') }}" class="svg" alt=""></div>
								<div class="service_title">Consumer Products Consulting</div>
								<div class="service_text">
									<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
								</div>
								<div class="service_link"><a href="#">Read More</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- System -->
			<div class="system">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 nopadding">
							<div class="system_content">
								<div class="system_title_container">
									<div class="system_subtitle">take a look at our</div>
									<div class="system_title">Get to know the NASDAQ trading system</div>
									<div class="system_text">Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo</div>
								</div>
								<div class="system_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<!-- System Item -->
									<div class="system_item">
										<div class="system_item_icon"><img class="svg" src="{{ asset('template/invest/images/system_1.svg') }}" alt=""></div>
										<div class="system_item_title">savings</div>
									</div>
									<!-- System Item -->
									<div class="system_item">
										<div class="system_item_icon"><img class="svg" src="{{ asset('template/invest/images/system_2.svg') }}" alt=""></div>
										<div class="system_item_title">online banking</div>
									</div>
									<!-- System Item -->
									<div class="system_item">
										<div class="system_item_icon"><img class="svg" src="{{ asset('template/invest/images/system_3.svg') }}" alt=""></div>
										<div class="system_item_title">wallet</div>
									</div>
									<!-- System Item -->
									<div class="system_item">
										<div class="system_item_icon"><img class="svg" src="{{ asset('template/invest/images/system_4.svg') }}" alt=""></div>
										<div class="system_item_title">gold investment</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 nopadding">
							<div class="system_image">
								<div class="system_background" style="background-image:url()"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Info -->
			<div class="info">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 nopadding order-lg-1 order-2">
							<div class="info_image">
								<div class="info_background" style="background-image:url()"></div>
							</div>
						</div>
						<div class="col-lg-6 nopadding order-lg-2 order-1">
							<div class="info_content">
								<div class="info_title_container">
									<div class="info_subtitle">take a look at our</div>
									<div class="info_title">Get to know the NASDAQ trading system</div>
									<div class="info_text">Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo</div>
								</div>
							</div>
							<div class="info_items">
								<!-- Info Item -->
								<div class="info_item">
									<div class="info_item_icon"><img src="{{ asset('template/invest/images/info_1.svg') }}" alt=""></div>
									<div class="info_item_content">
										<div class="info_item_title">Consumer Products Consulting</div>
										<div class="info_item_category">Online Courses</div>
									</div>
								</div>
								<!-- Info Item -->
								<div class="info_item">
									<div class="info_item_icon"><img src="{{ asset('template/invest/images/info_2.svg') }}" alt=""></div>
									<div class="info_item_content">
										<div class="info_item_title">Only the best advices</div>
										<div class="info_item_category">Awarded Traders</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Logos -->
			<div class="logos">
				<div class="container">
					<div class="row">
						<div class="col">
							<!-- Clients Slider -->
							<div class="clients_slider_container">
								<div class="owl-carousel owl-theme clients_slider">
									<!-- Slider Item -->
									<div class="owl-item clients_item">
										<img src="{{ asset('template/invest/images/logos_1.png') }}" alt="">
									</div>
									<!-- Slider Item -->
									<div class="owl-item clients_item">
										<img src="{{ asset('template/invest/images/logos_2.png') }}" alt="">
									</div>
									<!-- Slider Item -->
									<div class="owl-item clients_item">
										<img src="{{ asset('template/invest/images/logos_3.png') }}" alt="">
									</div>
									<!-- Slider Item -->
									<div class="owl-item clients_item">
										<img src="{{ asset('template/invest/images/logos_4.png') }}" alt="">
									</div>
									<!-- Slider Item -->
									<div class="owl-item clients_item">
										<img src="{{ asset('template/invest/images/logos_5.png') }}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Google Map -->
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
				<div class="map_contact">
					<div class="map_contact_inner d-flex flex-column align-items-start justify-content-center">
						<div class="map_contact_title">Head Office</div>
						<ul>
							<li>Address: 1481 Creekside Lane Avila Beach, CA 93424 </li>
							<li>Phone: +53 345 7953 32453</li>
							<li>Email: support@iropin.org</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Footer -->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<!-- Footer Column -->
						<div class="col-lg-3 footer_col">
							<div class="footer_about">
								<div class="logo_container footer_logo">
									<div class="logo">
										<a href="#">
											<div class="logo_line_1"><span>in</span>vest</div>
											<div class="logo_line_2">Blockchain</div>
											<div class="logo_img"><img src="{{ asset('template/invest/images/logo.png') }}" alt=""></div>
										</a>
									</div>
								</div>
								<p class="footer_about_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec.</p>
							</div>
						</div>
						<!-- Footer Column -->
						<div class="col-lg-3 footer_col">
							<div class="footer_links">
								<div class="footer_title">Useful Links</div>
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Case Studies</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Consulting</a></li>
									<li><a href="#">Commodities</a></li>
									<li><a href="#">Insurance</a></li>
									<li><a href="#">Trades</a></li>
									<li><a href="#">Planning</a></li>
									<li><a href="#">Finance</a></li>
									<li><a href="#">Crypto</a></li>
								</ul>
							</div>
						</div>
						<!-- Footer Column -->
						<div class="col-lg-6 footer_col">
							<div class="footer_newsletter">
								<div class="footer_title">Subscribe to our newsletter</div>
								<form action="#" class="footer_newsletter_form">
									<input type="email" class="footer_newsletter_input" placeholder="Your E-mail" required="required">
									<button class="footer_newsletter_button" type="submit">subscribe</button>
								</form>
								<div class="footer_newsletter_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec.</div>
								<div class="footer_social">
									<ul>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-4 order-md-1 order-2">
								<div class="copyright_content d-flex flex-row align-items-center justify-content-start">
									<div class="cr">
										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
										Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-8 order-md-2 order-1">
							<nav class="footer_nav d-flex flex-row align-items-center justify-content-md-end">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
		</div>
		</footer>
		</div>
		<script src="{{ asset('template/invest/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('template/invest/styles/bootstrap4/popper.js') }}"></script>
		<script src="{{ asset('template/invest/styles/bootstrap4/bootstrap.min.js') }}"></script>
		<script src="{{ asset('template/invest/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
		<script src="{{ asset('template/invest/plugins/easing/easing.js') }}"></script>
		<script src="{{ asset('template/invest/plugins/parallax-js-master/parallax.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
		<script src="{{ asset('template/invest/js/financial_custom.js') }}"></script>
	</body>
</html>