<?php

require_once "function.php" ;
connectDB ();

$max=mysqli_query($connect, "SELECT * FROM News");
if (!$max) {echo "Виникла помилка";}
$all=mysqli_num_rows($max);

$news1=mysqli_query($connect, "SELECT * FROM News WHERE id=\"$all\"");
$all=$all-1; //Додаємо дві останні новини
$news2=mysqli_query($connect, "SELECT * FROM News WHERE id=\"$all\"");

if (!$news1 || !$news2) echo "Помилка із SQL-запитом.";
$new_news1 = mysqli_fetch_assoc($news1);
$new_news2 = mysqli_fetch_assoc($news2);

?>

<div class="content">
		<div class="div_td">
			<h2><?php echo $new_news1['title']; ?></h2>
			<p>
				<?php echo $new_news1['full_news']; ?>
			 <p>
		</div>
		<div class="div_td">
			<h2><?php echo $new_news2['title']; ?></h2>
  			<p>
	   			<?php echo $new_news2['full_news']; ?>
			</p>
		</div>
</div>
<?php closeDB () ?>

	   
