<style>
.container{
    text-align:center;
}
</style>
<section class="bg-white primary text-dark mb-0" id="about">
    <div class="container">
    <form name="addMissionsForm" action="/Main2/addMissions" method="post" id="addMissionsForm" novalidate="novalidate">
        <div class="control-group  text-center "id="inputdiv">
            <div class="form-group mb-0 pb-2" id="inputdiv">
            <br>
            <h3>미션 등록하기</h3>
            <br>
            <div>
                <h5>지급 가능한 용돈</h5>
                <input type="hidden" name="missionPrice" value="<?=$missionPrice?>">
                <h5 id="missionPrice"><?=$needsPrice-$missionPrice?></h5>
            </div>
            <br>
            <input class="form-control" name="contents" id="contents" type="text" placeholder="ex) 일어나서 이불 개기" required="required" data-validation-required-message="미션 내용을 입력해주세요.">
            <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group  text-center "id="inputdiv">
            <div class="form-group controls mb-0 pb-2">
            <label>가&nbsp&nbsp&nbsp&nbsp&nbsp격</label>
            <input class="form-control" name="price" id="price" type="text" placeholder="ex) 1000" required="required" data-validation-required-message="미션 완료시 지급할 용돈을 입력해주세요." value="">
            <p class="help-block text-danger"></p>
            </div>
        </div>
        <br>
        <div class="form-group" id="smb">
            <input type="submit" class="btn btn-primary btn-md" id="addMissionBtn" value="등 록" onClick="return missionalert();">
        </div>
        </form>
    </div>
</section>
<script>
// $(document).on('change', '#price', function(e){
//     var price = $('#price').val();
//     var mp = $('#missionPrice').html();
//     if(price>mp){
//         location.reload();
//     }

// });
$(document).ready(function(){
    var price = $('#price').val();
    var missionPrice = $('#missionPrice').html();
    console.log(price);
    console.log(missionPrice);
});
function missionalert(){
    var price = $('#price').val();
    var missionPrice = $('#missionPrice').html();
    missionPrice = parseInt(missionPrice);
    price = parseInt(price);
    // missionPrice=$()
    console.log(price);
    if(price>missionPrice){
        swal("지급 가능한 용돈을 초과하였습니다!");
        return false;
    }
}


// var sSendFlag=false;
// 	$("#addMissionsForm").submit(function(e) {
// 		e.preventDefault();
// 		}).validate({
// 			submitHandler:function(form) {
// 				if (!sSendFlag) {
// 					sSendFlag=true;
// 					$.ajax({
// 						type: $(form).attr("method"),
// 						encoding:"UTF-8",
// 						contentType: "application/x-www-form-urlencoded; charset=UTF-8",
// 						url: $(form).attr("action"),
// 						data: $(form).serialize(),
// 						dataType:"json",
// 						success:function(data) {
// 							alert(data.sMessage);
// 							// $("#csrf").val(data.sToken);
// 							if (data.sRetCode=="01") { //로그인 성공시
// 								document.location.href=data.sRetUrl;
// 							} else { //실패시
// 								alert(data.sRetCode);
// 							}
// 							sSendFlag=false;
// 						}
// 					})
// 				} else {
// 				}
// 			}
// 	});
</script>