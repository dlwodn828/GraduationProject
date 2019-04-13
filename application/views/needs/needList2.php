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
    font-size:3rem;
  }
  .contents{
    /* background-color:white; */
    color:gray;
    font-size:2rem;
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
    top: 225px;
    width: 80px;
    /* animation: show 0.35s forwards ease-in-out 0.5s; */
    animation: run 1s ease-in-out forwards;
}
  .progress-bar {
  width: 0;
  animation: progress 2s ;
  /* //ease-in-out forwards */
  background:#a9ce49;
  height:40px;
  margin:auto 0;

} 
  
.progress{
  height:50px;
}
  
.title {
    opacity: 0;
    font-size:1.5rem;
    animation: show 0.35s forwards ease-in-out 0.5s;
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
</style>
<section id="section section_tabs">
  <?if(!$needsList){?>
    <?if(!$this->session->userdata("AdminType")){?><!-- 아이 -->
      <div id="tab" class="tab container">
        <h3 class="text-center text-secondary mb-0">사고 싶은 물건을 입력해 보아요!</h3>
        
        <!-- <hr class="star-dark mb-5"> -->
        <br>
        <br>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <!-- <form action="/Upload/do_upload" mothod="post">
                <input class="form-group" type="file" name="pic" accept="image/*">
                <input class="form-group btn-primary"type="submit">
              </form> -->

              <!-- <?php echo $error; ?> -->

              <?php //echo form_open_multipart('upload/do_upload'); ?>
              <!-- <form action="/upload/do_upload"> -->
                <!-- <input type="file" name="userfile" size="20" />
                <br /><br />
                <input type="submit" value="upload" />
              </form> -->
              <!-- <img src="/uploads/needpic.jpg" alt=""> -->
              <form name="addNeedsForm" action="/Main2/addNeeds" method="post" id="contactForm" novalidate="novalidate">
                
                  <!-- <form action='gallery.html' method='POST' enctype='multipart/form-data'> 
                    <INPUT TYPE=hidden name=mode value=insert> 
                    <TABLE> 
                    <TR> 
                      <TD>이미지</TD> 
                    </tr>
                    <tr>
                      <TD><input type='file' name='image'></TD>
                    </TR> 
                    </TABLE> 
                  </form>  -->

                <!-- <img src="/uploads/needpic.jpg" alt=""> -->
                
                <div class="control-group  text-center "id="inputdiv">
                  <div class="form-group mb-0 pb-2" id="inputdiv">
                    <label>사고 싶은 물건</label>
                    <input class="form-control" name="contents" id="contents" type="text" placeholder="ex) 타요 장난감" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group  text-center "id="inputdiv">
                  <div class="form-group controls mb-0 pb-2">
                    <label>가&nbsp&nbsp&nbsp&nbsp&nbsp격</label>
                    <input class="form-control" name="price" id="price" type="text" placeholder="ex) 20000" required="required" data-validation-required-message="Please enter your email address.">
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
          <!-- <hr class="star-dark mb-5"> -->
          <br>
          <br>
      <?}?>
      <?} else {?>
      <!-- <h3 class="text-center text-secondary mb-0">사고 싶어요!</h3> -->
      <!-- <hr class="star-dark mb-5"> -->
      <!-- <br> -->
      <div>
        <!-- <img id="needback" src="/assets/freelancer/img/needback_375.png" width=""alt=""> -->
        <img id="needback"  class="needback" src="/assets/freelancer/img/needback_750.png" style="max-width:100%;height: auto;"> 
        <img id="char" src="/assets/freelancer/img/pigmongicon.png" style="max-width: 50%; height: auto;">
        <div style="width: auto; margin: auto">
        <?foreach($needsList as $index=>$row){?>
          <?$price=$row['price'];?>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?=$bBalance/$price*100?>" aria-valuemin="0" aria-valuemax="100" style="max-width: <?=$bBalance/$price*100?>%">
            <span id="progressPrice" class="title"><?=$bBalance?></span><!--(int)($bBalance/$price*100)-->
            </div>
          </div>
          <?}?>
        </div>
        <span class="ment">받은 용돈을 저금해보아요!</span>

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
      </div>
      <section class="block-content t-block-teal l-block-spacing">
        <div class="l-contained">
          <header class="heading-group">
            <h2>Timeline</h2>
            <p class="subtitle">
            </p>
          </header>
          <ul class="timeline-list">
            <li>
                <div class="content">
              <h3>A timeline?</h3>
          
              <p>a</p>
              </div>
            </li>
            <li>
                <div class="content">
              <h3>A railway map?</h3>
            
              <p>b</p>
              </div>
            </li>
            <li>
                <div class="content">
              <h3>Random dots?</h3>
              <p>c</p>
              </div>
            </li>
            <li>
                <div class="content">
              <h3>Absolutely nothing.</h3>
              <p>d</p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <div id="tab" class="tab container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                
                  <?foreach($needsList as $index=>$row){?>
                  <?$price=$row['price'];?>
                  <br>
                    <h1 class="price"><span id="price"><?=$row['price']?></span>원</h1>
                    <h3 class="contents"><b><span id="contents"><?=$row['contents']?></span></b></h3>
                    <!-- <img src="/uploads/needpic.jpg" alt=""> -->
                    <br>
                    <?}?>
              <!-- <div class="flex-wrapper">
                <div class="single-chart">
                  <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                      d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                      stroke-dasharray="<?=$bBalance/$price*100?>, 100"
                      d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage"><?=$bBalance/$price*100?>%</text>
                    <text x="18" y="25" class="goaltext"><?=$bBalance?>원 / <?=$price?>원</text>
                  </svg>
                </div>
              </div> -->
              
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
  $("#price").html(AddComma(price));
  $("#walletBalance").html(AddComma(walletBalance));
  $("#bankBalance").html(AddComma(bankBalance));
  $("#progressPrice").html(AddComma(progressPrice));
  $('.block-content *').hide();
  $('.block-content *').attr('height','0px');
  
  
  $('.actionbutton').click(function(){
    $('.block-content *').show(200);
    $('.block-content *').attr('height','');
  });

  var run = <?=$bBalance/$price*100?> *3;
  if(run>290){
    run=290;
  }
  $("#char").animate({ left : run+'px' },2000)

});
    function funLoad(){
        var Cheight = $(window).height();
        $('#section').css({'height':Cheight+'px'});
    }
    window.onload = funLoad;
    window.onresize = funLoad;

  $(".actionbutton").click(function(){
        $('html, body').animate({scrollTop:($('body').height())}, 200);
    }); 
  </script>
 
