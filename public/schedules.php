<?php
require_once('template/head_start.php');
?>
<style>
	.chart-wrapper ul {
		list-style: none;
	}
.chart-wrapper {
  max-width: 1150px;
  padding: 0 10px;
  margin: 0 auto;
}


/* CHART-VALUES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.chart-wrapper .chart-values {
  position: relative;
  display: flex;
  margin-bottom: 20px;
  font-weight: bold;
  font-size: 1.2rem;
}

.chart-wrapper .chart-values li {
  flex: 1;
  min-width: 80px;
  text-align: center;
}

.chart-wrapper .chart-values li:not(:last-child) {
  position: relative;
}

.chart-wrapper .chart-values li:not(:last-child)::before {
  content: '';
  position: absolute;
  right: 0;
  height: 510px;
  border-right: 1px solid var(--divider);
}


/* CHART-BARS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.chart-wrapper .chart-bars li {
  position: relative;
  color: white;
  margin-bottom: 15px;
  font-size: 16px;
  border-radius: 10px;
  padding: 10px 20px;
  width: 0;
  opacity: 0;
  transition: all 0.65s linear 0.2s;
  text-align: center;
}

@media screen and (max-width: 600px) {
  .chart-wrapper .chart-bars li {
	padding: 10px;
  }
}

/* ---------- TimeFrame Slider ------- */
#slider-timeframe {
	height: 18px;
}
#slider-timeframe .noUi-connect {
	background: #c0392b;
}
#slider-timeframe .noUi-handle {
	height: 21px;
	width: 21px;
	top: -1px;
	right: -9px;
	border-radius: 10px;
}
#slider-timeframe .noUi-connects {
	background: #D5D5D5
}
#slider-timeframe .noUi-connect {
	background: #7BB5BD;
}
#slider-timeframe .noUi-handle {
	background: #105C6B;
	box-shadow: none;
}
#slider-timeframe .noUi-handle:before, #slider-timeframe .noUi-handle:after {
	content: none;
}
#slider-timeframe.noUi-target {
	border: none;
}
#slider-timeframe .noUi-tooltip {
	border: 0;
	font-size: 12px;
}
/* ---------- Zoom Slider ------- */
#slider-zoom {
	height: 8px;
}
#slider-zoom .noUi-connect {
	background: #C4C4C4;
}
#slider-zoom .noUi-connects {
	background: #C4C4C4
}
#slider-zoom .noUi-handle {
	border: 2px solid #C4C4C4;
	height: 16px;
	width: 16px;
	top: -3px;
	right: -8px; /* half the width */
	border-radius: 8px;
}
#slider-zoom .noUi-handle:before, #slider-zoom .noUi-handle:after {
	content: none;
}
#slider-zoom.noUi-target {
	border: none;
}
</style>
<link href="assets/css/nouislider.css" rel="stylesheet">
<?php
require_once('template/page_start.php');
require_once('template/sidebar.php');
?>
		<div id="content_box" class="container-fluid">
			<?php
			require_once('template/page_header.php');
			?>
			<div class="block-wrap">
				<h2>Schedules</h2>
				<div class="chart-wrapper">
					<ul class="chart-values">
						<li>sun</li>
						<li>mon</li>
						<li>tue</li>
						<li>wed</li>
						<li>thu</li>
						<li>fri</li>
						<li>sat</li>
					</ul>
					<ul class="chart-bars">
						<li class="gantt_task" data-duration="tue½-wed" data-color="#b03532">Task 1</li>
						<li class="gantt_task" data-duration="wed-sat" data-color="#33a8a5">Task 2</li>
						<li class="gantt_task" data-duration="sun-tue" data-color="#30997a">Task 3</li>
						<li class="gantt_task" data-duration="tue½-thu" data-color="#6a478f">Task 4</li>
						<li class="gantt_task" data-duration="mon-tue½" data-color="#da6f2b">Task 5</li>
						<li class="gantt_task" data-duration="wed-wed" data-color="#3d8bb1">Task 6</li>
						<li class="gantt_task" data-duration="thu-fri½" data-color="#e03f3f">Task 7</li>
						<li class="gantt_task" data-duration="mon½-wed½" data-color="#59a627">Task 8</li>
						<li class="gantt_task" data-duration="fri-sat" data-color="#4464a1">Task 9</li>
					</ul>
				</div>
				<div style="margin-top: 20px">
					<div style="display:inline-block; width:22px;margin-right:5px">
						<button id="timeframeBack" class="btn-clean d-flex align-items-center" style="visibility:hidden;cursor:pointer;padding-right: 0;">
							<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10 -1.76033e-05L10 3.57141L3.57143 9.99998L10 16.4286L10 20L5.71428 15.7143L1.42857 11.4286L-2.78223e-07 9.99998L5.71428 4.2857L10 -1.76033e-05Z" fill="#C4C4C4"/>
							</svg>
						</button>
					</div>
					<div style="display:inline-block;width:calc(100% - 70px);">
						<div id="slider-timeframe" class="slider-styled"></div>
					</div>
					<div style="display:inline-block; width:22px;margin-left:5px">
						<button id="timeframeForward" class="btn-clean d-flex align-items-center" style="visibility:hidden;cursor:pointer;padding-left: 0;">
							<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.03312e-06 20L1.18923e-06 16.4286L6.42857 10L1.75124e-06 3.57145L1.90735e-06 1.72059e-05L4.28572 4.28573L8.57143 8.57145L10 10L4.28571 15.7143L1.03312e-06 20Z" fill="#C4C4C4"/>
							</svg>
						</button>
					</div>
				</div>
				<div style="margin-top:10px">
					<div style="width: 250px;display:inline-block;">
						<div style="display:inline-block;width:22px;justify-content: flex-end;margin-right:5px">
							<button id="zoomIn" class="btn-clean d-flex align-items-center" style="cursor:pointer">
								<svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22" stroke="#68736F">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7" />
								</svg>
							</button>
						</div>
						<div style="display:inline-block;width:calc(100% - 70px);vertical-align: super;">
							<div id="slider-zoom" class="slider-styled"></div>
						</div>
						<div style="display:inline-block;width:22px;margin-left:5px">
							<button id="zoomOut" class="btn-clean d-flex align-items-center;" style="cursor:pointer;padding-left: 0;">
								<svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22" stroke="#68736F">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
								</svg>
							</button>
						</div>
					</div>
					<div style="display:inline-block;margin-left:20px;color:#68736F;">
						<p id="zoomSliderIndicator" style="margin-block-start:0;margin-block-end:0">1 Year, 8 Months</p>
					</div>
				</div>
			</div>
			<?php
			require_once('template/schedule_panel.php');
			?>
		</div>
		<?php
		require_once('template/password_panel.php');
		require_once('template/profile_panel.php');
		require_once('template/notifications_panel.php');
		
		?>
		<!-- Side Overlay-->
		<aside id="side-overlay">
			<!-- Side Header -->
			<div class="bg-image" style="background-color: #518B97;">
				<div class="bg-primary-op">
					<div class="content-header">
						<!-- User Avatar -->
						<a class="img-link me-1" href="#">
							<img class="img-avatar img-avatar48" src="https://github.com/mdo.png" alt="">
						</a>
						<!-- END User Avatar -->

						<!-- User Info -->
						<div class="ms-2">
							<a class="text-white fw-semibold" href="#">John Doe</a>
							<div class="text-white-75 fs-sm">Marketing</div>
						</div>
						<!-- END User Info -->

						<!-- Close Side Overlay -->
						<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
						<a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout"
							data-action="side_overlay_close">
							<i class="fa fa-times-circle"></i>
						</a>
						<!-- END Close Side Overlay -->
					</div>
				</div>
			</div>
			<!-- END Side Header -->

			<!-- Side Content -->
			<div class="content-side">
				<!-- Side Overlay Tabs -->
				<div class="block block-transparent pull-x pull-t mb-0">
					<ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab"
								data-bs-target="#so-settings" role="tab" aria-controls="so-settings"
								aria-selected="true">
								<i class="fa fa-fw fa-cog"></i>
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people"
								role="tab" aria-controls="so-people" aria-selected="false">
								<i class="far fa-fw fa-user-circle"></i>
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="so-profile-tab" data-bs-toggle="tab"
								data-bs-target="#so-profile" role="tab" aria-controls="so-profile"
								aria-selected="false">
								<i class="far fa-fw fa-edit"></i>
							</button>
						</li>
					</ul>
					<div class="block-content tab-content overflow-hidden" style="box-sizing: border-box;">
						<!-- Settings Tab -->
						<div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel"
							aria-labelledby="so-settings-tab">
							<div class="block mb-0">
								<!-- Sidebar -->
								<div class="block-content block-content-sm block-content-full bg-body">
									<span class="text-uppercase fs-sm fw-bold">Sidebar</span>
								</div>
								<div class="block-content block-content-full">
									<div class="row g-sm text-center">
										<div class="col-6 mb-1">
											<a id="darkGradientBTN"
												class="d-block py-3 bg-body-dark fw-semibold text-dark"
												href="javascript:void(0)">Dark</a>
										</div>
										<div class="col-6 mb-1">
											<a id="lightGradientBTN"
												class="d-block py-3 bg-body-dark fw-semibold text-dark"
												href="javascript:void(0)">Light</a>
										</div>
									</div>
								</div>
								<!-- END Sidebar -->

								<!-- Header -->
								<div class="block-content block-content-sm block-content-full bg-body">
									<span class="text-uppercase fs-sm fw-bold">Header</span>
								</div>
								<div class="block-content block-content-full">
									<div class="row g-sm text-center mb-2">
										<div class="col-6 mb-1">
											<a id="darkHeaderBTN"
												class="d-block py-3 bg-body-dark fw-semibold text-dark"
												href="javascript:void(0)">Dark</a>
										</div>
										<div class="col-6 mb-1">
											<a id="lightHeaderBTN"
												class="d-block py-3 bg-body-dark fw-semibold text-dark"
												href="javascript:void(0)">Light</a>
										</div>
										<div class="col-6 mb-1">
											<a id="whiteHeaderBTN"
												class="d-block py-3 bg-body-dark fw-semibold text-dark"
												href="javascript:void(0)">White</a>
										</div>
									</div>
								</div>
								<!-- END Header -->
							</div>
						</div>
						<!-- END Settings Tab -->

						<!-- People -->
						<div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel"
							aria-labelledby="so-people-tab">
							<div class="block mb-0">
								<!-- Online -->
								<div class="block-content block-content-sm block-content-full bg-body">
									<span class="text-uppercase fs-sm fw-bold">Online</span>
								</div>
								<div class="block-content">
									<ul class="nav-items">
										<li>
											<a class="d-flex py-2" href="#">
												<div class="flex-shrink-0 mx-3 overlay-container">
													<img class="img-avatar img-avatar48" src="assets/images/avatar.jpg"
														alt="">
													<span
														class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
												</div>
												<div class="flex-grow-1">
													<div class="fw-semibold">Marie Duncan</div>
													<div class="fs-sm text-muted">Photographer</div>
												</div>
											</a>
										</li>
										<li>
											<a class="d-flex py-2" href="#">
												<div class="flex-shrink-0 mx-3 overlay-container">
													<img class="img-avatar img-avatar48" src="assets/images/avatar.jpg"
														alt="">
													<span
														class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
												</div>
												<div class="flex-grow-1">
													<div class="fw-semibold">Jose Mills</div>
													<div class="fw-normal fs-sm text-muted">Web Designer</div>
												</div>
											</a>
										</li>
										<li>
											<a class="d-flex py-2" href="#">
												<div class="flex-shrink-0 mx-3 overlay-container">
													<img class="img-avatar img-avatar48" src="assets/images/avatar.jpg"
														alt="">
													<span
														class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
												</div>
												<div class="flex-grow-1">
													<div class="fw-semibold">Amanda Powell</div>
													<div class="fw-normal fs-sm text-muted">Web Developer</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<!-- Online -->
							</div>
						</div>
						<!-- END People -->

						<!-- Profile -->
						<div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel"
							aria-labelledby="so-profile-tab">
							<form action="#" method="POST" onsubmit="return false;">
								<div class="block mb-0">
									<!-- Personal -->
									<div class="block-content block-content-sm block-content-full bg-body">
										<span class="text-uppercase fs-sm fw-bold">Personal</span>
									</div>
									<div class="block-content block-content-full">
										<div class="mb-4">
											<label class="form-label">Username</label>
											<input type="text" readonly class="form-control"
												id="so-profile-username-static" value="Admin">
										</div>
										<div class="mb-4">
											<label class="form-label" for="so-profile-name">Name</label>
											<input type="text" class="form-control" id="so-profile-name"
												name="so-profile-name" value="John Doe">
										</div>
										<div class="mb-4">
											<label class="form-label" for="so-profile-email">Email</label>
											<input type="email" class="form-control" id="so-profile-email"
												name="so-profile-email" value="john.doe@example.com">
										</div>
									</div>
									<!-- END Personal -->

									<!-- Password Update -->
									<div class="block-content block-content-sm block-content-full bg-body">
										<span class="text-uppercase fs-sm fw-bold">Password Update</span>
									</div>
									<div class="block-content block-content-full">
										<div class="mb-4">
											<label class="form-label" for="so-profile-password">Current Password</label>
											<input type="password" class="form-control" id="so-profile-password"
												name="so-profile-password">
										</div>
										<div class="mb-4">
											<label class="form-label" for="so-profile-new-password">New Password</label>
											<input type="password" class="form-control" id="so-profile-new-password"
												name="so-profile-new-password">
										</div>
										<div class="mb-4">
											<label class="form-label" for="so-profile-new-password-confirm">Confirm New
												Password</label>
											<input type="password" class="form-control"
												id="so-profile-new-password-confirm"
												name="so-profile-new-password-confirm">
										</div>
									</div>
									<!-- END Password Update -->

									<!-- Submit -->
									<div class="block-content block-content-full border-top">
										<button type="submit" class="btn w-100 btn-alt-primary">
											<i class="fa fa-fw fa-save me-1 opacity-50"></i> Save
										</button>
									</div>
									<!-- END Submit -->
								</div>
							</form>
						</div>
						<!-- END Profile -->
					</div>
				</div>
				<!-- END Side Overlay Tabs -->
			</div>
			<!-- END Side Content -->
		</aside>
		<!-- END Side Overlay -->
	</div>
	<div id="bottomRightAI" class="fixed-action-btn direction-top">
		<a id="bottomRightAIBTN" class="btn-floating btn-large">
			<svg class="bi" viewBox="-10 0 42.55 25" width="40">
				<path
					d="M10.865 17.097c-2.289.805-5.172-.535-5.755-2.756-2.878-.005-5.086-1.408-5.11-3.886-.038-4.031 4.516-9.448 12-9.455 7.485-.007 11.996 5.312 12 10.329.004 5.017-4.182 6.897-7.607 6.263-.364 1.507-.171 3.578.232 4.747l-2.109.661c-.813-2.788-2.2-4.967-3.651-5.903zm-.692-9.276c-.691-.314-1.173-1.012-1.173-1.821 0-1.104.896-2 2-2s2 .896 2 2c0 .26-.05.509-.14.738 1.214.911 2.405 1.855 3.599 2.794.425-.333.96-.532 1.541-.532 1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5c-1.171 0-2.155-.807-2.426-1.895-1.201.098-2.404.173-3.606.254-.169.933-.987 1.641-1.968 1.641-1.104 0-2-.896-2-2 0-1.033.785-1.884 1.79-1.989.121-.731.252-1.46.383-2.19zm2.06-.246c-.297.232-.661.383-1.058.417l-.363 2.18c.504.224.898.651 1.08 1.177l3.647-.289c.047-.267.137-.519.262-.749l-3.568-2.736z" />
			</svg>
		</a>
		<a id="bottomRightAIBTN" class="btn-floating btn-large">
			<svg class="bi" viewBox="0 0 62.55 45" width="40">
				<defs>
					<style>
						.cls-1-logo {
							fill: #ffffff;
						}
					</style>
				</defs>
				<path class="cls-1-logo"
					d="M44.2,43.29a1.33,1.33,0,0,1-1.31,1.34H6.26A1.33,1.33,0,0,1,5,43.29V5.65a1.3,1.3,0,0,1,1.3-1.33H42.89A1.33,1.33,0,0,1,44.2,5.65v6.07h2.23v-6A3.63,3.63,0,0,0,42.85,2H6.22A3.6,3.6,0,0,0,2.68,5.7V43.34A3.64,3.64,0,0,0,6.26,47H42.89a3.64,3.64,0,0,0,3.58-3.68V38.57H44.2Z"
					transform="translate(-2.68 -2.02)" />
				<path class="cls-1-logo"
					d="M46.94,30.73V22.07h3.59V19.94H46.94V15.88H44.71v4.06H42.18v2.13h2.53v8.66a3.64,3.64,0,0,0,3.58,3.68H51v-2.3H48.29A1.38,1.38,0,0,1,46.94,30.73Z"
					transform="translate(-2.68 -2.02)" />
				<path class="cls-1-logo"
					d="M65.19,27.51c0-.46,0-.8,0-1a8,8,0,0,0-.89-3.64A5.91,5.91,0,0,0,62,20.48a7,7,0,0,0-3.42-.84,6.49,6.49,0,0,0-3.46.92,6.27,6.27,0,0,0-2.36,2.6,8.39,8.39,0,0,0-.86,3.89,8.32,8.32,0,0,0,.86,3.84,6,6,0,0,0,2.44,2.6,7.52,7.52,0,0,0,3.66.92,6,6,0,0,0,6.11-5H62.71a3.76,3.76,0,0,1-1.43,2.17,4,4,0,0,1-2.56.8,4.21,4.21,0,0,1-3.17-1.26,4.8,4.8,0,0,1-1.27-3.38v-.21H65.19Zm-9.36-4.73a4.17,4.17,0,0,1,2.81-1.09,4.42,4.42,0,0,1,3,1A4.16,4.16,0,0,1,63,25.54H54.49A3.89,3.89,0,0,1,55.83,22.78Z"
					transform="translate(-2.68 -2.02)" />
				<path class="cls-1-logo"
					d="M41.6,34.2V24.83A5,5,0,0,0,40.14,21,6,6,0,0,0,36,19.64a6.74,6.74,0,0,0-4.11,1.17A4.65,4.65,0,0,0,30,24.12h2.24a2.64,2.64,0,0,1,1.18-1.76,4,4,0,0,1,2.4-.67,3.7,3.7,0,0,1,2.57.8,2.77,2.77,0,0,1,.93,2.21v1H35.21A6.44,6.44,0,0,0,31,26.84a4,4,0,0,0-1.47,3.34A3.8,3.8,0,0,0,31,33.28a5.83,5.83,0,0,0,3.74,1.13A5.39,5.39,0,0,0,39.44,32v2.22H41.6Zm-2.28-5.86a4,4,0,0,1-1.18,3,4.49,4.49,0,0,1-3.25,1.13,3.42,3.42,0,0,1-2.24-.67,2,2,0,0,1-.82-1.71c0-1.59,1.06-2.39,3.14-2.39h4.35Z"
					transform="translate(-2.68 -2.02)" />
				<path class="cls-1-logo" d="M28.7,14.62H26.46V34.41H28.7Z" transform="translate(-2.68 -2.02)" />
				<path class="cls-1-logo"
					d="M21.2,31.81a4.17,4.17,0,0,1-2.4.63,4.26,4.26,0,0,1-2.73-.84A2.74,2.74,0,0,1,15,29.47H12.74a4.34,4.34,0,0,0,1.71,3.64,6.93,6.93,0,0,0,4.43,1.3,6.81,6.81,0,0,0,2.81-.55,4.74,4.74,0,0,0,2-1.54,3.84,3.84,0,0,0,.73-2.3,3.67,3.67,0,0,0-.73-2.39,4.1,4.1,0,0,0-1.92-1.25,19.9,19.9,0,0,0-3.05-.63c-.9-.13-1.55-.21-1.95-.29a2.39,2.39,0,0,1-1.06-.55,1.39,1.39,0,0,1-.41-1.13,1.78,1.78,0,0,1,.9-1.59,4.3,4.3,0,0,1,2.32-.62,3.55,3.55,0,0,1,2.32.75,2.75,2.75,0,0,1,1.05,1.88h2.24a4.57,4.57,0,0,0-1.71-3.39,6.37,6.37,0,0,0-4-1.17,6.3,6.3,0,0,0-2.72.55,4.49,4.49,0,0,0-1.92,1.54A4.07,4.07,0,0,0,13.06,24a3.15,3.15,0,0,0,.74,2.22,4.08,4.08,0,0,0,1.87,1.17,14.76,14.76,0,0,0,3,.59,17.25,17.25,0,0,1,2,.33,2.49,2.49,0,0,1,1.14.63,1.8,1.8,0,0,1,.45,1.29A2.07,2.07,0,0,1,21.2,31.81Z"
					transform="translate(-2.68 -2.02)" />
			</svg>
		</a>
		<a id="btn_ai_show" class="btn_ai_show">
			<!--<img src="assets/css/light-bulb-white.png">-->
			<span style="vertical-align: super;">Decision Center</span>
		</a>
		<div class="divAI">
			<div class="divAiHeader">
				<h5 class="divAiHeaderTitle">AI</h5>
				<button type="button" class="closeAI" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div id="slide1" class="splide">
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide">
							<div class="aiSlide">
								<h4>Intro</h4>
								<img src="assets/images/slide1.jpg">
							</div>
						</li>
						<li class="splide__slide">
							<div class="aiSlide">
								<h4>Alerts Panel</h4>
								<div class="row">
									<div class="col-6 header">Alert:</div>
									<div class="col-6 data">1</div>
								</div>
								<div class="row">
									<div class="col-6 header">Alert:</div>
									<div class="col-6 data">2</div>
								</div>
								<div class="row">
									<div class="col-6 header">Alert:</div>
									<div class="col-6 data">3</div>
								</div>
							</div>
						</li>
						<li class="splide__slide">
							<div class="aiSlide">
								<h4>Personal Assistant</h4>
								<div class="row">
									<div class="col-6 header">Memo:</div>
									<div class="col-6 data">Text</div>
								</div>
								<div class="row">
									<div class="col-6 header">Relevant Emails:</div>
									<div class="col-6 data">13</div>
								</div>
								<div class="row">
									<div class="col-6 header">Frequent Actions:</div>
									<div class="col-6 data">Email John Smith<br>Zoom "wood panel team"</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="topAI">
		<div id="slide2" class="splide">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<div class="aiSlide">
							<h4>Intro</h4>
							<img src="assets/images/slide1.jpg">
						</div>
					</li>
					<li class="splide__slide">
						<div class="aiSlide">
							<h4>Alerts Panel</h4>
							<div class="row">
								<div class="col-6 header">Alert:</div>
								<div class="col-6 data">1</div>
							</div>
							<div class="row">
								<div class="col-6 header">Alert:</div>
								<div class="col-6 data">2</div>
							</div>
							<div class="row">
								<div class="col-6 header">Alert:</div>
								<div class="col-6 data">3</div>
							</div>
						</div>
					</li>
					<li class="splide__slide">
						<div class="aiSlide">
							<h4>Personal Assistant</h4>
							<div class="row">
								<div class="col-6 header">Memo:</div>
								<div class="col-6 data">Text</div>
							</div>
							<div class="row">
								<div class="col-6 header">Relevant Emails:</div>
								<div class="col-6 data">13</div>
							</div>
							<div class="row">
								<div class="col-6 header">Frequent Actions:</div>
								<div class="col-6 data">Email John Smith<br>Zoom "wood panel team"</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div>
		<button id="decision_center_button" class="btn" aria-label="open menu">☰</button>
		<div id="decision_center">
			<ul>
				<li>
					<i class="fas fa-tachometer-alt fa-2x"></i>
				</li>
				<li>
					<i class="fas fa-atom fa-2x"></i>
				</li>
				<li>
					<i class="fas fa-calendar-alt fa-2x"></i>
				</li>
				<li>
					<i class="fas fa-chart-bar fa-2x"></i>
				</li>
				<li>
					<i class="fas fa-cogs fa-2x"></i>
				</li>
			</ul>
		</div>
	</div>

	<script src="assets/scripts/splide.min.js"></script>
	<script>
		var toggleSidebarBTN = document.getElementById("toggleSidebar");
		var sidebar = document.getElementById("sidebar");
		var toggleBottomMenuBTN = document.getElementById("toggleBottomMenu");
		var bottomNav = document.getElementById("bottomNav");
		var bottomRightAI = document.getElementById("bottomRightAI");
		var bottomRightAIBTN = document.getElementById("bottomRightAIBTN");
		var splideDiv = null;
		var splide2Div = null;
		var btn_ai_show = document.getElementById("btn_ai_show");

		var topAI = document.getElementById("topAI");
		var topAIBTN = document.getElementById("topAIBTN");

		var decisionCenterBTN = document.getElementById("decision_center_button");
		var decisionCenter = document.getElementById("decision_center");

		var sideOverlay = document.getElementById("page-header-support");
		var page_container = document.getElementById("page_container");

		var lightGradientBTN = document.getElementById("lightGradientBTN");
		var darkGradientBTN = document.getElementById("darkGradientBTN");

		var darkHeaderBTN = document.getElementById("darkHeaderBTN");
		var lightHeaderBTN = document.getElementById("lightHeaderBTN");
		var whiteHeaderBTN = document.getElementById("whiteHeaderBTN");

		var btnNotifications = document.getElementById("page-header-notifications");
		var btnProfile = document.getElementById("page-header-profile");
		var btnChangepassword = document.getElementById("btnChangepassword");

		const layoutButtons = document.querySelectorAll('[data-toggle="layout"]');

		function closeSideOverlay() {
			page_container.classList.remove('side-overlay-o');
		}

		function closeNotifications() {
			page_container.classList.remove('notifications_panel_open');
		}

		function closeProfile() {
			page_container.classList.remove('profile_panel_open');
		}

		function closePassword() {
			page_container.classList.add('profile_panel_open');
			page_container.classList.remove('password_panel_open');
		}

		layoutButtons.forEach(layoutButton => {
			layoutButton.addEventListener("click", function (event) {
				var action = this.getAttribute("data-action");
				if (action == "side_overlay_close") {
					closeSideOverlay();
				}
			}, false);
		});

		darkHeaderBTN.addEventListener('click', function (event) {
			header.classList.remove("lightHeader");
			header.classList.remove("whiteHeader");
		});
		lightHeaderBTN.addEventListener('click', function (event) {
			header.classList.add("lightHeader");
			header.classList.remove("whiteHeader");
		});
		whiteHeaderBTN.addEventListener('click', function (event) {
			header.classList.add("whiteHeader");
			header.classList.remove("lightHeader");
		});

		lightGradientBTN.addEventListener('click', function (event) {
			sidebar.classList.add("lightGradient");
		});
		darkGradientBTN.addEventListener('click', function (event) {
			sidebar.classList.remove("lightGradient");
		});

		btnChangepassword.addEventListener('click', function (event) {
			if (page_container.classList.contains('password_panel_open')) {
				closePassword();
			} else {
				document.addEventListener('keydown', e => {
					if (e.key === 'Esc' || e.key === 'Escape') {
						closePassword();
					}
				});
				closePassword();
				page_container.classList.add('password_panel_open');
			}
		});

		btnProfile.addEventListener('click', function (event) {
			if (page_container.classList.contains('profile_panel_open')) {
				closeProfile()
			} else {
				document.addEventListener('keydown', e => {
					if (e.key === 'Esc' || e.key === 'Escape') {
						closeProfile();
					}
				});

				page_container.classList.add('profile_panel_open');
			}
		});

		btnNotifications.addEventListener('click', function (event) {
			if (page_container.classList.contains('notifications_panel_open')) {
				closeNotifications()
			} else {
				document.addEventListener('keydown', e => {
					if (e.key === 'Esc' || e.key === 'Escape') {
						closeNotifications();
					}
				});

				page_container.classList.add('notifications_panel_open');
			}
		});

		sideOverlay.addEventListener('click', function (event) {
			if (page_container.classList.contains('side-overlay-o')) {
				closeSideOverlay()
			} else {
				document.addEventListener('keydown', e => {
					if (e.key === 'Esc' || e.key === 'Escape') {
						closeSideOverlay();
					}
				});

				page_container.classList.add('side-overlay-o');
			}
		});

		function toggleSidebar() {
			toggleSidebarBTN.classList.toggle("click");
			sidebar.classList.toggle("show");
			/*
						const menuLabels = [...document.getElementsByClassName('menuLabel')];
						menuLabels.forEach(menuLabel => {
							menuLabel.classList.add('fade_out');
						});
						setInterval(function () {
							menuLabels.forEach(menuLabel => {
								menuLabel.classList.remove('fade_out');
							});
						}, 200);
						*/
			/*menuLabels.forEach(menuLabel => {
				menuLabel.classList.remove('fade_in');
			});*/
		}
		toggleSidebarBTN.addEventListener("click", toggleSidebar, false);

		function toggleBottomMenu() {
			toggleBottomMenuBTN.classList.toggle("click");
			bottomNav.classList.toggle("show").offsetWidth;
			/*const menuLabels = [...document.getElementsByClassName('menuLabel')];
			menuLabels.forEach(menuLabel => {
				menuLabel.classList.toggle('show');
			});*/
		}

		function toggleAI() {
			bottomRightAI.classList.toggle("clicked");
			splideDiv.classList.toggle('is-initialized');
		}
		toggleBottomMenuBTN.addEventListener("click", toggleBottomMenu, false);

		const tabButtons = document.querySelectorAll('[data-bs-toggle="tab"]');
		const tabs = [...document.getElementsByClassName('tab-pane')];

		tabButtons.forEach(tabButton => {
			tabButton.addEventListener("click", function (event) {
				var tabID = this.getAttribute("data-bs-target");
				tabID = tabID.replace("#", "");
				tabButtons.forEach(tabButtonn => {
					tabButtonn.classList.remove('active');
				});
				tabs.forEach(tab => {
					tab.classList.remove('active');
					tab.classList.remove('show');
				});
				document.getElementById(tabID).classList.add('active', 'show');
				this.classList.add('active');
			}, false);
		});

		const menuDropDowns = document.querySelectorAll('[data-bs-toggle="dropdown"]');
		const dropdownMenus = [...document.getElementsByClassName('dropdown-menu')];

		menuDropDowns.forEach(menuDropDown => {
			menuDropDown.addEventListener("click", function (event) {
				if (menuDropDown !== event.target) {
					var dropdownID = event.target.parentElement.id;
				} else {
					var dropdownID = event.target.id;
				}
				var dropdown = document.querySelector('[aria-labelledby="' + dropdownID + '"]');
				if (dropdown.style.display === "block") {
					dropdown.style.display = "none";
				} else {
					dropdown.style.display = "block";
				}
				/*dropdown.classList.toggle("d-block");*/
			}, false);
		});

		document.body.addEventListener('click', function (event) {
			if (!event.target.matches('.block-level') && !event.target.matches('.dropdown-toggle') && !event.target.matches('.menuLabel')) {
				dropdownMenus.forEach(dropdownMenu => {
					if (dropdownMenu.classList.contains('d-block')) {
						dropdownMenu.classList.remove('d-block');
					}
				});
			}
		}, false);

		bottomRightAIBTN.addEventListener('click', toggleAI, false);
		btn_ai_show.addEventListener('click', toggleAI, false);

		topAIBTN.addEventListener('click', function (event) {
			topAI.classList.toggle("clicked");
			splide2Div.classList.toggle('is-initialized');
		});

		decisionCenterBTN.addEventListener('click', function (event) {
			decisionCenter.classList.toggle("show");
		});

		const closeAIBTNS = [...document.getElementsByClassName('closeAI')];
		closeAIBTNS.forEach(closeAIBTN => {
			var divAI = closeAIBTN.closest(".divAI");
			closeAIBTN.addEventListener("click", function (event) {
				divAI.parentElement.classList.toggle("clicked");
				splideDiv.classList.toggle('is-initialized');
			}, false);
		});

		document.addEventListener('DOMContentLoaded', function () {
			slide1 = new Splide('#slide1', {
				arrows: false,
				lazyLoad: 'nearby'
			});
			slide1.mount();
			slide1.on('mounted', function () {
				//console.log(this);
			});
			splideDiv = document.getElementById('slide1');
			splideDiv.classList.remove('is-initialized');

			slide2 = new Splide('#slide2', {
				arrows: false,
				lazyLoad: 'nearby'
			});
			slide2.mount();
			slide2.on('mounted', function () {
				//console.log(this);
			});
			splide2Div = document.getElementById('slide2');
			splide2Div.classList.remove('is-initialized');
		});
	</script>
	<script>
		function createChart(e) {
			const days = document.querySelectorAll(".chart-values li");
			const tasks = document.querySelectorAll(".chart-bars li");
			const daysArray = [...days];

			tasks.forEach(el => {
				const duration = el.dataset.duration.split("-");
				const startDay = duration[0];
				const endDay = duration[1];
				let left = 0,
				width = 0;

				if (startDay.endsWith("½")) {
					const filteredArray = daysArray.filter(day => day.textContent == startDay.slice(0, -1));
					left = filteredArray[0].offsetLeft + filteredArray[0].offsetWidth / 2;
				} else {
					const filteredArray = daysArray.filter(day => day.textContent == startDay);
					left = filteredArray[0].offsetLeft;
				}

				if (endDay.endsWith("½")) {
					const filteredArray = daysArray.filter(day => day.textContent == endDay.slice(0, -1));
					width = filteredArray[0].offsetLeft + filteredArray[0].offsetWidth / 2 - left;
				} else {
					const filteredArray = daysArray.filter(day => day.textContent == endDay);
					width = filteredArray[0].offsetLeft + filteredArray[0].offsetWidth - left;
				}

				// apply css
				el.style.left = `${left}px`;
				el.style.width = `${width}px`;
				if (e.type == "load") {
					el.style.backgroundColor = el.dataset.color;
					el.style.opacity = 1;
				}
  			});
		}

		window.addEventListener("load", createChart);
		window.addEventListener("resize", createChart);



		var gantt_tasks = [...document.getElementsByClassName('gantt_task')];
		var gantt_task_panel = document.getElementById("gantt_task_panel");

		

		document.addEventListener('click', e => {
			if (e.target.className != 'gantt_task') {
				gantt_task_panel.style.visibility = "hidden";
				gantt_task_panel.classList.remove('show');
			}
		});

		gantt_tasks.forEach(gantt_task => {
			gantt_task.addEventListener('click', function() {
				gantt_task_panel.style.visibility = "visible";
				gantt_task_panel.classList.add('show');
				gantTasksPanelPosition();
			});
			/*gantt_task.addEventListener("mouseout", function(e) {
				var elements = document.querySelectorAll( ":hover" );
				for (var i = 0; i < elements.length; i++) {
					if (elements[i].id == "gantt_task_panel") return;
				}

				gantt_task_panel.style.visibility = "hidden";
				gantt_task_panel.classList.remove('show');
			});*/

			

		});

		function gantTasksPanelPosition(){
			var content_box_width = document.getElementById('content_box').clientWidth;
			var sidebar_width = document.getElementById('sidebar').clientWidth;
			gantt_task_panel.style.width = content_box_width+'px';
			gantt_task_panel.style.left = sidebar_width+'px';
		}
		
	</script>
	<script src="assets/scripts/scripts.js"></script>
	<script src="assets/scripts/nouislider.js"></script>
	<script src="assets/scripts/wNumb.js"></script>
	<script>
		var minDate       = originalMinDate = timestamp('January 1, 2010');
		var maxDate       = originalMaxDate = timestamp('December 31, 2016');
		
		var datesArray    = getDaysArray(minDate, maxDate, 'month');
		var totalMonths   = originalTotalMonths = datesArray.length;
		var firstMonth    = 0;
		var lastMonth     = originalLastMonth = totalMonths-1;
		var zoomPosition  = newZoomPosition = lastMonth;

		var totalDays     = 0;
		var firstDay      = 0;
		var lastDay       = 0;

		var handle0       = firstMonth;
		var handle1       = originalLastMonth;

		function getDaysArray(start, end, type) {
			if (type == 'month') {
				for (var arr=[], dt=new Date(start); dt<=end; dt.setMonth(dt.getMonth()+1)) {
					arr.push(new Date(dt).getTime());
				}
				return arr;
			} else {
				dd=new Date(end);
				var lastDayOfMonth = new Date(dd.getFullYear(), dd.getMonth()+1, 0);
				for (var arr=[], dt=new Date(start); dt<=lastDayOfMonth; dt.setDate(dt.getDate()+1)) {
					arr.push(new Date(dt).getTime());
				}
				return arr;
			}
			
		};
		function timestamp(str) {
			return new Date(str).getTime();
		}
		function formatDate(date) {
			return date.toLocaleString('en-us', { month: 'short' }) + " " +	date.getFullYear();
		}
		function toFormat(v) {
			if (newZoomPosition > 2) {
				return formatDate(new Date(datesArray[Math.floor(v)]));
			} else {
				var dd = new Date(new Date(daysArray[Math.floor(v)]));
				return dd.toLocaleString('en-us', { day: 'numeric', month: 'short', year: 'numeric' });
			}
		}
		function showArrows() {
			document.getElementById('timeframeBack').style.visibility = 'visible';
			document.getElementById('timeframeForward').style.visibility = 'visible';
		}
		function hideArrows() {
			document.getElementById('timeframeBack').style.visibility = 'hidden';
			document.getElementById('timeframeForward').style.visibility = 'hidden';
		}
		function timeframeStep (direction, amount) {
			var currentTimeframePosition = Number(sliderTimeFrame.noUiSlider.get(true));
			var currentZoomPosition = Number(sliderZoom.noUiSlider.get(true));
			
			var changed = false;
			if (direction === 'back') {
				var difference=0;
				if (firstMonth > currentZoomPosition) {
					lastMonth = lastMonth - currentZoomPosition;
					firstMonth = firstMonth - currentZoomPosition;
				} else {
					difference = firstMonth;

					firstMonth = firstMonth - difference;
					lastMonth = lastMonth - difference;
				}
				changed = true;
			}
			if (direction === 'forward') {
				var difference=0;

				if (lastMonth > originalLastMonth - currentZoomPosition) {
					difference = originalLastMonth - lastMonth;
					lastMonth = lastMonth + difference;
					firstMonth = firstMonth + difference;
				} else {
					lastMonth = lastMonth + currentZoomPosition;
					firstMonth = firstMonth + currentZoomPosition;
				}
				changed = true;
			}

			if (changed) {
				if (firstMonth == 0) {
					document.getElementById('timeframeBack').style.visibility = 'hidden';
				} else {
					document.getElementById('timeframeBack').style.visibility = 'visible';
				}
				if (lastMonth == originalLastMonth) {
					document.getElementById('timeframeForward').style.visibility = 'hidden';
				} else {
					document.getElementById('timeframeForward').style.visibility = 'visible';
				}
				sliderTimeFrame.noUiSlider.updateOptions({
					range: {
						min: firstMonth,
						max: lastMonth
					},
				});
				sliderTimeFrame.noUiSlider.set([firstMonth, lastMonth]);
			}
		}
		function zoomStep (direction) {
			var currentPosition = Math.ceil(sliderZoom.noUiSlider.get(true));
			if (currentPosition == 2) {
				return;
			}
			if (direction === 'zoomIn') {
				currentPosition = currentPosition+2;
			}
			if (direction === 'zoomOut') {
				currentPosition = currentPosition-2;
			}
			sliderZoom.noUiSlider.set(currentPosition);
		}
		function getZoomLabel(zoomPosition) {
			var years = Math.floor(zoomPosition/12);
			var months = zoomPosition % 12;
			var result = '';
			
			if (years > 0) {
				result = result + years + ' Year' + (years>1?'s ':' ');
			}
			if (months > 0) {
				result = result + Math.ceil(months) + ' Month' + (months>1?'s ':' ')
			}
			document.getElementById('zoomSliderIndicator').innerHTML = result;
		}

		var sliderTimeFrame = document.getElementById('slider-timeframe');

		noUiSlider.create(sliderTimeFrame, {
			start: [firstMonth, lastMonth],
			connect: true,
			step: 1,
			tooltips: [true, true],
			behaviour: "drag",
			range: {
				min: firstMonth,
				max: lastMonth
			},
			format: { 
				to: toFormat, 
				from: Number 
			}
		});

		sliderTimeFrame.noUiSlider.on('start', function (values, handle, positions) {
			handle0 = Math.floor(positions[0]);
			handle1 = Math.floor(positions[1]);
		});

		sliderTimeFrame.noUiSlider.on('drag', function (values, handle, positions) {
			var currentPosition = Math.ceil(sliderZoom.noUiSlider.get(true));
			
			var [start, end] = positions;
			if (start < 0) {
				start = 0;
			}
			start = Math.floor(start);
			end = Math.floor(end);

			if (currentPosition == 2) {// Scroll by days
				console.log(start, end, ' - ', firstDay, lastDay, ' - ', handle0, handle1);
				/* Need to update days array for the new timeframe, range always will be 0-60 for 2 months by day */
				/* Not finished */
				var changed = false;
				if (start <= 2 && handle0 > start) {
					console.error('scroll left');
					firstDay = firstDay-1;
					lastDay = lastDay-1;

					if (start == firstDay && firstDay > 0) {
						firstDay = firstDay -2;
					}
					if (firstDay < 0) {
						firstDay = 0;
					}
					changed = true;
				}

				handle0 = start;
				handle1 = end;
				//daysArray       = getDaysArray(datesArray[firstMonth], datesArray[lastMonth], 'days');
				if (changed) {
					console.error(start, end, ' - ', firstDay, lastDay);
					/*sliderTimeFrame.noUiSlider.updateOptions(
						{
							start: [start, end],
							range: {
								min: firstDay,
								max: lastDay
							},
						},
						true
					);*/
				}
				
			} else { // Scroll by months
				console.log(start, end, ' - ', firstMonth, lastMonth, ' - ', handle0, handle1);

				if (start >= firstMonth && (start-firstMonth <= 2) && firstMonth > 0 && handle0 > start) {
					console.error('scroll left');
					start = start -1;
					end = end -1;
					firstMonth = firstMonth-1;
					lastMonth = lastMonth-1;

					if (start == firstMonth && firstMonth > 0) {
						firstMonth = firstMonth -2;
					}
					if (firstMonth < 0) {
						firstMonth = 0;
					}
				}
				if (lastMonth < originalLastMonth && (lastMonth-end <= 2) && start > handle0) {
					console.warn('scroll right');
					start = start + 1;
					end = end + 1;
					firstMonth = firstMonth + 1;
					lastMonth = lastMonth + 1;
				
					if (end == lastMonth && lastMonth < originalLastMonth) {
						lastMonth = lastMonth + 2;
					}
					if (lastMonth > originalLastMonth) {
						lastMonth = originalLastMonth;
					}
				}
				handle0 = start;
				handle1 = end;
				console.error(start, end, ' - ', firstMonth, lastMonth);
				sliderTimeFrame.noUiSlider.updateOptions(
					{
						start: [start, end],
						range: {
							min: firstMonth,
							max: lastMonth
						},
					},
					true
				);
			}
		});

		var sliderZoom = document.getElementById('slider-zoom');

		noUiSlider.create(sliderZoom, {
			start: lastMonth,
			connect: [true, false],
			direction: 'rtl',
			step: 2,
			range: {
				'min': 2,
				'max': lastMonth > 2 ?lastMonth:2
			}
		});

		sliderZoom.noUiSlider.on('update', function (values, handle) {
			newZoomPosition = Number(values);
			getZoomLabel(newZoomPosition);

			if (newZoomPosition >= originalLastMonth) {
				hideArrows();
			}
			if (newZoomPosition < originalLastMonth) {
				showArrows();
			}

			if (newZoomPosition == 2) {//Zoom reaches 2 months view switch to days instead of months
				zoomPosition    = newZoomPosition;
				firstMonth      = firstMonth +1;
				lastMonth       = lastMonth -1;
				daysArray       = getDaysArray(datesArray[firstMonth], datesArray[lastMonth], 'days');
				totalDays       = daysArray.length;
				firstDay        = 0;
				lastDay         = totalDays-1;
				sliderTimeFrame.noUiSlider.updateOptions(
					{
						start: [0, lastDay],
						step: 1,
						margin: 7,
						range: {
							min: firstDay,
							max: lastDay
						},
					},
					true
				);
				sliderTimeFrame.noUiSlider.set([firstDay, lastDay]);
			} else {// zoom by months
				if (zoomPosition == 2 && newZoomPosition > 2) {
					sliderTimeFrame.noUiSlider.updateOptions(
						{
							start: [firstMonth, lastMonth],
							step: 2,
							range: {
								min: firstMonth,
								max: lastMonth
							},
						},
						true
					);
					sliderTimeFrame.noUiSlider.set([firstMonth, lastMonth]);
				}
				var [currentStart, currentEnd] = sliderTimeFrame.noUiSlider.get(true);
				
				var halfTimeframe = Math.floor((currentEnd+currentStart)/2);
		
				var oddRange = false;
				var halfRange = 0;
				if (newZoomPosition % 2) { // odd range
					halfRange = (newZoomPosition-1) / 2;
					oddRange = true;
				} else { // even range
					halfRange = newZoomPosition / 2;
				}
				lastMonth = halfTimeframe + halfRange + (oddRange?1:0);
				firstMonth = halfTimeframe - halfRange + (!oddRange?1:0);

				if (firstMonth < 0) {//Validate not going below 0
					firstMonth = 0;
				}
				if (lastMonth > originalTotalMonths) {
					lastMonth = originalTotalMonths;
				}

				sliderTimeFrame.noUiSlider.updateOptions({
					range: {
						min: firstMonth,
						max: lastMonth
					},
				});
				sliderTimeFrame.noUiSlider.set([firstMonth, lastMonth]);
			}
		});

		document.getElementById('zoomIn').onclick = function() {
			zoomStep("zoomIn")
		};
		document.getElementById('zoomOut').onclick = function() {
			zoomStep("zoomOut")
		};
		document.getElementById('timeframeBack').onclick = function() {
			timeframeStep("back");
		};
		document.getElementById('timeframeForward').onclick = function() {
			timeframeStep("forward");
		};
	</script>
</body>

</html>