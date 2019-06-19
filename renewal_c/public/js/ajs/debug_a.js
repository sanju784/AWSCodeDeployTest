if( location.href.match(/st2017/i) ){
var debug_a={
};

(function(){ //scope
var my=debug_a;

debug_a.initalize=function(){
    $("a").each( function(){
        var a=$(this);
        var href=a.attr("href");
        if( href ){}else{ href="***"; a.addClass("debug_redframe"); }
        
        var span=$("<span class='debug' style='display:none;color:blue;font-size:1ex;'></span>");
        span.text( href );
        
        a.before( span );
    });

    var btn=$("<input type='button' value='デバッグ表示/非表示' style='border:solid 1px red;position:fixed;left:100px;top:20px;z-index:9999;' />" );
    btn.click( function(){
        $(".debug").toggle();
        $(".debug_redframe").addClass("redframe");
    });
    $("body").prepend( btn );
}

}());

$(function(){
    setTimeout(debug_a.initalize,2000);
});
}
