<!-- Portfolio Grid Section --><!-- class="star-dark mb-5" -->
<style>
  h1, h2, h3, h4, h5, h6 {
    font-weight: 700;
    font-family: jua;
}
span{
  font-family: jua;
}
#contact{
  margin-top:1rem;
 
}
.row{
  height:100%;
  text-align:center;
}
#inputdiv{
  width:100%;

}
.form-control{
  width:60%;
  text-align:center;
  float:right;
  margin-right:1rem;
}
#smb{
  width:100%;
  text-align:center;
}

label{
  padding-top:0.4rem;
}
.flex-wrapper {
  display: flex;
  flex-flow: row nowrap;
}

.single-chart {
  width: 100%;
  justify-content: space-around ;
}

.circular-chart {

  display: block;
  margin: 10px auto;
  max-width: 80%;
  max-height: 250px;
}

.circle-bg {
  fill: none;
  stroke: #eee;
  stroke-width: 3.8;
}

.circle {
  fill: none;
  stroke-width: 2.8;
  stroke-linecap: round;
  animation: progress 1s ease-out forwards;
}

@keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}


.circular-chart.orange .circle {
  stroke: #ff9f00;
}

.circular-chart.green .circle {
  stroke: #4CC790;
}

.circular-chart.blue .circle {
  stroke: #3c9ee5;
}

.percentage {
  fill: #666;
  font-family: sans-serif;
  font-size: 0.5em;
  text-anchor: middle;
}
.goaltext{
  fill: #666;
  font-family: sans-serif;
  font-size: 0.15rem;
  text-anchor: middle;
}
img {
    /* width: 100px;
    height:100px;
    border-radius: 50px; */
} 
.tab {
    width: 100%;
    margin: 2rem auto;
    text-align: center;
    position: absolute;
    top: 0;
    /* opacity: 0; */
    transform: translateY(3rem);
    /* transition: all .5s cubic-bezier(.2, 0, 0, 1); */
  }
  .savingInfo{
    
    width:90%;
    height:8rem;
    border-radius:10px;
    box-shadow: 0px 0px 10px #656668;
    margin: auto;
  }
  #needback{
    margin-top:-3.8rem;

    animation: needback 1.5s forwards;

  }
  /* @keyframes needback {
    from {
      margin-left: -10px;
    }
    to {
      margin-left:-30px;
    }
  }  */
  .price{
    color:#e39897;
    font-size:2rem;
  }
  #contents{
    /* background-color:white; */
    color:gray;
    font-size:2rem;
    margin:0px;
    font-weight:500;
    /* border:2px solid gray; */
  }
#section{
  font-family: 'jua', sans-serif;
}

.actionbutton {
  position: absolute;
  background: pink;
  width: 50px;
  height: 50px;
  font-size: 3em;
  font-weight: 300;
  padding-top:8px;
  color:white;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  bottom: 6.5rem;

  left: 43%;
  box-shadow: 0 0 8px #202020;
  float:left;
  z-index:1000;
}

  /* .tooltip{ 
    position:relative;
    float:right;
  }
  .tooltip > .tooltip-inner {background-color: ; padding:5px 15px; color:rgb(23,44,66); font-weight:bold; font-size:13px;}
  .popOver + .tooltip > .tooltip-arrow {border-left: 5px solid transparent; border-right: 5px solid transparent; 	}

  .progress{
    border-radius:;
    overflow:visible;
  }
  .progress-bar{
    background:rgb(23,44,60); 
    -webkit-transition: width 1.5s ease-in-out;
    transition: width 1.5s ease-in-out;
  } */ 

/*
배경하늘 : d9eff4
연초록 : a9ce49
연분홍 : e39897
*/
#char{
  position: absolute;
    top: 200px;
    width: 80px;
    /* animation: show 0.35s forwards ease-in-out 0.5s; */
    /* animation: run 0.1s forwards; */
}
  .progress-bar {
  width: 0;
  animation: progress 2s ;
  /* //ease-in-out forwards */
  background:#ff9898;
  height:15px;
  margin:auto 0;

} 
  
.progress{
  height:15px;
  background-color: white;
    border-radius: 10rem;
}
  
