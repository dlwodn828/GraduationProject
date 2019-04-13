<!DOCTYPE html>
<html lang="en">

<head>

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
  <link href="/assets/freelancer/css/freelancer.min.css" rel="stylesheet">
  <style>
  
  #tabNav{
    display:block;
  }
  #mainNav{
    height:4rem;
    display:block;
    /* position:relative; */
  }
  .fixed-top2{
    position: fixed;
    top: 4rem;
    right: 0;
    left: 0;
    z-index: 1030;
  }
  .child_ul, .parents_ul{
    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
    width:100%;
    margin-left:auto;
    margin-right:auto;
    }

.child_li {
    width:33.3%;
    margin-left:auto;
    margin-right:auto;
    /* width:7rem; */
    /* margin: 0 0 0 0;
    padding: 0 0 0 0; */
    border : 0;
    float: left;
    text-align:center;
}
.parents_li {
    width:50%;
    margin-left:auto;
    margin-right:auto;
    /* width:7rem; */
    /* margin: 0 0 0 0;
    padding: 0 0 0 0; */
    border : 0;
    float: left;
    text-align:center;
}
.container{
    padding-top:1rem;
}
.topbar{
  float:right;
  font-size:1rem;
  color:white;
  margin-top:-0.5rem;
  margin-right:0.5rem;

}
.topbar2{
  float:left;
  font-size:1rem;
  color:white;
  margin-top:-0.5rem;
  margin-left:0.5rem;

}
#bar_button{
  float:right;
  /* display:table; */
  /* width:100%; */
  height:100%;
  margin-right:10px;
  margin-top:-35px;
}
#hbg{

}
#title{
  padding-top:10psx;
}
  </style>
</head>

<body id="page-top">

  <!-- Navigation --><!-- py-3 px-0 px-lg-3-->
  <!-- <nav class="text-center navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="text-center container" > -->
        <nav class="bg-secondary fixed-top " id="mainNav">
            <h3 id="title"class="text-center text-white" href="#page-top">Pigmong </h3>
            <span class="topbar2"><?=$this->session->userdata('AdminId')?></span>
            <a href="/auth/logoutProc" class="topbar" >Logout</a>
            <!-- <ul class="nav navbar-nav navbar-right">
              <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> -->
                  <!-- <span id="clock" class="text-primary m-r-20"></span> -->
                  <!--<img src="/assets/img/user-13.jpg" alt="" />-->
                   <b class="caret"></b>
                   <!-- <div id="hbg"> -->
                    <a href="javascript:void(0);" onclick="barButtonAction();" id="bar_button">
                      <div class="middle_wrap">
                        <img src="/assets/freelancer/img/usericon.png" id="hbg" class="fa fa-bars" aria-hidden="true">                  
                      </div>
                    </a>
                   <!-- </div> -->
                <!-- </a>
                <ul class="dropdown-menu animated fadeInLeft">
                  <li><a href="/auth/logOutProc">Log Out</a></li>
                </ul>
              </li>
            </ul> -->
        </nav>
        <!-- <div class="menu_wrap">
          <a href="javascript:void(0);" id="close_menu_button" onclick="hideMenu();"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div> -->
        <a href="javascript:void(0);" id="cover_close_button" onclick="hideMenu();"></a>
        <?if($this->session->userdata('AdminType')){?>
        <nav class="bg-primary fixed-top2 " id="tabNav_p">
            <ul class="parents_ul">
                <li class="parents_li">
                    <a class="nav-link  text-white rounded js-scroll-trigger" href="/Main2/missions">Missions</a> 
                </li>
                <li class="parents_li">
                    <a class="text-white nav-link  rounded js-scroll-trigger" href="/Main2/needs">Needs</a> 
                </li>
                
            </ul>
        </nav>
        <?}else{?>

        <nav class="bg-primary fixed-top2 " id="tabNav">
            <ul class="child_ul">
                <li class="child_li">
                    <a class="text-white nav-link  rounded js-scroll-trigger" href="/Main2/needs">Needs</a> 
                </li>
                <li class="child_li">
                    <a class="nav-link  text-white rounded js-scroll-trigger" href="/Main2/missions">Missions</a> 
                </li>
                <li class="child_li">
                    <a class="nav-link  text-white rounded js-scroll-trigger" href="/Main2/savings">Savings</a> 
                </li>
            </ul>
        </nav>
        <?}?>
        <script>
          function barButtonAction(){
            console.log("BarButtonAction");
            showMenu();
          }
          function showMenu(){
            $(".menu_wrap").animate({
              left:"0px"},
              500,
              function(){
                $("#cover_close_button").css("display","block");
            });
          }
          function hideMenu(){
            console.log("hideMenu");
            $(".menu_wrap").animate({
              left:"-100%"
            },
            500,
            function(){
              $("#cover_close_button").css("display","none");
            });
          }

          
        </script>
