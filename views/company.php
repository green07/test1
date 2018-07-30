<!DOCTYPE html>
<html>
<head>
	<!-- title icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/inter/assets/images/homepage/favicon blue.png" />
	<title>INTER</title>

    <!-- common header links -->
    <?php include 'views/common/head links.html' ?>

    <link rel="stylesheet" href="/inter/assets/css/company/aos.css">
    <link rel="stylesheet" href="/inter/assets/css/company/company.css"/>
</head>
<body>
    <!-- Preloader section start -->
    <?php include 'views/common/preloader.html' ?>

    <?php include 'views/common/navigation.html'?> 

    <!-- Header Section -->
	<div id="mainHeader">
        <div>
            <h1>私たちに関して</h1>
            <h2>ABOUT US</h2>
        </div>
	</div>

    <!-- Navigation -->
    <div class="company-nav">
        <div class="company-nav-container">
            <div class="active"><a href="#" id="message" data-scroll-to=".company-nav">社長のご挨拶</a></div>
            <div><a href="#" id="profile" data-scroll-to=".company-nav">会社概要</a></div>
            <div><a href="#" id="chart" data-scroll-to=".company-nav">組織図</a></div>
            <div><a href="#" id="history" data-scroll-to=".company-nav">沿革</a></div>
            <div><a href="#" id="location" data-scroll-to=".company-nav">事業所所在地</a></div>
        </div>
    </div>

    <!-- load contents of each screen -->
    <div class="contents" id="companyContent">
        <?php include 'views/company/greetings.html';?>
    </div>

    <!-- Footer Section --> 
    <?php include 'views/common/footer.html' ?> 

    <!-- Library js-->
    <?php include 'views/common/footer scripts.html' ?>

    <script src="/inter/assets/js/aos.js"></script>
    <script src="/inter/assets/js/company.js"></script>
</body>
</html>