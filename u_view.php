<?php
$id=$_GET["id"];

try{
$pdo=new PDO('mysql:dbname=boo_db;charset=utf8;host=localhost','root','root');
} catch(PDOException $e){
exit('データベースに接続できませんでした。'.$e->getMessage());
}

$sql="SELECT * FROM bo_table WHERE id=:id";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status=$stmt->execute();


$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booker</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div class="title">Booker</div>
      

    </header>

    <main>
      <form action="update.php" method="POST">
        <label class="content">
          <p>本のタイトル</p>
          <input type="text" name="name" required value="<?=$row["name"]?>" />
        </label>

        <label class="content">
          <p>本の評価を５段階で入力してください。</p>
          <input type="radio" name="review" value="1" required value="<?=$row["review"]?>"/>1
          <input type="radio" name="review" value="2" required value="<?=$row["review"]?>"/>2
          <input type="radio" name="review" value="3" required value="<?=$row["review"]?>"/>3
          <input type="radio" name="review" value="4" required value="<?=$row["review"]?>"/>4
          <input type="radio" name="review" value="5" required value="<?=$row["review"]?>"/>5
        </label>
        <label class="content">
          <p>書評</p>
          <textarea name="text" id="" cols="30" rows="10" required><?=$row["text"]?></textarea>
        </label>
       <input type="hidden" name="id" value="<?=$row["id"]?>">

        <input type="submit" />
      </form>
　　　
      <a href="select.php">一覧をみる。</a>
    </main>
  </body>
</html>
