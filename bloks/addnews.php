<form method="post" action="index.php?id=news&news=add">
	Заголовок: <input type="text" name="title"> <br>
	Текс: <textarea name="full_news" cols="50" rows="10"></textarea> <br>
	Картинка: <input type="text" name="picture"> <br>
	
	<input type="hidden" name="daten" value="<?php echo date('Y-m-d'); ?>">	
	<input type="hidden" name="timen" value="<?php echo date('H:i:s'); ?>">	
	
	<input type="submit" name="add" value="Додати">
</form>

<?php
	
if (isset($_POST['add'])) {
		require_once "function.php"; 
		connectDB ();
	
		$title=strip_tags(trim($_POST['title']));
		$full_news=strip_tags(trim($_POST['full_news']));
		$picture=$_POST['picture'];
		$daten=$_POST['daten'];
		$timen=$_POST['timen'];

		$zapyt=	"	INSERT INTO News(title, full_news, picture, daten, timen) 
					VALUES ('$title', '$full_news', '$picture', '$daten', '$timen')
				";
		$result=mysqli_query($connect,$zapyt);
		
		if (!$result)
		{		
			echo "Виникла помилка із запитом SQL.";
		}
		else
		{
			echo "Новину успішно додано";
		}

	closeDB();
	
}

else
{
	echo "Her zna sho!!!!";
}
?>