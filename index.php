<?php
    $request = $_SERVER['REQUEST_URI'];
    $directoryName = '/inter/';
    switch ($request) {

        case $directoryName:
            include 'views/index.php';
            break;
        case $directoryName.'privacy':
            include 'views/privacy page.php';
            break;
        case $directoryName.'privacy/manual':
            include 'views/privacy/manual.php';
            break;
        case $directoryName.'privacy/kaiji':
            include 'views/privacy/kaiji.php';
            break;
        
        case $directoryName.'contact':
            include 'views/contact.php';
            break;
        case $directoryName.'send':
            include 'email/send.php';
            break; 
        case $directoryName.'careers':
            include 'views/careers.php';
            break;

        case $directoryName.'about':
            include 'views/company.php';
            break;

        case $directoryName. 'services/fieldEngineering':
            include 'views/services/fe.php';
            break;

        case $directoryName. 'services/systemIntegration':
            include 'views/services/si.php';
            break;
            
        case $directoryName.'products':
            include 'views/products.php';
            break;
        case $directoryName.'products/nurseaid':
            include 'views/products/nurseaid.php';
            break;
        case $directoryName.'products/elearning':
            include 'views/products/elearning.php';
            break;
        case $directoryName.'products/carehome':
            include 'views/products/carehome.php';
            break;
        case $directoryName.'products/linic':
            include 'views/products/linic.php';
            break;
        case $directoryName.'products/medworks':
            include 'views/products/medworks.php';
            break;
        case $directoryName.'products/mpcres':
            include 'views/products/mpcres.php';
            break;
        case $directoryName.'products/mpia':
            include 'views/products/mpia.php';
            break;
        case $directoryName.'products/mpim':
            include 'views/products/mpim.php';
            break;
        case $directoryName.'products/multipack':
            include 'views/products/multipack.php';
            break;
        case $directoryName.'products/nursenavi':
            include 'views/products/nursenavi.php';
            break;
        case $directoryName.'products/catalog':
            include 'views/products/catalog.php';
            break;

        case $directoryName.'locations':
            include 'views/about.php';
            break;
        case $directoryName.'about/?osaka':
            include 'views/company.php';
            break;
        case $directoryName.'about/?tokyo':
            include 'views/company.php';
            break;
        case $directoryName.'about/?nagoya';
            include 'views/company.php';
            break;
        case $directoryName.'about/?hamamatsu':
            include 'views/company.php';
            break;
        case $directoryName.'topics':
            include 'views/topics.php';
            break;
		case $directoryName.'hypertree':
            include 'views/hypertree.php';
            break;
        case $directoryName.'upload':
            include 'views/upload.php';
            break;
        case (strpos($request, 'inter/hypertree/pdf') == 1 ? true: false) :
            $pdf = $request;
            $pdf = str_replace('/inter/hypertree/pdf/', '', $pdf);
            
            header("Content-type: application/pdf");
            // header("Content-Disposition: inline; filename=".$pdf.".pdf");
            @readfile('assets/pdf/hypertree/'.$pdf);
            break;
        case (strpos($request, 'inter/hypertree/') == 1 ? true: false) :
            include 'views/hypertree/docs/content.php';
            break;
        default:
            include 'views/common/error.html';
            break;
}

