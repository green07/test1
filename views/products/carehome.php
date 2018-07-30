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
	<body class="carehome">
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
			<div class="products-page products-inner carehome">
				<div class="container">

					<div class="title-header">
						<hr><h3 class="introduction">CareHome Manager
						<small>介護付有料老人ホーム向け施設管理システム</small>
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
										<img src="/inter/assets/images/products/careHomeResize.jpg" alt="CareHome Manager">
									</div>
								</div>
								<div class="col-sm-8">
									<div class="overview">
										<h4>
											概要<span class="head-divider"> | </span><small>Product Overview</small>
										</h4>
										<div class="sub-content">
											<p>
												日本最大規模の社会福祉法人様での実績をもとに有料老人ホーム向け施設管理システムパッケージを開発しました。入居者の管理は勿論の事、国保連に対応した請求機能も用意しております。
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
											<h5>入居者管理機能</h5>
											<ul><li>
												ご入居者の基礎情報（氏名・年齢等）はもちろん、契約に関わる情報や各種連絡先、利用施設の予約、介護保険・特定施設契約、外泊・入院等の利用状況といった有料老人ホームの運営に欠かせない情報を一元管理します。複数施設をまたいでも複数回登録する必要はありません。
											</li>
											<li>
												ネットワークが繋がっている場合を想定
											</li></ul>
											<h5>請求管理機能</h5>
											<ul><li>
												介護給付費請求や国保連伝送データ作成といった有料老人ホーム特有の処理に加え、所定フォーマットによる電気・水道・給湯・電話等の検針値情報取り込みや、ハンディーターミナルからの検針値取り込みも備えており、簡単な操作で請求に必要な各種情報の管理が可能です。
											</li></ul>
											<h5>簡単操作・セキュリティ</h5>
											<ul><li>
												シンプルな画面・シンプルな操作を心がけており、キーボード入力も必要最低限に留めました。少ない操作で簡単に利用出来ます。また、不正利用の防止や全操作のログ監視などセキュリティ対策も万全です。
											</li></ul>
											<h5>食事管理機能</h5>
											<ul><li>
												食事のパターン登録、喫食予定・実績の管理、日単位の喫食予実績集計、ICカードに実績連携を用意しており、施設に求められている高度な食事管理に対応しております。
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
											<h5>サーバ</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>CPU</th>
														<td>Intel Xeonプロセッサー(3GHz)以上 または 同等のプロセッサ</td>
													</tr>
													<tr>
														<th>メモリ</th>
														<td>推奨2GB以上</td>
													</tr>
													<tr>
														<th>ディスク容量</th>
														<td>100GB以上</td>
													</tr>
													<tr>
														<th>OS</th>
														<td>Windows Server 2003 以上</td>
													</tr>
													<tr>
														<th>Webサーバ</th>
														<td>IIS 6.0 以上</td>
													</tr>
													<tr>
														<th>データ<br>ベース</th>
														<td>Oracle 10g 以上</td>
													</tr>
													<tr>
														<th>バックアップ媒体</th>
														<td>DAT または AIT</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-sm-6">
											<h5>クライアント</h5>
											<table class="table-responsive">
												<tbody>
													<tr>
														<th>OS</th>
														<td>Microsoft Windows XP Home / Professional 以上</td>
													</tr>
													<tr>
														<th>CPU</th>
														<td>Celeron または 互換 CPU 2.26GHz 以上</td>
													</tr>
													<tr>
														<th>メモリ</th>
														<td>512MB 以上</td>
													</tr>
													<tr>
														<th>ディスク容量</th>
														<td>10GB 以上</td>
													</tr>
													<tr>
														<th>ディスプレイ</th>
														<td>1024×768(XGA) High Color(6万色)以上を推奨</td>
													</tr>
													<tr>
														<th>必須ソフト</th>
														<td>Internet Explorer 6.0 以上<br>Windows Office 2000 以上</td>
													</tr>
													<tr>
														<th>通信環境</th>
														<td>TCP/IP プロトコルが使用できる10Mbps以上<br>(100Mbps)のLAN、または同等の環境</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

									<div class="catalog-download">
										<div class="btnhov btnhov-color">
											<a class="button-main button-blue button-trans" href="/inter/assets/pdf/carehomemanager.pdf" target="_blank">
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