<?php
session_start();

// ログイン状態を確認
// $_SESSION['id']があるかないか
if(isset($_SESSION['id'])){
// ログイン済みの場合topline.phpに遷移
header('Location: top.php');
exit();
}
$name = '';
$email = '';
$sex = '';
$errors=[];
    if (isset($_GET['action']) && $_GET['action'] == 'rewrite') {
        $_POST['input_name'] = $_SESSION['register']['name'];
        $_POST['input_email'] = $_SESSION['register']['email'];
        $_POST['input_sex'] = $_SESSION['register']['sex'];
        $_POST['input_password'] = $_SESSION['register']['password'];
        // 即効リダイレクトされないように
        $errors['rewrite'] = 'hoge';
    }

  if (!empty($_POST)) {

      $name = $_POST['input_name'];
      $email = $_POST['input_email'];
      $sex = $_POST['input_sex'];
      $password = $_POST['input_password'];

      if ($name == '') {
          $errors['name'] = 'blank';
      }
      if ($email == '') {
          $errors['email'] = 'blank';
      }
      if ($sex == '') {
          $errors['sex'] = 'blank';
      }
      $count = strlen($password);
      if ($password == '') {
          $errors['password'] = 'blank';
      }elseif ($count < 4 || 16 < $count){
        $errors['password'] = 'length';
      }

      $file_name = '';
      if (!isset($_GET['action'])) {
      $file_name = $_FILES['input_img_name']['name'];
      }
          if (!empty($file_name)) {
            $file_type = substr($file_name, -4);
            $file_type = strtolower($file_type);
            if ($file_type != '.jpg' && $file_type != '.png' && $file_type != '.gif' && $file_type != 'jpeg') {
                $errors['img_name'] = 'type';
            }
          } else {
              $errors['img_name'] = 'blank';
            }

    if (empty($errors)) {
        $date_str = date('YmdHis');
        $submit_file_name = $date_str.$file_name;

        move_uploaded_file($_FILES['input_img_name']['tmp_name'], 'user_profile_img/' . $submit_file_name);

          $_SESSION['register']['name'] = $_POST['input_name'];
          $_SESSION['register']['email'] = $_POST['input_email'];
          $_SESSION['register']['sex'] = $_POST['input_sex'];
          $_SESSION['register']['password'] = $_POST['input_password'];
          $_SESSION['register']['roll'] = $_POST['input_roll'];
          // 上記3つは$_SESSION['register'] = $_POST;という書き方で1文にまとめることもできる
          $_SESSION['register']['img_name'] = $submit_file_name;

          header('Location: kakunin.php');
          exit();
    }
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('head.php'); ?>
  <title>toroku</title>
</head>

<body>
<div class="container-fluid header">
  <div class="row">
    <div class="col-md-3 headerlogo">
      <a href="top.php"><h1 id="logo" > TSUNAGERU </h1>
      <p class="subtitle">-ツナゲル-</p></a>
    </div>
    <div class="col-md-6 menu">
    </div>
    <div class="col-md-3" >
    </div>
  </div>
</div>

  <div class="container-fluid brandpagetop">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method="POST" action="toroku.php" enctype="multipart/form-data">
          <h2 class="kanrigamen">会員登録</h2>

            <div class="form-group">
             <span id="preview1" class="listpicture"></span> <!-- imgがファイルを選択すると出現する  -->
              <label for="img_name">プロフィール画像</label>
              <input type="file" name="input_img_name" id="img_name" accept="image/*" required>
              <?php if(isset($errors['img_name']) && $errors['img_name'] == 'blank') { ?>
                <p class="text-danger">画像を選択してください</p>
              <?php } ?>
              <?php if(isset($errors['img_name']) && $errors['img_name'] == 'type') { ?>
                <p class="text-danger">拡張子が「jpg」「png」「gif」の画像を選択してください</p>
              <?php } ?>

            </div>

            <div class="form-group">
              <label for="name">ユーザー名</label>
              <input type="text" name="input_name" class="form-control" placeholder="氏名" value="<?php echo htmlspecialchars($name); ?>" required>
                <?php if(isset($errors['name']) && $errors['name'] == 'blank') { ?>
                <p class="text-danger">ユーザー名を入力してください</p>
                <?php } ?>
            </div>

            <div class="form-group">
              <label for="name">性別</label>
              <select name="input_sex" class="form-control" required>
              <option value="">性別</option>
              <option value=0>男</option>
              <option value=1>女</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">メールアドレス</label>
              <input type="email" name="input_email" class="form-control" placeholder="example@email.com" value="<?php echo htmlspecialchars($email); ?>" >
                <?php if(isset($errors['email']) && $errors['email'] == 'blank') { ?>
                <p class="text-danger">メールアドレスを入力してください</p>
                <?php } ?>
            </div>

            <div class="form-group">
              <label for="password">パスワード</label>
              <input type="password" name="input_password" class="form-control" id="password" placeholder="4 ~ 16文字のパスワード" required>
                <?php if(isset($errors['password']) && $errors['password'] == 'blank') { ?>
                  <p class="text-danger">パスワードを入力してください</p>
                <?php } ?>
                <?php if(isset($errors['password']) && $errors['password'] == 'length') { ?>
                  <p class="text-danger">パスワードは4 ~ 16文字で入力してください</p>
                <?php } ?>
                <?php if(!empty($errors)) { ?>
                  <p class="text-danger">パスワードを再度入力して下さい</p>
                <?php } ?>


            </div>

            <div class= "tourokubtn">
              <button name="input_roll" type="submit" class="btn btn-warning btnkankaku" value="0">作り手として登録</button>
              <button name="input_roll" type="submit" class="btn btn-danger btnkankaku" value="1">買い手として登録</button>

            </div>
          <h5 class="align  margin-bottom200">※この選択は変更できません。</h5>

        </form>
      </div>
    </div>
  </div>


<?php include('footer.php'); ?>
</body>
</html>