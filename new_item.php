<!-- 強制遷移必要 -->
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  type="text/javascript" src="js/main.js" charset="uft-8"></script>
<head>
  <title>new_item</title>
</head>
<body>
<?php include('header.php'); ?>

<!-- うえokay -->
<div class="container-fluid mainbody">
  <div class="row ">
      <div class="col-md-7 itemedit_left">

        <input  class="osirasenyuuryoku" type="text" placeholder="お知らせ入力">
        <div class="card-deck card-margin">
          <div class="card ">
            <div class="amount ">
            <img class="card-img-top picturesize1" src="picture/Noimage.svg.png" >
              <div class="maru size_normal pink1">
              <p class="letter3">30</p>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">High Count Wool Jacket</h5>
              <p class="card-text">着用サイズ：
                <select >
                  <option >S</option>
                  <option >M</option>
                  <option >L</option>
                  <option >LL</option>
                  <option >XL</option>
                  <option >2L</option>
                  <option >3L</option>
                  <option >FREE</option>
                  <option >LADIES</option>
                  <option >KIDS</option>
                  <option >その他</option>
                </select>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><textarea class="syouhinsetumei" rows="3" cols="60">ショートキャプション</textarea></small>
            </div>
          </div>
        </div>

        <div class="card-deck subpicture">
            <div class="card">
              <img class="card-img-top " src="picture/Noimage.svg.png" >
              <p class="card-text"><input  type="text" placeholder="カラー、その他"></p>
            </div>
            <div class="card">
              <img class="card-img-top " src="picture/Noimage.svg.png" >
              <p class="card-text"><input  type="text" placeholder="カラー、その他"></p>
            </div>
            <div class="card">
              <img class="card-img-top " src="picture/Noimage.svg.png" >
              <p class="card-text"><input  type="text" placeholder="カラー、その他"></p>
            </div>
        </div>

        <div class="card-deck subpicture">
          <div class="card">
              <img class="card-img-top " src="picture/Noimage.svg.png" >
              <p class="card-text"><input  type="text" placeholder="カラー、その他"></p>
            </div>
            <div class="card">
              <img class="card-img-top " src="picture/Noimage.svg.png" >
              <p class="card-text"><input  type="text" placeholder="カラー、その他"></p>
            </div>
            <div class="card">
              <img class="card-img-top " src="picture/Noimage.svg.png" >
              <p class="card-text"><input  type="text" placeholder="カラー、その他"></p>
            </div>
        </div>
      </div>

    <div class="col-md-5 itemsyousai">

      <select class=seibetu>
      <option  selected>メンズ</option>
      <option >レディース</option>
      <option >メンズ・レディース</option>
      <option >キッズ</option>
      </select>
      <h5 class= >ブランド　：The Pud2ing</h5>
      <h5>カテゴリ　：<select >
      <option >アウター/ジャケット</option>
      <option >ジャケット</option>
      <option >パンツ</option>
      <option >カットソー</option>
      <option >Tシャツ</option>
      <option >オールインワン</option>
      <option >スカート</option>
      <option >ワンピース</option>
      <option >スーツ</option>
      <option >バッグ</option>
      <option >シューズ</option>
      <option >雑貨</option>
      </select>
      </h5>

      <h5>アイテム名：<input class="syousaiBOX" type="text" placeholder="アイテム名"></h5>
      <h5>アイテムNo：<input class="syousaiBOX" type="text" placeholder="アイテムNo"></h5>
      <h5>希望上代　：<input class="syousaiBOX" type="text" placeholder="¥20,000"></h5>
      <h5>卸価格　　：<input class="syousaiBOX" type="text" placeholder="@10,000"></h5>
      <h5>納期　　　：<input class="syousaiBOX" type="text" placeholder="9/30"></h5>
      <h5>ミニマム　：<input class="syousaiBOX" type="text" placeholder="40枚"></h5>
      <h5>カラー　　：<input class="syousaiBOX" type="text" placeholder="ブラック、ホワイト、グレー"></h5>
      <h5>サイズ　　：<input class="syousaiBOX" type="text" placeholder="S、M、L"></h5>
      <h5>受注〆日　：<input class="syousaiBOX" type="text" placeholder="6/25"></h5>

      <textarea class="syouhinsetumei" rows="10" cols="60">商品説明</textarea>


    </div>
  </div> <!-- row -->
</div> <!--container -->

  <?php include('footer.php'); ?>


</body>
</html>