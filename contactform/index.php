<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォームを作る</title>
  <link rel="stylesheet"type="text/css" href="style.css">
</head>
<body>

<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
$stmt = $pdo->query("select * from contactform");

?>



  <h1>お問い合わせフォーム</h1>
  <form method="post" action="mail_confirm.php">
    <div>
      <label>名前</label> <br>
      <input type="text" class="text" size="35" name="name" value="<?php echo $_SESSION['name']?>">
    </div>
    <div>
      <label>メールアドレス</label>
      <br>
      <input type="text" class="text" size="35" name="mail" value="<?php echo $_SESSION['mail']?>">
    </div>

    <div>
      <label>年齢</label>
      <br>
      <select class="dropdown" name="age" value="<?php echo $_SESSION['age']?>">
        <option>選択してください</option>
        <script>
          for(var i=18; i <= 65; i++){
            document.write("<option value="+i+">"+i+"歳</option>")
          }
        </script>
      </select>
    </div>

    <div>
      <label>コメント</label>
      <br>
      <textarea cols="35" rows="7" name="comments"><?php echo $_SESSION['comments'] ?></textarea>
    </div>

    <div>
      <input type="submit" class="submit" value="送信する">
    </div>


  </form>
</body>
</html>