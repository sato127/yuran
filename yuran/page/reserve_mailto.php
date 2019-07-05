<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>演習＿松島ホテル YURAN GARDEN お申込み完了画面</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script script type="text/javascript" src="../function.js"></script>
    <link rel="stylesheet" href="../all_css/header.css">
    <link rel="stylesheet" href="../all_css/footer.css">
    <link rel="stylesheet" href="reserve.css">

    <?php
    $header = null;
    $auto_reply_subject = null;
    $auto_reply_text = null;
    $admin_reply_subject = null;
    $admin_reply_text = null;
    date_default_timezone_set('Asia/Tokyo');

    // ヘッダー情報を設定
    $header = "MIME-Version: 1.0\n";
    $header .= "From: Matushima Hotel YURAN GARDEN <d09028491784@gmail.com>\n";
    $header .= "Reply-To: Matushima Hotel YURAN GARDEN <d09028491784@gmail.com>\n";

    // 件名を設定
    $auto_reply_subject = 'お申込みありがとうございます。';

    // 本文を設定
    $auto_reply_text = "この度は、お申込み頂き誠にありがとうございます。
    お申込内容につきまして、当ホテルで確認を行い2営業日中にスタッフより宿泊予約確認をメールにてお送りさせていただきます。
    ※上記メールをもって予約完了となりますので、ご注意ください。\n\n
    下記の内容でお申込みを受け付けました。\n";
    $auto_reply_text .= "===============================" . "\n\n";
    $auto_reply_text .= "お申込み日時：" . date("Y-m-d H:i") . "\n\n";
    $auto_reply_text .= "ご宿泊日：" . $_POST['reserve_date'] . "\n\n";
    $auto_reply_text .= "到着予定時間：" . $_POST['hour'] ."時". $_POST['minute'] ."分" . "\n\n";
    $auto_reply_text .= "ご宿泊日数：" . $_POST['stay'] . "\n\n";
    $auto_reply_text .= "ご宿泊人数：" . $_POST['many'] . "\n\n";
    $auto_reply_text .= "部屋タイプ：" . $_POST['room'] . "\n\n";
    $auto_reply_text .= "特記事項：" . $_POST['message'] . "\n\n";
    $auto_reply_text .= "お名前：" . $_POST['last_name'] . $_POST['first_name'] . "\n\n";
    $auto_reply_text .= "ふりがな：" . $_POST['last_name_kana'] . $_POST['first_name_kana'] . "\n\n";
    $auto_reply_text .= "住所：" . $_POST['where'] . $_POST['city'] . $_POST['address'] . $_POST['building'] . "\n\n";
    $auto_reply_text .= "電話番号：" . $_POST['before'] . $_POST['center'] . $_POST['after'] . "\n\n";
    $auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
    $auto_reply_text .= "===============================" . "\n\n";
    $auto_reply_text .= "Matushima Hotel YURAN GARDEN";

    // メール送信
    mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);

    $admin_reply_subject = "お申込みを受け付けました";

    // 本文を設定
    $admin_reply_text = "下記の内容でお申込みを受け付けました。\n\n";
    $admin_reply_text .= "====================================" . "\n\n";
    $admin_reply_text .= "お申込み日時：" . date("Y-m-d H:i") . "\n\n";
    $admin_reply_text .= "ご宿泊日：" . $_POST['reserve_date'] . "\n\n";
    $admin_reply_text .= "到着予定時間：" . $_POST['hour'] ."時". $_POST['minute'] ."分" . "\n\n";
    $admin_reply_text .= "ご宿泊日数：" . $_POST['stay'] . "\n\n";
    $admin_reply_text .= "ご宿泊人数：" . $_POST['many'] . "\n\n";
    $admin_reply_text .= "部屋タイプ：" . $_POST['room'] . "\n\n";
    $admin_reply_text .= "特記事項：" . $_POST['message'] . "\n\n";
    $admin_reply_text .= "お名前：" . $_POST['last_name'] . $_POST['first_name'] . "\n\n";
    $admin_reply_text .= "ふりがな：" . $_POST['last_name_kana'] . $_POST['first_name_kana'] . "\n\n";
    $admin_reply_text .= "住所：" . $_POST['where'] . $_POST['city'] . $_POST['address'] . $_POST['building'] . "\n\n";
    $admin_reply_text .= "電話番号：" . $_POST['before'] . $_POST['center'] . $_POST['after'] . "\n\n";
    $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
    $admin_reply_text .= "=====================================" . "\n\n";

    // 運営側へメール送信
    mb_send_mail( 'd09028491784@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
    ?>
  </head>
  <body>

    <div class="container">

      <div id="main">

      </div>

      <div id="title">
        <h1>メール送信完了</h1>
      </div>

      <div id="form">
        <h2>送信完了いたしました。</h2>
        <p>お申込みありがとうございます。<br>
        入力いただいたメールアドレスに受付完了のメールを自動送信しております。</p>
        <p>お申込内容につきまして、当ホテルで確認を行い2営業日中にスタッフより宿泊予約確認をメールにてお送りさせていただきます。</p>
        <p>※上記メールをもって予約完了となりますので、ご注意ください。</p>
      </div>
    </div>

    <footer>
    <div id="copy">
      <small>&copy; 2019 Matushima Hotel YURAN GARDEN ALL RIGHTS RESEARVED.</small>
    </div>
  </footer>
  </body>
</html>
