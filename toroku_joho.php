<?php
    session_start();
    require('dbconnect.php');
    // require('function.php');
    if(!isset($_SESSION['id'])){

    header('Location: top.php');
    exit();
    }

    $sql = 'SELECT * FROM `users` WHERE `id`=?';
    $data = [$_SESSION['id']];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

    $name=$signin_user['name'];
    
    $email=$signin_user['email'];

    $errors=[];

  if (isset($_GET['action']) && $_GET['action'] == 'rewrite') {
      $_POST['input_name'] = $_SESSION['edit']['name'];
      $_POST['input_email'] = $_SESSION['edit']['email'];
      $errors['rewrite'] = 'hoge';
  }

  if (!empty($_POST)) {

      $name = $_POST['input_name'];
      $email = $_POST['input_email'];

      if ($name == '') {
          $errors['name'] = 'blank';
      }
      if ($email == '') {
          $errors['email'] = 'blank';
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
        }

      if (empty($errors)) {
        $date_str = date('YmdHis');
        $submit_file_name = $date_str.$file_name;

        move_uploaded_file($_FILES['input_img_name']['tmp_name'], 'user_profile_img/' . $submit_file_name);

          $_SESSION['edit']['name'] = $_POST['input_name'];
          $_SESSION['edit']['email'] = $_POST['input_email'];
          $_SESSION['edit']['img_name'] = $submit_file_name;

          header('Location: editkakunin.php');
          exit();
    }
  }
?>

 <!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('head.php'); ?>
  <title>toroku_joho</title>
</head>

<body>
<?php include('header.php'); ?>
<div class="container-fluid mainbody">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <form action="toroku_joho.php" method="post" enctype="multipart/form-data">
        <h2 style="text-align: center; margin-bottom: 20px;">登録情報</h2>
          <div class="card margin-bottom30 max-width300" >
            <img src="user_profile_img/<?php echo $signin_user['img_name']; ?>" class="uploaded thumb " >
            <input type="file" class="botanmitame  " name="input_img_name"  value="登録" accept="image/*">
            <!-- </div> -->
          </div>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</div>
</div>

  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="form-group">
          <label for="name">名前</label>
          <input class="margin-bottom16 form-control" id="name" type="text" value="<?= $name;?>" placeholder="名前" name="input_name">
            <?php if(isset($errors['name']) && $errors['name'] == 'blank') { ?>
              <p class="text-danger">ユーザー名を入力してください</p>
            <?php } ?>
        </div>
        <div class="form-group">
          <label for="email">メールアドレス</label>
          <input class="margin-bottom16 form-control" id="email" type="text" value="<?= $email;?> " name="input_email">
            <?php if(isset($errors['email']) && $errors['email'] == 'blank') { ?>
            <p class="text-danger">メールアドレスを入力してください</p>
            <?php } ?>
        </div>
        <div>
          <label for="sex">性別</label>

          <p class=" blockcenter"><?php if($signin_user['sex']==0): ?>男<?php else:?>女<?php endif;?></p>
        </div>
        <div class="form-group">
          <label for="company">会社名</label>
          <input class=" margin-bottom16 form-control" id="company"type="text" placeholder="会社名（任意）" name="company-name">
        </div>
        <div class="form-group">
          <label for="facebook">facebook</label>
          <input class="margin-bottom16 form-control" id="facebook"type="text" placeholder="facebook（任意）" name="fb-url">
        </div>
        <div class="form-group">
          <label for="twitter">twitter</label>
          <input class="margin-bottom16 form-control" id="twitter"type="text" placeholder="twitter（任意）" name="tw-url">
        </div>
        <div class="form-group">
          <label for="comment">コメント</label>
          <input class="margin-bottom16 form-control" id="comment"type="text" placeholder="コメント（任意）" name="other">
        </div >
        <div class="centerhaiti">
          <p><button type="submit" class="btn btn-outline-secondary">変更</button></p>
          <p class="margin-bottom200"><button type="button" class="btn btn-outline-secondary ">パスワード変更</button></p>
        </div>
      </form>
      </div>
    </div>
  </div>




<!-- <script type="text/javascript">
$(document).ready(function(){ 
$('#filename').on("change", function() {
var file = this.files[0];
if(file != null) {
document.getElementById("dummy_file").value = file.name;
} 
});
if (document.form1.filename.value == "") {
document.getElementById("dummy_file").value = "";
}
});
</script> -->
<?php include('footer.php'); ?>
<script>
$(function() {
    // jQuery Upload Thumbs 
    $('form input:file').uploadThumbs();
});
</script>
</body>
</html>