@php($dt = new DateTime("now", new DateTimeZone('Asia/Tokyo')))
EPARK人間ドックに、掲載のお問い合わせがありました。


【お客様情報】
---------------------------------------------------------
施設名・代理店名：{{ $keisai->company_name }}
所属部署・役職：{{ $keisai->position }}
ご担当者様名： {{ $keisai->name }}
連絡先電話番号：{{ $keisai->tel }}
FAX番号：{{ $keisai->fax }}
ご住所：{{ $keisai->zip1 }} - {{ $keisai->zip2 }}
       {{ $keisai->prefacture }}  {{$keisai->city}} {{$keisai->address}}  {{$keisai->building}}
メールアドレス：{{ $keisai->email }}


【お問い合わせ内容 】
---------------------------------------------------------
{{$keisai->getText( $keisai->contact_reason_opt) }}
---------------------------------------------------------
{{ nl2br($keisai->contact_reason_text) }}


---------------------------------------------------------
受付日時：{{$dt->format('m/d/Y, H:i:s')}}
---------------------------------------------------------
人間ドックの総合ポータルサイト　EPARK人間ドック
http://www.docknet.jp/

運営：株式会社EPARK人間ドック
http://eparkdock.com/
---------------------------------------------------------
