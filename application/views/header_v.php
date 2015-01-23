<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no" />
	<title>Fighting_JW</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
	<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요한) -->
    <script src="//code.jquery.com/jquery.js"></script>
    
    <!-- Respond.js 으로 IE8 에서 반응형 기능을 활성화하세요 (https://github.com/scottjehl/Respond) -->
    <script src="/test/include/component/bootstrap/js/respond.js"></script>
    
	<link rel="stylesheet" href="/test/include/component/bootstrap/css/bootstrap.css" />
	
	
<!-- 	질문 아래꺼는 뭐지???? -->
	<!-- <link href="<?=COMPONENT_DIR?>/bootstrap/css/bootstrap.css" rel="stylesheet"/>  -->
	
</head>
<body>
<div id="main">

	<header id="header" data-role="header" data-position="fixed"><!-- Header Start -->
		<div class="page-header">
			<blockquote>
			<h1 align="center" style="border: 1px solid green">Project_프로젝트_파이팅</h1>
	    
<!-- 질문 !!  아래 <php 는 왜 나누지???????>	    -->
<?php
if( @$this->session->userdata['logged_in'] == TRUE )
{
?>
<?php echo $this->session->userdata['username']?>님 환영합니다. <a href="/test/auth/logout" class="btn">로그아웃</a>
<?php
} else {
?>
<a href="/test/auth/login" class="btn btn-primary">로그인</a>
<?php
}
?>
		</blockquote>
		</div>
	</header><!-- Header End -->

	<!-- 	gnb start -->
	<!-- 	gnb end -->
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
  </div>
 
  <!-- Collect the nav links, forms, and other content for toggling -->
<!--   <div class="collapse navbar-collapse navbar-ex1-collapse"> -->
<!--     <ul class="nav navbar-nav"> -->
<!--       <li class="active"><a href="#">Link</a></li> -->
<!--       <li><a href="#">Link</a></li> -->
<!--       <li class="dropdown"> -->
<!--         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a> -->
<!--         <ul class="dropdown-menu"> -->
<!--           <li><a href="#">Action</a></li> -->
<!--           <li><a href="#">Another action</a></li> -->
<!--           <li><a href="#">Something else here</a></li> -->
<!--           <li><a href="#">Separated link</a></li> -->
<!--           <li><a href="#">One more separated link</a></li> -->
<!--         </ul> -->
<!--       </li> -->
<!--     </ul> -->
<!--     <form class="navbar-form navbar-left" role="search"> -->
<!--       <div class="form-group"> -->
<!--         <input type="text" class="form-control" placeholder="Search"> -->
<!--       </div> -->
<!--       <button type="submit" class="btn btn-default">Submit</button> -->
<!--     </form> -->
<!--     <ul class="nav navbar-nav navbar-right"> -->
<!--       <li><a href="#">Link</a></li> -->
<!--       <li class="dropdown"> -->
<!--         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a> -->
<!--         <ul class="dropdown-menu"> -->
<!--           <li><a href="#">Action</a></li> -->
<!--           <li><a href="#">Another action</a></li> -->
<!--           <li><a href="#">Something else here</a></li> -->
<!--           <li><a href="#">Separated link</a></li> -->
<!--         </ul> -->
<!--       </li> -->
<!--     </ul> -->
  </div><!-- /.navbar-collapse -->
</nav>