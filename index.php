 <?php 
require "core/database.php";
require "core/database_func.php";

 $allposts=getAllPosts($db);
 $postsCount=getPostsCount($db);

 echo "<div style='color=#fff;'><center><h2> You have {$postsCount} posts </center></h2></div>";

 foreach ( $allposts as $post):

?>
<h2><?=$post->title; ?></h2>
<p><em>by <?=$post->author; ?></em>
	<?=$post->date; ?>
</p>
<p><?=$post->content; ?></p>

<?php endforeach; ?>






