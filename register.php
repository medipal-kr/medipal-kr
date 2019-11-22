<!DOCTYPE html>
<html>


    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--scripts-->

        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <!--Bootstrap-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/480ded9489.js" crossorigin="anonymous"></script>
        <!--local main JS-->
        <script src="js/login.js"></script>

        <!--links-->

        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type="text/css" href="styles/register.css">
        <!--Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">

        <title>회원가입</title>
    </head>

    <body>
        <?php $header_title = '회원가입 페이지 입니다' ?>
        
        <div class="container">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form method="POST" action="#" role="form">
                            <div class="form-group">
                                <h2>Create account</h2>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="signupName">Your name</label>
                                <input id="signupName" type="text" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="signupEmail">Email</label>
                                <input id="signupEmail" type="email" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="signupEmailagain">Email again</label>
                                <input id="signupEmailagain" type="email" maxlength="50" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="signupPassword">Password</label>
                                <input id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="signupPasswordagain">Password again</label>
                                <input id="signupPasswordagain" type="password" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group">
                                <button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
                            </div>
                            <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
                            <hr>
                            <p></p>Already have an account? <a href="#">Sign in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body> 


</html>