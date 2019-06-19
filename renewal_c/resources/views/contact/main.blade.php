<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<article id="contact">

<h1 class="mTitle">お問い合わせ</h1>

<div id="read">
    <h2 class="sTitle">お問い合わせの前に</h2>
    <h3 class="ssTitle">お問い合わせのご注意</h3>
    <p>特定の症状・病気についての診断、問診、医薬品の推薦など、医療行為にあたるご相談はお答えできかねます。</p>
    <h3 class="ssTitle">ご予約希望の方へ</h3>
    <p>ご予約に関するご相談は「<a href="/rakuraku/" target="_blank">らくらく相談窓口</a>」で承ります。</p>
    <p class="center"><a href="/rakuraku/" target="_blank"><img src="{{asset('img/contact/fig_rakuraku_bnr.png')}}" width="600" height="180" alt="おすすめ人間ドック らくらく相談窓口 検査の内容は？料金がわからない・・・そんなお悩みを解消します！無料相談はこちら"></a></p>
    <h3 class="ssTitle">ご予約内容の変更・キャンセルについて</h3>
    <p>人間ドック・検診のご予約内容の変更・キャンセルは医療機関に直接お問い合わせください。電話番号はご予約確認メールにございます。<br>会員の方はマイページからご予約内容の変更・キャンセルが可能です。<a href="/mypage/">こちら</a>からご利用ください。<br>ご予約日が近い場合は医療機関に直接お電話にてご連絡ください。</p>
    <ul class="attention">
        <li><span>※</span>お急ぎのご用件はフリーダイヤル0120-936-547までお電話ください。（平日9：00～18：00）</li>
        <li><span>※</span>夜間・土日祝日受付のメールへのご対応は翌営業日以降になります。</li>
    </ul>
    <h3 class="ssTitle">医療機関の方へ</h3>
    <p>医療機関情報の掲載についてのお問い合わせは<a href="/keisai/">こちら</a>からどうぞ。</p>
</div>
<form action="/contact/confirm" method="POST">
    @csrf
<div id="form">
    <h2 class="sTitle">お問い合わせフォーム<span class="contact_reason_text"><b class="red">【必須】</b>が付いている項目は必須入力項目です。 </span></h2>
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
                <th> {!! Form::label('お名前')!!}<b class="red">【必須】</b></th>
                <td>
                    {!! Form::text('last_name','', ['class' => 'name' , 'placeholder' => '例：姓' , 'maxlength' => '20']);!!}
                    {!! Form::text('first_name','', ['class' => 'name' , 'placeholder' => '例：名' , 'maxlength' => '20']);!!}
                </td>
            </tr>
            <tr>
                <th>{!! Form::label('メールアドレス')!!}<b class="red">【必須】</b></th>
                <td>
                    {!! Form::text('email','', ['class' => 'half' , 'placeholder' => '例：sample@example.com' , 'maxlength' => '100']);!!}
                    <br class="mgn">
                    ▼確認用<br>
                    {!! Form::text('email_confirm','', ['class' => 'half' , 'placeholder' => '例：sample@example.com' , 'maxlength' => '100']);!!}
                </td>
            </tr>
            <tr>
                <th>{!! Form::label('お問い合わせ内容')!!}<b class="red">【必須】</b></th>
                <td>
                    <ul>
                        <li>
                            {!! Form::radio('contact_reason_opt', 0, true , array('id' => 'opt1_a'))!!}
                            {!! Form::label('opt1_a' , '掲載情報について（病院検索）' , ['class' => 'radio01'])!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 1, null , ['id' => 'opt1_b']);!!}
                            {!! Form::label('opt1_b' , '掲載情報について（その他）' , ['class' => 'radio01']);!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 2, null , ['id' => 'opt1_c']);!!}
                            {!! Form::label('opt1_c' , 'EPARK人間ドックについて' , ['class' => 'radio01']);!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 3, null , ['id' => 'opt1_d']);!!}
                            {!! Form::label('opt1_d' , '操作方法について' , ['class' => 'radio01']);!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 4, null , ['id' => 'opt1_e']);!!}
                            {!! Form::label('opt1_e' , 'メールマガジンについて' , ['class' => 'radio01']);!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 5, null , ['id' => 'opt1_f']);!!}
                            {!! Form::label('opt1_f' , '広告掲載について' , ['class' => 'radio01']);!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 6, null , ['id' => 'opt1_g']);!!}
                            {!! Form::label('opt1_g' , '掲載情報の誤りについて' , ['class' => 'radio01']);!!}
                        </li>
                        <li>
                            {!! Form::radio('contact_reason_opt', 7, null , ['id' => 'opt1_h']);!!}
                            {!! Form::label('opt1_h' , 'その他' , ['class' => 'radio01']);!!}
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
</html>
