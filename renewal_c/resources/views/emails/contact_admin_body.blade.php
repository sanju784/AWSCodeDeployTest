@php($dt = new DateTime("now", new DateTimeZone('Asia/Tokyo')))
EPARK人間ドックに、お問い合わせがありました。


【お客様情報】
---------------------------------------------------------
お名前： @php($contact->last_name) {{$contact->first_name}}
メールアドレス： {{$contact->email}}

【お問い合わせの種類】
---------------------------------------------------------
{{$contact->getText($contact->contact_reason_opt)}}

【お問い合わせ内容】
---------------------------------------------------------
{{$contact->contact_reason_text}}


---------------------------------------------------------
受付日時： {{$dt->format('m/d/Y, H:i:s')}}
---------------------------------------------------------
人間ドックの総合ポータルサイト　EPARK人間ドック
http://www.docknet.jp/

運営：株式会社EPARK人間ドック
http://eparkdock.com/
---------------------------------------------------------