<?php
if(
    !isset($_POST["name"]) ||  $_POST["name"]==""||
    !isset($_POST["review"]) || $_POST["review"]==""||
    !isset($_POST["text"]) || $_POST["text"]==""
){
 exit('ParamError');
}

$name=$_POST["name"];
$review=$_POST["review"];
$text=$_POST["text"];

try {
    $pdo = new PDO('mysql:dbname=boo_db;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }

$sql= "INSERT INTO bo_table(id,name,review,text)VALUES(NULL,:a1,:a2,:a3)";

$stmt=$pdo->prepare($sql);

$stmt->bindValue(':a1',$name,PDO::PARAM_STR);
$stmt->bindValue(':a2',$review,PDO::PARAM_STR);
$stmt->bindValue(':a3',$text,PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    $error =$stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("LOcation: index.php");
}

?>
