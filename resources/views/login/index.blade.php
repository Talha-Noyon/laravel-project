<!DOCTYPE html>
<html >
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/styleCopy.css')}}">
  <style type="text/css">
  
  /* Form */
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 300px;
  margin: 0 auto 100px;
  padding: 30px 30px 70px 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: center;
}
.form .thumbnail {
  background: #EA141F;
  width: 150px;
  height: 150px;
  margin: 0 auto 30px;
  padding: 50px 30px;
  border-top-left-radius: 100%;
  border-top-right-radius: 100%;
  border-bottom-left-radius: 100%;
  border-bottom-right-radius: 100%;
  box-sizing: border-box;
}
.form .thumbnail img {
  display: block;
  width: 100%;
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .button {
  outline: 0;
  background: #EA141F;
  width: 48%;
  margin: 1%;
  float:left;
  border: 0;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}

/* END Form */
/* Demo Purposes */
body {
  background: #ccc;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body:before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  background: rgba(255, 255, 255, 0.8);
  width: 100%;
  height: 100%;
}
i
{
  
    font-size: 33px!important;
    float: left;
    color: #EA141F;
}
  
  
  </style>
</head>

<body>
  
<div class="container">
  <div class="info">
    <h1>Welcome</h1>
  </div>
</div>
<div class="form">
  <a href="/home"><i class="fa fa-home"></i></a>
  <div class="thumbnail"><img src="/assets/images/login_user_profile.png"/></div>
      @if(session('errMsg'))
        <h4 style="color: red;">{{session('errMsg')}}</h4>
      @endif
  <form class="login-form" method='post'>
    <input type="text" placeholder="useremail" name="email">
    <input type="password" placeholder="password" name="password"/>
    <input  class="button" type="submit" value="Log-In"/>
    <a href="/register"><input  class="button" type="button" value="Register"/></a>

    
  </form>
    @if($errors->any())
  <ul>
    @foreach($errors->all() as $err)
    <p style="color: red;">{{$err}}</p>
    @endforeach
  </ul>
  @endif

  @if(session('message'))
    <p style="color: red;">{{session('message')}}</p>
  @endif
</div>


</body>
</html>