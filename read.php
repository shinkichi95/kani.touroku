<html>
  <head>
    <title>PHP Test</title>
    <style>
      th{
        width: 200px;
        padding: 10px;
        margin: 20px;
        background-color :#ff6347;
        border: 3px solid #ff6347;
        color:white;
      }
      td{
        width: 200px;
        padding: 10px;
        margin: 20px;
        border: 3px solid #ff6347;
      }
    </style>
  </head>
  <body>
  　　<table>
          <tr>
              <th>登録時刻</th>
              <th>名前</th>
              <th>メールアドレス</th>
              <th>住所</th>
          </tr>
    <?php 
       $openfile = fopen('./data/data.txt','r');

      while($str = fgetcsv($openfile)) {
          echo "<tr>";
          for ($i=0;$i<count($str);$i++) {
              echo "<td>" . $str[$i] . "</td>";
          }
          echo "</tr>";
      }
      echo "</table>";

      fclose($openfile);

    ?> 
        <a href="input.php">もう一度登録する<a>
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>