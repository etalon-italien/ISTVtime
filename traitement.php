<?php
  if(empty($_POST['type'])){
   echo "Aucun type n'a été cochée<br>";
  }
  else{
    foreach($_POST['type'] as $type){
      echo "$type<br>";
    }
  }
  if(empty($_POST['genre'])){
   echo "Aucun genre n'a été cochée<br>";
  }
  else{
    foreach($_POST['genre'] as $genre){
      echo "$genre<br>";
    }
  }

  if(empty($_POST['date'])){
   echo "Aucune date n'a été cochée<br>";
  }
  else{
    $date=$_POST['date'];
    echo "$date<br>";
  }
  if(empty($_POST['pays'])){
   echo "Aucun pays n'a été cochée<br>";
  }
  else{
    foreach($_POST['pays'] as $pays){
      echo "$pays<br>";
    }
  }
  if(empty($_POST['recherche'])){
   echo "recherche vide<br>";
  }
  else{
    $recherche= $_POST['recherche'];
    echo "$recherche<br>";
  }

 ?>
