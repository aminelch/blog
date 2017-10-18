<?php 

function getAllPosts($db){
try{
    $select=$db->query('SELECT * FROM posts ORDER BY id DESC');
    $posts=$select->fetchAll();
  return $posts;
}
catch (PDOException $e){
    return null;
   }
}


function getPostById($db,$id){
  $id=$db->quote($id);
  $select=$db->query("SELECT * FROM posts WHERE id= $id");
  $article=$select->fetch();
  return $article;
   
   
   
   
}

function deletePost($db,$id){
  $id=$db->quote($id);
  $req=$db->query("DELETE FROM posts WHERE id= $id");
  return $req->rowCount();
}

function getPostsCount($db){
  $c= $db->query("SELECT id from posts")->rowCount();
  return $c;

}