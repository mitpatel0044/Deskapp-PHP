<?php
include "../partials/_dbconnect.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../main/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

 <head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assests/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assests/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assests/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/style.css" />

</head>

<body>

	<?php include '../partials/_navbar.php' ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="blog-wrap">
					<div class="container pd-0">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="blog-detail card-box overflow-hidden mb-30">
									<div class="blog-img">
										<img src="vendors/images/img2.jpg" alt="" />
									</div>
									<div class="blog-caption">
										<h4 class="mb-10">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit
										</h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo
										</p>
										<h5 class="mb-10">
											Lorem ipsum dolor sit amet, consectetur.
										</h5>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</p>
										<h5 class="mb-10">Unordered List</h5>
										<ul>
											<li>
												Duis aute irure dolor in reprehenderit in voluptate.
											</li>
											<li>
												Sunt in culpa qui officia deserunt mollit anim id est
												laborum.
											</li>
											<li>
												Ut enim ad minim veniam, quis nostrud exercitation
												ullamco laboris.
											</li>
											<li>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit.
											</li>
											<li>
												Duis aute irure dolor in reprehenderit in voluptate.
											</li>
											<li>
												Sunt in culpa qui officia deserunt mollit anim id est
												laborum.
											</li>
											<li>
												Ut enim ad minim veniam, quis nostrud exercitation
												ullamco laboris.
											</li>
											<li>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit.
											</li>
										</ul>
										<h5 class="mb-10">Ordered List</h5>
										<ol>
											<li>
												Duis aute irure dolor in reprehenderit in voluptate.
											</li>
											<li>
												Sunt in culpa qui officia deserunt mollit anim id est
												laborum.
											</li>
											<li>
												Ut enim ad minim veniam, quis nostrud exercitation
												ullamco laboris.
											</li>
											<li>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit.
											</li>
											<li>
												Duis aute irure dolor in reprehenderit in voluptate.
											</li>
											<li>
												Sunt in culpa qui officia deserunt mollit anim id est
												laborum.
											</li>
											<li>
												Ut enim ad minim veniam, quis nostrud exercitation
												ullamco laboris.
											</li>
											<li>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit.
											</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="card-box mb-30">
									<h5 class="pd-20 h5 mb-0">Categories</h5>
									<div class="list-group">
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">HTML
											<span class="badge badge-primary badge-pill">7</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">Css
											<span class="badge badge-primary badge-pill">10</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between active">Bootstrap
											<span class="badge badge-primary badge-pill">8</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">jQuery
											<span class="badge badge-primary badge-pill">15</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">Design
											<span class="badge badge-primary badge-pill">5</span></a>
									</div>
								</div>
								<div class="card-box mb-30">
									<h5 class="pd-20 h5 mb-0">Latest Post</h5>
									<div class="latest-post">
										<ul>
											<li>
												<h4>
													<a href="#">Ut enim ad minim veniam, quis nostrud
														exercitation ullamco</a>
												</h4>
												<span>HTML</span>
											</li>
											<li>
												<h4>
													<a href="#">Lorem ipsum dolor sit amet, consectetur
														adipisicing elit</a>
												</h4>
												<span>Css</span>
											</li>
											<li>
												<h4>
													<a href="#">Ut enim ad minim veniam, quis nostrud
														exercitation ullamco</a>
												</h4>
												<span>jQuery</span>
											</li>
											<li>
												<h4>
													<a href="#">Lorem ipsum dolor sit amet, consectetur
														adipisicing elit</a>
												</h4>
												<span>Bootstrap</span>
											</li>
											<li>
												<h4>
													<a href="#">Lorem ipsum dolor sit amet, consectetur
														adipisicing elit</a>
												</h4>
												<span>Design</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-box overflow-hidden">
									<h5 class="pd-20 h5 mb-0">Archives</h5>
									<div class="list-group">
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">January 2020</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">February 2020</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">March 2020</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">April 2020</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">May 2020</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="../assests/vendors/scripts/core.js"></script>
	<script src="../assests/vendors/scripts/script.min.js"></script>
	<script src="../assests/vendors/scripts/process.js"></script>
	<script src="../assests/vendors/scripts/layout-settings.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>