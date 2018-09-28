<?php 
session_start();
if(!isset($_SESSION['id'])){
header('Location: top.php');
exit();
}





 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('head.php'); ?>
  <title>kanri_kaite</title>
</head>
<body>
<?php include('header.php'); ?>

<div class="container-fluid mainbody">
  <div class="row">
    <div class="col-md-8 offset-md-2 ">
      <h2 class="kanrigamen">管理画面</h2>
      <hr class="kanrigamen">

      <h5 class="kanrigamen">購入履歴</h5>
        <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th>ブランド名</th>
                <th>アイテム名</th>
                <th>納期</th>
                <th>購入枚数</th>
                <th>購入金額</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img class="listpicture2" src="picture/5.jpg" ></td>
                <td>apc</td>
                <td>Black apc</td>
                <td>6/30</td>
                <td>30枚</td>
                <td>¥60,000</td>
              </tr>
              <tr>
                <td><img class="listpicture2" src="picture/503.jpg" ></td>
                <td>The pud2ing</td>
                <td>jacket</td>
                <td>6/30</td>
                <td>10枚</td>
                <td>¥150,000</td>
              </tr>
              <tr>
                <td><img class="listpicture2" src="picture/5.jpg" ></td>
                <td>apc</td>
                <td>Black apc</td>
                <td>6/30</td>
                <td>30枚</td>
                <td>¥60,000</td>
              </tr>
              <tr>
                <td><img class="listpicture2" src="picture/5.jpg" ></td>
                <td>apc</td>
                <td>Black apc</td>
                <td>6/30</td>
                <td>30枚</td>
                <td>¥60,000</td>
              </tr>
           </tbody>
          </table>
          <hr class="kanrigamen">

         <h5 class="kanrigamen"> お気に入りブランド一覧</h5>
        <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th>ブランド名</th>
                <th>最終アクセス日</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td>The pud2ing</td>
                <td>2018/8/30</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>apc</td>
                <td>2018/9/02</td>
              </tr>
            </tbody>
            </table>
          <hr class="kanrigamen">




          <h5 class="kanrigamen"> お気に入りアイテム一覧</h5>
        <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th>ブランド名</th>
                <th>アイテム名</th>
                <th>アイテムNo</th>
                <th>最終アクセス日</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img class="listpicture2" src="picture/503.jpg" ></td>
                <td>The pud2ing</td>
                <td>jacket</td>
                <td>201812432</td>
                <td>2018/8/30</td>
              </tr>
              <tr>
                <td><img class="listpicture2" src="picture/503.jpg" ></td>
                <td>The pud2ing</td>
                <td>jacket</td>
                <td>201812432</td>
                <td>2018/8/30</td>
              </tr>
              <tr>
                <td><img class="listpicture2" src="picture/503.jpg" ></td>
                <td>The pud2ing</td>
                <td>jacket</td>
                <td>201812432</td>
                <td>2018/8/30</td>
              </tr>
              <tr>
                <td><img class="listpicture2" src="picture/503.jpg" ></td>
                <td>The pud2ing</td>
                <td>jacket</td>
                <td>201812432</td>
                <td>2018/8/30</td>
              </tr>
              <tr>
                <td><img class="listpicture2" src="picture/503.jpg" ></td>
                <td>The pud2ing</td>
                <td>jacket</td>
                <td>201812432</td>
                <td>2018/8/30</td>
              </tr>
           </tbody>
          </table>

    </div>
  </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>