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
	<body class="mpia">
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
			<div class="products-page products-inner mpia">
				<div class="container">
					<div class="title-header">
						<hr><h3 class="introduction">Medical Partner iA
							<small>インシデント管理システム</small>
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
										<img src="/inter/assets/images/products/MedicalPartneriAResize.jpg" alt="Medical Partner iA">
									</div>
								</div>
								<div class="col-sm-8">
									<div class="overview">
										<h4>
											概要<span class="head-divider"> | </span><small>Product Overview</small>
										</h4>
										<div class="sub-content">
											<p>インシデントとは「ヒヤリ・ハット」、一歩間違えれば重大事故に繋がるが事故に至らない「ひやっとした事例」を指します。起こってはいけない事ですが、人間である以上、誰しもが一度は経験する事です。医療事故を防止する為には、その前段であるインシデントに対し、迅速かつ正確に収集し、分析する事が重要とされています。MedicalPartner iAでは、誰もが簡単・気軽に入力を行える画面、様々な様式での分析を行う機能で、医療事故防止に少しでも助力出来ればと考えております。
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
												入力フォーマットの柔軟性
											</h5>
											<ul><li>医師・看護師・技師等、職種や所属の異なる利用者に対し、それぞれに応じた入力画面を設定可能です。照会機能も利用者に応じ、表示する内容を変更する機能を備えており、各種担当者間でインシデントの情報を共有し、改善点を具体化することで継続的な改善活動へつなげることができます。
											</li></ul>
											<h5>
												承認・差戻し
											</h5>
											<ul><li>当事者が記入した内容を、第三者が客観的に確認し、必要な場合はやり直しをさせる事でより正確なレポートを作成出来るように考慮されています。その上、提出された内容についてコメントをつけ、適宜指導する事も可能です。また、承認の順序を柔軟に設定する事ができ、利用者ごとに適切な順序を設定できます。
											</li></ul>
											<h5>
												評価機構の提出フォーマットに対応
											</h5>
											<ul><li>
												登録レポートをXML形式で出力可能であり、財団法人日本医療機能評価機構の提出フォーマットにも対応しています。
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
												サーバ
											</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>CPU</th>
														<td>Intel Xeon プロセッサ 3G 以上</td>
													</tr>
													<tr>
														<th>メイン メモリ</th>
														<td>8GB 以上</td>
													</tr>
													<tr>
														<th>ディスク 容量</th>
														<td>300GB 以上</td>
													</tr>
													<tr>
														<th>OS</th>
														<td>Windows Server 2008 以上</td>
													</tr>
													<tr>
														<th>Web サーバ</th>
														<td>Apache Ver 2.0 以上</td>
													</tr>
													<tr>
														<th>データ ベース</th>
														<td>MySQL 5.0 以上</td>
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
														<td>Intel Core2 Duo プロセッサ E7500 以上</td>
													</tr>
													<tr>
														<th>メイン メモリ</th>
														<td>1GB 以上</td>
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
														<th>通信 環境</th>
														<td>100Mbps 以上 (TCP/IP プロトコル)</td>
													</tr>
													<tr>
														<th>帳票 ツール</th>
														<td>Adobe Reader 7.0 以上</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

									<div class="catalog-download">
										<div class="btnhov btnhov-color">
											<a class="button-main button-blue button-trans" href="/inter/assets/pdf/medicalpartneria.pdf" target="_blank">
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