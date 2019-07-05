<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>演習＿松島ホテル YURAN GARDEN ご予約確認画面</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script script type="text/javascript" src="../function.js"></script>
    <link rel="stylesheet" href="../all_css/header.css">
    <link rel="stylesheet" href="../all_css/footer.css">
    <link rel="stylesheet" href="reserve.css">
  </head>
  <body>

    <div class="container">

      <div id="main">

      </div>

      <div id="title">
        <h1>ご予約確認画面</h1>
      </div>

      <div id="form">
        <form action="reserve_mailto.php" method="post">
          <div class="stay_info">
          <h2>ご宿泊の情報</h2>
        <table>
          <tr>
            <th>ご宿泊日</th>
            <td>
              <?php echo $_POST["reserve_date"]; ?>
              <input type="hidden" name="reserve_date" value="<?php echo $_POST["reserve_date"]; ?>">
            </td>
          </tr>
          <tr>
            <th>到着予定時間</th>
            <td>
                <?php echo $_POST["hour"]; ?>時
                <input type="hidden" name="hour" value="<?php echo $_POST["hour"]; ?>">
                <?php echo $_POST["minute"]; ?>分
                <input type="hidden" name="minute" value="<?php echo $_POST["minute"]; ?>">
            </td>
          </tr>
          <tr>
            <th>ご宿泊日数</th>
            <td>
              <?php echo $_POST["stay"]; ?>泊
              <input type="hidden" name="stay" value="<?php echo $_POST["stay"]; ?>">
            </td>
          </tr>
          <tr>
            <th>ご宿泊人数</th>
            <td>
            <?php echo $_POST["many"]; ?>人
            <input type="hidden" name="many" value="<?php echo $_POST["many"]; ?>">
            </td>
          </tr>
          <tr>
            <th>部屋タイプ</th>
            <td>
              <?php echo $_POST["room"]; ?>
              <input type="hidden" name="room" value="<?php echo $_POST["room"]; ?>">
            </td>
          </tr>
          <tr>
            <th>特記事項</th>
            <td>
              <?php echo $_POST["message"]; ?>
              <input type="hidden" name="message" value="<?php echo $_POST["message"]; ?>">
            </td>
          </tr>
        </table>
      </div>

      <div class="customer_info">
        <h2>お客様情報</h2>
        <table>
          <tr>
            <th>お名前</th>
            <td class="name">
              <?php echo $_POST["last_name"]; ?>
              <input type="hidden" name="last_name" value="<?php echo $_POST["last_name"]; ?>">
              <?php echo $_POST["first_name"]; ?>
              <input type="hidden" name="first_name" value="<?php echo $_POST["first_name"]; ?>">
            </td>
          </tr>
          <tr>
            <th>ふりがな</th>
            <td class="name">
              <?php echo $_POST["last_name_kana"]; ?>
              <input type="hidden" name="last_name_kana" value="<?php echo $_POST["last_name_kana"]; ?>">
              <?php echo $_POST["first_name_kana"]; ?>
              <input type="hidden" name="first_name_kana" value="<?php echo $_POST["first_name_kana"]; ?>">
            </td>
          </tr>
          <tr>
            <th>住所</th>
            <td class="where">
              <?php echo $_POST["where"]; ?>
              <input type="hidden" name="where" value="<?php echo $_POST["where"]; ?>">
            <br>
            <?php echo $_POST["city"]; ?><br>
            <input type="hidden" name="city" value="<?php echo $_POST["city"]; ?>">
            <?php echo $_POST["address"]; ?><br>
            <input type="hidden" name="address" value="<?php echo $_POST["address"]; ?>">
            <?php echo $_POST["building"]; ?><br>
            <input type="hidden" name="building" value="<?php echo $_POST["building"]; ?>">
            </td>
          </tr>
          <tr class="tel">
            <th>電話番号<br>(半角数字)</th>
            <td>
              <div>
                <?php echo $_POST["before"]; ?>
                <input type="hidden" name="before" value="<?php echo $_POST["before"]; ?>">
                -<?php echo $_POST["center"]; ?>
                <input type="hidden" name="center" value="<?php echo $_POST["center"]; ?>">
                -<?php echo $_POST["after"]; ?>
                <input type="hidden" name="after" value="<?php echo $_POST["after"]; ?>">
              </div>
                <p>※担当者よりご連絡を差し上げる場合がございます。</p>
            </td>
          </tr>
          <tr>
            <th>メールアドレス<br>(半角英数字)</th>
            <td>
              <?php echo $_POST["email"]; ?>
              <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
            <br>※お客さまのご利用環境、また迷惑メール対策等の設定により、お返事が届かない場合があります。
            </td>
          </tr>
        </table>
      </div>
        <p class="button"><input type="submit" value="送信"></p>
        </form>

      </div>
    </div>

    <footer>
    <div id="copy">
      <small>&copy; 2019 Matushima Hotel YURAN GARDEN ALL RIGHTS RESEARVED.</small>
    </div>
  </footer>
  </body>
</html>
