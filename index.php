<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Place Your Company Name Here</title>
      <link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
  </head>

<body>
<?php 
	require_once "bloks/topmenu.php" ;

	$id=$_GET["id"];
	$news=$_GET["news"];
	
	if ($id=='news' and $news=='add') {
		require_once "bloks/addnews.php" ;
		require_once "bloks/allnews.php" ;

	}
	elseif ($id=='news') {
		require_once "bloks/allnews.php" ;
	}
	elseif ($id=='info') {
		require_once "bloks/info.php" ;
	}
	elseif ($id=='look') {
		require_once "bloks/look.php" ;
	}
	elseif ($id=='reg') {
		require_once "bloks/reg.php" ;
		
	}
	else
	{
		require_once "bloks/header.php" ;
		require_once "bloks/content.php" ;
	}
	require_once "bloks/footer.php" ;
?> 
			  
</body>
</html>
