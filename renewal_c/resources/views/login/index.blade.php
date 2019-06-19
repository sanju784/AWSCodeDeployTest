<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>ログイン｜人間ドックと検診予約サイトEPARK人間ドック</title>
@include('parts.css')
<link rel="stylesheet" type="text/css" href={{ asset('css/login/login.css')}} />
{{--{{ include('parts/javascript.html') }}--}}
<script type="text/javascript" src="js/login.js?{{--{{ JSVERSION }}--}}"></script>
</head>
<body>
<div id="wrapper">

<!-- menu -->
@include('parts.header_nologin')

<div id="main">

<form id="frmLogin">
	<table>
		<colgroup>
			<col width="80" />
			<col width="*" />
		</colgroup>
		<tr>
			<th>ユーザーID</th>
			<td><input id="txtId" class="code" type="text" name="id" value="" maxlength="40" /></td>
		</tr>
		<tr>
			<th>パスワード</th>
			<td><input id="txtPasswd" type="password" name="passwd" value="" maxlength="20" /></td>
		</tr>
		<!--tr>
			<th>環境</th>
			<td><select id="cmbSite" name="site">{{--{{ cmbSite }}--}}</select></td>
		</tr -->
		<tr>
			<td>&nbsp;</td>
			<td><button id="btnLogin" class="login"><div>ログイン</div></button></td>
		</tr>
	</table>
	<input type="hidden" name="cmd-login" value="1" />
</form>

</div><!-- #main -->

</div><!-- #wrapper -->
</body>
</html>