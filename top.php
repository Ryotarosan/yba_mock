<?php
  session_start();
  require('dbconnect.php');

$is_login=isset($_SESSION['id']);
if($is_login){
    $sql = 'SELECT * FROM `users` WHERE `id`=?';
    $data = [$_SESSION['id']];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('head.php'); ?>
  <title>top</title>
</head>

<body>
<?php include('header.php'); ?>
<div class="container mainbody">
  <div class="row">
    <h4>　　おすすめ！</h4>
  </div>
    <div class="variable-width">
      <div><img src="picture/5.jpg" width="200"></div>
      <div><img src="picture/5.jpg" width="200"></div>
      <div><img src="picture/5.jpg" width="200"></div>
      <div><img src="picture/5.jpg" width="200"></div>
      <div><img src="picture/5.jpg" width="200"></div>
      <div><img src="picture/5.jpg" width="200"></div>
      <div><img src="picture/5.jpg" width="200"></div>
  </div>
</div>



    <div class="btn-group">
    <button type="button" class="btn btn-primary">メンズ</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
      <span class="caret"></span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">レディス</a>
      <a class="dropdown-item" href="#">キッズ</a>
      <a class="dropdown-item" href="#">その他</a>
    </div>
    </div>
<div class="container-fluid">
 <div class="row">
 <div class="col-md-2">
  <ol class="menulist">
  <li><a href="#">新着</a></li>
  <li><a href="#">ブランド</a></li>
  <li><a href="#">コーディネート</a></li>
  <li><a href="#">納期</a></li>
  <li><a href="#">受注〆</a></li>
  <hr>
  <li><a href="#">トップス</a></li>
  <li><a href="#">アウター/ジャケット</a></li>
  <li><a href="#">ジャケット</a></li>
  <li><a href="#">パンツ</a></li>
  <li><a href="#">オールインワン</a></li>
  <li><a href="#">スカート</a></li>
  <li><a href="#">ワンピース</a></li>
  <li><a href="#">スーツ</a></li>
  <li><a href="#">バッグ</a></li>
  <li><a href="#">シューズ</a></li>
  <li><a href="#">雑貨</a></li>
  </ol>
</div>

  <div class="col-md-9">
    <div class="card-deck ">
      <!-- 1 -->
      <div class="card">
        <div class="amount">
          <img class="card-img-top " src="picture/1.jpg" >
          <div class="maru size_normal pink1">
            <p class="letter3">30</p>
          </div>
          <p class="iconincard"><a href="#"><i class="far fa-thumbs-up fa-2x"></i></a>34</p>
        </div>
      <div class="card-body">
        <h5 class="card-title">The Pud2ing</h5>
          <p class="card-text">ほげほげTシャツ</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">納期５/中</small>
      </div>
      </div>
<!-- 2 -->
      <div class="card">
        <div class="amount">
          <img class="card-img-top" src="picture/510.jpg" >
          <div class="maru size_normal pink1">
            <p class="letter3">25</p>
          </div>
          <p class="iconincard"><a href="#"><i class="far fa-thumbs-up fa-2x"></i></a>29</p>
        </div>
         <div class="card-body">
           <h5 class="card-title">hhhhh</h5>
           <p class="card-text">デニム</p>
         </div>
         <div class="card-footer">
           <small class="text-muted">納期５/中</small>
         </div>
       </div>
<!-- 3 -->
      <div class="card">
        <div class="amount">
          <img class="card-img-top" src="picture/511.jpg" >
          <div class="maru size_normal pink1">
            <p class="letter3">20</p>
          </div>
          <p class="iconincard"><a href="#"><i class="far fa-thumbs-up fa-2x"></i></a>3</p>
        </div>
         <div class="card-body">
           <h5 class="card-title">ふらいどちきん</h5>
           <p class="card-text">ブルゾン</p>
         </div>
         <div class="card-footer">
           <small class="text-muted">納期６/下</small>
         </div>
     </div>
<!-- 4 -->
      <div class="card">
        <div class="amount">
          <img class="card-img-top" src="picture/513.jpg" >
          <div class="maru size_normal pink1">
            <p class="letter3">30</p>
          </div>
          <p class="iconincard"><a href="#"><i class="far fa-thumbs-up fa-2x"></i></a>12</p>
        </div>
         <div class="card-body">
           <h5 class="card-title">popopo</h5>
           <p class="card-text">デニム</p>
         </div>
         <div class="card-footer">
           <small class="text-muted">納期６/中</small>
         </div>
       </div>
     </div>
<!-- 5 -->
    <div class="card-deck topcard-margin">
      <div class="card">
        <div class="amount">
          <img class="card-img-top" src="picture/513.jpg" >
          <div class="maru size_normal pink1">
            <p class="letter3">60</p>
          </div>
          <p class="iconincard"><a href="#"><i class="far fa-thumbs-up fa-2x"></i></a>8</p>
        </div>
         <div class="card-body">
           <h5 class="card-title">wweewewweew</h5>
           <p class="card-text">デニム</p>
         </div>
         <div class="card-footer">
           <small class="text-muted">納期５/中</small>
         </div>
       </div>
<!-- 6 -->
      <div class="card">
        <div class="amount">
          <img class="card-img-top" src="picture/514.jpg" >
          <div class="maru size_normal pink1">
            <p class="letter3">30</p>
          </div>
          <p class="iconincard"><a href="#"><i class="far fa-thumbs-up fa-2x"></i></a>17</p>
        </div>
         <div class="card-body">
           <h5 class="card-title">偽ちゃんぴおん</h5>
           <p class="card-text">パーカ</p>
         </div>
         <div class="card-footer">
           <small class="text-muted">納期５/中</small>
         </div>
       </div>
<!-- 7 -->
      <div class="card">
        <div class="amount">
          <img class="card-img-top" src="picture/515.jpg" >
          <div class="maru size_normal pink1">
            <p class="letter3">25</p>
          </div>
          <p class="iconincard"><a href="#"><i class="far fa-thumbs-up fa-2x"></i></a>29</p>
        </div>
         <div class="card-body">
           <h5 class="card-title">らるふろうれん</h5>
           <p class="card-text">ニット</p>
         </div>
         <div class="card-footer">
           <small class="text-muted">納期７/上</small>
         </div>
       </div>
<!-- 8 -->
      <div class="card">
        <div class="amount">
          <img class="card-img-top" src="picture/516.jpg" >
          <div class="maru size_normal pink1">
            <p class="letter3">25</p>
          </div>
          <p class="iconincard"><a href="#"><i class="far fa-thumbs-up fa-2x"></i></a>21</p>
        </div>
         <div class="card-body">
           <h5 class="card-title">らるふろうれん</h5>
           <p class="card-text">ニット</p>
         </div>
         <div class="card-footer">
           <small class="text-muted">納期７/上</small>
         </div>
       </div>

    </div>
  </div>
</div>
</div>
  <?php include('footer.php'); ?>
  <script type="text/javascript" src="slick-yba/slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.variable-width').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        centerMode: true,
        variableWidth: true
      });
    });
  </script>
</body>
</html>