.title {
    margin-top:10px;
    opacity: 0;
    font-size:1.5rem;
    animation: show 0.35s forwards ease-in-out 0.5s;
    float:left;
  }
@keyframes progress {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
} 
/* @keyframes run{
  from{
    margin-left:0;
  }
  to{
    margin-left:77%;
  }
} */
@keyframes show  {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  } 
}
.savingInfo_1{
  /* float:left; */
  display:inline-block;
  margin:10px auto;
}
.wp{
  display:block;
  width:80x;
  /* margin-bottom:10px; */
}
#w{
  margin-right:30px;
}
#p{
  margin-left:30px;
}
.wp_wording{
  font-size:1.2rem;
}


.ment{
  display:block;
  text-align:center;
  margin-top:1rem;
  margin-bottom:0.8rem;
  font-size:1.5rem;
  font-family: 'jua', sans-serif;
}
.needs_pigmong{
    position: relative;
    display: block;
    text-align: center;
    margin-top: 20px;
}
.toggleTimeline{
    display:none;
}
.l-block-spacing{
    margin-top:10px;
}

/* .budget-alert {
  background-color: #424242;
  color: #fff;
  padding: 20px 30px;
  border-radius: 5px;
  position: relative;
  width: 80%;
  font-weight: 100;
  font-size: 1.5rem;
}
.budget-alert:before {
  content: attr(data-line);
  font-weight: bold;
  font-family: rooney-web;
}
.budget-alert:after {
  content: "";
  position: absolute;
  bottom: -10px;
  right: 80px;
  width: 0;
  height: 0;
  border-left: 13px solid transparent;
  border-right: 13px solid transparent;
  border-top: 20px solid #424242;
} */

/* Global resets */
/* * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
} */


/* Fonts */
/* h1 {
  font-family: "rooney-web", 'AmericanTypewriter', Rockwell, serif;
  font-size: 2.5em;
  font-weight: bold;
} */
/* 
.container {
  margin: 2em auto;
  max-width: 630px;
  text-align: center;
} */

/* Your CSS goes here */
/* FONTS */
/* Config */
/* COLORS */
/*COMMON STYLE*/
html {
  /* font-size: 16px; */
}

.bold {
  font-weight: bold;
}

.link {
  font-family: "rooney-sans";
  font-style: italic;
  text-decoration: none;
  color: #20A1D4;
}

.p {
  color: #777;
  line-height: 2rem;
  margin: 20px 0;
  font-weight: 100;
}

.text-highlighted {
  color: #EF5F3C;
}

