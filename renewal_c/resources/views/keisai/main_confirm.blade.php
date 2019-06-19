<script type="text/javascript">
    var sent = false;
    function fnCheckSubmit() {
        if(sent) {
            alert("しばらくお待ち下さい。");
            return false;
        }
        sent = true;
        return true;
    }
</script>

<article id="keisai">

<h1 class="mTitle">掲載をご希望の医療機関の皆さまへ</h1>
<form action="/keisai/store" method="POST" accept-charset="utf-8">
<div id="form">
    @csrf
    <h2 class="sTitle">お問い合わせ内容の確認</h2>
    <table>
        <tbody>
        <tr>
            <th>施設名・代理店名</th>
            <td>{{ $keisai->company_name }} {!! Form::hidden('company_name' , $keisai->company_name) !!}</td>
        </tr>
        <tr>
            <th>所属部署・役職</th>
            <td>{{ $keisai->position }} {!! Form::hidden('position' , $keisai->position) !!}</td>
        </tr>
        <tr>
            <th>ご担当者様名</th>
            <td>{{ $keisai->name }} {!! Form::hidden('name' , $keisai->name) !!}</td>
        </tr>
        <tr>
            <th>連絡先電話番号</th>
            <td>{{ $keisai->tel }} {!! Form::hidden('tel' , $keisai->tel) !!}</td>
        </tr>
        <tr>
            <th>FAX番号</th>
            <td>{{ $keisai->fax }} {!! Form::hidden('fax' , $keisai->fax) !!}</td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>{{ $keisai->email }} {!! Form::hidden('email' , $keisai->email) !!}</td>
        </tr>
        <tr>
            <th>ご住所</th>
            <td>郵便番号　{{ $keisai->zip1 }} {!! Form::hidden('zip1' , $keisai->zip1) !!}-{{ $keisai->zip2 }} {!! Form::hidden('zip2' , $keisai->zip2) !!}<br>
                都道府県　{{ $keisai->prefacture }} {!! Form::hidden('prefacture' , $keisai->prefacture) !!}<br>
                市区郡　{{$keisai->district}} {!! Form::hidden('district' , $keisai->district) !!}<br>
                町村番地 {{$keisai->street_address}} {!! Form::hidden('street_address' , $keisai->street_address) !!}<br>
                建物名 {{$keisai->building}} {!! Form::hidden('building' , $keisai->building) !!}
            </td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td>
                <ul>
                    <li><p>{{$keisai->getText( $keisai->contact_reason_opt) }} {!! Form::hidden('contact_reason_opt' , $keisai->contact_reason_opt) !!}</p></li>
                </ul>
                <p class="wordbreak">{{ nl2br($keisai->contact_reason_text) }} {!! Form::hidden('contact_reason_text' , $keisai->contact_reason_text) !!}</p>
            </td>
        </tr>
        </tbody>
    </table>
    </div>

    <div id="submit">
    <div class="btn"><button type="submit" class="send" onclick="return fnCheckSubmit();">送信する</button></div>
    <p class="mt10"><a href="./#form_title">お問い合わせ内容入力画面へ戻る</a></p>
    <input type="hidden" name="cmd-send" value="1" />
</div>
</form>
</article>
