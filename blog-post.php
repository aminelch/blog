<?php
require "core/database.php";
require "core/database_func.php";

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0):
	extract($_GET);
	$article=getPostById($db, $id);
 
else:
	//header('Location: 404.php?error=1');
endif;
?>

<h1><?=$article->title; ?></h1>
<blockquote>Le <?=$article->date;?>
	<footer>Poster par: <a href="#"><?=$article->author;?></a></footer>
</blockquote>
</div>

<p><?=$article->content; ?></p>

