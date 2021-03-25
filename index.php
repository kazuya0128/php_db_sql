<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Booker</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    
  </head>
  <body>
    <header>
      <div class="title">Booker</div>
      <div class="header-list">
      <ul>
      <li><a href="select.php">登録した本の一覧をみる。</a></li>
      
      </ul>
      </div>
    
    </header>

    <main　class="main">
      <form action="insret.php" method="POST">
        <label class="content">
          <p>本のタイトル</p>
          <input type="text" name="name" required />
        </label>

        <label class="content">
          <p>本の評価を５段階で入力してください。</p>
          <input type="radio" name="review" value="1" required />1
          <input type="radio" name="review" value="2" required />2
          <input type="radio" name="review" value="3" required />3
          <input type="radio" name="review" value="4" required />4
          <input type="radio" name="review" value="5" required />5
        </label>
        <label class="content">
          <p>書評</p>
          <textarea name="text" id="" cols="30" rows="10" required></textarea>
        </label>
        <button type="submit">
        <i class=" far fa-paper-plane"></i>本を登録する。
         </button>
        <!-- <input type="submit" value="f1d8; 本を登録する"　class="fa"/> -->
      </form>
      <footer class="footer">
        <div class="footer-logo">Booker</div>

      </footer>
　　　</main>
  </body>
</html>
