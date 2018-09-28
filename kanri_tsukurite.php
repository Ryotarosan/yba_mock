<?php 
session_start();
if(!isset($_SESSION['id'])){
header('Location:top.php');
exit();
}



 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('head.php'); ?>
  <title>kanri_tsukurite</title>
</head>
<body>
<?php include('header.php'); ?>

<div class="container-fluid mainbody">
  <div class="row">

    <div class="col-md-8 offset-md-2 ">
      <h2 class="kanrigamen">管理画面</h2>
      <form class="kanrigamen"><input class="itemkensaku" type="text" placeholder="アイテムNo"><input type="submit" name="submit" value="検索"></form>

    <table class="table table-striped">
        <thead>
          <tr>
            <th></th>
            <th>アイテム名</th>
            <th>納期</th>
            <th>ミニマム</th>
            <th>達成数</th>
            <th>いいね</th>
            <th>アクセス数</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img class="listpicture2" src="picture/5.jpg" ></td>
            <td>Black apc</td>
            <td>6/30</td>
            <td>30枚</td>
            <td>20枚</td>
            <td>17</td>
            <td>17</td>
          </tr>          <tr>
            <td><img class="listpicture2" src="picture/4.jpg" ></td>
            <td>Black apc</td>
            <td>6/30</td>
            <td>30枚</td>
            <td>20枚</td>
            <td>17</td>
            <td>34</td>
          </tr>          <tr>
            <td><img class="listpicture2" src="picture/501.jpg" ></td>
            <td>Black apc</td>
            <td>6/30</td>
            <td>30枚</td>
            <td>20枚</td>
            <td>17</td>
            <td>44</td>
          </tr>          <tr>
            <td><img class="listpicture2" src="picture/6.jpg" ></td>
            <td>Black apc</td>
            <td>6/30</td>
            <td>30枚</td>
            <td>20枚</td>
            <td>17</td>
            <td>49</td>
          </tr>
       </tbody>
      </table>
      <hr class="kanrigamen">

      <h5 class="kanrigamen">バイヤー 一覧（お気に入り登録、購入のある方のみ表示されます。）</h5>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>バイヤー名</th>
            <th>最終アクセス日</th>
            <th>メールアドレス</th>
            <th>購入額</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>馬場　勇弥</td>
            <td>2018/8/30</td>
            <td>baba@gmail.com</td>
            <td>¥70,900</td>
          </tr>
          <tr>
            <td>萩原　真一</td>
            <td>2018/7/25</td>
            <td>hagihagi@mail.com</td>
            <td>¥430,000</td>
          </tr>
          <tr>
            <td>大塲　明日香</td>
            <td>2018/7/17</td>
            <td>asuka@fdfd.com</td>
            <td>¥60,800</td>
          </tr>
          <tr>
            <td>筆矢　貴治</td>
            <td>2018/4/22</td>
            <td>fudebon@hotmail.com</td>
            <td>¥10,000</td>
          </tr>
       </tbody>
      </table>
      <hr>


    </div>
  </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>