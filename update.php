<?php

$id=      $_POST["id"];
$name=    $_POST["name"];
$review=  $_POST["review"];
$text=    $_POST["text"];

try{
$pdo=new PDO('mysql:dbname=boo_db;charset=utf8;host=localhost','root','root');
}catch(PDOException $e){
exit('データベースに接続できませんでした。'.$e->getMessage());
}

$update= $pdo->prepare("UPDATE bo_table SET name=:name,
review=:review,text=:text WHERE id=:id");

$update->bindValue(':name',$name,PDO::PARAM_STR);
$update->bindValue(':review',$review,PDO::PARAM_STR);
$update->bindValue(':text',$text,PDO::PARAM_STR);
$update->bindValue(':id',$id,PDO::PARAM_INT);
$status=$update->execute();

if($status==false){
$error=$stmt->errorInfo();
exit("QueryError:".$error[2]);
}else{
header("Location: select.php");
}


?>