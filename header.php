<div class="container-fluid header">
  <div class="row">
    <div class="col-md-3 headerlogo">
      <a href="top.php"><h1 id="logo" > TSUNAGERU </h1>
      <p class="subtitle">-ツナゲル-</p></a>
    </div>
    <div class="col-md-6 menu">
      <div class="dropdown">
        <?php if(isset($_SESSION['id'])): ?>
          <p class="dropbtn "><?php echo $signin_user['name'];?>様</p>
        <?php endif; ?>

        <?php if(isset($_SESSION['id'])): ?>
          <div class="dropdown-content menu">
            <a href="toroku_joho.php">登録情報</a>
            <?php if($signin_user['roll'] == 0): ?>
            <a href="kanri_tsukurite.php">管理画面</a>
            <?php else: ?>
            <a href="kanri_kaite.php">管理画面</a>
            <?php endif; ?>
            <?php if($signin_user['roll'] == 0): ?>
            <a href="page_edit.php">ページ編集</a>
            <?php endif; ?>
            <a href="logout.php">ログアウト</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-3" >
      <div class="row">
      </div>
        <?php if(!isset($_SESSION['id'])): ?>
          <a class="dropbtn none col-md-4" href="login.php">ログイン</a>
          <a class="dropbtn none col-md-4" href="toroku.php">会員登録</a>
        <?php endif; ?>

        <?php if(!isset($_SESSION['id'])): ?>
          <div class="dropdown col-md-4">
            <a class="dropbtn">MENU</a>
            <div class="dropdown-content">
              <a href="#">TSUNAGERUとは</a>
              <a href="#">よくある質問</a>
              <a href="#">お問い合わせ</a>
              <a href="#">退会</a>
            </div>
          </div>
        <?php else: ?>
          <div class=" col-md-11 menu">
            <div class="dropdown">
              <p class="dropbtn">MENU</p>
              <div class="dropdown-content">
                <a href="#">TSUNAGERUとは</a>
                <a href="#">よくある質問</a>
                <a href="#">お問い合わせ</a>
                <a href="#">退会</a>
              </div>
            </div>
          </div>
        <?php endif;?>
    </div>
  </div>
</div>





