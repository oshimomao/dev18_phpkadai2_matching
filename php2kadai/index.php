<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題マッチング</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>PHP課題マッチング</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label>SNS：<input type=" text" name="sns"></label><br>
     <br>
     <label>一番当てはまると思うものを選んでください</label><br>
     <label>強み</label>
        <select name="strengths" rows="4" cols="40">
              <option value ="">選択してください</option>
              <option value ="行動力">行動力</option>
              <option value ="分析力">分析力</option>
              <option value ="共感力">共感力</option>
              <option value ="統率力">統率力</option>
              <option value ="コミュニケーション力">コミュニケーション力</option>
          </select><br>

        <!-- <label>外向的</label>
            <input type="radio" name ="strengths"  value ="0" >全く当てはまらない
            <input type="radio" name ="strengths"  value ="1" >当てはまらない
            <input type="radio" name ="strengths"  value ="2" >どちらでもない
            <input type="radio" name ="strengths"  value ="3" >当てはまる
            <input type="radio" name ="strengths"  value ="4" >とても当てはまる
            <br>
        <label>協調的</label>
            <input type="radio" name ="strengths"  value ="0" >全く当てはまらない
            <input type="radio" name ="strengths"  value ="1" >当てはまらない
            <input type="radio" name ="strengths"  value ="2" >どちらでもない
            <input type="radio" name ="strengths"  value ="3" >当てはまる
            <input type="radio" name ="strengths"  value ="4" >とても当てはまる
            <br>
        <label>誠実性</label>
            <input type="radio" name ="strengths"  value ="0" >全く当てはまらない
            <input type="radio" name ="strengths"  value ="1" >当てはまらない
            <input type="radio" name ="strengths"  value ="2" >どちらでもない
            <input type="radio" name ="strengths"  value ="3" >当てはまる
            <input type="radio" name ="strengths"  value ="4" >とても当てはまる
            <br>
        <label>神経症的傾向</label>
            <input type="radio" name ="strengths"  value ="0" >全く当てはまらない
            <input type="radio" name ="strengths"  value ="1" >当てはまらない
            <input type="radio" name ="strengths"  value ="2" >どちらでもない
            <input type="radio" name ="strengths"  value ="3" >当てはまる
            <input type="radio" name ="strengths"  value ="4" >とても当てはまる
            <br>
        <label>開放性</label>
            <input type="radio" name ="strengths"  value ="0" >全く当てはまらない
            <input type="radio" name ="strengths"  value ="1" >当てはまらない
            <input type="radio" name ="strengths"  value ="2" >どちらでもない
            <input type="radio" name ="strengths"  value ="3" >当てはまる
            <input type="radio" name ="strengths"  value ="4" >とても当てはまる
            <br> -->

     <label>弱み</label>
      <select name="weakness" rows="4" cols="40">
          <option value ="">選択してください</option>
          <option value ="行動力">行動力</option>
          <option value ="分析力">分析力</option>
          <option value ="共感力">共感力</option>
          <option value ="統率力">統率力</option>
          <option value ="コミュニケーション力">コミュニケーション力</option>
      </select><br>
      <br>
     <input type="submit" value="送信"></br>
     </br>
     <!-- ↑リンク先のファイル名を記載して飛べるように変更 -->
     <a href=view.php>★登録内容一覧をみる★</a>
  
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>