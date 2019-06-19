if( popup ){
}else{

document.write('<script src="/ajs/popup_text.js" type="text/javascript"></script>');
var popup={
};

(function(){ //scope
var my=popup;

my.initalize=function(){
    $(".popup").each(function(){
        $(this).click( my.popup );
    });
    $("#popup").find(".close").click( my.close );
}

my.popup=function(){
    if( $(this).find("#popup").length )return;

    my.close();

    var t=$(this);
    var name=t.text();
    name=name.replace(/[ #]*$/,"");
    name=name.replace(/^ */,"");

    var aside=$("#popup").show();
    t.append( aside );
    aside.find(".popup-ttl").text(name);
    $.each(popup_text,function(){
        if( this[0]!="" && this[0]!=name )return;
        aside.find("p.text").text( this[1] );
        aside.find("a").attr("href",this[2])

		var pWid = $("#popup").parents(".iconBlock").width();
		var aPos = $("#popup").parent().position().left;
		if(pWid == 800){
			aPos+=300;
		}
		if(pWid == 880){
			aPos+=220;
		}
		console.log("pWid="+pWid);
		console.log("aPos="+aPos);
		if(aPos>838){
			$("#popup").addClass("rPos");
		}else{
			$("#popup").removeClass("rPos");
		}

        if( this[0]!="" )return false;

    });
    return false;
}
my.close=function(){
    $("body").append( $("#popup").hide() );
    return false;
}

}());
$(popup.initalize);

}
