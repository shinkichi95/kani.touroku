<?php 
  echo date('Y-m-d H:i:s');
  $time = date('Y-m-d H:i:s');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $file = fopen('./data/data.txt','a');

  fwrite($file,$time.",");
  fwrite($file,$name.",");
  fwrite($file,$email.",");
  fwrite($file,$address."\n");

  fclose($file);

?> 

<html>
  <head>
    <title>PHP Test</title>
    <style>
      span{
        width: 200px;
        padding: 10px;
        margin: 20px;
        background-color :#ff6347;
        border: 3px solid #ff6347;
        color:white;
      }
  
    </style>
  </head>
  <body>
    <p><span>お名前：</span><?= $name ?></p>
    <p><span>Email ：</span><?= $email ?></p>
    <p><span>住所　：</span><?= $address ?></p>
    <p><a href="input.php">もう一度登録する<a></p>
    <p><a href="read.php">結果を表示する<a></p>
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>