<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
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
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h3 class="text-center">Sign Up</h3>
    <hr>
    <div class="card">
        <article class="card-body">
            <h4 class="text-center card-title mb-4 mt-1">Parents</h4>
            <form action="/Auth/join" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="pname" type="text">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control" name="pid" type="id">
                </div> <!-- form-group// -->
                
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="ppwd" type="password">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>Wallet ID</label>
                    <input class="form-control" name="pwid" type="text">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>Wallet Balance</label>
                    <input class="form-control" name="pwbalance" type="text">
                </div> <!-- form-group// --> 
                <br/>

                <h4 class="text-center card-title mb-4 mt-1">Child</h4>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="cname" type="text">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control" name="cid" type="id">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="cpwd" type="password">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <label>Wallet ID</label>
                    <input class="form-control" name="cwid" type="text">
                </div> <!-- form-group// --> 
                <br/>

                <h4 class="text-center card-title mb-4 mt-1">PiggyBank</h4>
                <div class="form-group">
                    <label>PiggyBank ID</label>
                    <input class="form-control" name="pbid" type="text">
                </div> <!-- form-group// -->    
                <br/>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Join  </button>
                </div> <!-- form-group// -->   


            </form>
        </article>
    </div> <!-- card.// -->
</body>
</html>