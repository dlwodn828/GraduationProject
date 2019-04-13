<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="/assets/freelancer/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/freelancer/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/assets/freelancer/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/assets/freelancer/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript --><!--contact_me error-->
    <!-- <script src="/assets/freelancer/js/jqBootstrapValidation.js"></script> -->
    <!-- <script src="/assets/freelancer/js/contact_me.js"></script> -->

    <!-- Custom scripts for this template -->
    <!-- <script src="/assets/freelancer/js/freelancer.min.js"></script> -->
    <!-- Bootstrap core CSS -->
    <link href="/assets/freelancer/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/freelancer/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/assets/freelancer/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
    <link href="/assets/freelancer/css/freelancer.min.css" rel="stylesheet">
    <link href="/assets/ref/timeline/timeline.css" rel="stylesheet">
    <link href="/assets/ref/missionbox.css" rel="stylesheet">
    <link href="/assets/ref/piggybank.css" rel="stylesheet">
    <script src="/assets/ref/piggybank.js"></script>
    <!-- <script src='http://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='/assets/jquerykeyframes/jquery.keyframes.js'></script> -->
    <title>Document</title>
    <style>
    
    @import url(https://fonts.googleapis.com/css?family=Bitter:400,400italic,700);

        * {
        box-sizing: border-box;
        font-family:jua;
        }

        html,
        body {
        width: 100%;
        height: 100%;
        }


        h2 {
        font-size: 2.5rem;
        font-weight: bold;
        text-transform: uppercase;
        }

        a {
        text-decoration: none;
        font-family:jua;
        }


        


        .nav {
            width: 100%;
            /* font-size: 0; */
            /* height:100px; */
            width: 100%;
            position: fixed;
            left: 0;
            bottom: 0;
            z-index:1000;
            /* box-shadow: 0px 0px 25px #656668; */
            box-shadow: 0px 0px 20px #656668;
            
       
            
        }

        .nav_item {
            display: inline-block;
            font-size: 1rem;
            padding: 0.5rem;
            width: 33.3%;
            color: black;
            background-color:white;
            text-align: center;
            /* transition: all .2s ease-in-out; */
            margin-bottom:0px;
            bottom:0;

        }
        .nav_item_p {
            display: inline-block;
            font-size: 1rem;
            padding: 0.5rem;
            width: 50%;
            color: black;
            background-color: white;
            text-align: center;
            /* transition: all .2s ease-in-out; */
            margin-bottom:0px;
            bottom:0;

            
        }


        .section {
        }

        .tabs {
            position: relative;
        }
        .first-time,
        .tab {
        width: 100%;
        margin: 7rem auto;
        text-align: center;
        position: absolute;
        top: 0;
        /* opacity: 0; */
        /* transform: translateY(3rem); */
        /* transition: all .5s cubic-bezier(.2, 0, 0, 1); */
        }

        .tab:target {
        opacity: 1;
        transform: translateY(0);
        /* transition-delay: .5s; */
        }
        
        .nav_tabs > *{
            /* border-right:1px solid gray; */
        }
        .nav_parents{

        }

        @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v15/S6uyw4BMUTPHjx4wWw.ttf) format('truetype');
        }
        ol,
        ul {
        list-style: none;
        }
        /* * {
        margin: 0;
        padding: 0;
        }
        *,
        *:after,
        *:before {
        box-sizing: border-box;
        }
        a {
        color: #000;
        text-decoration: none;
        }
        html {
        line-height: 1.2;
        }
        body {
        background-color: #fff;
        color: #333;
        font-family: "Lato", arial, sans-serif;
        font-size: 16px;
        } */
        header {
        background-color: #fff;
        background-color: rgba(255, 255, 255, 0);
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
        height: 50px;
        }
        .logo {
        color: #fff;
        font-size: 20px;
        line-height: 50px;
        padding: 0 0 0 20px;
        text-transform: capitalize;
        }
        /* menu button */
        .menuBtn {
        height: 30px;
        width: 30px;
        position: absolute;
        right: 20px;
        top: 10px;
        z-index: 101;
        }
        .menuBtn > span {
        background-color: #fff;
        border-radius: 1px;
        height: 2px;
        width: 100%;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -1px 0 0 -15px;
        transition: height 100ms;
        }
        .menuBtn > span:after,
        .menuBtn > span:before {
        content: "";
        background-color: #fff;
        border-radius: 1px;
        height: 2px;
        width: 100%;
        position: absolute;
        left: 50%;
        margin-left: -15px;
        transition: all 200ms;
        }
        .menuBtn > span:after {
        top: -7px;
        }
        .menuBtn > span:before {
        bottom: -7px;
        }
        .menuBtn.act > span {
        height: 0;
        }
        .menuBtn.act > span:after,
        .menuBtn.act > span:before {
        background-color: #008877;
        top: 1px;
        }
        .menuBtn.act > span:after {
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
        }
        .menuBtn.act > span:before {
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        }
        /* main menu block */
        .mainMenu {
        background-color: #fff;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 100;
        height: auto;
        width: 100%;
        display: table;
        text-align: center;
        opacity: 0;
        transition: all 500ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
        -webkit-transform: scale(0);
                transform: scale(0);
        }
        .mainMenu.act {
        opacity: 1;
        -webkit-transform: scale(1);
                transform: scale(1);
        }
        .mainMenu.act ul li {
        opacity: 1;
        -webkit-transform: translateX(0);
                transform: translateX(0);
        }
        .mainMenu ul {
        display: table-cell;
        vertical-align: middle;
        }
        .mainMenu li {
        padding: 8px 0;
        transition: all 400ms 510ms;
        opacity: 0;
        }
        .mainMenu li:nth-child(odd) {
        -webkit-transform: translateX(30%);
                transform: translateX(30%);
        }
        .mainMenu li:nth-child(even) {
        -webkit-transform: translateX(-30%);
                transform: translateX(-30%);
        }
        .mainMenu li:last-child {
        -webkit-transform: none;
                transform: none;
        }
        .mainMenu a {
        color: #19b698;
        display: inline-block;
        font-size: 18px;
        }
        .mainMenu a.suBtn {
        color: #fff;
        }
        /* sign up button */
        .suBtn {
        background-color: #19b698;
        border-radius: 5px;
        padding: 10px 20px;
        }
        #mainNav{
            background-color:#d9eff4;
        }
        .title1{
            color:#e39897;
            font-family:jua;
            margin-left:130px;

            
        }
    </style>
