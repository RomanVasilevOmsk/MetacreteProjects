<?php

require_once 'cpc.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Metacrete</title>
    <link rel="stylesheet" href="css/app.css">
    @@include('partial/common/head.html')
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKKGPR8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="l-page">
        <div class="l-page__inner" >
            @@include('./partial/common/header.html')
        </div>
        <div class="l-page__container main-screen">
            @@include('./partial/main-screen.html')
        </div>
        <div class="l-page__container benefit">
                @@include('./partial/benefit.html')
        </div>
        <div class="l-page__container nodes">
            @@include('./partial/nodes.html')
        </div>
        <div class="l-page__container all-objects">
             @@include('./partial/all-objects.html')
        </div>
        <div class="l-page__container">
            @@include('./partial/certificates.html')
        </div>
        <div class="l-page__container">
            @@include('./partial/garant.html')
        </div>
        <div class="l-page__container">
            @@include('./partial/questions.html')
        </div>
    <div class="l-page__inner" >
        @@include('./partial/common/footer.html')
    </div>
</div>
@@include('partial/common/modal.html')
@@include('partial/common/modal-nodes/modal-nodes1.html')
@@include('partial/common/modal-nodes/modal-nodes2.html')
@@include('partial/common/modal-nodes/modal-nodes3.html')
@@include('partial/common/modal-nodes/modal-nodes4.html')
@@include('partial/common/modal-nodes/modal-nodes5.html')
@@include('partial/common/modal-nodes/modal-nodes6.html')
@@include('partial/common/modal-all-objects.html')

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500|Source+Sans+Pro:300,400,600" rel="stylesheet">
<link rel="stylesheet" href="css/vendor.css">
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script  src="js/vendor.min.js"></script>
<script src="js/app.js"></script>
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TKKGPR8');
</script>

</body>
</html>
