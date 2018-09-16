<?php
$errors=[];

  if (!empty($_POST)) {
    $name = $_POST['input_name'];
    $email = $_POST['input_email'];
    $password = $_POST['input_password'];

    if ($name == '') {
        $errors['name'] = 'blank';
    }
    if ($email == '') {
        $errors['email'] = 'blank';
    }
    $count = strlen($password);
    if ($password == '') {
        $errors['password'] = 'blank';
    }elseif ($count < 4 || 16 < $count){
      $errors['password'] = 'length';
    }
    $file_name = $_FILES['input_img_name']['name'];
        if (!empty($file_name)) {
          $file_type = substr($file_name, -3);
          $file_type = strtolower($file_type);
          if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'gif') {
              $errors['img_name'] = 'type';
          }
        } else {
            $errors['img_name'] = 'blank';
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
<?php include('header.php'); ?>

  <div class="container-fluid brandpagetop">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method="POST" action="toroku.php" enctype="multipart/form-data">
          <h2 class="kanrigamen">会員登録</h2>

            <div class="form-group">
              <span id="preview1" class="listpicture"></span>
              <label for="img_name">プロフィール画像</label>
              <input type="file" name="input_img_name" id="img_name" accept="image/*" required>
              <?php if(isset($errors['img_name']) && $errors['img_name'] == 'blank') { ?>
                <p class="text-danger">画像を選択してください</p>
              <?php } ?>
            </div>

            <div class="form-group">
              <label for="name">ユーザー名</label>
              <input type="text" name="input_name" class="form-control" placeholder="氏名" required>
                <?php if(isset($errors['name']) && $errors['name'] == 'blank') { ?>
                <p class="text-danger">ユーザー名を入力してください</p>
                <?php } ?>
            </div>

            <div class="form-group">
              <label for="name">性別</label>
              <select name="sex" class="form-control" required>
              <option value="">性別</option>
              <option value="onnna">男</option>
              <option value="otoko">女</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">メールアドレス</label>
              <input type="email" name="input_email" class="form-control" placeholder="example@email.com">
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

            </div>

            <div class= "tourokubtn">
              <input type="submit" class="btn btn-warning btnkankaku" value="作り手として登録">
              <input type="submit" class="btn btn-danger btnkankaku" value="買い手として登録">
            </div>
          <h5 class="align  margin-bottom200">※この選択は変更できません。</h5>

        </form>
      </div>
    </div>
  </div>


<?php include('footer.php'); ?>
</body>
</html>