/* BUTTON */
/* CUSTOM COMPONENT STYLE*/
.component-section {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  font-size: 1.4rem;
  font-family: "rooney-sans";
  padding-right: 40px;
  padding-left: 40px;
}
.component-section .top-section-wrapper {
  margin-bottom: 15px;
  width: 100%;
  display: flex;
}
.component-section .top-section-wrapper .budget-alert {
  background-color: #424242;
  color: #fff;
  padding: 20px 30px;
  border-radius: 5px;
  position: relative;
  width: 100%;
  font-weight: 100;
  font-size: 1.5rem;
}
.component-section .top-section-wrapper .budget-alert:before {
  content: attr(data-line);
  font-weight: bold;
  font-family: rooney-web;
}
.component-section .top-section-wrapper .budget-alert:after {
  content: "";
  position: absolute;
  bottom: -10px;
  right: 30px;
  width: 0;
  height: 0;
  border-left: 13px solid transparent;
  border-right: 13px solid transparent;
  border-top: 20px solid #424242;
}
.component-section .middle-section-wrapper {
  border: 1.5px solid #eaeaea;
  width: 100%;
}
.component-section .middle-section-wrapper .progress-bar {
  height: 20px;
  border-bottom: 1.5px solid #eaeaea;
}
.component-section .middle-section-wrapper .progress-bar .level-bar {
  width: 80%;
  background-color: #EF5F3C;
  display: block;
  height: inherit;
}
.component-section .middle-section-wrapper .content-section {
  padding: 15px 50px 30px 50px;
  text-align: left;
}
.component-section .middle-section-wrapper .content-section .button-wrapper {
  display: flex;
  justify-content: space-between;
  padding: 20px 0;
}
.component-section .middle-section-wrapper .content-section .button-wrapper .input {
  position: relative;
  border: 1.5px solid #eaeaea;
  padding: 25px 30px;
  width: 48%;
  font-size: 1.2rem;
  outline: none;
  border-radius: 3px;
  font-weight: bold;
}
.component-section .middle-section-wrapper .content-section .button-wrapper .input:before {
  content: "$";
  position: absolute;
  left: 12px;
  top: 25px;
  color: #777;
  font-weight: 700;
  font-size: inherit;
}
.component-section .middle-section-wrapper .content-section .button-wrapper .button {
  outline: none;
  border: 1.5px solid #eaeaea;
  cursor: pointer;
  background-color: #fff;
  color: #777;
  font-size: 1.5rem;
  font-weight: 500;
  width: 48%;
  padding: 15px 20px;
  font-family: "rooney-sans";
  box-shadow: 0px 2px 0px #eaeaea;
  border-radius: 5px;
}
.component-section .middle-section-wrapper .content-section .button-wrapper .button.primary {
  background-color: #1CBC2C;
  color: #fff;
  box-shadow: inset 0px 2px 0px #1CBC2C;
  padding-top: 20px;
  padding-bottom: 20px;
  border: 1.5px solid #1CBC2C;
}
.component-section .middle-section-wrapper .content-section .button-wrapper .button.primary:hover {
  box-shadow: inset 0 0 2px #777;
}
.component-section .middle-section-wrapper .content-section .button-wrapper .button:hover {
  cursor: pointer;
}
.component-section .bottom-section-wrapper {
  display: flex;
  justify-content: space-between;
  width: 100%;
  padding: 20px 0;
}
.component-section .bottom-section-wrapper .button {
  outline: none;
  border: 1.5px solid #eaeaea;
  cursor: pointer;
  background-color: #fff;
  color: #777;
  font-size: 1.5rem;
  font-weight: 500;
  width: 48%;
  padding: 15px 20px;
  font-family: "rooney-sans";
  box-shadow: 0px 2px 0px #eaeaea;
  border-radius: 5px;
}
.component-section .bottom-section-wrapper .button.primary {
  background-color: #1CBC2C;
  color: #fff;
  box-shadow: inset 0px 2px 0px #1CBC2C;
  padding-top: 20px;
  padding-bottom: 20px;
  border: 1.5px solid #1CBC2C;
}
.component-section .bottom-section-wrapper .button.primary:hover {
  box-shadow: inset 0 0 2px #777;
}
.component-section .bottom-section-wrapper .button:hover {
  cursor: pointer;
}

