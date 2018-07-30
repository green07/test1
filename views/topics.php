<!DOCTYPE html>
<html lang="en">
<head>
<title>INTER</title>
  <?php include 'views/common/head links.html' ?>
    KIKI IF YOU LOVE ME
    <!-- browser icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/inter/assets/images/test/homepage/favicon blue.png" />
    
    <!-- cdn css -->
    <link rel="stylesheet" href="/inter/assets/css/company/aos.css">

    <!-- local css -->
    <!-- Common CSS -->
    <link rel="stylesheet" type="text read-toggle/css" href="/inter/assets/css/common/common.css">
  
    <link rel="stylesheet" href="./assets/css/topics/topics.css"/>
</head>
<body>

  <!-- Preloader section start -->
  <?php include 'views/common/preloader.html' ?>
  <!-- Preloader section start -->

  <!-- navbar section -->
  <?php include 'views/common/navigation.html' ?>
  <!-- nav bar section end -->

  <div id="mainHeader">
    <div>
      <h1>
      <span class="eng-trans">TOPICS</span>
        <span class="jpn-trans">トピックス</span>
      </h1>
      <h2>
      <span class="eng-trans">TOPICS</span>
        <span class="jpn-trans">TOPICS</span>
      </h2>
    </div>
  </div>

<div class="content">

  <div class="container">

  <input type="submit" value="Add Items" id="uploadButton" name="submit">

  <div class="upload-area-container" id="upload-area-container">
    <input type="file" name="file" id="file" multiple>  

    <!-- Drag and Drop container-->
    <div class="upload-area"  id="upload-area">
      <div class="iconTextDisplay">
        <div class="col-lg-4">
          <span><img src="/inter/assets/images/test/cameraICO.png"></span>
        </div>
        <div class="col-lg-8">
          <span>Drag and drop or click to upload</span>
        </div>
      </div>
    </div>

  </div>

  <div class="form-inline" id="preview"></div>

  <div id="result"></div>

  </div>

  <!-- <ul id="pagin"></ul> -->
</div>



<?php include 'views/common/footer.html' ?>
<?php include 'views/common/footer scripts.html' ?>

  
<script src="./assets/js/aos.js"></script>


<script src="/inter/assets/js/common/ImageTools.js"></script>
<script src="./assets/js/topics.js"></script>

<!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="./assets/js/common/readmore.js"></script> -->
</body>
</html>