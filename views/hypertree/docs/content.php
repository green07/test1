<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=10" />
    <title>Hypertree</title>
    <link rel="icon" href="/inter/assets/images/hypertree/leaf.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/inter/assets/css/common/preloader-navbar-footer.css" />
    <link rel="stylesheet" type="text/css" href="/inter/assets/css/hypertree/common.css" /> 
    <link rel="stylesheet" type="text/css" href="/inter/assets/css/hypertree/content.css" />
    <script src="/inter/assets/js/common/navbar-preloader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <h1>Hypertree<img id="png_01" src="/inter/assets/images/hypertree/leaf.png" alt="leaf"></h1>
            <h2 id="pitch">
                異のバワーをご ください！<br/>
                システムインレーションを革新するシステム構築基盤技術
            </h2>    
        </div> 
    </div>
    <div id="container">
        <div id="pager">
            <ul>
                <li class="topic">
                    <h5><a href="/inter/hypertree">ホーム</a></h5>
                </li>
                <li class="topic">
                    <h5>HyperTree (HT) 技術の本質</h5>
                    <ul class="sub">
                        <h3># 基本編</h3>
                        <li><a href="/inter/hypertree/element">HTを支える要素技術</a></li>
                        <li><a href="/inter/hypertree/speed">HT技術はなぜ超高速なのか</a></li>
                        <li><a href="/inter/hypertree/development">プログラム開発・不要 （論理プログラム型の採用と拡張）</a></li>
                        <li><a href="/inter/hypertree/originality">コアを支える独創性</a></li>
                    </ul>
                    <ul class="sub">
                        <h3># 応用編</h3>
                        <li><a href="/inter/hypertree/versatility">ＨＴが持つ底知れぬ「汎用性」</a></li>
                        <li><a href="/inter/hypertree/special">ＨＴが得意な問題</a></li>
                        <li><a href="/inter/hypertree/compatibility">デファクト技術との相性</a></li>
                        <li><a href="/inter/hypertree/application">応用分野、拡大中</a></li>
                    </ul>
                    <ul class="sub">
                        <h3># 技術編</h3>
                        <li><a href="/inter/hypertree/engine">エンジンは省資源型</a></li>
                        <li><a href="/inter/hypertree/problems">大きい問題にも強い</a></li>
                        <li><a href="/inter/hypertree/core-functions">コア機能をパッケージ化</a></li>
                        <li><a href="/inter/hypertree/implementation">コア機能とその実装</a></li>
                    </ul>
                </li>
                <li class="topic">
                    <h5>HTにご関心を持たれた方へ</h5> 
                    <ul class="sub">
                        <li><a href="/inter/hypertree/menu">サービスメニューと窓口</a></li>
                        <li><a href="/inter/hypertree/demonstration">説明やデモ ンストレーションを希望される方へ</a></li>
                        <li><a href="/inter/hypertree/consultation">解決したい問題を持って相談を 求められる方へ</a></li>
                        <li><a href="/inter/hypertree/collaboration">パートナーとして連携をお考えの方へ</a></li>
                    </ul>
                </li>
                <li class="topic">
                    <h5>HTの研究開発・10年の軌跡</h5> 
                    <ul class="sub">
                        <li><a href="/inter/hypertree/foundation">創業から技術開発立社企業への歩み</a></li>
                        <li><a href="/inter/hypertree/challenge">	HTを育ててくれた「お客様の難題」</a></li>
                    </ul>
                </li>
                <li class="topic">
                    <h5>HTを駆使したビジネス例</h5>
                    <ul class="sub">
                        <li><a href="/inter/hypertree/case-study">実施済み事例/一覧と詳細</a></li>
                        <li><a href="/inter/hypertree/daikin">ダイキン工業株式会社殿事例</a></li>
                    </ul>
                </li>
                <li class="topic">
                    <h5>HT関連商品・サービス</h5>
                    <ul class="sub">
                        <li><a href="/inter/hypertree/tool">HTツール</a></li>
                        <li><a href="/inter/hypertree/service">サービス</a></li>
                    </ul>
                </li>
                <li class="topic">
                    <h5>性能実例</h5>
                    <ul class="sub">
                        <li><a href="/inter/hypertree/performance">HT性能実例</a></li>
                        <li><a href="/inter/hypertree/benchmark">HTベンチマークテスト</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="wrapper">
            <div id="content">
                <?php  
                    $request = $_SERVER['REQUEST_URI'];
                    $directoryName = '/inter/hypertree/';
                    $docs = 'views/hypertree/docs/';
                    
                    switch ($request) {
                        case $directoryName.'element':
                            include $docs.'element.html';
                            break;
                        case $directoryName.'speed':
                            include $docs.'speed.html';
                            break;
                        case $directoryName.'development':
                            include $docs.'development.html';
                            break;
                        case $directoryName.'logical':
                            include $docs.'logical.html';
                            break;
                        case $directoryName.'example':
                            include $docs.'example.html';
                            break;
                        case $directoryName.'originality':
                            include $docs.'originality.html';
                            break;
                        case $directoryName.'patent':
                            include $docs.'patent.html';
                            break;
                        case $directoryName.'fundamental':
                            include $docs.'fundamental.html';
                            break;                            
                        case $directoryName.'versatility':
                            include $docs.'versatility.html';
                            break; 
                        case $directoryName.'initiatives':
                            include $docs.'initiatives.html';
                            break;
                        case $directoryName.'practicality':
                            include $docs.'practicality.html';
                            break;
                        case $directoryName.'special':
                            include $docs.'special.html';
                            break;
                        case $directoryName.'general-purpose':
                            include $docs.'general-purpose.html';
                            break;
                        case $directoryName.'compatibility':
                            include $docs.'compatibility.html';
                            break;
                        case $directoryName.'application':
                            include $docs.'application.html';
                            break;
                        case $directoryName.'engine':
                            include $docs.'engine.html';
                            break;
                        case $directoryName.'problems':
                            include $docs.'problems.html';
                            break;
                        case $directoryName.'core-functions':
                            include $docs.'core-functions.html';
                            break;
                        case $directoryName.'implementation':
                            include $docs.'implementation.html';
                            break;
                        case $directoryName.'function':
                            include $docs.'function.html';
                            break;
                        case $directoryName.'menu':
                            include $docs.'menu.html';
                            break;
                        case $directoryName.'price':
                            include $docs.'price.html';
                            break;
                        case $directoryName.'demonstration':
                            include $docs.'demonstration.html';
                            break;
                        case $directoryName.'consultation':
                            include $docs.'consultation.html';
                            break;
                        case $directoryName.'collaboration':
                            include $docs.'collaboration.html';
                            break;
                        case $directoryName.'foundation':
                            include $docs.'foundation.html';
                            break;
                        case $directoryName.'challenge':
                            include $docs.'challenge.html';
                            break;
                        case $directoryName.'case-study':
                            include $docs.'case-study.html';
                            break;
                        case $directoryName.'daikin':
                            include $docs.'daikin.html';
                            break;
                        case $directoryName.'tool':
                            include $docs.'tool.html';
                            break;
                        case $directoryName.'service':
                            include $docs.'service.html';
                            break;
                        case $directoryName.'performance':
                            include $docs.'performance.html';
                            break;
                        case $directoryName.'benchmark':
                            include $docs.'benchmark.html';
                            break;
                    }
                ?>
            </div>
        </div> 
    </div>

    <!-- Footer Section --> 

    <?php include 'views/common/footer.html' ?> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"  src="/inter/assets/js/hypertree.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/inter/assets/js/common/navbar-preloader.js"></script>
</body>

</html>