/*media query */
/* @media only screen and (max-width: 767px) {
  html {
    font-size: 14px;
  }

  .component-section {
    padding-right: 20px;
    padding-left: 20px;
  }
  .component-section .middle-section-wrapper .content-section {
    padding: 15px;
  }
} */
.contents{
    margin:20px;
}
.scroll_ment{
    font-size:1.2rem;
    margin-bottom:0px;
}
#needsPrice{
    float:right;
    color:white;
}
#progressPrice{
    font-size:1.8rem;
    color:#ff9898;
    font-weight:500;
}
#piggy_ment{
    background-color: #ff9898;
    display: block;
    border-radius: 5rem;
    padding: 5px;
    width: 130px;
    font-size: 1.5rem;
    margin: 0 auto;
    margin-bottom: 20px;
    color:white;
}
.tl_box{
    margin-top:40px;
    text-align:center;
}
#piggy_balance{
    display:inline-block;
    font-size:2rem;
    margin-bottom:20px;
}
#need_inputment{
    display: block;

    font-size: 2rem;
    font-weight: 400;
    color:gray;
    margin-bottom:20px;
}
#need_inputment2{
    display: block;
    padding: 15px;
}
#need_inputbox{
    margin-top:130px;
}
.underline{
    text-align:center;
    border-style:none;
        border-bottom:solid 1px #cacaca;
        border-collapse:collapse; 


}
.need_input{
    font-size:1.5rem;
    font-weight:400;
    padding-bottom:10px;
}
.need_mentbox{
    margin-top: 40px;
}
.keyboard{
    position:fixed;
    top:0px;
    left:0px;
    width:100%;
    height:100%;
}
</style>
<div class="keyboard"></div>
<section id="section section_tabs">
  <?if(!$needsList){?>
    <?if(!$this->session->userdata("AdminType")){?><!-- 아이 -->
        <img id="needback"  class="needback" src="/assets/freelancer/img/need_newback_470.png" style="max-width:100%;height: auto;"> 
      <div id="tab" class="tab container">
          <div class="need_mentbox">
              <h3 id="need_inputment"class="text-center text-secondary mb-0">무엇이 필요해요?</h3>
              <span id="need_inputment2">필요한 것을 사기 위해 노력하고 저금해요!</span>
          </div>

        <div id="need_inputbox"class="row">
          <div class="col-lg-8 mx-auto">
              <form name="addNeedsForm" action="/Main2/addNeeds" method="post" id="contactForm" novalidate="novalidate">
                
                <div class="control-group  text-center "id="inputdiv">
                    <label class="need_input">사고 싶은 물건</label>
                  <div class="form-group mb-0 pb-2" id="inputdiv">
                    <input class=" underline" name="contents" id="input_contents" type="text" placeholder="ex) 타요 장난감" required="required" data-validation-required-message="필요한 물건을 입력해주세요." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group  text-center "id="inputdiv">
                    <label class="need_input">가&nbsp&nbsp&nbsp&nbsp&nbsp격</label>
                  <div class="form-group controls mb-0 pb-2">
                    <input class="underline" name="price" id="price" type="text" placeholder="ex) 20000" required="required" data-validation-required-message="가격을 입력해주세요."autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div class="form-group" id="smb">
                  <button type="submit" class="btn btn-primary btn-md" id="sendMessageButton" onClick="return needsalert();" value="upload">등 록</button>
                </div>
              </form>
            </div>
          </div> 
        </div> 
        <?}else{?>
          <h3 class="text-center text-secondary mb-0">아이가 원하는 물건을 등록할 수 있게 해주세요!</h3>

          <br>
          <br>
      <?}?>
      <?} else {?>

      <div>
        <!-- <img id="needback" src="/assets/freelancer/img/needback_375.png" width=""alt=""> -->
        <img id="needback"  class="needback" src="/assets/freelancer/img/need_newback_470.png" style="max-width:100%;height: auto;"> 
        <!-- <img id="char" src="/assets/freelancer/img/needs_bicycle.png" style=" height: auto;"> -->
        
        <div class="needs_pigmong">
            <span id="piggy_ment">저금통</span>
            <div><span id="piggy_balance"><?=$bBalance?></span><span style="display:inline-block; font-size:1.3rem;"> 원</span></div>
            <img id="pigmongicon"src="/assets/freelancer/img/newpig.png" onclick="$('body,html').animate({scrollTop:$('body').height()-180},1000);" style="max-width:30%;height:auto;">
        </div>
        <div class="header" id="top">
            <p class="scroll_ment">저금 기록을 확인해보아요!</p>
            <!-- <br> -->
            <!-- <p class="scroll_ment">저금 기록을 확인해보아요!</p> -->
            <i class="fa fa-angle-down animated bounce"></i>
        </div>
        <!-- <div class="top-section-wrapper">
            <span class="budget-alert" data-line="$167"> still needed for this project</span>
        </div> -->
        <!-- <div class="main-container container" role="main">
        <section class="component-section" role="section">
            <div class="top-section-wrapper">
                <span class="budget-alert" data-line="$167"> still needed for this project</span>
                </div>
                <div class="middle-section-wrapper">
                <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?=$bBalance/$price*100?>" aria-valuemin="0" aria-valuemax="100" style="max-width: <?=$bBalance/$price*100?>%">
            <span id="progressPrice" class="title"><?=$bBalance?></span>
            </div>
          </div>
                    <div class="content-section">


                    
                    </div>
                    
                </div>
            </div>
            
        </section>
        </div> -->
        <script src="//use.typekit.net/rzv2mwh.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        <!-- <span class="ment">받은 용돈을 저금해보아요!</span>

        <div align="center" class="savingInfo">
          <div id="w"class="savingInfo_1">
            <span class="wp_wording">받은 용돈</span>
            <a href="/Main2/savings"><img class="wp"src="/assets/freelancer/img/wallet.png" style="max-width: 50%; height: auto;"></a>
            <span id="walletBalance" class="wp_wording"><?=$wBalance?></span>원
          </div>
          <div id="p"class="savingInfo_1">
          <span class="wp_wording">저금통</span>
            <a href="/Main2/savings"><img class="wp" src="/assets/freelancer/img/pig.png" style="max-width: 50%; height: auto;"></a>
            <span id="bankBalance"class="wp_wording"><?=$bBalance?></span>원
          </div>
          <div class="actionbutton">+</div>
        </div>
      </div> -->




      <!-- <section class="block-content toggleTimeline t-block-teal l-block-spacing">
        <div class="l-contained">
          <header class="heading-group">
            <h2>저금 기록</h2>
            <p class="subtitle">
            </p>
          </header>
          <ul class="timeline-list">
            <?foreach($savingInfo as $index=>$row){?>
            <li>
                <div class="content">
                    <h3><?=$row['amount']?></h3>
                </div>
            </li>
            <?}?>
          </ul>
        </div>
      </section> -->
      <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet'>
<ol class="timeline toggleTimeline">
<h2>저금 기록</h2>
  <li class="event rit">
    <p class="title_tl">Student</p>
    <p class="dates">Sept 2011 - Present</p>
    <p class="company">Rochester Institute of Technology (RIT)</p>
    <ul class="description">
      <li>B.S. in Management Information Systems</li>
      <li>Minor in Computer Science</li>
      <li>Expected Graduation: Dec 2013</li>
      <li>GPA: 3.32</li>
    </ul>
    <p class="details">
      In my time out of class, I'm an active member of <a href='https://csh.rit.edu'>Computer Science House </a> (CSH). My first year I was elected Freshman Project President and my second year I was elected as Social Director. My second year I also became webmaster for CSH, creating and maintaing the current website with a friend.
    </p>
    <span class="button more">View Details</span>
  </li>
  <li class="event csh">
    <p class="title_tl">Web Master</p>
    <p class="dates">March 2013 - Present</p>
    <p class="company">Computer Science House</p>
    <p class="description">
      An organization that I am an active participant of, this is the largest website project that I have created to date. The website can be viewed at <a href="https://csh.rit.edu">csh.rit.edu</a>.
    </p>
    <p class="details">
      A lot of time has been invested by a partner and I in making this website work flawlessly on any device. In our testing, the site is fully responsive spanning all resolutions and pixel densities as well as it is fully functional on every major, modern (IE9+) desktop and mobile browser. Progress can be monitored on <a href="https://github.com/myasonik/CSHPublicSite">GitHub</a>.
    </p>
    <span class="button more">View Details</span>
  </li>


</ol> -->

<div class="tl_box toggleTimeline">
    <h1 style="margin-bottom:30px;">저금 기록</h1>
    <?foreach($savingInfo as $index=>$row){?>
    <div class="card ">
        <ul class="timeline">
            <li class="timeline__item">
                <div class="timeline__step">
                    <div class="timeline__step__marker timeline__step__marker--red"></div>
                </div>
                <div class="timeline__time">
                    <?=date("y년 m월 d일\n h시 i분", strtotime($row['date']))?>
                </div>
                <div class="timeline__content">
                    <div class="timeline__title">
                        + <span class="amount<?=$row['tidx']?>"><?=$row['amount']?></span>원
                    </div>
                    <!-- <ul class="timeline__points">
                    <li></li>
                    </ul> -->
                </div>
            </li>
        </ul>
    </div>
    <script>
        var amount = $(".amount<?=$row['tidx']?>").html();
        $(".amount<?=$row['tidx']?>").html(AddComma(amount));    
    </script>
    <?}?>
</div>



      <div id="tab" class="tab container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="row">
              <div class="col-lg-8 mx-auto">

                  <?foreach($needsList as $index=>$row){?>
                  <?$price=$row['price'];?>

                    
                    <h3 class="contents"><b><span id="contents"><?=$row['contents']?></span></b></h3>

                    <!-- <img src="/uploads/needpic.jpg" alt=""> -->

                    <?}?>
                    <div style="width: 300px; margin: auto">
                        <?foreach($needsList as $index=>$row){?>
                        <?$price=$row['price'];?>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?=$bBalance/$price*100?>" aria-valuemin="0" aria-valuemax="100" style="max-width: <?=$bBalance/$price*100?>%">
                            </div>
                        </div>
                        <span id="progressPrice" class="title"><?=$bBalance?></span>
                        <span id="needsPrice" class="title"><?=$price?></span>
                        <?}?>
                    </div>
              
              <?if($isDone){?>
                <?if(!$this->session->userdata('AdminType')){?>
              <hr>
              <h5 class="text-ceneter text-secondary mb-0">목표를 이뤘어요!</h5>
              <br>
              <div>
                <form action="/Main2/deleteNeeds" method="post">
                  <input type="hidden" name="nidx" value="<?=$row['nidx']?>">
                  <button type="submit" class="btn btn-primary">새로운 물건 등록</button>
                </form>
              </div>
                <?}?>
              <?}?>
          </div>
          
        </div>
        
      </div>
      
      <?}?>

  </section>
  <input type="hidden" id="page" value="<?=$page?>">
  <script>
  function needsalert(){
    var contents = $('#contents').val();
    var price = $('#price').val();
    if(contents=='' || price==''){
      swal("내용을 모두 입력해주세요!");
      return false;
    }
  }
  function missionalert(){
    var price = $('#price').val();
    var missionPrice = $('#missionPrice').html();
    console.log(price);
    console.log(missionPrice);
    if(price>missionPrice){
        swal("지급 가능한 용돈을 초과하였습니다!");
        return false;
    }
}

