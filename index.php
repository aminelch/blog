<?php
require "core/database.php";
require "core/database_func.php";

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0):
	extract($_GET);
	$article=getPostById($db, $id);
else:
	header('Location: 404.php?error=1');
endif;
?>

<h1><?=$article->titre; ?></h1>
<blockquote>Le <?=$article->date_creation;?>
	<footer>Poster par: <a href="#"><?=$article->auteur;?></a></footer>
</blockquote>
</div>

<p><?=$article->contenu; ?></p>

