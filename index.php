<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
  
<body>
  
  <?php
  
  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
  $stmt = $pdo->query("select*from 4each_keijiban");
  
  ?>
  
  <img src ="4eachblog_logo.jpg" class="logo">
  
  <header>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>
  
  <main>
    <div id="left">
      <h1>プログラミングに役立つ掲示板</h1>
      
      <form method="post" action="insert.php">
        <h2>入力フォーム</h2>
          
        <p>ハンドルネーム</p>
          <input type="text" name="handlename" size="50" class="text">
        
        <p>タイトル</p>
          <input type="text" name="title" size="50" class="text">
         
        <p>コメント</p>
          <textarea name="comments" rows="10" cols="60"></textarea>
        
        <br>
	<input type="submit"value="投稿する" class="submit">
        
      </form>
       
  
  <?php  
      
    while($row = $stmt->fetch()){
        
      echo"<div class='kiji'>";
        echo"<h3>".$row['title']."<h3>";
        echo"<div class='comments'>";
          echo $row['comments'];
            echo"<div class='handlename'>posted by".$row['handlename']."</div>";
        echo"</div>";
      echo"</div>";
      
    }
      
  ?>    
  

    
    </div>
      

    <div id="right">
      <h2>人気の記事</h2>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP　MyAdminの使い方</li>
          <li>今人気のエディタTop5</li>
          <li>HTMLの基礎</li>
        </ul>      

      <h2>オススメリンク</h2>
        <ul>
          <li>インターノウス株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipseのダウンロード</li>
          <li>Braketsのダウンロード</li>
        </ul>      

      <h2>カテゴリ</h2>
        <ul>
          <li>HTML</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>JavaScript</li>
        </ul>      

    </div>

  </main>

<footer>copyright internous | 4each blog is the one which provides A to Z about programing.</footer>

  
</body>
  
</html>