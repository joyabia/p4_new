<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign-In</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
  <div class="header-left-panel">
    <div class="logo-wrap">
      <div class="logo">
        <h1>Sign-In Wiz</h1>
      </div>
    </div>
  </div>
  <div class="header-right-panel">
    <div class="menu">
      <ul>
        <li class="marRight20"><a href="/index">home</a></li>
        <li class="marRight20"><a href="auth/register">register</a></li>
        <li class="marRight20"><a href="/auth/login">login</a></li>
        <li class="marRight20"><a class="active" href="/auth/logout">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<!--- header div end -->
<div class="panel-wrap">
  <div class="panel-wrapper">
    <div class="panel marRight30">
      <div class="img"><a href=#><img src="images/kid1.jpg"/></a></div>
      <div class="title">
      <ul>
      @foreach($currentUsersKids as $kids)
       <li> <a href="#">Sign-in {{$kids['firstName']}} {{$kids['lastName']}} </a></li>
       </ul>
        @endforeach
      </div>
      <div class="border"></div>

    </div>
    <div class="panel marRight30">
      <div class="img"><a hef=#><img src="images/kid2.jpg"/></a></div>
      <div class="title">
        <a href="#">Sign-in $i</a>
     </div>
      <div class="border"></div>
      
    </div>
    <div class="panel">
      <div class="img"><a href=#><img src="images/kid3.jpg"/></a></div>
      <div class="title">
        <!--h1 class="border-bottom">KIDS</h1-->
        <a href="#">Sign-in $i</a>
      </div>
      <div class="border"></div>


    </div>
  </div>
</div>
<!--- panel wrap div end -->
<div class="clearing"></div>


<!--- page wrap div end -->
<div class="footer">
  <p>Copyright (c) websitename. All rights reserved. <a href="http://www.alltemplates.com">www.alltemplateneeds.com ></a></p>
</div>
</body>
</html>
