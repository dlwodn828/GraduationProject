<style>
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
.container{
  text-align:center;
}
.form-control{
  width:100%;
  text-align:center;

}
#contactForm{
  text-align:center;
}
.tot{
  text-align:center;
}
#saving{
  width:70%;
}
.pinmoney{
  width:4rem;
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
  max-width: 20%;
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
</style>
<section id="section seßction_tabs">
<?if(!$this->session->userdata('AdminType')){?>
    <div id="tab" class="tab container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="">
          <br>
          
          <?foreach($needsList as $index=>$row){?>
            <?$price=$row['price'];?>
              <span><?=$row['contents']?></span>
              <br>
              <span id="price"><?=$row['price']?></span>원
              <br>
            <!-- <div class="flex-wrapper">
            <div class="single-chart">
              <svg viewBox="0 0 36 36" class="circular-chart orange">
                <path class="circle-bg"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                />
                <path class="circle"
                  stroke-dasharray="10, 100"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                />
                <text x="18" y="20.35" class="percentage">10%</text>

              </svg>
            </div>
          </div> -->
            <?}?>
            저금한 금액 <?=$bBalance?>원<br>
            저금 가능한 금액 <?=$wBalance?>원
          </div>
          <br>
          <div class="moneybtn">
            <button id="10" value="10" class="btn-warning btn-sm pinmoney">10</button>
            <button id="50" value="50" class="btn-warning btn-sm pinmoney">50</button>
            <button id="100" value="100" class="btn-warning btn-sm pinmoney">100</button>
            <button id="500" value="500" class="btn-warning btn-sm pinmoney">500</button>
            <br><br>
            <button id="1000" value="1000" class="btn-warning btn-sm pinmoney">1,000</button>
            <button id="5000" value="5000" class="btn-warning btn-sm pinmoney">5,000</button>
            <button id="10000" value="10000" class="btn-warning btn-sm pinmoney">10,000</button>
            <button id="50000" value="50000" class="btn-warning btn-sm pinmoney">50,000</button>
          </div> 
            <br>
            <br>
            <div class="col-sm-3 tot">
              <form action="/Main2/saveMoney" method="post" name="savingMoney" id="contactForm" novalidate="novalidate">
                <input id="total" class="form-control" type="text" value="₩ 0">
                <input id="pinmoney" name="pinmoney" type="hidden" value="0">
                <input id="wBalance" name="wBalance" type="hidden" value="<?=$wBalance?>">
                <a href="javascript:resetTotal()" class="" >reset</a>
                <br>
                <br>
              </form>
              <button id="saving" class="btn-primary btn-lg" >저금하기</button>
            </div>
            <br>
                <!-- <input class="btn-sm btn-primary" type="reset" value="Reset"> -->
        </div>
      </div>
    </div>
  </section>
  <script>
  var total=0;
  
  function AddComma(data_value) {
    return Number(data_value).toLocaleString('en');
  }

  function resetTotal(){
    total=0;
    $('#total').val('₩ 0');
  }
  $('#saving').on("click",function(){
    var tot = $('#pinmoney').val();
    if(tot!=0){
      if(swal("저금되었습니다!")){
        $('#contactForm').submit();
      }

    }else if(tot==0){
      swal("저금할 금액을 입력해주세요!");
      return false;
    }
  });
  // function savingalert(){
  //   var tot = $('#pinmoney').val();
  //   if(tot!=0){
  //     console.log(tot);
  //     swal("저금되었습니다!");
  //     return false;
  //   }else if(tot==0){
  //     swal("저금할 금액을 입력해주세요!");
  //     return false;
  //   }

  // }
  $(document).ready(function(){
    total=0;
    $('.pinmoney').on('click', function(e) {
      var m = $(this).val();
      total+=parseInt(m);
      var wallet = <?=$wBalance?>;
      // var wallet = 3200;
      if(wallet>=total){
        // total+=parseInt(m);
        console.log(total);
        $("#total").val("₩ "+AddComma(total));
        $("#pinmoney").val(total);
      }else{
        total-=parseInt(m);
        swal("저금 가능한 금액을 초과하였습니다!");
      }
    });
  });
  </script>
  <?}?>