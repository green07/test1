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
	<body class="nursenavi">
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
			<div class="products-page products-inner nursenavi">
				<div class="container">
					<div class="title-header">
						<hr><h3 class="introduction">NurseNavi
							<small>キャリア開発支援システム</small>
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
										<img src="/inter/assets/images/products/NurseNaviResize.jpg" alt="NurseNavi">
									</div>
								</div>
								<div class="col-sm-8">
									<div class="overview">
										<h4>
											概要<span class="head-divider"> | </span><small>Product Overview</small>
										</h4>
										<div class="sub-content">
											<p>	神戸大学医学部附属病院との共同研究から生まれたNurseNAVIは、医療の現場で人材不足が叫ばれている中、看護職員のキャリア育成支援を目的としており、Interが手がける看護管理部門支援システムの教育分野を担います。看護職員を取り巻く環境を改善する現在の流れのなかで、計画的な教育が必須となります。その際、教育分野の作業を効果的にサポートします。
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
											<h5>
												教育・研修体制の強化
											</h5>
											<ul><li>
												新人看護職員の就職先を選んだ理由No.1は「教育・研修体制の充実」です。同パッケージは看護職員のキャリア開発に特化しており、キャリアパスの構築を協力にサポートします。
											</li></ul>
											<h5>
												新人看護職員の卒後臨床研修に完全対応
											</h5>
											<ul><li>												平成22年4月より新たな業務に従事する看護職員(新人看護職員)の臨床研修等が努力義務化となりました。NurseNAVIは、卒後臨床研修に完全対応しており、新人看護職員の研修計画/研修到達目標/実績を一目で分かるようになっています。
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
											<h5>
												DB サーバ
											</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>CPU</th>
														<td>Intel Xeon プロセッサ E5220 以上</td>
													</tr>
													<tr>
														<th>メイン メモリ</th>
														<td>4GB 以上</td>
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
											<h5>
												WEB サーバ
											</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>CPU</th>
														<td>Intel Xeon プロセッサ E5220 以上</td>
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
														<th>バックアップ 装置</th>
														<td>.NET Framework 2.0 以上</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-sm-6">
											<h5>
												クライアント
											</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>CPU</th>
														<td>Inter Core2 Duo プロセッサ E7500 以上</td>
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
														<th>必須 ソフト</th>
														<td>Microsoft Excel 2010</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

									<div class="catalog-download">
										<div class="btnhov btnhov-color">
											<a class="button-main button-blue button-trans" href="/inter/assets/pdf/nursenavi.pdf" target="_blank">
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