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
	<link rel="stylesheet" type="text/css" href="../assests/src/plugins/cropperjs/dist/cropper.css" />
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				"gtm.start": new Date().getTime(),
				event: "gtm.js"
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<?php include '../partials/_navbar.php' ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row">
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h4 class="mb-30 h4">Headings</h4>
							<h1>h1. Bootstrap heading</h1>
							<h2 class="mb-10">h2. Bootstrap heading</h2>
							<h3 class="mb-10">h3. Bootstrap heading</h3>
							<h4 class="mb-10">h4. Bootstrap heading</h4>
							<h5 class="mb-10">h5. Bootstrap heading</h5>
							<h6 class="mb-10">h6. Bootstrap heading</h6>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h4 class="mb-30 h4">Inline text elements</h4>
							<p>You can use the mark tag to <mark>highlight</mark> text.</p>
							<p>
								<del>This line of text is meant to be treated as deleted
									text.</del>
							</p>
							<p>
								<s>This line of text is meant to be treated as no longer
									accurate.</s>
							</p>
							<p>
								<ins>This line of text is meant to be treated as an addition to
									the document.</ins>
							</p>
							<p><u>This line of text will render as underlined</u></p>
							<p>
								<small>This line of text is meant to be treated as fine
									print.</small>
							</p>
							<p><strong>This line rendered as bold text.</strong></p>
							<p><em>This line rendered as italicized text.</em></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h4 class="mb-30 h4">Display headings</h4>
							<h1 class="display-1">Display 1</h1>
							<h1 class="display-2">Display 2</h1>
							<h1 class="display-3">Display 3</h1>
							<h1 class="display-4">Display 4</h1>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box mb-30">
							<h4 class="mb-20 h4">Blockquotes</h4>
							<blockquote class="blockquote">
								<p class="mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Integer posuere erat a ante.
								</p>
								<footer class="blockquote-footer">
									Someone famous in
									<cite title="Source Title">Source Title</cite>
								</footer>
							</blockquote>
							<blockquote class="blockquote text-right">
								<p class="mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Integer posuere erat a ante.
								</p>
								<footer class="blockquote-footer">
									Someone famous in
									<cite title="Source Title">Source Title</cite>
								</footer>
							</blockquote>
						</div>
						<div class="pd-20 card-box">
							<h4 class="mb-30 h4">List Inline</h4>
							<ul class="list-inline">
								<li class="list-inline-item">Lorem ipsum</li>
								<li class="list-inline-item">Phasellus iaculis</li>
								<li class="list-inline-item">Nulla volutpat</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h4 class="mb-30 h4">List Unstyled</h4>
							<ul class="list-unstyled">
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipiscing elit</li>
								<li>Integer molestie lorem at massa</li>
								<li>Facilisis in pretium nisl aliquet</li>
								<li>
									Nulla volutpat aliquam velit
									<ul>
										<li>Phasellus iaculis neque</li>
										<li>Purus sodales ultricies</li>
										<li>Vestibulum laoreet porttitor sem</li>
										<li>Ac tristique libero volutpat at</li>
									</ul>
								</li>
								<li>Faucibus porta lacus fringilla vel</li>
								<li>Aenean sit amet erat nunc</li>
								<li>Eget porttitor lorem</li>
							</ul>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h4 class="mb-30 h4">Description list alignment</h4>
							<dl class="row">
								<dt class="col-sm-3">Description lists</dt>
								<dd class="col-sm-9">
									A description list is perfect for defining terms.
								</dd>

								<dt class="col-sm-3">Euismod</dt>
								<dd class="col-sm-9">
									<p>
										Vestibulum id ligula porta felis euismod semper eget
										lacinia odio sem nec elit.
									</p>
									<p>Donec id elit non mi porta gravida at eget metus.</p>
								</dd>

								<dt class="col-sm-3">Malesuada porta</dt>
								<dd class="col-sm-9">
									Etiam porta sem malesuada magna mollis euismod.
								</dd>

								<dt class="col-sm-3 text-truncate">
									Truncated term is truncated
								</dt>
								<dd class="col-sm-9">
									Fusce dapibus, tellus ac cursus commodo, tortor mauris
									condimentum nibh, ut fermentum massa justo sit amet risus.
								</dd>

								<dt class="col-sm-3">Nesting</dt>
								<dd class="col-sm-9">
									<dl class="row">
										<dt class="col-sm-4">Nested definition list</dt>
										<dd class="col-sm-8">
											Aenean posuere, tortor sed cursus feugiat, nunc augue
											blandit nunc.
										</dd>
									</dl>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- welcome modal start -->

	<script src="../assests/vendors/scripts/core.js"></script>
	<script src="../assests/vendors/scripts/script.min.js"></script>
	<script src="../assests/vendors/scripts/process.js"></script>
	<script src="../assests/vendors/scripts/layout-settings.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>