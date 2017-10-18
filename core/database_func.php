<?php 

function getAllPosts($db){
try{
    $select=$db->query('SELECT * FROM articles ORDER BY id DESC');
    $articles=$select->fetchAll();
  return $articles;
}
catch (PDOException $e){
    return null;
   }
}


function getPostById($db,$id){
  $id=$db->quote($id);
  $select=$db->query("SELECT * FROM articles WHERE id= $id");
  $article=$select->fetch();
  return $article;
   
   
   
   
}

function deletePost($db,$id){
  $id=$db->quote($id);
  $req=$db->query("DELETE FROM articles WHERE id= $id");
  return $req->rowCount();
}