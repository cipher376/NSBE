<!DOCTYPE html>
<html ng-app='NSB'>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<base href="/NSBE/public/">
<title>NSBE Conventions</title>
 <link rel="icon" href="assets/images/logogh.ico" type="image/x-icon">
<style>

body {
    background: url('assets/images/bg2.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

@font-face {
    font-family: duality;
    src: url('assets/layout/styles/fonts/duality.ttf');
}
.logo {
    width: 213px;
    height: 36px;
 
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
    margin-top: 10%;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

.logo h2{
    color: white;
    width:100%;
    text-align: center;
    font-family:Montserrat, duality, sans-serif 
}
#register {
    margin-top: 5px;
}
</style>
</head>

<body ng-controller='LoginCtrl'>
<div class="logo" style="cursor:pointer"><h2>NS<img src="assets/images/logo.png" />BE <br> Conference</h2></div>

<div class="login-block">
    <h1>Login</h1>
    <input type="text" value="" placeholder="Email" id="Email" ng-model='data.email' />
    <input type="password" value="" placeholder="Password" id="password" ng-model='data.password'/>
    <button ng-click='login()'>Submit</button>
    <button id="register">Register</button>
</div>
  <script src="assets/plugins/slider/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  
   <script src="assets/angular/angular.min.js"></script>
    <script src="assets/angular/angular-route.min.js"></script>
    <script src="assets/angular/angular-cookies.min.js"></script>
      <script src="assets/scripts/layout.js"></script>
<script type="text/javascript">


$(function(){
    $("#register").click(function(){
        window.location.href = "/NSBE/InnerLayout/#!/register";
    });

    $(".logo").click(function(){
        window.location.href = "/NSBE/main";
    })
})
</script>

<input type="hidden" id='nonce' value="<?php echo ulNonce:: Create("login", UL_NONCE_EXPIRE, true);?>"> 
</body>

</html>