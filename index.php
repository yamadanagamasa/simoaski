<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>下ネタアスキーアート変換</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<style>
  .aski{
    font-size: 0.5em;
  }
    body {
      background-color: #eeeeee;
      text-align:center;
      font-family: 'Zen Kaku Gothic New', sans-serif;
  }
  footer{
    font-family: "Press Start 2P";font-size: 16px;
  }
  .maintitle{
          background-image:url("head.jpeg");
          background-size:100%;
          height:100%;
          background-attachment: fixed;
          background-size: cover;
          background-position: center;
  }
  .box{
    margin-left: 10%;
    margin-right: 10%;
  }
  .sarch{
    margin-left: 10%;
    margin-right: 10%;
  }
  HTML CSSResult Skip Results Iframe
  EDIT ON
  /* Sliding Squares Loading Spinner
     Inspired by https://www.uplabs.com/posts/slidin-squares-loader by Vitaly Silkin 
     Implemented in CSS by Tom Adey */

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .loadingspinner {
    --square: 26px;
    --offset: 30px;

    --duration: 2.4s;
    --delay: 0.2s;
    --timing-function: ease-in-out;

    --in-duration: 0.4s;
    --in-delay: 0.1s;
    --in-timing-function: ease-out;

    width: calc( 3 * var(--offset) + var(--square));
    height: calc( 2 * var(--offset) + var(--square));
    padding: 0px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    margin-bottom: 30px;
    position: relative;
  }

  .loadingspinner div {
    display: inline-block;
    background: darkorange;
    /*background: var(--text-color);*/
    /*box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);*/
    border: none;
    border-radius: 2px;
    width: var(--square);
    height: var(--square);
    position: absolute;
    padding: 0px;
    margin: 0px;
    font-size: 6pt;
    color: black;
  }

  .loadingspinner #square1 {
    left: calc( 0 * var(--offset) );
    top:  calc( 0 * var(--offset) );
    animation: square1 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(1 * var(--in-delay)) var(--in-timing-function) both;
  }

  .loadingspinner #square2 {
    left: calc( 0 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square2 var(--duration) var(--delay) var(--timing-function) infinite,
              squarefadein var(--in-duration) calc(1 * var(--in-delay)) var(--in-timing-function) both;
  }
  
  .loadingspinner #square3 {
    left: calc( 1 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square3 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(2 * var(--in-delay)) var(--in-timing-function) both;
  }

  .loadingspinner #square4 {
    left: calc( 2 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square4 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(3 * var(--in-delay)) var(--in-timing-function) both;
  }

  .loadingspinner #square5 {
    left: calc( 3 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square5 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(4 * var(--in-delay)) var(--in-timing-function) both;
  }

  @keyframes square1 {
    0%      {left: calc( 0 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    8.333%  {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }

  @keyframes square2 {
    0%      {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    8.333%  {left: calc( 0 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    16.67%  {left: calc( 1 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    25.00%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    83.33%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    91.67%  {left: calc( 1 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    100%    {left: calc( 0 * var(--offset) ); top: calc( 0 * var(--offset) ); }
  }

  @keyframes square3 {
    0%,100% {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    16.67%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    25.00%  {left: calc( 1 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    33.33%  {left: calc( 2 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    41.67%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    66.67%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    75.00%  {left: calc( 2 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    83.33%  {left: calc( 1 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    91.67%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }

  @keyframes square4 {
    0%      {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    33.33%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    41.67%  {left: calc( 2 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    50.00%  {left: calc( 3 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    58.33%  {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }

  @keyframes square5 {
    0%      {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    50.00%  {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    58.33%  {left: calc( 3 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    66.67%  {left: calc( 2 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    75.00%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }

  @keyframes squarefadein {
    0%      {transform: scale(0.75); opacity: 0.0;}
    100%    {transform: scale(1.0); opacity: 1.0;}
  }
</style>
</head>
<body>
  <!-- 1. ヘッダ -->
  <!-- heroコンポーネント -->
  <header class="navbar">
          <div class="navbar-brand">
              <span class="navbar-item">
                  <span class=""></span><a href="index.php"><p class="subtitle has-text-weight-bold">下スキー</p></a>
              </span>
          </div>
          <div class="navbar-item">
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
      </header>
<div class="maintitle">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="box">
  <h1 class="title">何気なく撮った写真を、卑猥に。</h1></div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<br><br><br>
<?php
 if (isset($_POST['upload'])) {//送信ボタンが押された場合
    array_map('unlink', glob("images/*"));
    array_map('unlink', glob("outputimages/*"));
      $image = uniqid(mt_rand(), true);//ファイル名をユニーク化
      $image .= '.' . substr(strrchr($_FILES['image']['name'], '.'), 1);//アップロードされたファイルの拡張子を取得
        $file = "images/$image";
      //$sql = "INSERT INTO images(name) VALUES (:image)";
      //$stmt = $dbh->prepare($sql);
      //$stmt->bindValue(':image', $image, PDO::PARAM_STR);
      if (!empty($_FILES['image']['name'])) {//ファイルが選択されていれば$imageにファイル名を代入
          move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);//imagesディレクトリにファイル保存
          if (exif_imagetype($file)) {//画像ファイルかのチェック
            //$command="python main.py ";サーバー用
            $command="python3 main.py";

            exec($command,$output);
          } else {
              $message = '画像ファイルではありません';
              array_map('unlink', glob("images/*"));
          }
      }}
?>
  <!--送信ボタンが押された場合-->
<?php if (isset($_POST['upload'])): ?>
      <div class="box">
      <?php
      echo"<a href='images/ascii_image.txt' download>txtファイルをダウンロード</a><br><br>";
      ?>
      <p class="aski"><?php 
      foreach($output as $m){
      echo $m; 
      };
      ?></p></div>
  <?php else: ?>
    <div class="box sarch">
      <form method="post" enctype="multipart/form-data">
          <h1 class="title">画像を犠牲に</h1>
          <p>アップロードした画像を卑猥な文字のアスキーアートにします。</p>
      
  <div class="container">
    <div class="loadingspinner">
      <div id="square1"></div>
      <div id="square2"></div>
      <div id="square3"></div>
      <div id="square4"></div>
      <div id="square5"></div>
    </div>
  </div>
          <input type="file" name="image" class="is-info">
          <input type="submit" name="upload" value="犠牲にする" href="#" class="button is-success is-small">
      </form>
  </div>
  <?php endif;?>
  <br>
  <br>
  <div class="box">
    <p class="title">アスキーアートとは？</p>
    <p>面倒くせえのでウィキ参照↓</p>
    <a>https://ja.wikipedia.org/wiki/%E3%82%A2%E3%82%B9%E3%82%AD%E3%83%BC%E3%82%A2%E3%83%BC%E3%83%88</a>
    <br><br>
    <p>濃い-------------------------------------->薄い</p>
    <p>靡,腐,陰,猥,淫,卑,ま,ち,ん,こ</p>

</p>

  </div>
  <br>
  <footer class="footer">
    <br>
    <div class="content has-text-centered">
      <a href="https://yamadanagamasa.github.io/nunupages/"> © nunu.</a>
      </p>
    </div>
  </footer>
</body>
</html>