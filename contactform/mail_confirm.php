<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>お問い合わせフォームを作る</title>
  <link rel="stylesheet"type="text/css" href="style2.css">
</head>

<body>
  <h1>お問い合わせ内容確認</h1>
  <div class="confirm">
    <p>お問い合わせはこちらで宜しいでしょうか？
      <br>よろしければ「送信する」ボタンを押して下さい。
    </p>
    <P>名前
      <br>
      <?php echo $_POST['name'];?>
      <?php
        session_start();
          if(isset($_POST['name']) && $_POST['name'] ){
           $_SESSION['name'] = $_POST['name'];
         }
      ?>
    </p>
     
    <p>メールアドレス
      <br>
      <?php echo $_POST['mail'];?>
      <?php
        session_start();
          if(isset($_POST['mail']) && $_POST['mail'] ){
           $_SESSION['mail'] = $_POST['mail'];
         }
      ?>
    </p>

    <p>年齢
      <br>
      <?php echo $_POST['age'];?>
      <?php
        session_start();
         if(isset($_POST['age'] && $_POST['age'])){
          $_SESSION['age'] = $_POST['age'];
         }
      ?>
    </p>

    <p>コメント
      <br>
      <?php echo $_POST['comments'];?>
      <?php
        session_start();
          if(isset($_POST['comments']) && $_POST['comments'] ){
           $_SESSION['comments'] = $_POST['comments'];
         }
      ?>
    </p>

    <form action="index.php" method="post">
      <input type="submit" class="button1"value="戻って修正する">
    </form>

    <form action="insert.php" method="post">
      <input type="submit" class="button2" value="登録する">
      <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
      <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
      <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
      <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
    </form>
    
  </div>
</body>
</html>

