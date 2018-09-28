<?php
  session_start();

if(isset($_SESSION['id'])){
header('Location: top.php');
exit();
}
  require('dbconnect.php');
  $errors = [];
    if (!empty($_POST)) {
        // ①
        $email = $_POST['input_email'];
        $password = $_POST['input_password'];

        if($email == '' || $password ==''){
            $errors['login'] = 'blank';
        } else {
          $sql = 'SELECT * FROM `users` WHERE `email` =?';
          $data =[$email];
          $stmt = $dbh->prepare($sql);
          $stmt->execute($data);
          $record = $stmt->fetch(PDO::FETCH_ASSOC);

          // var_dump($record);
          // exit();


            // 一件も取得できなかったとき
            if ($record == false) {
            // 認証失敗（DBにemailが見つからなかった）
                $errors['login']='failed';
            } else{
              // emailは登録されていた
                if(password_verify($password,$record['password'])){
                  //認証成功
                  // SESSIONにID保存
                  $_SESSION['id'] =$record['id'];
                  // timeline.phpに移動
                  header('Location:top.php');
                } else{
                  // 認証失敗
                  $errors['login'] = 'failed';
                  }
              }
          }
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('head.php'); ?>
  <title>login</title>
</head>

<body>
  <?php include('header.php'); ?>

  <div class="container-fluid brandpagetop">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="kanrigamen">ログイン画面</h2>
        <form method="POST" action="login.php">
          <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" name="input_email" class="form-control" placeholder="example@gmail.com">
          </div>
          <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="input_password" class="form-control" id="password" placeholder="4 ~ 16文字のパスワード">
          </div>
          <?php if(isset($errors['login']) && $errors['login'] == 'blank'): ?>
              <p class="text-danger">メールアドレスとパスワードを正しく入力してください</p>
          <?php endif; ?>

          <?php if(isset($errors['login']) && $errors['login'] == 'failed'): ?>
              <p class="text-danger">サインインに失敗しました</p>
          <?php endif; ?>

          <p class="align"><input type="submit" class="margin-bottom30 btn btn-outline-secondary" value="ログイン"></p>
          <div class="align margin-bottom200">パスワードを忘れた方はこちら
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>