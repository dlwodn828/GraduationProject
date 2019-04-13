
<style>
body {
    overflow-x: hidden;

  }
  .bbal{
      position: absolute;
      top:40px;
      left:135px;
      font-family:'jua';
  }
  /* h1 {
    font-weight: normal;
    color: white;
    position: absolute;
    left: 50%;
    margin-left: -180px;
    top: 15px;
  } */
  .blush1 {
    position: absolute;
    width: 20px;
    height: 20px;
    background: #FF3333;
    bottom: 20px;
    left: 80px;
    border-radius: 50%;
    box-shadow: 0 0 20px 10px #FF3333;
    z-index: 999;
    /* display: none; */
  }
  .blush2 {
    position: absolute;
    width: 20px;
    height: 20px;
    background: #FF3333;
    bottom: 20px;
    left: 280px;
    border-radius: 50%;
    box-shadow: 0 0 20px 10px #FF3333;
    /* display: none; */
    z-index: 999;
  }
  #pg1{
    position: relative;
  }
  #coin {
    bottom: 300px;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #ccc;

    border: #999 solid 2px;
    left: 41%;
    position: absolute;
    /* animation: glow 1s alternate infinite; */
    cursor: pointer;
    z-index: 3;
    text-align:center;
  }
  #coin.active {
    animation: none;
  }
  #coincover{
    left: 50%;
    position: relative;
    bottom: 103px;
    z-index: 100;
  }
  
  .money {
    width: 120px;
    height: 60px;
    position: absolute;
    z-index: -1;
    border: solid 2px #006600;
  }
  .money .pres {
    margin: 0 auto;
    margin-top: 10px;
    height: 40px;
    width: 30px;
    background: #006600;
    border-radius: 50%;
  }
  /* img { display: block; margin: 0px auto; } */
  .piggy {
    text-align:center;
    /* width: 300px;
    height: 300px;
    background: #FF6666;
    border-radius: 50%;
    margin: 0 auto;
    margin-top: 100px;
    position: relative; */
    /* bottom:0; */
    position: absolute;
    bottom: 70px;
  }
  .piggy .insert {
    width: 120px;
    height: 10px;
    left: 160px;
    top: 15px;
    position: absolute;
    background: #333;
    border-top: solid 3px #777;
    border-radius: 50% 50% 30% 30%;
  }
  .piggy .cover {
    background: #FF6666;
    width: 115px;
    height: 50px;
    position: absolute;
    top: 55px;
    left: 70px;
    transform: rotate(45deg);
    z-index: 6;
  }
  .piggy .coin-cover {
    position: absolute;
    z-index: 4;
    background: #FF6666;
    height: 80px;
    width: 80px;
    left: 190px;
    top: 28px;
  }

  #coinprice{
    display: block;
    position: relative;
    left: 9px;
    /* top: 0px; */
    width: 50px;
    line-height: 20px;
  }
  /* @keyframes glow {
    from {
      box-shadow: 0 0 10px#FFFF94;
    }
    to {
      box-shadow: 0 0 10px 10px #FFFF94;
    }
  } */
  @keyframes smile {
    from {
      border-radius: 0 0 5% 5%;
    }
    to {
      border-radius: 0 0 50% 20%;
    }
  }
  
</style>

<form action="/Main2/saveMoney" method="post" name="savingMoney" id="savingMoney" novalidate="novalidate">
    <input id="pinmoney1" type="hidden" name="pinmoney" value="<?=$wBalance?>">
    <input id="pinmoney1" type="hidden" name="pinmoney" value="<?=$wBalance?>">    
</form>
<button id="coinbtn"><div id="coin">₩<br><span id="coinprice"><?=$wBalance?></span></div></button>
<!-- <div class="col-sm-3 tot">
                <input id="total" class="form-control" type="text" value="₩ 0">
                <input id="pinmoney" name="pinmoney" type="hidden" value="0">
                <input id="wBalance" name="wBalance" type="hidden" value="<?=$wBalance?>">
                <a href="javascript:resetTotal()" class="" >reset</a>
                <br>
                <br>
              </form>
              <button id="saving" class="btn-primary btn-lg" >저금하기</button>
            </div> -->
<!-- <h1>Insert Coin</h1> -->
<div class="piggy">
  <!-- <div class="insert"></div>
  <div class="cover"></div>
  <div class="coin-cover">
       -->
       <h2 class="bbal"><?=$bBalance?></h2>
    <img id="pg" src="/assets/freelancer/img/piggybank_1.png" style="max-width:90%;height: auto;">

</div>
<div class="piggy">
    <img id="pg1" src="/assets/freelancer/img/piggybank_smile.png" style="max-width:90%;height: auto;">
    
</div>
<div class="piggy">
    <img id="coincover" src="/assets/freelancer/img/piggybank_2.png" style="max-width:57%;height: auto;">
    <div class="blush1"></div>
    <div class="blush2"></div>
</div>
