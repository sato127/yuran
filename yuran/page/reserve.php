<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>演習＿松島ホテル YURAN GARDEN ご予約フォーム</title>
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
        <h1>ご予約フォーム</h1>
      </div>
      <div class="info">
        <p>下記フォームへ必要事項をご入力いただき、『予約内容を確認』をクリックして確認画面にお進みください。ご入力いただきました内容をこちらで確認後、折り返しスタッフより宿泊予約確認
          をメールにてお送りさせていただきます。<span crass="red">上記メールをもって予約完了となりますので、ご注意ください。</span></p>
        <p>※【宿泊のご予約確定】のメールは、2営業日中にお送りさせて頂いております。従いまして、当日及び翌日などのご予約に関しましては、こちらの予約確認、及びご返信が遅くなる可能性がご
          ざいます。大変お手数をおかけいたしますが、出来ましたら当日予約などすぐにお返事を必要とされる差し迫ったご予約日の場合は直接お電話にて空室状況などお問い合わせを頂けると幸いです
          。</p>
          <p>※宿泊状況によっては、ご希望のお部屋をご予約いただけない場合がございますので、ご了承ください。</p>
      </div>

      <div id="form">
        <form action="reserve_confirm.php" method="post">
          <div class="stay_info">
          <h2>ご宿泊の情報</h2>
        <table>
          <tr>
            <th>ご宿泊日<span class="red">※</span></th>
            <td>
              <label><input type="date" name="reserve_date" required></label>
            </td>
          </tr>
          <tr class="time">
            <th>到着予定時間<span class="red">※</span></th>
            <td>
              <select name="hour" required>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
              </select>時
              <select name="minute" required>
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>
                <option value="00">00</option>
              </select>分
            </td>
          </tr>
          <tr>
            <th>ご宿泊日数<span class="red">※</span></th>
            <td class="stay">
              <input type="text" name="stay" required>泊
            </td>
          </tr>
          <tr>
            <th>ご宿泊人数<span class="red">※</span></th>
            <td class="stay">
              <input type="text" name="many" required>人
            </td>
          </tr>
          <tr>
            <th>部屋タイプ<span class="red">※</span></th>
            <td>
            <select name="room" required>
              <option value="select">部屋タイプを選択</option>
              <option value="ダブルルーム">ダブルルーム</option>
              <option value="スタンダードツイン">スタンダードツイン</option>
              <option value="ジュニアスイート">ジュニアスイート</option>
              <option value="スイート">スイートルーム</option>
              <option value="グループルーム">グループルーム</option>
            </select>
            </td>
          </tr>
          <tr>
            <th>特記事項</th>
            <td>
              <textarea name="message" rows="8" cols="80" placeholder="ご要望などございましたら、ご記入ください。"></textarea>
            </td>
          </tr>
        </table>
      </div>

      <div class="customer_info">
        <h2>お客様情報</h2>
        <table>
          <tr>
            <th>お名前<span class="red">※</span></th>
            <td class="name">
              <label><input type="text" name="last_name" placeholder="姓" required></label>
              <label><input type="text" name="first_name" placeholder="名" required></label>
            </td>
          </tr>
          <tr>
            <th>ふりがな<span class="red">※</span></th>
            <td class="name">
              <label><input type="text" name="last_name_kana" placeholder="せい" required></label>
              <label><input type="text" name="first_name_kana" placeholder="めい" required></label>
            </td>
          </tr>
          <tr>
            <th>住所<span class="red">※</span></th>
            <td class="where">
            <select name="where" required>
              <option value="select">都道県を選択</option>
              <option value="北海道">北海道</option>
              <option value="青森県">青森県</option>
              <option value="秋田県">秋田県</option>
            </select>
            <br>
            <input type="text" name="city" placeholder="市区町村名" required><br>
            <input type="text" name="address" placeholder="番地" required><br>
            <input type="text" name="building" placeholder="ビル名・マンション名"><br>
            </td>
          </tr>
          <tr class="tel">
            <th>電話番号<br>(半角数字)<span class="red">※</span></th>
            <td>
              <div class="tel_data">
                <input type="text" name="before" required>
                -<input type="text" name="center" required>
                -<input type="text" name="after" required>
              </div>
                <p>※担当者よりご連絡を差し上げる場合がございます。</p>
            </td>
          </tr>
          <tr>
            <th>メールアドレス<br>(半角英数字)<span class="red">※</span></th>
            <td>
            <input type="email" name="email" placeholder="example@yourmail.com" required>
            <br>※お客さまのご利用環境、また迷惑メール対策等の設定により、お返事が届かない場合があります。
            </td>
          </tr>
        </table>
      </div>
        </table>
        <p class="button"><input type="submit" value="確認画面へ"></p>
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
