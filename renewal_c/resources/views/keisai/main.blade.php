<article id="keisai">

<h1 class="mTitle">掲載をご希望の医療機関の皆さまへ</h1>

<div id="read">
    <h2 class="sTitle">EPARK人間ドックとは</h2>
    <p>EPARK人間ドックは株式会社EPARK人間ドックが運用する人間ドック・検診のポータルサイトです。<br>ご登録いただいた全国の人間ドック・健康診断・各種検診を実施している医療機関の情報を集約し、比較、予約できます。</p>
    <div class="panel">
        <p class="lCatch">このようなお悩みはございませんか？</p>
        <ul>
            <li>人間ドックや検診の枠に空きがある。</li>
            <li>広告を出しているが反応がない。</li>
            <li>電話で受付する余裕がない。</li>
        </ul>
        <p class="center mb0"><img src="{{asset('img/keisai/fig_arrow.png')}}" alt="" width="80" height="68" /></p>
        <p class="lCatch">EPARK人間ドックがお手伝いします！</p>
        <p class="center strong">まずは以下のフォームからお気軽にお問い合わせください。<br>担当者から折り返しご連絡いたします。</p>
    </div>
</div>
<form action="/keisai/confirm" method="post" >
    @csrf
<div id="form">
    <h2 class="sTitle">お問い合わせフォーム<span class="comment"><b class="red">【必須】</b>が付いている項目は必須入力項目です。 </span></h2>
    @if ($errors->any())
        <div class="red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table>
        <tbody>
            <tr>
                <th>{!! Form::label('company_name' , '施設名・代理店名') !!}<b class="red">【必須】</b></th>
                <td>
                    {!! Form::text('company_name' , "" , ['class' => 'half' , 'maxlength' => '100']) !!}
                </td>
            </tr>
             <tr>
                <th>{!! Form::label('position' , '所属部署・役職') !!}<b class="red">【必須】</b></th>
                <td>
                    {!! Form::text('position' , "" , ['class' => 'half' , 'maxlength' => '100']) !!}
                </td>
            </tr>
            <tr>
                <th>{!! Form::label('name' , 'ご担当者様名') !!}<b class="red">【必須】</b></th>
                <td>
                    {!! Form::text('name' , "" , ['class' => 'half' , 'maxlength' => '100']) !!}
                </td>
            </tr>
            <tr>
                <th>{!! Form::label('tel' , '連絡先電話番号') !!}<b class="red">【必須】</b></th>
                <td>
                    {!! Form::text('tel' , '' , ['class' => 'half' , 'placeholder' => '例：0123456789' , 'maxlength' => '20' , 'id' => 'tel']) !!}半角数字、ハイフン抜き<br class="mgn">
                    ▼確認のためもう一度入力してください<br>
                    {!! Form::text('tel_confirm' , '' , ['class' => 'half' , 'placeholder' => '例：0123456789' , 'maxlength' => '20' , 'id' => 'telchk']) !!}
                </td>
            </tr>
            <tr>
                <th>{!! Form::label('fax' , 'FAX番号') !!}</th>
                <td>
                    {!! Form::text('fax' , '' , ['class' => 'half' , 'placeholder' => '例：0123456789' , 'maxlength' => '20' , 'id' => 'tel']) !!}半角数字、ハイフン抜き
                </td>
            </tr>
            <tr>
                <th>{!! Form::label('email' , 'メールアドレス') !!}<b class="red">【必須】</b></th>
                <td>
                    {!! Form::text('email' , '' , ['class' => 'half' , 'placeholder' => '例：sample@example.com' , 'maxlength' => '100']) !!}<br class="mgn">
                    ▼確認のためもう一度入力してください<br>
                    {!! Form::text('email_confirmed' , '' , ['class' => 'half' , 'placeholder' => '例：sample@example.com' , 'maxlength' => '100'])!!}
                </td>
            </tr>
            <tr>
                <th>{!! Form::label('address' , 'ご住所') !!}<b class="red">【必須】</b></th>
                <td>
                    郵便番号{!! Form::text('zip1' , '' , ['placeholder' => '例：012' , 'maxlength' => '3' , 'id' => 'zip1'])!!}-{!! Form::text('zip2' , '' , ['placeholder' => '例：3456' , 'maxlength' => '4' , 'id' => 'zip2'])!!}<br class="mgn">
                    {{--<span class="navyBtn01" onClick="AjaxZip3.zip2addr('zip1','zip2','pref','city'/*,'address'*/);">住所を検索</span><br class="mgn">--}}
                    都道府県{!! Form::text('prefacture' , '' , ['id' => 'prefacture'])!!}{{--<div class="select-wrap state"><select id="state" name="pref">--}}
                    {{--<option value="">----</option>--}}
                    {{--</select>--}}{{--</div>--}}市区郡{!! Form::text('district' , '' , ['placeholder' => '例：中央区' , 'id' => 'district'])!!}<br class="mgn">
                    町村番地{!! Form::text('street_address' , '' , ['class' => 'long' , 'placeholder' => '例：日本橋本町4丁目15番11号' , 'id' => 'street_address'])!!}<br class="mgn">
                    建物名　{!! Form::text('building' , '' , ['class' => 'long' , 'placeholder' => '例：例：岩月日本橋ビル3F' , 'id' => 'building'])!!}
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容<b class="red">【必須】</b></th>
                <td>
                    <ul>
                        <li>
                            {!! Form::radio('contact_reason_opt', 0, true , array('id' => 'opt1_a'))!!}
                            {!! Form::label('opt1_a' , '掲載方法が知りたい' , ['class' => 'radio01'])!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt' , 1, null , ['id' => 'opt1_b']);!!}
                            {!! Form::label('opt1_b' , '料金が知りたい' , ['class' => 'radio01']);!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 2, null , ['id' => 'opt1_c']);!!}
                            {!! Form::label('opt1_c' , '話が聞きたい' , ['class' => 'radio01']);!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 3, null , ['id' => 'opt1_d']);!!}
                            {!! Form::label('opt1_d' , 'その他' , ['class' => 'radio01']);!!}
                        </li>
                    </ul>
                    {!! Form::textarea('contact_reason_text' , null, ['rows' => '7' , 'cols' => '80' , 'maxlength' => '1000']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</div>

<h4>個人情報の取り扱いについて</h4>
<ul class="privacy-ul">
	<li>ご入力いただいた個人情報は、お問い合わせへの回答のために利用します。</li>
	<li>ご入力いただいた情報はシステム上で保管・管理するため、当社の選定基準を満たした事業者に委託する場合がございます。これ以外の場合において、皆様の個人情報をご本人の同意なく第三者に提供することはございません。</li>
	<li>ご入力いただいた個人情報に関して、利用目的の通知、個人情報の開示、訂正、追加、削除、利用停止、消去、第三者提供停止を求めることができます。詳細は<a href="/privacy/publication/">こちら</a>をご覧ください。</li>
	<li>当社の<a href="/privacy/">プライバシーポリシー</a>はこちらをご覧ください。</li>
</ul>

<h4>株式会社EPARK人間ドック個人情報問い合わせ窓口</h4>
<p>個人情報保護管理者　斎藤 公紀 宛<br>電話 ：03-6892-0271<br>受付時間：10:00～12:00／13:00～17:30（平日のみ）<br>※土日祝祭日及び8月11日～8月17日、12月27日～1月4日を除きます。</p>

<div class="aboutAgreement">
	<p class="center">個人情報の取り扱いについておよび<a href="/agreement/">サービス利用規約</a>に同意の上ご利用ください。</p>
	<p class="mt10 center">
        {!! Form::checkbox('agree' , '個人情報の取り扱いについておよびサービス利用規約に同意する' , false , ['id' => 'agree']) !!}
        {!! Form::label('agree' , '個人情報の取り扱いについておよびサービス利用規約に同意する' , ['class' => 'checkbox01']) !!}
	</p>
</div>

<div id="submit">
	{!! Form::submit('入力内容を確認する' , ['class' => 'send' , 'id' => 'send']) !!}
    {!! Form::hidden('cmd-check' , '1') !!}
</div>

</form>
</article>
