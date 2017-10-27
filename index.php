<?php

	session_start();
	//회원가입을 통해 저장되어 있는 세션값.
	$user_id = $_SESSION['user_id'];
	$user_nick = $_SESSION['user_nick'];
	$user_level = $_SESSION['user_level'];

?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title> 루비또  </title>
	<!-- 스타일 시트 적용 -->
	
	<link rel="stylesheet" type="text/css" href="./css/common.css">
</head>

<body>

<div id="wrap">
	
	<header id="header">
		
	 <!-- 헤드라인 부분은 모든 페이지에서 --> 
     <!-- 공통으로 사용.. 공동 모듈 제작 -->
     <!-- 외부 php문서에 내용 제작 후 include -->
<?php

    include "./lib/top_login.php";
?>

	</header>

	<nav id="menu">
		
<?php

include "./lib/top_menu.php";

?>

	</nav>

	<section id="content">
		
	<div id="main_img"><img src="./img/main_img.jpg"></div>

	</section>

</div>

</body>

</html>
