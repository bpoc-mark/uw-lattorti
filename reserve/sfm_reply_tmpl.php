<?php

/*--------------------------------------------------------------------------

	フォームメール - sformmmail2　フォーム入力者向けに送信されるメールです

--------------------------------------------------------------------------*/

// 自動返信のSubject（件名）
$replySubject = '[株式会社●●●●] お問合わせを受け付けました';

//送信メッセージ
$replyMessage = <<< EOD
***このメールは自動返信メールです***　

{$sfm_mail->name}様

この度は、株式会社●●●●へお問い合わせいただき、ありがとうございました。

内容を確認後、ご入力されたメールアドレス宛にお返事致します。

お問い合わせ内容は、以下の通りです。
内容にお間違いがないかどうか、今一度ご確認をお願いいたします。

────────────────────────────────────

■メニュー
{$sfm_mail->menu}

■ご希望日程
{$sfm_mail->date}

■ご希望時間帯
{$sfm_mail->time}

■お名前
{$sfm_mail->name}

■フリガナ
{$sfm_mail->furigana}

■電話番号
{$sfm_mail->tel}

■メールアドレス
{$sfm_mail->email}

■お問い合わせ内容
{$sfm_mail->message}


==============================================

株式会社●●●●

〒000-0000 住所
TEL : 0000-00-0000 / FAX : 0000-00-0000

==============================================
EOD;