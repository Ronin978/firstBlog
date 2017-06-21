<a href="index.php?id=news&news=add">Додати новину</a>





<?php
require_once "function.php"; 
connectDB ();
		$result=mysqli_query($connect, "SELECT * FROM News");
		if (!$result)
		{		
			echo "Виникла помилка із запитом SQL.";
		}
		while ($row = mysqli_fetch_assoc($result))
		{ 
	?>
	<div class="content">
		
		<img src="<?php echo $row['picture']; ?>">
		
		<h2>
			<?php echo $row['title']; ?>
		</h2>
		<p>
			<?php echo $row['full_news']; ?>
		</p>		
	</div>
	<?php 
					}		
					closeDB();
?>