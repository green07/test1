<!DOCTYPE html>
<html>
	<head>
		<!--   Common head elements and CSS   -->
		<?php include 'views/common/head links.html' ?>
		<!-- Common head elements and CSS end -->

		<title>INTER</title>

		<!-- Title Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="/inter/assets/images/homepage/favicon blue.png" />

		<!-- Common CSS -->
		<link rel="stylesheet" type="text/css" href="/inter/assets/css/common/common.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="/inter/assets/css/products/products.css">
	</head>
	<body>
		<!-- Preloader section start -->
		<?php include 'views/common/preloader.html' ?>
		<!-- Preloader section end -->

		<!-- Navigation section start -->
		<?php include 'views/common/navigation.html' ?>
		<!-- Navigation section end -->

		<!-- Header section start-->
		<div id="mainHeader">
			<div>
				<h1>製品紹介</h1>
				<h2>PRODUCTS</h2>
			</div>
		</div>
		<!-- Header section end-->

		<div class="contents">

			<div class="products-page products-main">
				<div class="container">
					<div class="title-header">
						<hr><h3 class="introduction">製品紹介</h3><hr>
					</div>

					<div class="content">
						<!-- XML will automatically create products here -->
					</div>

					<div class="catalog-all">
						<div class="btnhov btnhov-color">
							<a class="button-main button-blue button-trans" href="/inter/products/catalog">
								<span class="jpn-trans">すべての製品カタログPDFファイル</span>
								<span class="eng-trans">View all Product Catalog PDF</span>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Main footer section start -->
		<?php include 'views/common/footer.html' ?>
		<?php include 'views/common/footer scripts.html' ?>
		<!-- Main footer section end -->

		<!-- XML JS -->
		<script src="/inter/assets/js/productReadXml.js"></script>

		<!-- Custom JS -->
		<script src="/inter/assets/js/products.js"></script>
	</body>
</html>