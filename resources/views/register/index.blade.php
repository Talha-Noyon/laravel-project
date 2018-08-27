<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/styleCopy.css')}}">
	  <style type="text/css">
	
	/* Form */
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 300px;
  margin: 0 auto 100px;
  padding: 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: center;
}
.form .thumbnail {
  background: #EF3B3A;
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
  background: #EF3B3A;
  width: 100%;
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

  /*ToolTip*/
  .tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
  .popup-registration{
    background: hsl(0,0%,96%) none repeat scroll 0 0;
    border-bottom: 4px solid hsl(358,72%,47%);
    color: hsl(358,60%,52%);
    display: block;
    font-family: "HelveticaCondensedBold";
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    height: auto;
    line-height: 30px;
    margin: 20px auto;
    padding: 5px 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    width: 80%;
	}
i
{
  
    font-size: 33px!important;
   
    color: #EA141F;
}
  </style>
 
</head>
<body>

<div class="container">

</div>
<div class="form">
  <a href="/home"><i class="fa fa-home"></i></a>
  <div ><h1 class="popup-registration">Registration</h1></div>

  <form class="login-form" method='post'enctype="multipart/form-data" >
    
		@if($errors->any())
      @foreach($errors->all() as $err)
			<span style="color: red" >{{$err}}<br/></td>
      @endforeach
		@endif
	
    <input  type="text" placeholder="username" name="username" value="{{ old('username') }}">
    <input type="password" placeholder="password" name="password" value="{{ old('password') }}" />
    <input type="email" placeholder="email"name="email" value="{{ old('email') }}">
    <input type="text" placeholder="phone"name="phone" value="{{ old('phone') }}">
    <input type="text" placeholder="national id"name="nid" value="{{ old('nid') }}">
    <input type="file" name="file" value="{{ old('file') }}">
    <input  class="button" type="submit" value="Save"/>
 		
  </form>

  @if(session('regMsg'))
    <p style="color: red;"><a style="color: red;" href="/login">{{session('regMsg')}}</a></p>
  @endif
</div>
</body>
</html>

