<nav class="navbar top-navbar col-lg-12 col-12 p-0">
	<div class="nav-top flex-grow-1">
		<div class="container d-flex flex-row h-100 align-items-center">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a class="navbar-brand brand-logo" href="#"><img src="/images/logo.png" alt="logo" /> <strong>SBL
						System</strong></a>
				<a class="navbar-brand brand-logo-mini" href="#"><img src="/images/logo.png" alt="logo" /></a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end flex-grow-1">
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
							data-toggle="dropdown">
							<i class="mdi mdi-arrow-down-bold-hexagon-outline mx-0"></i>
							<span class="count"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
							aria-labelledby="notificationDropdown">
							<a class="dropdown-item">
								<p class="mb-0 font-weight-normal float-left">Booking Baru
								</p>
								<span class="badge badge-pill badge-warning float-right">View all</span>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-success">
										<i class="mdi mdi-information mx-0"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-medium">SHP/10/02/181</h6>
									<p class="font-weight-light small-text">
										14 Februari 2019
										<p>Hanse Colonel Prilin</p>
										<p><b> Rp. 56,000</b></p>
									</p>
								</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
							data-toggle="dropdown" aria-expanded="false">
							<i class="mdi mdi-email-outline mx-0"></i>
							<span class="count"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
							aria-labelledby="messageDropdown">
							<div class="dropdown-item">
								<p class="mb-0 font-weight-normal float-left">No Approval Request
								</p>
								<span class="badge badge-info badge-pill float-right">View all</span>
							</div>
							<!-- <div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
								</div>
								<div class="preview-item-content flex-grow">
									<h6 class="preview-subject ellipsis font-weight-medium">David Grey
										<span class="float-right font-weight-light small-text">1 Minutes ago</span>
									</h6>
									<p class="font-weight-light small-text">
										The meeting is cancelled
									</p>
								</div>
							</a> -->
						</div>
					</li>
					<li class="nav-item nav-profile dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
							<img src="https://via.placeholder.com/36x36" alt="profile" />
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown"
							aria-labelledby="profileDropdown">
							<a class="dropdown-item">
								<i class="mdi mdi-settings text-primary"></i>
								Settings
							</a>
							<div class="dropdown-divider"></div>
							<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
							</form>
							<a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">
								<i class="mdi mdi-logout text-primary"></i>
								Logout
							</a>
						</div>
					</li>
					<li class="nav-item nav-settings d-none d-lg-block">
						<a class="nav-link" href="#">
							<i class="mdi mdi-apps"></i>
						</a>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
					data-toggle="horizontal-menu-toggle">
					<span class="mdi mdi-menu"></span>
				</button>
			</div>
		</div>
	</div>
</nav>