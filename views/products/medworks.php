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
	<body class="medworks">
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
			<div class="products-page products-inner medworks">
				<div class="container">
					<div class="title-header">
						<hr><h3 class="introduction">Medworks
							<small>勤務管理システム</small>
						</h3><hr>
					</div>

					<div class="button-header">
						<div class="btnhov btnhov-color">
							<a class="button-main button-blue" href="/inter/products">
								<span class="arrow-left"></span> 一覧へ戻る
							</a>
						</div>
						<!-- <div class="btnhov btnhov-color">
							<a class="button-main button-blue" href="/inter/#contact">
								購入はこちらから
							</a>
						</div> -->
					</div>

					<div class="content box-shade">
						<div class="top-details">
							<div class="row">
								<div class="col-sm-4 sm-float-right">
									<div class="img-box">
										<img src="/inter/assets/images/products/MedworksResize.jpg" alt="Medworks">
									</div>
								</div>
								<div class="col-sm-8">
									<div class="overview">
										<h4>
											概要<span class="head-divider"> | </span><small>Product Overview</small>
										</h4>
										<div class="sub-content">
											<p>
												MedWorksは、医療機関向け勤怠管理として誕生し、現場の意見・要望を反映し、進化し続けてきました。3世代を重ねる事で、医療機関特有の勤務形態との親和性を高め、高い評価をいただいています。医師・看護師等、医療機関職員の勤務に対し、国から様々な施策が行われようとしている中、MedWorks導入による勤怠管理の一元化は、管理業務の効率化に高いパフォーマンスを発揮します。
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-7">
									<div class="characteristics">
										<h4>
											特徴<span class="head-divider"> | </span><small>Characteristics</small>
										</h4>

										<div class="sub-content">
											<h5>交代制勤務に対応</h5>
											<ul><li>
												交代制勤務部門の勤務予定自動作成を備えており、勤務予定表作成の手間を大幅に削減でき、医療機関の全職員を対象とした勤務管理が実現できると共に、ペーパレス化が推進できます。
											</li></ul>
											<h5>リアルタイム収集による出退勤管理を実現</h5>
											<ul><li>
												日直・当直について予定と実績が管理でき、リアルタイム収集された出退勤時刻は、勤務予定と自動照合できますので正確な勤務記録に基づいた職員毎の勤務全体像を把握できます。
											</li></ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="bottom-details">

							<div class="operating">
								<h4>
									動作環境<span class="head-divider"> | </span><small>Operating Environment</small>
								</h4>

								<div class="sub-content">
									<div class="table-col row">
										<div class="col-sm-6">
											<h5>DBサーバ</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>CPU</th>
														<td>Intel Xeon プロセッサ E5220 以上</td>
													</tr>
													<tr>
														<th>メイン メモリ</th>
														<td>6GB 以上</td>
													</tr>
													<tr>
														<th>ディスク 容量</th>
														<td>80GB 以上 (RAID 構成)</td>
													</tr>
													<tr>
														<th>ネットワーク</th>
														<td>1000BASE-T 対応</td>
													</tr>
													<tr>
														<th>OS</th>
														<td>Windows Server 2008 以上</td>
													</tr>
													<tr>
														<th>データ ベース</th>
														<td>Oracle 11g</td>
													</tr>
													<tr>
														<th>バックアップ 装置</th>
														<td>DAT, AIT 他</td>
													</tr>
												</tbody>
											</table>
											<h5>Webサーバ</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>CPU</th>
														<td>Intel Xeon プロセッサ 3GHz 以上</td>
													</tr>
													<tr>
														<th>メイン メモリ</th>
														<td>4GB 以上</td>
													</tr>
													<tr>
														<th>ディスク 容量</th>
														<td>50GB 以上 (RAID5)</td>
													</tr>
													<tr>
														<th>ネットワーク</th>
														<td>1000BASE-T 対応</td>
													</tr>
													<tr>
														<th>OS</th>
														<td>Windows Server 2008 以上</td>
													</tr>
													<tr>
														<th>WEB サーバ</th>
														<td>Internet Information Service 7.5</td>
													</tr>
													<tr>
														<th>その他</th>
														<td>.NET Framework 2.0 以上</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-sm-6">
											<h5>クライアント</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>CPU</th>
														<td>Intel Core2 Duo プロセッサ E7500 以上</td>
													</tr>
													<tr>
														<th>メイン メモリ</th>
														<td>2GB 以上</td>
													</tr>
													<tr>
														<th>ディスク 容量</th>
														<td>10GB 以上</td>
													</tr>
													<tr>
														<th>ネットワーク</th>
														<td>1000BASE-T 対応</td>
													</tr>
													<tr>
														<th>解像度</th>
														<td>1280 x 1024</td>
													</tr>
													<tr>
														<th>OS</th>
														<td>Windows 7</td>
													</tr>
													<tr>
														<th>ブラウザ</th>
														<td>Internet Explorer 8.0</td>
													</tr>
													<tr>
														<th>必須ソフト</th>
														<td>Microsoft Excel 2010</td>
													</tr>
												</tbody>
											</table>
											<h5>その他</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>カード リーダー</th>
														<td>AGX100A シリーズ (AMANO 社製) ※推奨機種</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

									<div class="catalog-download">
										<div class="btnhov btnhov-color">
											<a class="button-main button-blue button-trans" href="/inter/assets/pdf/medworks.pdf" target="_blank">
												<span class="pdf-icon"></span>
												製品カタログPDFダウンロード
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="flow">
								<h4>
									<span>ご購入</span><span>・</span><span>導入</span><span>まで</span><span>の</span><span>流れ</span><span class="head-divider"> | </span><small>Flow of Purchase</small>
								</h4>

								<div class="img-box">
									<img src="/inter/assets/images/products/flow5.png">
								</div>
							</div>

							<div class="button-bottom">
								<div class="btnhov btnhov-color">
									<a class="button-main button-blue" href="/inter/products">
										<span class="arrow-left"></span> 一覧へ戻る
									</a>
								</div>
								<!-- <div class="btnhov btnhov-color">
									<a class="button-main button-blue" href="/inter/#contact">
										購入はこちらから
									</a>
								</div> -->
							</div>
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