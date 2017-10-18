 <?php 
require "core/database.php";
require "core/database_func.php";

 $allposts=getAllPosts($db);

 foreach ( $allposts as $k):
?>
	<h3><php echo $k->title;?></h3>
	<p><em><=$k->author;?></em><br><em><=$k->date;?></em></p>
	<p><=$k->content;?></p>



<?php endforeach; ?>






