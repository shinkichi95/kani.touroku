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
      <form action="write.php" method="post">
        <p><span>お名前：</span><input type="text" name="name"></p>
        <p><span>Email ：</span><input type="text" name="email"></p>
        <p><span>住所　：</span><input type="text" name="address"></p>
        <p><input type="submit" name="送信"></p>
      </form>
    <?php 


    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>