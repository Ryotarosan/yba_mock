<?php
session_start();
if(isset($_SESSION['id'])){
header('Location: top.php');
exit();
}








?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('head.php'); ?>
  <title>page_edit</title>
  <style type="text/css">
    form img.thumb {
        max-width: 197.5px !important;
        max-height: 198px !important;
        object-fit: contain;
    }
  </style>
</head>
<body>
<?php include('header.php'); ?>

<div class="container-fluid brandpagetop">
  <div class="row ">

    <div class="col-md-2">
            <div class="form-group">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="card userprofile">
              <div class="amount2">
                  <label for="filename" class="huga" >
                    <img class="card-img-top uploaded thumb " src="picture/noimage.png ">
                <!-- </div> -->
          <!-- <input type="file" class="botanmitame  " name="input_img_name"  value="登録" accept="image/*"> -->
                  <!-- <div> -->
                    <!-- <input class="margin-bottom5" id="dummy_file" type="file" > -->
                    <input type="file" id="filename" >
                    <span class="browse_btn hogehogehoge">ファイル選択</span>
                  </label>
                    <!-- <input type="file" class="botanmitame" value="登録" accept="image/*"> -->
                </div>
              </div>
      </form>
            </div>
        <div class="card-body">
          <input class="card-title" type="text" name="brand-name" placeholder="ブランド名">
          <p class="card-text">Designer:<br><input class="card-title" type="text" name="designer-name" placeholder="デザイナー名"></p>
        </div>
        <div class="card-footer">
        </div>

      <div class="btn-group btngroup">
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
        <li><a href="#">カットソー</a></li>
        <li><a href="#">Tシャツ</a></li>
        <li><a href="#">オールインワン</a></li>
        <li><a href="#">スカート</a></li>
        <li><a href="#">ワンピース</a></li>
        <li><a href="#">スーツ</a></li>
        <li><a href="#">バッグ</a></li>
        <li><a href="#">シューズ</a></li>
        <li><a href="#">雑貨</a></li>
      </ol>
      <div class="box11">
        <p>ニュース編集</p>
      </div>
    </div>   <!--24 -->

    <div class="col-md-7 ">
      <div class="row">
        <h4 class="col-md-9 itemtourokubtn"><button type="button" class="btn btn-outline-secondary">新規アイテムを登録する</button></h4>
        <div class="col-md-3 ofi"><a href="#">自社ページ登録</a>
        </div>
      </div>
      <div class="itemamount align">アイテム数: 18
      </div>

        <div class="tabs"><!-- tabs-->
          <input id="all" type="radio" name="tab_item" checked>
          <label class="tab_item" for="all">画像表示</label>
          <input id="programming" type="radio" name="tab_item">
          <label class="tab_item" for="programming">リスト表示</label>

            <div class="tab_content" id="all_content">
            <div class="tab_content_description">
            <p class="c-txtsp">
        <!-- １列目 -->
              <div class="card-deck topcard-margin">
                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/5.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>

                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">カットソー</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期６/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/510.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>

                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">デニム</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期５/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/5.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>

                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">カットソー</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期６/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/510.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>

                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">デニム</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期５/中</small>
                   </div>
                 </div>
              </div>
            <!-- ２列目 -->
            <div class="card-deck topcard-margin">
                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/5.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>
                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">カットソー</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期６/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/510.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>
                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">デニム</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期５/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/5.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>
                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">カットソー</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期６/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/510.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>
                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">デニム</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期５/中</small>
                   </div>
                 </div>
            </div>
            <!-- ３列目 -->
            <div class="card-deck topcard-margin">
                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/5.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>
                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">カットソー</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期６/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/510.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>
                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">デニム</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期５/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/5.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>
                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">カットソー</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期６/中</small>
                   </div>
                 </div>

                <div class="card">
                  <div class="amount">
                    <img class="card-img-top" src="picture/510.jpg" >
                    <div class="maru size_normal pink1">
                      <p class="letter3">25</p>
                    </div>
                  </div>
                   <div class="card-body">
                     <h5 class="card-title">hhhhh</h5>
                     <p class="card-text">デニム</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">納期５/中</small>
                   </div>
                 </div>
                </div>
                </p>
              </div>
            </div>

          <div class="tab_content" id="programming_content">
            <div class="tab_content_description">
            <ul class="c-txtsp">
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                立派なTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
              <div class="SideBySide">
                <img src="picture/510.jpg" class="listpicture2">
                いかすデニム　デニム　ミニマム　30枚　￥28,000　納期6/20 
              </div>
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                ブラックTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                おシャンスTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                おシャンスTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                おシャンスTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
               <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                おシャンスTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                おシャンスTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                おシャンスTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                おシャンスTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
              <div class="SideBySide">
                <img src="picture/5.jpg" class="listpicture2">
                おシャンスTシャツ　カットソー　ミニマム　30枚　￥12,000　納期6/20
              </div>
            </ul>
            </div>
          </div>
        </div><!-- tabs -->
    </div>
    <div class="col-md-3">
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
<script>
$(function() {
    $('form input:file').uploadThumbs();
});
</script>
<script>
//  $(document).ready(function(){ 
// $('#filename').on("change", function() {
// var file = this.files[0];
// if(file != null) {
// document.getElementById("dummy_file").value = file.name;
// }
// });
// if (document.form1.filename.value == "") {
// document.getElementById("dummy_file").value = "";
// }
// });
</script>
</body>
</html>