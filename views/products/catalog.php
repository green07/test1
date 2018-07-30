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

		<div class="products-page product-catalog contents">
			<div class="container">

				<div class="title-header">
					<hr><h3 class="introduction">製品カタログ</h3><hr>
				</div>

				<div class="button-header">
					<div class="btnhov btnhov-color">
						<a class="button-main button-blue" href="/inter/products">
							<span class="arrow-left"></span> 一覧へ戻る
						</a>
					</div>
				</div>

				<div class="content box-shade">

					<div class="flow">
						<div class="img-box catalog-banner">
							<img src="/inter/assets/images/products/NurseAIDResize.jpg">
							<img src="/inter/assets/images/products/NurseNaviResize.jpg">
							<img src="/inter/assets/images/products/elearningResize.jpg">
							<img src="/inter/assets/images/products/MedworksResize.jpg">
							<img src="/inter/assets/images/products/MultipackResize.jpg">
							<img src="/inter/assets/images/products/MedicalPartneriAResize.jpg">
							<img src="/inter/assets/images/products/cResResize.jpg">
							<img src="/inter/assets/images/products/InfectionManagerResize.jpg">
							<img src="/inter/assets/images/products/careHomeResize.jpg">
						</div>
					</div>

					<div class="operating">
						<table class="table-responsive">
							<tr>
								<th>資料名</th>
								<th>データサイズ</th>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/nurseaid.pdf" target="_blank">NurseAID.pdf</a></td>
								<td>1,486KB</td>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/nursenavi.pdf" target="_blank">NurseNAVI.pdf</a></td>
								<td>1,614KB</td>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/elearning.pdf" target="_blank">Nurse e-Learning.pdf</a></td>
								<td>1,416KB</td>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/medworks.pdf" target="_blank">MedWorks.pdf</a></td>
								<td>1,522KB</td>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/multipackworks.pdf" target="_blank">MultiPackWorks.pdf</a></td>
								<td>1,373KB</td>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/medicalpartneria.pdf" target="_blank">MedicalPartner iA.pdf</a></td>
								<td>1,436KB</td>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/medicalpartnercres.pdf" target="_blank">MedicalPartner cRes.pdf</a></td>
								<td>1,199KB</td>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/infectionmanager.pdf" target="_blank">MedicalPartner Infection Manager.pdf</a></td>
								<td>1,360KB</td>
							</tr>
							<tr>
								<td><a href="/inter/assets/pdf/carehomemanager.pdf" target="_blank">Care Home Manager.pdf</a></td>
								<td>1,722KB</td>
							</tr>
						</table>
					</div>
					<p>
						リンク先をご覧になるには、アドビシステムズ社のAdobe Reader（無償）が必要です。Adobe Readerをインストールすることにより、PDFファイルの表示・印刷が可能になります。
					</p>
					<a href="https://get.adobe.com/jp/reader" target="_blank">
						Adobe Reader ダウンロードページ
					</a>

					<div class="button-bottom">
						<div class="btnhov btnhov-color">
							<a class="button-main button-blue" href="/inter/products">
								<span class="arrow-left"></span> 一覧へ戻る
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

		<!-- Custom JS -->
		<script src="/inter/assets/js/products.js"></script>
	</body>
</html>