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

<article id="contact">

<h1 class="mTitle">お問い合わせ</h1>
<form action="/contact/store" method="POST" >
<div id="form">
    @csrf
    <h2 class="sTitle">お問い合わせ内容の確認</h2>
    <table>
        <tbody>
            <tr>
                <th>お名前</th>
                <td>{!! Form::label('last_name',$contact->last_name)!!}{!! Form::label('first_name',$contact->first_name)!!}
                    {!! Form::hidden('last_name',$contact->last_name) !!}{!! Form::hidden('first_name',$contact->first_name) !!}
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{!! Form::label('email',$contact->email)!!}{!! Form::hidden('email',$contact->email)!!}</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <ul>
                        <li><p>{!! Form::label('contact_reason_opt',$contact->getText($contact->contact_reason_opt))!!}{!! Form::hidden('contact_reason_opt',$contact->contact_reason_opt)!!}</p></li>
                    </ul>
                    <p class="wordbreak">{!! Form::label('contact_reason_text', nl2br($contact->contact_reason_text))!!}{!! Form::hidden('contact_reason_text', nl2br($contact->contact_reason_text))!!}</p>
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
