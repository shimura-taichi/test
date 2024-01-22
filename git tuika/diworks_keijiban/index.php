<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>diworksblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

 <?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
$stmt = $pdo->query("select * from diworks_keijiban");

?>

  <div>
    <img src="diblog_logo.jpg"> 
  </div>

  <header>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>D.IBlogについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>

  <main>
    <div class="left">
       <h1>
        プログラミングに役立つ掲示板
       </h1>
    
     <form method="post" action="insert.php">
       <h2>入力フォーム</h2>
       <div>
         <label>ハンドルネーム</label> <br>
         <input type="text" name="handlename" size="35">
       </div>

       <div>
         <label>タイトル</label> <br>
         <input type="text" name="title" size="35">
       </div>

       <div>
         <label>コメント</label> <br>
         <textarea rows="6" cols="50" name="comments"></textarea>
       </div>

       <div>
         <input type="submit" class="submit" value="投稿する">
       </div>
       
     </form>

     <?php


     while ($row = $stmt -> fetch()){

      echo'<div class="kiji">';
      echo"<h3>".$row["title"]."</h3>";
      echo'<div class="contents">';
      echo $row["comments"];
      echo"<div class='handlename'>posted by".$row['handlename']."</div>";
      echo"</div>";
      echo"</div>";
    
    }

     echo'<div class="kiji">'; 
      echo"<h3>タイトル</h3>"; 
        echo'<div class="contents">';
          echo" 記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
        echo"<div class='handlename'>posted by 通りすがり</div>";
       echo"</div>";
     echo"</div>";

    ?>
   
     
    </div>

    


    

    <div class="right">

      <h2>人気の記事</h2>
        <p>
          　PHPオススメ<br>
          　PHP  MyAdminの使い方<br>
          　いま人気のエディタTops<br>
          　HTMLの基礎<br>
        </p>

      <h2>オススメリンク</h2>
        <p>
          　ディーアイワークス株式会社<br>
          　XAMPPのダウンロード<br>
          　Eclipseのダウンロード<br>
          　Braketsのダウンロード<br>
        </p>

      <h2>カテゴリ</h2>
        <p>
          　HTML<br>
          　PHP<br>
          　MySQL<br>
          　JavaScript<br>
        </p>
        
    </div>
  </main>
  
  <footer>
    Copyright D.I.blog is the one which provides A to Z about programming
  </footer>


</body>
</html>

  

