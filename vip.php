<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>Affiliate Mentor</title>
		<meta name="description" content="" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0, minimum-scale=1.0"
		/>
		<link
			rel="stylesheet"
			href="https://www.affiliatementor.com/css/bootstrap/4.1.3/jcs/bootstrap.css"
		/>
		<link
			rel="stylesheet"
			href="https://www.affiliatementor.com/css/fa/5.3.1/css/all.css"
		/>
		<script src="https://www.affiliatementor.com/js/jquery/3.3.1/jquery.js"></script>
		<script src="https://www.affiliatementor.com/js/bootstrap/4.1.3/jcs/bootstrap.bundle.js"></script>
		<script src="./countdown.js"></script>
		<link
			rel="stylesheet"
			href="https://www.affiliatementor.com/backoffice/css/navbar.css"
		/>
		<link
			rel="stylesheet"
			href="https://www.affiliatementor.com/backoffice/css/main.css"
		/>
		<link
			rel="stylesheet"
			href="https://pro.fontawesome.com/releases/v5.7.2/css/all.css"
			integrity="sha384-6jHF7Z3XI3fF4XZixAuSu0gGKrXwoX/w3uFPxC56OtjChio7wtTGJWRW53Nhx6Ev"
			crossorigin="anonymous"
		/>
		<link
			href="https://www.affiliatementor.com/images/favicon.png"
			rel="shortcut icon"
			type="image/x-icon"
		/>
		<link
			href="https://www.affiliatementor.com/images/webclip.png"
			rel="apple-touch-icon"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="./style.css" />
	</head>
	<body>
		<div class="jcsnav">
			<div class="container pb-2 pt-2">
				<div class="d-none d-md-flex row flex-row align-items-center">
					<div class="col-md-3 pl-0">
						<img
							src="https://www.affiliatementor.com/images/logo.png"
							class="img img-fluid"
						/>
					</div>
					<div class="d-flex flex-grow-1 justify-content-end p-2">
						<div class="d-flex flex-grow-1 justify-content-center">
							<a
								href="https://www.affiliatementor.com/backoffice/dashboard/index.php"
								class="jcsnav-item"
								data-id="dash-nav"
							>
								<i
									class="d-block fal fa-tachometer-alt fa-fw fa-2x mx-auto"
								></i>
								<span class="d-block">Dashboard</span>
							</a>
							<a
								href="https://www.affiliatementor.com/backoffice/training/index.php"
								class="jcsnav-item"
								data-id="team-nav"
							>
								<i class="d-block fal fa-chalkboard fa-fw fa-2x mx-auto"></i>
								<span class="d-block">Training</span>
							</a>
							<a
								href="https://www.affiliatementor.com/backoffice/marketing/index.php"
								class="jcsnav-item"
								data-id="marketing-nav"
							>
								<i class="d-block fal fa-bullhorn fa-fw fa-2x mx-auto"></i>
								<span class="d-block">Marketing</span>
							</a>
							<a
								href="https://www.affiliatementor.com/backoffice/contacts/leads.php"
								class="jcsnav-item"
								data-id="contacts-nav"
							>
								<i class="d-block fal fa-users fa-fw fa-2x mx-auto"></i>
								<span class="d-block">Contacts</span>
							</a>
							<a
								href="https://www.affiliatementor.com/backoffice/leaderboards/index.php"
								class="jcsnav-item"
								data-id="events-nav"
							>
								<i class="d-block fal fa-trophy fa-fw fa-2x mx-auto"></i>
								<span class="d-block">Leader Boards</span>
							</a>
							<a
								href="https://www.affiliatementor.com/backoffice/vip/index.php"
								class="jcsnav-item active"
								data-id="vip-nav"
							>
								<i
									class="d-block fal fa-envelope-open-dollar fa-fw fa-2x mx-auto"
								></i>
								<span class="d-block">VIP Club</span>
							</a>
						</div>
						<div class="ml-auto">
							<a
								href="https://www.affiliatementor.com/backoffice/account/index.php"
								class="jcsnav-item pr-0"
								data-id="profile-nav"
							>
								<i class="fal fa-user-circle fa-fw fa-2x"></i>
								<span class="d-block">My Business</span>
							</a>
						</div>
					</div>
				</div>

				<div class="d-sm-flex d-md-none row flex-row align-items-center">
					<div class="col-sm-3 pl-0">
						<img
							src="https://www.affiliatementor.com/images/logo_nav_new.png"
							class="img img-fluid"
						/>
					</div>
					<button
						class="navbar-toggler navbar-dark"
						type="button"
						data-toggle="collapse"
						data-target="#backoffice_nav"
						aria-controls="backoffice_nav"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse p-3" id="backoffice_nav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle"
									href="#"
									id="dropdown1"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									>Dashboard</a
								>
								<div class="dropdown-menu" aria-labelledby="dropdown1">
									<a
										class="dropdown-item"
										href="/backoffice/dashboard/index.php"
										>Main Dashboard</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/dashboard/step1.php"
										>Fast Start</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/dashboard/roadmap.php"
										>$10K Roadmap</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/dashboard/masterminds.php"
										>Bonuses</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/dashboard/badges.php"
										>Badges</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/dashboard/schedule.php"
										>Schedule</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/dashboard/monitize_traffic.php"
										>Traffic Monitization</a
									>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle"
									href="#"
									id="dropdown1"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									>Products</a
								>
								<div class="dropdown-menu" aria-labelledby="dropdown1">
									<a
										class="dropdown-item"
										href="/backoffice/products/mentor_home.php"
										>Broadcast Mentor</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/products/pages_home.php"
										>Pages</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/products/swipes.php"
										>Swipes</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/products/webinars.php"
										>Webinars</a
									>
									<a
										class="dropdown-item"
										href="https://www.listleverage.com/mastermind/backoffice/dashboard/index.php"
										target="_blank"
										>Millionaire Mastermind</a
									>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle"
									href="#"
									id="dropdown1"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									>Marketing</a
								>
								<div class="dropdown-menu" aria-labelledby="dropdown1">
									<a
										class="dropdown-item"
										href="/backoffice/marketing/links.php"
										>Tracking Links</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/marketing/campaigns.php"
										>Campaigns</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/marketing/emails.php"
										>Emails</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/marketing/banners.php"
										>Banners</a
									>
									<a class="dropdown-item" href="/backoffice/training/index.php"
										>Training</a
									>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle"
									href="#"
									id="dropdown1"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									>Contacts</a
								>
								<div class="dropdown-menu" aria-labelledby="dropdown1">
									<a class="dropdown-item" href="/backoffice/contacts/index.php"
										>Leads</a
									>
									<a class="dropdown-item" href="/backoffice/contacts/team.php"
										>Team</a
									>
								</div>
							</li>
							<!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Team</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown1">
                            <a class="dropdown-item" href="/backoffice/team/index.php">Team</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Leads</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown1">
                            <a class="dropdown-item" href="/backoffice/leads/index.php">Leads</a>
                        </div>
                    </li>-->
							<!--
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
						<div class="dropdown-menu" aria-labelledby="dropdown1">
							<a class="dropdown-item" href="/backoffice/events/index.php">Events</a>
						</div>
					</li>
					-->
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle"
									href="#"
									id="dropdown1"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									>Leader Boards</a
								>
								<div class="dropdown-menu" aria-labelledby="dropdown1">
									<a
										class="dropdown-item"
										href="/backoffice/leaderboards/index.php"
										>Leader Boards</a
									>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle"
									href="#"
									id="dropdown07"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									>My Business</a
								>
								<div class="dropdown-menu" aria-labelledby="dropdown07">
									<a
										class="dropdown-item"
										href="/backoffice/account/profile.php"
										>Profile</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/account/commissions.php"
										>Commissions</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/account/payments.php"
										>Payments</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/account/billing.php"
										>Billing</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/account/ewallet.php"
										>eWallet</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/account/autoresponders.php"
										>Autoresponders</a
									>
									<a class="dropdown-item" href="/backoffice/account/help.php"
										>Help</a
									>
									<a
										class="dropdown-item"
										href="/backoffice/index.php?action=logout"
										>Logout</a
									>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="d-none d-md-block jcssubnav" id="profile-nav">
				<div class="container d-flex flex-row justify-content-center">
					<div class="d-flex w-100">
						<a
							href="/backoffice/vip/twobytwo.php"
							class="flex-fill text-center jcsnav-sub-item"
						>
							<i
								class="fal fa-cash-register fa-fw fa-lg d-block mx-auto mt-2"
							></i>
							<span class="d-block">2x2 Matrix</span>
						</a>
						<a
							href="/backoffice/vip/team.php"
							class="flex-fill text-center jcsnav-sub-item"
						>
							<i class="fal fa-users-cog fa-fw fa-lg d-block mx-auto mt-2"></i>
							<span class="d-block">Matrix Team</span>
						</a>
						<a
							href="/backoffice/vip/products.php"
							class="flex-fill text-center jcsnav-sub-item"
						>
							<i
								class="fal fa-map-marked-alt fa-fw fa-lg d-block mx-auto mt-2"
							></i>
							<span class="d-block">Digital Products</span>
						</a>
						<a
							href="/backoffice/vip/traffic.php"
							class="flex-fill text-center jcsnav-sub-item"
						>
							<i class="fal fa-award fa-fw fa-lg d-block mx-auto mt-2"></i>
							<span class="d-block">Traffic Store</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="p-3 mb-4 rounded border bg-dark shadow-sm">
						<div class="row p-3">
							<div class="col-sm-12 border-bottom">
								<h3 style="color: #efefef">VIP Marketing Club</h3>
							</div>
						</div>
						<div class="row pl-2 ml-2 pr-2 mr-2 justify-content-center">
							<div class="col-sm-12 p-2 m-2">
								<div class="row">
									<div class="col-lg-6 col-xl-4 mb-4">
										<div
											class="marketing-widget d-flex flex-column font-garamond text-center bg-gray rounded-10 h-100"
										>
											<h2
												class="text-black bg-gradient-golden py-2 px-3 m-0 font-weight-bold"
											>
												START HERE!
											</h2>
											<div class="p-3 my-auto">
												<p class="h4 text-white font-weight-bold">
													LAUNCH<br />YOUR CEO BRAND!
												</p>
												<a href="#" class="btn-golden px-3 h5 mt-2"
													>GO <i class="fas fa-caret-right"></i
												></a>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-xl-4 mb-4">
										<div
											class="marketing-widget d-flex flex-column font-garamond bg-light-gray h-100"
										>
											<h4
												class="font-weight-bold m-0 text-black bg-gradient-diamond px-3 py-2 text-center"
											>
												PLATINUM WORKSHOPS
											</h4>

											<div class="d-flex h-100">
												<div class="writing-mode-vertical admit-one mr-1">
													<p
														class="text-white orientation-mixed orientation-mixed m-0 text-center"
													>
														ADMIT ONE
													</p>
												</div>

												<div class="p-2 my-auto mx-auto">
													<div
														class="d-flex justify-content-center align-items-center flex-gap-2 countdown"
														data-date="2024-12-24"
													></div>
													<p
														class="text-white font-garamond text-center line-height-1 m-0"
													>
														Join us Jan 7th 2025 , for an in-depth interview
														w/Jason Statham - Let's Find Out How He Does It !
													</p>
													<div
														class="d-flex align-items-center justify-content-center flex-gap-2"
													>
														<h4
															class="m-0 font-garamond text-mystic line-height-1"
														>
															LIVE EVENT
														</h4>
														<a href="#" class="btn-golden px-2 h5 mt-2"
															>REGISTER <i class="fas fa-caret-right"></i
														></a>
													</div>
													<p class="m-0 text-center line-height-1">
														<a href="#" class="text-white"
															><small>Click To Access Past Recordings</small></a
														>
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-xl-4 mb-4">
										<div
											class="marketing-widget d-flex flex-column bg-academy h-100"
										>
											<h1
												class="text-center text-gradient-golden py-2 px-3 m-0 font-weight-bold"
											>
												C.O.R.E
											</h1>
											<div class="d-flex flex-column h-100 px-3">
												<p class="text-center text-mystic font-garamond mb-3">
													Clicks <i class="fas fa-arrow-right mx-1"></i> Optins
													<i class="fas fa-arrow-right mx-1"></i> Revenue
													<i class="fas fa-arrow-right mx-1"></i> Email List
												</p>
												<div
													class="d-flex align-items-center justify-content-center flex-gap-3 my-auto"
												>
													<h2
														class="cap-title m-0 font-garamond text-mystic line-height-1"
													>
														<img
															src="./img/icon-cap.png"
															alt="Crown image"
															class="object-contain d-block"
														/>
														ACADEMY
													</h2>
													<a href="#" class="btn-golden px-3 h5 mt-2"
														>GO <i class="fas fa-caret-right"></i
													></a>
												</div>
											</div>
											<div
												class="d-flex align-items-center justify-content-center px-2 py-1 bg-gradient-golden mt-auto"
											>
												<p class="mb-0 text-black font-weight-bold">
													YOU QUALIFY FOR 2X CLICK CASH
												</p>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-xl-4 mb-4">
										<div
											class="marketing-widget d-flex flex-column bg-gray rounded-10"
										>
											<div
												class="d-flex align-items-center justify-content-center p-2 mt-3"
											>
												<img
													src="./img/icon-traffic-store.png"
													alt="Lock image"
													class="object-contain mr-2"
												/>
												<h3
													class="text-white font-weight-bold m-0 font-garamond"
												>
													TRAFFIC STORE
												</h3>
											</div>

											<div class="text-center my-auto">
												<a href="#" class="btn-golden px-3 h5"
													>GO <i class="fas fa-caret-right"></i
												></a>
											</div>
											<div
												class="d-flex align-items-center justify-content-center mt-auto bg-gradient-golden p-2"
											>
												<p
													class="mb-0 text-black font-weight-bold h5 line-height-1 text-center"
												>
												CLICK HERE TO CLAIM YOUR<br/>$2,500 Free Traffic
												</p>
											</div>
										</div>

										<!-- widget visible from desktop -->
										<div
											class="marketing-widget d-none d-xl-flex flex-column bg-light-gray rounded-10 mt-4"
										>
											<div class="d-flex justify-content-center px-3 pt-4">
												<h2
													class="cap-title font-weight-bold m-0 font-garamond text-gradient-golden mt-4"
												>
													<img
														src="./img/icon-crown-vip.png"
														alt="Crown image"
														class="object-contain d-block"
													/>
													VIP FUNNEL HUB
												</h2>
											</div>

											<div class="text-center my-auto">
												<a href="#" class="btn-golden px-3 h5 m-0"
													>GO <i class="fas fa-caret-right"></i
												></a>
											</div>

											<div
												class="d-flex align-items-center justify-content-center px-2 py-1 bg-gray mt-auto"
											>
												<p class="mb-0 text-white font-weight-bold h4">
													COMING SOON
												</p>
											</div>
										</div>
									</div>

									<div class="col-lg-12 col-xl-8 mb-4">
										<div class="bg-certification px-3 px-md-5 px-lg-5 pt-5 pb-4">
											<h2
												class="font-garamond font-weight-bold d-flex justify-content-center mb-4"
											>
												<img
													src="./img/icon-lock-vip.png"
													alt="Lock image"
													class="object-contain mr-3 d-none d-md-block"
												/>
												<span class="cap-title text-gradient-golden">
													<img
														src="./img/icon-crown-vip.png"
														alt="Crown image"
														class="object-contain d-block"
													/>
													VIP CERTIFICATION TRAINING</span
												>
											</h2>
											<ul class="certification-list font-garamond text-center">
												<li class="bg-training open">
													<div class="d-flex flex-column h-100 py-2">
														<h5 class="mt-auto">Traffic<br />Mastery</h5>
														<a
															href="#"
															class="btn-diamond px-2 mt-auto align-self-center"
															>GO <i class="fas fa-caret-right"></i
														></a>
													</div>
												</li>
												<li class="bg-training">
													<div class="d-flex flex-column h-100 py-2">
														<h5 class="mt-auto">Email<br />Mastery</h5>
														<a
															href="#"
															class="btn-diamond px-2 mt-auto align-self-center"
															>UPGRADE <i class="fas fa-caret-right"></i
														></a>
													</div>
												</li>
												<li class="bg-training">
													<div class="d-flex flex-column h-100 py-2">
														<h5 class="mt-auto">Cold Email<br />Mastery</h5>
														<a
															href="#"
															class="btn-diamond px-2 mt-auto align-self-center"
															>UPGRADE <i class="fas fa-caret-right"></i
														></a>
													</div>
												</li>
												<li class="bg-training">
													<div class="d-flex flex-column h-100 py-2">
														<h5 class="mt-auto">
															A.I Advertising<br />Mastery
														</h5>
														<a
															href="#"
															class="btn-diamond px-2 mt-auto align-self-center"
															>UPGRADE <i class="fas fa-caret-right"></i
														></a>
													</div>
												</li>
												<li class="bg-training">
													<div class="d-flex flex-column h-100 py-2">
														<h5 class="mt-auto">Funnel<br />Mastery</h5>
														<a
															href="#"
															class="btn-diamond px-2 mt-auto align-self-center"
															>UPGRADE <i class="fas fa-caret-right"></i
														></a>
													</div>
												</li>
												<li class="bg-training">
													<div class="d-flex flex-column h-100 py-2">
														<h5 class="mt-auto">Coming<br />Soon</h5>
														<a
															href="#"
															class="btn-diamond px-2 mt-auto align-self-center"
															>UPGRADE <i class="fas fa-caret-right"></i
														></a>
													</div>
												</li>
												<li class="bg-training">
													<div class="d-flex flex-column h-100 py-2">
														<h5 class="mt-auto">Coming<br />Soon</h5>
														<a
															href="#"
															class="btn-diamond px-2 mt-auto align-self-center"
															>UPGRADE <i class="fas fa-caret-right"></i
														></a>
													</div>
												</li>
												<li class="bg-training">
													<div class="d-flex flex-column h-100 py-2">
														<h5 class="mt-auto">Coming<br />Soon</h5>
														<a
															href="#"
															class="btn-diamond px-2 mt-auto align-self-center"
															>UPGRADE <i class="fas fa-caret-right"></i
														></a>
													</div>
												</li>
											</ul>
											<div class="mt-4 text-center">
												<a href="#" class="text-white font-garamond m-0 h5">Click To Access All Trainings & Certifications</a>
											</div>
										</div>
									</div>

									<!-- widget hidden from desktop -->
									<div class="col-12 d-xl-none mb-4">
										<div
											class="marketing-widget d-flex flex-column bg-light-gray rounded-10 h-100"
										>
											<div class="d-flex justify-content-center px-3 pt-4">
												<h2
													class="cap-title font-weight-bold m-0 font-garamond text-white mt-4"
												>
													<img
														src="./img/icon-crown.png"
														alt="Crown image"
														class="object-contain d-block"
													/>
													VIP FUNNEL HUB
												</h2>
											</div>

											<div class="text-center my-auto">
												<a href="#" class="btn-diamond px-3 h5 m-0"
													>UPGRADE <i class="fas fa-caret-right"></i
												></a>
											</div>

											<div
												class="d-flex align-items-center justify-content-center px-2 py-1 bg-gray mt-auto"
											>
												<img
													src="./img/icon-lock.png"
													alt="Lock image"
													class="object-contain mr-3 d-none d-md-block"
												/>
												<p class="mb-0 text-white font-weight-bold h4">
													GO VIP &AMP; UNLOCK
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mb-5 mt-5">
			<div class="row">
				<div class="col-sm-12 text-center text-white-50">
					<small>
						&copy; 2024 Affiliate Mentor - All Rights Reserved<br /><a
							href="/legal/index.php"
							target="_blank"
							class="text-white-50"
							>click here for terms & disclaimers</a
						>
					</small>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function () {
				$('body').css('padding-top', '133px');
			});
		</script>
	</body>
</html>