</head>
<body>
    <nav class="fixed-top " id="mainNav">
        <!-- <ul class="nav navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> -->
            <!-- <span id="clock" class="text-primary m-r-20"></span> -->
            <!--<img src="/assets/img/user-13.jpg" alt="" />-->

            <!-- <div id="hbg"> -->
                <!-- <div class="middle_wrap">
                    </div> -->

                                              
                    <div class="mainContainer">
                        <header>
                            <!-- <a href="#" class="logo">logo</a> -->
                            <!-- <h3 class="text-center title1">Pigmong </h3> -->
                            <img class="text-center title1" src="/assets/freelancer/img/logo.png" style="max-width:30%;height:auto;"alt="">
                            <a href="#" class="menuBtn">
                                <img src="/assets/freelancer/img/usericon.png" id="hbg" class="fa fa-bars" aria-hidden="true">
                                <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" width="10px" height="10px" viewBox="215.186 215.671 80.802 80.8"
                                enable-background="new 215.186 215.671 80.802 80.8" xml:space="preserve">
                                <polygon fill="#FFFFFF" points="280.486,296.466 255.586,271.566 230.686,296.471 215.19,280.964 240.086,256.066 215.186,231.17 
                                230.69,215.674 255.586,240.566 280.475,215.671 295.985,231.169 271.089,256.064 295.987,280.96 "/>
                                </svg>-->
                            </a>
                            <nav class="mainMenu">
                                <ul style="padding-left:0px;">
                                    <li><h3><?=$this->session->userdata('AdminId')?></h3></li>
                                    <li><h4>전체 저금 금액 : <span id="totalbalance"><?=$this->session->userdata('TotalBalance')?></span> 원</h4></li>
                                    <?php if(($this->session->userdata("AdminType")==0)){?>
                                        <li><a href="/Main2/needs">필요해요</a></li>
                                        <li><a href="/Main2/missions">노력해요</a></li>
                                        <li><a href="/Main2/savings">저금해요</a></li>
                                    <?php }else{?>
                                        <li><a href="/Main2/needs">필요해요</a></li>
                                        <li><a href="/Main2/missions">노력해요</a></li>
                                    <?php }?>
                                    <li><a href="/auth/logoutProc" class="suBtn">로그아웃</a></li>
                                </ul>
                            </nav>
                        </header>
                    </div>


            <!-- </div> -->
            <!-- </a>
            <ul class="dropdown-menu animated fadeInLeft">
            <li><a href="/auth/logOutProc">Log Out</a></li>
            </ul>
        </li>
        </ul> -->
    </nav>
    <main class="main fixed main_tabs">
      
    <?if($this->session->userdata('AdminType')){?>
        <nav class="nav fixed nav_tabs">
            <a href="/Main2/missions" class="nav_item_p"><img class="nav_img" id="missiontab" src="/assets/freelancer/img/missiontab.png" height="32px"><br>노력해요</a>
            <a href="/Main2/needs" class="nav_item_p"><img class="nav_img" id="bear" src="/assets/freelancer/img/needicon.png"  height="32px"><br>필요해요</a>
        </nav>
    <?}else{?>
        <nav class="nav fixed nav_tabs">
            <a href="/Main2/needs" class="nav_item"><img class="nav_img" id="bear" src="/assets/freelancer/img/needicon.png"  height="32px"><br>필요해요</a>
            <a href="/Main2/missions" class="nav_item"><img class="nav_img" id="missiontab" src="/assets/freelancer/img/missiontab.png" height="32px"><br>노력해요</a>
            <a href="/Main2/savings" class="nav_item"><img class="nav_img" id="savingtab" src="/assets/freelancer/img/savingtab.png" height="32px"><br>저금해요</a>
        </nav>
    <?}?>
    <script>
    function AddComma(data_value) {
        return Number(data_value).toLocaleString('en');
    }
        $(document).ready(function(){
            // menu click event
            var totalbalance = $("#totalbalance").html();
            $("#totalbalance").html(AddComma(totalbalance));
        
        $('.menuBtn').click(function() {
            $(this).toggleClass('act');
                if($(this).hasClass('act')) {
                    $('.mainMenu').addClass('act');
                }
                else {
                    $('.mainMenu').removeClass('act');
                    
                }
        });
    });
    </script>
      <!-- <section class="section section_tabs">
        <div id="tab1" class="tab">
          
        </div>
        <div id="tab2" class="tab">
          
        </div>
        <div id="tab3" class="tab">
          
        </div>
      </section> -->
      
