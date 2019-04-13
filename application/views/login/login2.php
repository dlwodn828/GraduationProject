<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<!-- Le styles -->  
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
    	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets/bootstrap/js/jquery.validate.js"></script>
	<script src="/assets/bootstrap/js/messages_ko.js"></script>
	<!-- ================== END BASE JS ================== -->
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/bootstrap/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- <script src="/assets/plugins/pace/pace.min.js"></script> -->
</head>
<body>
    <div class="container">
    <h3 class="text-center">Login</h3>
    <hr>
    <div class="card">
        <article class="card-body">
        <!-- <h4 class="card-title mb-4 mt-1">Login</h4> -->
            <form id="actForm" action="/auth/loginProc" method="POST">
            <!-- <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>" /> -->
				<?=$this->session->userdata('AdminId')?>
                <div class="form-group">
                    <label></label>
                    <input id="AdminId" name="AdminId" class="form-control" placeholder="ID" type="id">
                </div> <!-- form-group// -->
               
                <div class="form-group">
                    <label></label>
                    <input type="password" id="AdminPwd" name="AdminPwd" class="form-control" placeholder="******" type="password">
                </div> <!-- form-group// --> 
                
                <div class="form-group"> 
                    <a href="/auth/signUp" class=" btn btn-outline-primary">Sign up</a>
                </div> <!-- form-group// -->  
                <div class="form-group">
					<button type="submit" class="btn btn-primary btn-block"> Login  </button>
					<!-- <button type="submit" class="btn btn-primary btn-block"> Login  </button> -->
                </div> <!-- form-group// -->                                                           
            </form>
        </article>
    </div> <!-- card.// -->

    <script>
	// $(document).ready(function() {
	// 	App.init();
	// });
	$('button').click(function(){
		var id = $('#AdminId').val();
		console.log(id);
	});
	var sSendFlag=false;
	$("#actForm").submit(function(e) {
		e.preventDefault();
		}).validate({
			rules: {
				"AdminId": {required: true,maxlength:50},
				"AdminPwd": {required: true,minlength:6,maxlength:255},
			},
			messages: {
				"AdminId": {required : "아이디를 입력해주세요."},
				"AdminPwd": {required : "비밀번호를 입력해주세요."},
			},
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			unhighlight: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			},
			messages: {
				"AdminId": {required : "아이디를 입력해주세요."},
				"AdminPwd": {required : "비밀번호를 입력해주세요."},
			},
			submitHandler:function(form) {
				if (!sSendFlag) {
					sSendFlag=true;
					$.ajax({
						type: $(form).attr("method"),
						encoding:"UTF-8",
						contentType: "application/x-www-form-urlencoded; charset=UTF-8",
						url: $(form).attr("action"),
						data: $(form).serialize(),
						dataType:"json",
						success:function(data) {
							alert(data.sMessage);
							// $("#csrf").val(data.sToken);
							if (data.sRetCode=="01") { //로그인 성공시
								document.location.href=data.sRetUrl;
							} else { //실패시
								alert(data.sRetCode);
							}
							sSendFlag=false;
						},
						error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }
					})
				} else {
				}
			}
	});
	</script>
</body>
</html>