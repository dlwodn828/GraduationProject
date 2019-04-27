<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
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
    <!-- <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet"> -->
    <link href="/assets/freelancer/css/freelancer.min.css" rel="stylesheet">
    <link href="/assets/ref/scroll.css" rel="stylesheet">
    <title></title>
    <style>
    *{text-decoration:none!important}

    #join_back{
        background-image:url('/assets/freelancer/img/join_back.png');
        background-repeat:no-repeat;
        background-size:100%;
    }
    .join_box{
        position:relative;
        top:130px;
    }
    </style>
</head>
<body id="join_back">
<div class="container">
    <div style="top:250px; background-color:rgba( 255, 255, 255, 0 );.; border:0px; width:300px;   margin: 0 auto;">
    <div class="join_box">
        <article class="card-body">
            <h4 class="text-center card-title mb-4 mt-1">부모님</h4>
            <form id="joinForm" action="/Auth/join" method="post">
                <div class="form-group">
                    <label>이름</label>
                    <input class="form-control" name="pname" type="text" autocomplete="off">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>아이디</label>
                    <input class="form-control" name="pid" type="id" autocomplete="off">
                </div> <!-- form-group// -->
                
                <div class="form-group">
                    <label>비밀번호</label>
                    <input class="form-control" name="ppwd" type="password" placeholder="6자리 이상 입력하세요"autocomplete="off">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>계좌 번호</label>
                    <input class="form-control" name="pwid" type="text" autocomplete="off">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>잔액</label>
                    <input class="form-control" name="pwbalance" type="text" placeholder="계좌의 잔액을 임의로 설정해주세요" autocomplete="off">
                </div> <!-- form-group// --> 
                <br/>

                <div class="header" id="top" style="margin:0px; margin-bottom:80px;">
                    <i class="fa fa-angle-down animated bounce" style="margin:0px;"onclick="$('body,html').animate({scrollTop:$('body').height()-200},2000);"></i>
                </div>

                <h4 class="text-center card-title mb-4 mt-1">아이</h4>
                <div class="form-group">
                    <label>이름</label>
                    <input class="form-control" name="cname" type="text" autocomplete="off">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>아이디</label>
                    <input class="form-control" name="cid" type="id" autocomplete="off">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <label>비밀번호</label>
                    <input class="form-control" name="cpwd" type="password"  placeholder="6자리 이상 입력하세요" autocomplete="off">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>계좌 번호</label>
                    <input class="form-control" name="cwid" type="text" autocomplete="off">
                </div> <!-- form-group// --> 
                <br/>

                <h4 class="text-center card-title mb-4 mt-1">저금통</h4>
                <div class="form-group">
                    <label>저금통 이름</label>
                    <input class="form-control" name="pbid" type="text" autocomplete="off">
                </div> <!-- form-group// -->    
                <br/>

                <div class="form-group">
                    <button type="submit" class="btn btn-block"style="background-color:#48adbc;color:white;"> 가입하기  </button>
                </div> <!-- form-group// -->   


            </form>
        </article>
    </div> <!-- card.// -->
    </div>
    </div>
    <script>

    </script>
</body>
</html>