var rakuraku={
    wrapper1:undefined,
    wrapper2:undefined,
    key:"",
    saved:false
};

(function(){ //scope
var my=rakuraku;

my.initalize=function(){
    my.wrapper1=$("#wrapper");
    if( location.search.match(/[?&]key=(.*)/) ){
        my.key=RegExp.$1;
    }
}

my.confirm=function(f,status){
    if( status ){}else{
        return false;
    }

    $.ajax('confirm.html', {
        timeout : 1000, // 1000 ms
        datatype:'html'
    }).done(function(data){
        html=$($.parseHTML(data));

        table=my.wrapper1.find("table");
        
        my.wrapper2=html.filter("#wrapper");
        my.wrapper1.attr("id","wrapper_").hide().after(
            my.wrapper2
        );
        my.wrapper2.find("table").after( table.clone() ).remove();
        my.copyValue( table, my.wrapper2.find("table") );
        my.readonly( my.wrapper2.find("table") );

        setTimeout(function(){
            $('html,body').animate({ scrollTop:$("#wrapper h2").offset().top}, 'fast');
        },10);

        my.wrapper2.find("#return_input").click( my.returnInput );
        my.wrapper2.find("#to_confirm").click( my.confirm2 );

        $(".formonly").hide();
    });

    return false;
}

my.returnInput=function(){
    $(".formonly").show();

    my.wrapper2.remove();
    my.wrapper1.attr("id","wrapper").show();

    setTimeout(function(){
        $('html,body').animate({ scrollTop:$("#form_container").offset().top}, 'fast');
    },10);

    return false;
}

my.confirm2=function(){
    if( my.saved )return false;
    my.saved=true;

    my.wrapper1.css({
        "position":"absolute",
        "left":"-4000px",
        "top":"-9000px"
    }).show();
    
    var i=$("<input type='hidden' name='_key_' />");
    i.val( my.key );
    my.wrapper1.find("[name='_key_']").remove();
    my.wrapper1.find("form").append( i );

    $.ajax({
        type: "POST",
        url: "/2017/mixin",
        dataType: "json",
        data: my.wrapper1.find("form").serialize(),
        success: function(d){
            if( d[0]!="ok" ){
                alert( "繧ｨ繝ｩ繝ｼ縺檎匱逕溘＠縺ｾ縺励◆��"+d[1] );
                return;
            }
            location.href="fin.html";
        }
    });

    return false;
}


my.copyValue=function(f,t){
    f.find("input,textarea,select").each( function(){
        ff=$(this);
        tt=t.find("[name='"+ff.attr("name")+"']");
        tt.val( ff.val() );
        console.log( ff.attr("name") );
    });
}

my.readonly=function(aaa){
    aaa.find("select").each(function(){
        var s=$(this);
        var sv=s.val();
        var i=$("<span></span>");
        if( sv=="" ){ sv="譛ｪ驕ｸ謚�"; }
        i.text( sv );
        //i.val( sv );
        //i.css("width",s.width()+"px");
        
        s.after( i ).hide();
    });

    aaa.find("input,textarea").each(function(){
        var s=$(this);
        if( s.prop("type")=="checkbox" )return;

        var sv=s.val();
        var i=$("<span></span>");
        i.text( sv );
        s.after( i ).hide();
    });
/*
    aaa.find("input,textarea")
       .prop("readonly",true)
       .prop("disabled",true)
       .attr("placeholder","")
       .css({
           "border":"none",//solid 1px #E0E0E0",
           "background-color":"white",
           "color":"#111111"
       });
*/

    aaa.find("input[type=checkbox]")
       .click(function(){return false;})
       .prop("disabled",false)
       .each(function(){
        var c=$(this);
        if( c.prop("checked") ){}else{
            c.parent().remove();
        }
    });

    aaa.find(".ui-datepicker-trigger").remove();
}


}());

$(rakuraku.initalize);
