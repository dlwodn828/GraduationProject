<style>
#mtb *{
  border:1px solid gray;
  text-align:center;
}
#mt{

}
.addmission{
  text-align:center;
}
.row{
  text-align:center;
}
.plusbtn{
  background-color: #18bc9c;
  padding: 0.1rem 9.5rem;
  border-color: #18bc9c;
  position: fixed;
  left: 30;
  z-index: 998;
  margin-top: 5px;

}
tr{

}
.date{
  width:250px;
  
}
td{
  padding:10px;
}
.contents{
  width:100px;
}
#about{
  -ms-overflow-style: none; 
}
::-webkit-scrollbar {

display:none;

}

#missionback{
  margin-top:30px;  
  margin-top: 30px;
    position: fixed;
    z-index: 994;
    /* box-shadow: 0px 0px 8px #202020; */
}
.missionment{
  float: left;
    margin-left: 90px;
    font-size: 1.8rem;
    color: gray;
    margin-top: -20px;
    display: block;
    z-index: 1000;
    position: fixed;
}
</style>
<!-- About Section -->
<img id="missionback" class="" src="/assets/freelancer/img/missionback2.png" style="max-width:100%;height: auto;"> 
<section id="section section_tabs" >
    
    
    <!-- 부모 -->
    <?if($this->session->userdata("AdminType")){?> 
    <div id="tab" class="tab container">
      <!-- <div class="addmission"> -->
      <h4 class="missionment text-center text-secondary mb-0">미션을<br>추가해주세요!</h4>
        <br><br>
        <a href="/Main2/goToAddMissions" onClick="return missionalert();" class="btn-primary btn-lg plusbtn">+</a>
      <!-- </div> -->
      <?if(!$missionsList){?>
        <br><br><h4 class="text-center text-secondary mb-0">아직 미션이 등록되지 않았어요</h4>
      <?}else{?>
        <?$i=1;?>
          <div class="row">
            <div class="col-lg-8 mx-auto">
            <div class="missionList">
              <?foreach($missionsList_p as $index=>$row){?>
                  <div class="popup"> 
                    <form action="/Main2/deleteMissions" method="post" >
                      <button type="submit" name="midx" value="<?=$row['midx']?>" class="close">
                          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" width="10px" height="10px" viewBox="215.186 215.671 80.802 80.8"
                          enable-background="new 215.186 215.671 80.802 80.8" xml:space="preserve">
                          <polygon fill="#FFFFFF" points="280.486,296.466 255.586,271.566 230.686,296.471 215.19,280.964 240.086,256.066 215.186,231.17 
                          230.69,215.674 255.586,240.566 280.475,215.671 295.985,231.169 271.089,256.064 295.987,280.96 "/>
                        </svg>
                      </button>
                    </form>
                    <div class="valid">
                    <!-- <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" width="15px" height="15px" viewBox="222.744 227.408 67.744 58.526"
                        enable-background="new 222.744 227.408 67.744 58.526" xml:space="preserve">
                        <path fill="#39BA6F" d="M250.062,285.934c-9.435-11.111-15.731-18.195-27.318-28.935l5.793-5.357
                        c6.778,3.28,11.076,5.774,18.693,11.204c14.32-16.25,23.783-24.495,41.372-35.438l1.886,4.335
                        C275.983,244.402,265.359,258.502,250.062,285.934z" />
                      </svg> -->
                    </div>
                    <h1 class="mission"><?=$row['contents']?></h1>
                    <div class="mpbox">
                      <img class="missionprice" src="/assets/freelancer/img/missionprice.png" style="max-width:40%;height: auto;">
                      <span id="mp"><?=$row['price']?></span>
                    </div>
                    <!-- <img src="/assets/freelancer/img/missionprice.png" style="max-width:60%;height: auto;"> -->
                    <input id="#state" type="hidden" value="<?=$row['state']?>">
                    <!-- <p>You've successfully signed into iAnswer 2.0!</p> -->
                    <form action="/Main2/missionState" method="get">
                      <input type="hidden" name="midx" value="<?=$row['midx']?>">
                      <input type="hidden" name="mprice" value="<?=$row['price']?>">
                      <?if($row['state']==0){?>
                        <div class="bottom-popup"><button type="button"  class="start btn-gray">미션 수행 중</button></div>
                      <?}else if($row['state']==1){?>
                        <div class="bottom-popup"><button type="submit" name="state" value="<?=$row['state']?>"class="start btn-green">용돈 지급</button></div>
                      <?}else if($row['state']==2){?>
                        <div class="bottom-popup"><button type="button" class="start btn-blue">용돈 지급 완료</button></div>
                      <?}?>
                    </form>
                  <!-- <div class="bottom-popup"><a class="start" href="#">START</a></div> -->
                </div>
                
                
                
                <!-- <table align="center" id="mtb">
                  <tr>
                    <td><?=$i++?></td>
                    <td class="date"><?=$row['regdate']?></td>
                    <form action="/Main2/deleteMissions" method="post" >
                      <td>
                          <button type="submit" name="midx" value="<?=$row['midx']?>" class="btn-danger btn-sm">x</button>
                      </td>
                    </form>
                  </tr>
                  <tr>
                    <td class="contents">미션 내용</td>
                    <td colspan=2><?=$row['contents']?></td>
                  </tr>
                  <tr>
                    <td class="contents">받을 용돈</td>
                    <td colspan=2><?=$row['price']?></td>            
                  </tr>
                  <tr>
                    <form action="/Main2/missionState" method="get">
                      <input type="hidden" name="midx" value="<?=$row['midx']?>">
                      <input type="hidden" name="mprice" value="<?=$row['price']?>">
                      <?if($row['state']==0){?>
                        <td colspan=3><button type="button" class="btn-default btn-sm plusbtn">미션 중</button></td>
                      <?}else if($row['state']==1){?>
                        <td colspan=3><button type="submit" name="state" value="<?=$row['state']?>"class="btn-primary btn-sm plusbtn">용돈 주기</button></td>
                      <?}else if($row['state']==2){?>
                        <td colspan=3><button type="button" class="btn-success btn-sm plusbtn">용돈 지급 완료</button></td>
                      <?}?>
                    </form>
                  </tr>
                  <br>
                </table>   -->
              <?}?> <!-- foreach문 끝 -->
            </div>
          </div>
          </div>
        <?}?>
      </div>
    <!-- 아이 -->
    <?} else {?>
    <div id="tab" class="tab container">
      <!-- 미션 등록되지 않을 때 -->
      <?if(!$missionsList){?>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <br>
            <h4 class="text-center text-secondary mb-0">아직 미션이 등록되지 않았어요!</h4>
          </div>
        </div>
      <!-- 미션 등록되지 않을 때 -->
      <?}else{?>
        <?$i=1;?>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h4 class="missionment text-center text-secondary mb-0">미션을<br>수행해보아요!</h4>
            <div class="missionList">
            
            <?foreach($missionsList as $index=>$row){?>
              <div class="popup"> 
                <a href="#" class="close">
                  <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" width="10px" height="10px" viewBox="215.186 215.671 80.802 80.8"
                    enable-background="new 215.186 215.671 80.802 80.8" xml:space="preserve">
                    <polygon fill="#FFFFFF" points="280.486,296.466 255.586,271.566 230.686,296.471 215.19,280.964 240.086,256.066 215.186,231.17 
                    230.69,215.674 255.586,240.566 280.475,215.671 295.985,231.169 271.089,256.064 295.987,280.96 "/>
                  </svg> -->
                </a>
                <div class="valid">
                  <!-- <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" width="30px" height="30px" viewBox="222.744 227.408 67.744 58.526"
                    enable-background="new 222.744 227.408 67.744 58.526" xml:space="preserve">
                    <path fill="#39BA6F" d="M250.062,285.934c-9.435-11.111-15.731-18.195-27.318-28.935l5.793-5.357
                    c6.778,3.28,11.076,5.774,18.693,11.204c14.32-16.25,23.783-24.495,41.372-35.438l1.886,4.335
                    C275.983,244.402,265.359,258.502,250.062,285.934z" />
                  </svg> -->
                </div>
                <h1 class="mission"><?=$row['contents']?></h1>
                  <div class="mpbox">
                    <img class="missionprice" src="/assets/freelancer/img/missionprice.png" style="max-width:40%;height: auto;">
                    <!-- <span class="mp"><?=$row['price']?></span> -->
                  </div>
                <input id="#state" type="hidden" value="<?=$row['state']?>">
                <!-- <p>You've successfully signed into iAnswer 2.0!</p> -->
                <form action="/Main2/missionState" method="get">
                  <input type="hidden" name="midx" value="<?=$row['midx']?>">
                  <input type="hidden" name="mprice" value="<?=$row['price']?>">
                  <?if($row['state']==0){?>
                    <div class="bottom-popup"><button type="submit" name="state" value="<?=$row['state']?>" class="start btn-green">다했어요!</button></div>
                  <?}else if($row['state']==1){?>
                    <div class="bottom-popup"><button type="button" class="start btn-gray">기다려요!</button></div>
                  <?}else if($row['state']==2){?>
                    <div class="bottom-popup"><button type="button" class="start btn-blue">용돈을 받았어요!</button></div>
                  <?}?>
                </form>
                <!-- <div class="bottom-popup"><a class="start" href="#">START</a></div> -->
              </div>
              <script>
                // $(document).ready(function(){
                  var state = <?=$row['state']?>;
                  console.log(state);

                    if(state==2){
                      $('svg').show();
                    }

                  
                // });
              </script>

              <!-- <table align="center" id="mtb">
                <tr>
                  <td><?=$i++?></td>
                  <td class="date"><?=$row['regdate']?></td>
                </tr>
                <tr>
                  <td class="contents">미션 내용</td>
                  <td ><?=$row['contents']?></td>
                </tr>
                <tr>
                  <td class="contents">받을 용돈</td>
                  <td><?=$row['price']?></td>            
                </tr>
                <tr>
                <form action="/Main2/missionState" method="get">
                  <input type="hidden" name="midx" value="<?=$row['midx']?>">
                  <input type="hidden" name="mprice" value="<?=$row['price']?>">
                  <?if($row['state']==0){?>
                    <td colspan=3><button type="submit" name="state" value="<?=$row['state']?>" class="btn-primary btn-sm plusbtn">다했어요!</button></td>
                  <?}else if($row['state']==1){?>
                    <td colspan=3><button type="button" class="btn-default btn-sm plusbtn">기다려요!</button></td>
                  <?}else if($row['state']==2){?>
                    <td colspan=3><button type="button" class="btn-success btn-sm plusbtn">용돈을 받았어요!</button></td>
                  <?}?>
                </form>
                </tr>
                <br>
              </table>   -->
            <?}?>
          </div>

          </div>
        </div>
      <?}?>

    </div>
    <?}?><!--부모/아이-->
  </section>
  <?foreach($nidx as $index=>$row){?>
    <input type="hidden" id="nidx" value="<?=$row['nidx']?>">
  <?}?>
  <script>

  function missionalert(){
    var nidx = $('#nidx').val();
    console.log(nidx);
    if(!nidx){
      swal('아이가 사고 싶은 물건을 등록하지 않았아요!');
      return false;
    }
  }
  </script>