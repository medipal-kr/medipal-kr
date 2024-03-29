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
    <script src="js/registration.js"></script>

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

    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form method="POST" action="#" role="form">
                        <div class="text-center">
                            <img class="logo" src="images/medipal-logo.png" alt="medipal-logo">
                            <h1 class="h2 mb-2 font-weight-normal">회원가입</h1>
                        </div>
                        <div class="form-group txtName">
                            <label class="control-label" for="signupName">성함</label>
                            <input id="signupName" type="text" maxlength="7" class="form-control">
                        </div>
                        <div class="form-group txtEmail">
                            <label class="control-label" for="signupEmail">이메일</label>
                            <input id="signupEmail" type="email" maxlength="25" placeholder="medipal@example.com" class="form-control">
                        </div>
                        <div class="form-group txtEmailConf">
                            <label class="control-label" for="signupEmailAgain">이메일 확인</label>
                            <input id="signupEmailAgain" type="email" maxlength="25" class="form-control">
                        </div>
                        <div class="form-group txtPW">
                            <label class="control-label" for="signupPassword">비밀번호</label>
                            <input id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="최소 6자리" length="40">
                        </div>
                        <div class="form-group txtPWConf">
                            <label class="control-label" for="signupPasswordAgain">비밀번호 확인</label>
                            <input id="signupPasswordAgain" type="password" maxlength="25" class="form-control" placeholder="최소 6자리" length="40">
                        </div>
                        <div class="form-group txtTel">
                            <label class="control-label" for="signupTel">전화번호</label>
                            <input id="signupTel" type="tel" placeholder="01012345678" maxlength="11" class="form-control">
                        </div>
                        <div class="form-group">
                            <p class="signup-warn">진행하면 <a href="#">약관</a> 및 <a href="#">개인정보 취급 방침</a>에 동의하게 됩니다</p>
                        </div>
                        <button id="signupSubmit" role="button" class="btn btn-info btn-block" onclick="location.href = 'signup-complete.html'; return false;">회원가입 하기</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


</html>