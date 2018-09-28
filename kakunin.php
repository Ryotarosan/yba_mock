<?php 

  session_start();
  require('dbconnect.php');
    if (!isset($_SESSION['register'])) {
      header('Location: toroku.php');
      exit();
    }

  $name = $_SESSION['register']['name'];
  $email = $_SESSION['register']['email'];
  $sex =   $_SESSION['register']['sex'];
  $password = $_SESSION['register']['password'];
  $img_name = $_SESSION['register']['img_name'];
  $roll = $_SESSION['register']['roll'];

    if (!empty($_POST)) {
        $sql = 'INSERT INTO `users` SET `name`=?, `email`=?, `sex`=?, `password`=?, `img_name`=?, `roll`=?, `created_at`=NOW()';
        $data = [$name, $email,$sex,password_hash($password,PASSWORD_DEFAULT),$img_name,$roll];
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);
        unset($_SESSION['register']);
        header('Location: top.php');
        exit();
}
?>
 <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <title>kakunin</title>
</head>
<body style="margin-top: 60px">
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2 ">
        <h2 class="text-center content_header">登録情報確認</h2>
            <div class="align">
            <p><img src="user_profile_img/<?php echo htmlspecialchars($img_name); ?>" class="img-responsive img-thumbnail kakuninpicture" ></p>
              <span>ユーザー名</span>
              <p class="lead"><?php echo htmlspecialchars($name); ?></p>
            <div>
              <span>メールアドレス</span>
              <p class="lead"><?php echo htmlspecialchars($email); ?></p>
            </div>
            <div>
              <span>性別</span>
              <?php if($roll==0): ?>
                  <p>男</p>
              <?php else:?>
                  <p>女</p>
              <?php endif;?>
            </div>
            <div>
              <span>パスワード</span>
              <!-- ② -->
              <p class="lead">●●●●●●●●</p>
            </div>

            <?php if($roll==0): ?>
                <h5 class="margin-bottom30">作り手として登録</h5>
            <?php else:?>
                <h5 class="margin-bottom30">買い手として登録</h5>
            <?php endif;?>

            <!-- ③ -->
            <form method="POST" action="">
              <!-- ④ -->
              <a href="toroku.php?action=rewrite" class="btn btn-default margin-bottom200">&laquo;&nbsp;戻る</a> 
              <!-- ⑤ -->
              <input type="hidden" name="action" value="submit">
              <input type="submit" class="btn btn-primary margin-bottom200" value="ユーザー登録">
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script  type="text/javascript" src="js/main.js" charset="uft-8"></script>
  <script src="js/app.js"></script>
  <script src="js/jquery.uploadTumbs.js"></script>
</body>
</html>