function AddComma(data_value) {
    return Number(data_value).toLocaleString('en');
  }


$(document).ready(function(){
    $(function(){
        $('.keyboard').css('height',window.innerHeight);
    })
    var page = $('#page').val();
        if(page==0){
            // $('#ntab').css('background-color','#7ba434').css('color','white');
            // $('#needtab').attr('src','/assets/freelancer/img/needicon_white.png');
        }else if(page==1){
            // $('#mtab').css('background-color','#7ba434').css('color','white');
        }else{
            // $('#mtab').css('background-color','#7ba434').css('color','white');
        }


  $('[data-toggle="tooltip"]')
      .tooltip({ trigger: "manual" })
      .tooltip("show");
  
  $(".progress-bar").each(function() {
    each_bar_width = $(this).attr("aria-valuenow");
    $(this).width(each_bar_width + "%");
  });

  var price = $("#price").html();
  var walletBalance = $("#walletBalance").html();
  var bankBalance = $("#bankBalance").html();
  var progressPrice = $("#progressPrice").html();
  var needsPrice = $("#needsPrice").html();
  var piggybal = $("#piggy_balance").html();

  $("#price").html(AddComma(price));
  $("#walletBalance").html(AddComma(walletBalance));
  $("#bankBalance").html(AddComma(bankBalance));
  $("#progressPrice").html(AddComma(progressPrice));
  $("#needsPrice").html(AddComma(needsPrice));
  $("#piggy_balance").html(AddComma(piggybal));
//   $('.block-content').addClass('toggleTimeline');
//   $('.block-content *').attr('height','0px');
  
  
  $('#pigmongicon').click(function(){
    // $('.timeline').removeClass('toggleTimeline');
    $('.tl_box').removeClass('toggleTimeline');
    // $('.block-content *').attr('height','');
  });

  var run = <?=$bBalance/$price*100?> *3;
  if(run>290){
    run=290;
  }
  $("#char").animate({ left : run+'px' },1100)

});
    function funLoad(){
        var Cheight = $(window).height();
        $('body').css({'height':Cheight+'px'});
    }
    window.onload = funLoad;
    window.onresize = funLoad;

//   $("#top").click(function(){
//         $('html, body').animate({scrollTop:($('body').height())}, 200);
//     }); 
  </script>
 
