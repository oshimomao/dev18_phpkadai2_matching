<?php

require_once('funcs.php');

//1.  DB接続します
//  決まった型なので、必ずコピペ!!

try {
  //ID:'root', Password: 'root' MAMPを使っている前提での初期設定
  $pdo = new PDO('mysql:dbname=personal_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();


//３．データ表示
$view="";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>'.$result ['id'].$result ['name'].'/'. $result ['email'].'/'. $result ['sns']. $result ['strengths'].$result ['weakness'].$result ['indate'].'</p>';
  }
  //  var_dump($result);
  //  echo "<table>\n";
  //  echo "<tr>\n";
  //  echo "<th>名前</th> <th>email</th> <th>sns</th> <th>強み</th> <th>弱み</th>\n";
  //  echo "</tr>\n";
  //  foreach ($result as $rouw) {
  //  echo "<tr>\n";
  //  echo "<td>" . $row['id'] . " </td>\n";
  //  echo "<td>" . $row['name'] . " </td>\n";
  //  echo "<td>" . $row['email'] . " </td>\n";
  //  echo "<td>" . $row['strengths'] . " </td>\n";
  //  echo "<td>" . $row['weakness'] . " </td>\n";
  //  echo "</tr>\n";
  // }

  //  echo "</table>\n";
  //  $pdo = null;
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->

<table border="1" class="table">
    <thead>
        <tr>
        <th>ID</th><th>名前</th> <th>email</th> <th>sns</th> <th>強み</th> <th>弱み</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM gs_bm_table";
            $result = $pdo->query($query);
            foreach ($result as $row) {
                echo "<tr>";
                // ID管理を行い、同じメールアドレスで二重に登録できないようにする
                echo "<td>".$row['id']."</td>";
                // SNSのURLからプロフィール画像をピパってきて表示したい
                echo "<td>".$row['name']."</td>";
                // メールアドレスをクリックするとメールアプリが起動して、メールが送れる設定にしたい
                echo "<td>".$row['email']."</td>";
                // ●●さんの欄へ名前に入力した名前が挿入されるようにしたい
                echo "<td><a href=\"{$row['sns']}\">●●さんのSNSを見る</a></td>";
                echo "<td>".$row['strengths']."</td>";
                echo "<td>".$row['weakness']."</td>";
                echo "</tr>";
            }
            // $pdo = null;
        ?>
    </tbody>
</table>

<a href=index.php>★アンケート画面へ戻る★</a>


<!-- <div>
    <div class="container jumbotron"><?= $view ?></div>
</div> -->
<!-- Main[End] -->

</body>
</html>

