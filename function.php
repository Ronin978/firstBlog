<?php 
$connect=false;
function connectDB()
{	
	global $connect;
	$connect = mysqli_connect(	"localhost",
								"ronin_root",
								"1234", 
								"Yurkiv");
       if (!$connect)
	    {
			printf("Неможливо підключитись до вказаної Бази Даних. Код помилки: %s\n", mysqli_connect_error()); 
			exit; 
		}
}

function closeDB()
{	
	global $connect;
	mysqli_close($connect);
}

?>