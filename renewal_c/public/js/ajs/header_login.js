var header_login={
    sp:navigator.userAgent.match(/(iPhone|Android.*Mobile|Windows.*Phone)/),
    login:-1 // -1:loading 0:none 1:login
};


if( header_login.sp  ){
}else{
document.write('<div class="connect"></div>');
}

(function(){ //scope
var my=header_login;

my.initalize=function(){
    $=jQuery;
    if( my.login<0 ){
        setTimeout( my.initalize, 100 );
        return;
    }

    if( my.sp ){
        var c=$("ul.epark_common_header_menu-list");
        if( my.login ){
            c.prepend( '<li class="epark_common_header_menu-history"><a href="/mypage/accept.html">予約履歴</a></li>' );
            c.append( '<li class="epark_common_header_menu-mymenu"><a href="javascript:void(0)" id="epark_common_side-menu" data-overlay="#epark_common_sidebar-overlay" data-inner="#epark_common_sidebar-inner-login">マイメニュー</a></li>' );
            $('#point_balance_loader').show();
            $('#passport_iframe_loader').show();
        }else{
            c.append( '<li class="epark_common_header_menu-login"><a href="javascript:void(0)" id="epark_common_side-menu" data-overlay="#epark_common_sidebar-overlay" data-inner="#epark_common_sidebar-inner-logout">ログイン</a></li>' );
        }
        return;
    }

    var c=$("div.connect");
    if( my.login ){
        c.append('<a class="join" href="/mypage/"><img src="/common/img/header/hd_mypage.png" alt="マイページ" width="97" height="18"></a>');
		c.append('<a class="login" href="/login/logout.html"><img src="/common/img/header/hd_logout.png" alt="ログアウト" width="101" height="19"></a>');
		c.append('<div class="redframe" id="hdWordSearch"><input type="search" id="hdWordSearchBox"><input type="image" src="/common/img/header/search_icon.png" alt="送信" name="hdSearchBtn" id="hdSearchBtn"></div>');
    }else{
		c.append('<a class="join" href="/login/signup.html"><img src="/common/img/header/hd_join.png" alt="会員登録" width="97" height="18"></a>');
		c.append('<a class="login" href="/login/index.html"><img src="/common/img/header/hd_login.png" alt="ログイン" width="87" height="19"></a>');
        c.append('<div class="redframe" id="hdWordSearch"><input type="search" id="hdWordSearchBox"><input type="image" src="/common/img/header/search_icon.png" alt="送信" name="hdSearchBtn" id="hdSearchBtn"></div>');
    }
}


my.load=function(){
    $=jQuery;
    $.ajax({
        url:"/?cmd-IsLogin=1",
        dataType:"json"
    }).done( function(d){
        my.login=d["login"];
    });
}

my.load();

}());

$(header_login.initalize);
